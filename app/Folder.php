<?php

namespace App;

use App\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Folder extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function parent()
    {
        return $this->belongsTo(Folder::class, 'parent_id');
    }

    public function sub_folders()
    {
        return $this->hasMany(Folder::class, 'parent_id');
    }

    // this is a recommended way to declare event handlers
    protected static function boot()
    {
        parent::boot();

        static::deleting(function($folder)
        {
            $folder->files()->delete();
            $folder->delete_sub_folders($folder);
        });
    }

    public function delete_sub_folders($folder,$level = 0)
    {
        echo '::Scanning::';
        var_dump($folder->name);
        if($folder->sub_folders->first())
        {
            foreach ($folder->sub_folders as $sub_folder)
            {
                if($sub_folder->sub_folders->first())
                {
                    $level++;
                    $this->delete_sub_folders($sub_folder, $level);
                }else{
                    echo '\n::Folder::';
                    var_dump($folder->name);
                    echo '\n::File(s)::';
                    foreach ($sub_folder->files as $file)
                    {
                        var_dump($file->name);
                        $file->delete();
                    }
                    $sub_folder->delete();
                }
            }
        }
    }

//    public function delete_sub_folders($folder_id)
//    {
//        // get folder by id
//        // check if it has any sub_folders
//        // if yes, run this function
//        // if no return false;
//
//        $folder = Folder::find($folder_id);
//        if($folder->sub_folders)
//        {
//            foreach ($folder->sub_folders as $sub_folder)
//            {
//                $sub_folder->delete_sub_folders($sub_folder->id);
//                $sub_folder->delete();
//            }
//        }else{
//            $folder->delete();
//            return false;
//        }
//    }
}

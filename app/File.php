<?php

namespace App;

use App\Folder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'file_name', 'type', 'extension', 'path' , 'size', 'folder_id'
    ];

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }
}

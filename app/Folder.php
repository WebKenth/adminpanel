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
}

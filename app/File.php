<?php

namespace App;

use App\Folder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }
}

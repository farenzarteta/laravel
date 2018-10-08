<?php

namespace FAREN;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    protected $table = 'posts';
    //primary key
    public $primaryKey = 'id';
    //timestamp
    public $timestamp = true;

    public function user(){
        return $this->belongsTo('FAREN\User');
    }
}

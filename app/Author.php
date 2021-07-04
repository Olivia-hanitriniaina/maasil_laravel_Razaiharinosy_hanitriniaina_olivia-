<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $table = 'acteur';
    protected $primaryKey = 'id_acteur';
    public $timestamps = true;
    //protected $dateFormat = 'U';
}

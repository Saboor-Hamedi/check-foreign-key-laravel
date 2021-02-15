<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postTable extends Model
{
    use HasFactory;
    protected $table  = 'post' ;
    protected $primryKey  = 'id';
    public $timestamps   = false;


}

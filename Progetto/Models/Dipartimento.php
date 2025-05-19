<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dipartimento extends Model
{
    protected $table = 'dipartimenti';
    protected $primaryKey = 'idDip';
    public $timestamps = true;

    protected $fillable = ['nome', 'descrizione'];
}

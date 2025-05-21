<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dipartimento extends Model
{
    protected $table = 'dipartimenti';
    protected $primaryKey = 'idDip';
    public $timestamps = true;

    protected $fillable = ['nome', 'descrizione'];
    
     public function prestazioni()
    {
        return $this->hasMany(Prestazione::class, 'dipartimento_id', 'idDip');
    }
    
    public function specialisti()
    {
         return $this->hasMany(Specialista::class, 'dipartimento_id', 'idDip');
    }

}

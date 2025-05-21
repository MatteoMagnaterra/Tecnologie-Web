<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialista extends Model
{
    protected $table = 'specialisti';
    protected $primaryKey = 'idSpe';
    
    protected $fillable = [
        'nome', 'cognome', 'dipartimento_id', 'prestazione_id',
    ];

    public $timestamps = true; // Se la tabella ha i campi created_at e updated_at
    
    public function dipartimento()
    {
        return $this->belongsTo(Dipartimento::class, 'dipartimento_id', 'idDip');
    }
}

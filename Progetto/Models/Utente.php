<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{
    protected $table = 'utenti';

    protected $fillable = [
        'nome', 'cognome', 'ruolo', 'username', 'password', 
        'indirizzo', 'citta', 'data_di_nascita'
    ];

    public $timestamps = true; // Se la tabella ha i campi created_at e updated_at
}


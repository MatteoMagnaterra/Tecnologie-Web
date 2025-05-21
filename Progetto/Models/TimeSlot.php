<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    // Se la tabella si chiama 'time_slots', non serve specificare $table

    // Se la chiave primaria è 'id' (unsignedTinyInteger), specifica il tipo e se non è autoincrement
    protected $primaryKey = 'id';
    public $incrementing = false;  // perché unsignedTinyInteger non è autoincrement di default
    protected $keyType = 'int';
    public $timestamps = true; // Se la tabella ha i campi created_at e updated_at

    // Timestamp abilitati di default, ma se vuoi disabilitarli:
    // public $timestamps = false;

    protected $fillable = [
        'id',
        'start_time',
        'end_time',
    ];

    // Se vuoi qualche relazione o metodo personalizzato, puoi aggiungerli qui
}

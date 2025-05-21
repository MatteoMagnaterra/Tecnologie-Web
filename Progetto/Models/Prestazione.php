<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestazione extends Model
{
    protected $table = 'prestazioni';
    protected $primaryKey = 'idPrest';
    public $timestamps = true;

    protected $fillable = ['nome', 'descrizione', 'prescrizioni', 'giorni_settimana', 'slots', 'dipartimento_id', 'specialista_id'];

    public function dipartimento()
    {
        return $this->belongsTo(Dipartimento::class, 'dipartimento_id', 'idDip');
    }

    public function specialista()
    {
        return $this->belongsTo(Specialista::class, 'specialista_id', 'idSpe');
    }
    
    public function getSlotOrari()
    {
        $slotIds = explode(',', $this->slots);
        return \App\Models\TimeSlot::whereIn('id', $slotIds)->get();
    }


}

<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

public function run(): void
{
    DB::table('utenti')->insert([
        ['nome' => 'Mario', 'cognome' => 'Rossi', 'ruolo' => 'specialista', 'username' => 'mariorossi', 'password' => Hash::make('password123'), 'indirizzo' => 'Via Roma 1', 'citta' => 'Milano', 'data_di_nascita' => '1980-05-10', 'created_at' => now(), 'updated_at' => now()],
        ['nome' => 'Luisa', 'cognome' => 'Bianchi', 'ruolo' => 'specialista', 'username' => 'luisab', 'password' => Hash::make('secret456'), 'indirizzo' => 'Corso Italia 22', 'citta' => 'Torino', 'data_di_nascita' => '1995-11-20', 'created_at' => now(), 'updated_at' => now()],
        ['nome' => 'Andrea', 'cognome' => 'Verdi', 'ruolo' => 'specialista', 'username' => 'andreav', 'password' => Hash::make('pass789'), 'indirizzo' => 'Viale dei Tigli 10', 'citta' => 'Bologna', 'data_di_nascita' => '1990-07-15', 'created_at' => now(), 'updated_at' => now()],
    ]);
}

}

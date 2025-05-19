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
            ['nome' => 'Mario', 'cognome' => 'Rossi', 'indirizzo' => 'Via Roma 1', 'citta' => 'Ancona', 'data_di_nascita' => '1980-01-15', 'username' => 'mrossi', 'password' => 'B7x@tP9!qLz3', 'ruolo' => 'user'],
            ['nome' => 'Luisa', 'cognome' => 'Bianchi', 'indirizzo' => 'Via Milano 2', 'citta' => 'Ancona', 'data_di_nascita' => '1992-03-21', 'username' => 'lbianchi', 'password' => 'R2#yKm8$sVw9', 'ruolo' => 'user'],
            ['nome' => 'Giovanni', 'cognome' => 'Verdi', 'indirizzo' => 'Via Napoli 3', 'citta' => 'Jesi', 'data_di_nascita' => '1975-08-09', 'username' => 'gverdi', 'password' => 'Xe5!bT2@Lu1q', 'ruolo' => 'staff'],
            ['nome' => 'Sara', 'cognome' => 'Neri', 'indirizzo' => 'Via Firenze 10', 'citta' => 'Osimo', 'data_di_nascita' => '1985-12-01', 'username' => 'sneri', 'password' => 'W4^mZn7!Tk8p', 'ruolo' => 'staff'],
            ['nome' => 'Elena', 'cognome' => 'Moretti', 'indirizzo' => 'Via Venezia 8', 'citta' => 'Senigallia', 'data_di_nascita' => '1990-06-05', 'username' => 'emoretti', 'password' => 'J9@aYc3#Qw6z', 'ruolo' => 'user'],
            ['nome' => 'Paolo', 'cognome' => 'Ferrari', 'indirizzo' => 'Via Genova 11', 'citta' => 'Ancona', 'data_di_nascita' => '1983-02-17', 'username' => 'pferrari', 'password' => 'Pv2$Mz8*Nk7d', 'ruolo' => 'staff'],
            ['nome' => 'Chiara', 'cognome' => 'Galli', 'indirizzo' => 'Via Palermo 6', 'citta' => 'Jesi', 'data_di_nascita' => '1996-09-30', 'username' => 'cgalli', 'password' => 'Ht3!Xy6@Lj4r', 'ruolo' => 'user'],
            ['nome' => 'Andrea', 'cognome' => 'Fontana', 'indirizzo' => 'Via Torino 3', 'citta' => 'Fabriano', 'data_di_nascita' => '1978-11-11', 'username' => 'afontana', 'password' => 'Lk5@Zm2#Wt9s', 'ruolo' => 'staff'],
            ['nome' => 'Lucia', 'cognome' => 'Rinaldi', 'indirizzo' => 'Via Trieste 5', 'citta' => 'Osimo', 'data_di_nascita' => '1989-07-22', 'username' => 'lrinaldi', 'password' => 'Df8!Wb3^Vu6p', 'ruolo' => 'user'],
            ['nome' => 'Marco', 'cognome' => 'Conti', 'indirizzo' => 'Via Bologna 1', 'citta' => 'Ancona', 'data_di_nascita' => '1984-10-04', 'username' => 'mconti', 'password' => 'Qz7$Lk1@Xp5m', 'ruolo' => 'staff'],
            ['nome' => 'Giulia', 'cognome' => 'De Luca', 'indirizzo' => 'Via Bari 14', 'citta' => 'Loreto', 'data_di_nascita' => '1995-04-12', 'username' => 'gdeluca', 'password' => 'Ae4#Rm9!Qy2n', 'ruolo' => 'user'],
            ['nome' => 'Francesco', 'cognome' => 'Mariani', 'indirizzo' => 'Via Pisa 22', 'citta' => 'Senigallia', 'data_di_nascita' => '1993-01-07', 'username' => 'fmariani', 'password' => 'Mb3^Vz5!Kt6q', 'ruolo' => 'staff'],
            ['nome' => 'Alessia', 'cognome' => 'Gentili', 'indirizzo' => 'Via Como 19', 'citta' => 'Ancona', 'data_di_nascita' => '1997-05-03', 'username' => 'agentili', 'password' => 'Uo6!Wy2$Nl7c', 'ruolo' => 'user'],
            ['nome' => 'Davide', 'cognome' => 'Serra', 'indirizzo' => 'Via Latina 2', 'citta' => 'Camerano', 'data_di_nascita' => '1987-12-28', 'username' => 'dserra', 'password' => 'Tz9@Xf4#Mv3r', 'ruolo' => 'staff'],
            ['nome' => 'Laura', 'cognome' => 'Bellini', 'indirizzo' => 'Via Salerno 9', 'citta' => 'Falconara', 'data_di_nascita' => '1991-08-18', 'username' => 'lbellini', 'password' => 'Cr1^Pt6!Lq8b', 'ruolo' => 'admin'],
        ]);
    
    DB::table('dipartimenti')->insert([
        ['nome' => 'Cardiologia', 'descrizione' => 'Dipartimento dedicato alle malattie cardiovascolari e alla diagnostica cardiologica. Dottori: Luca Rinaldi, Elena Moretti, Giuseppe Conti.'],
        ['nome' => 'Neurologia', 'descrizione' => 'Diagnosi e cura delle patologie del sistema nervoso. Dottori: Marco Bianchi, Laura Ferri, Alessandro Greco.'],
        ['nome' => 'Ortopedia', 'descrizione' => 'Trattamento delle malattie e traumi dell’apparato muscolo-scheletrico. Dottori: Federica Galli, Matteo Colombo, Silvia Romano.'],
        ['nome' => 'Pediatria', 'descrizione' => 'Assistenza medica e cura delle malattie pediatriche. Dottori: Chiara Valentini, Lorenzo Marchetti, Martina Bellini.'],
        ['nome' => 'Pneumologia', 'descrizione' => 'Diagnosi e trattamento delle malattie dell’apparato respiratorio. Dottori: Riccardo Fontana, Federica Pini, Gabriele Neri.'],
        ['nome' => 'Radiologia', 'descrizione' => 'Centro specializzato in diagnostica per immagini e radioterapia. Dottori: Alessia Mancini, Tommaso Barone, Elisa Ferretti.'],
    ]);
    
    DB::table('prestazioni')->insert([
        ['nome' => 'Elettrocardiogramma', 'descrizione' => 'Registrazione dell’attività elettrica del cuore.', 'prescrizioni' => 'Nessuna preparazione richiesta.', 'dipartimento_id' => 1, 'giorni' => 'Lun,Mer,Ven', 'orario_inizio' => '08:00'],
        ['nome' => 'Radiografia toracica', 'descrizione' => 'Esame radiologico del torace.', 'prescrizioni' => 'Rimuovere oggetti metallici.', 'dipartimento_id' => 6, 'giorni' => 'Mar,Gio', 'orario_inizio' => '09:00'],
        ['nome' => 'Visita ortopedica', 'descrizione' => 'Valutazione articolazioni e sistema muscolo-scheletrico.', 'prescrizioni' => null, 'dipartimento_id' => 2, 'giorni' => 'Lun,Ven', 'orario_inizio' => '10:00'],
        ['nome' => 'Risonanza magnetica cerebrale', 'descrizione' => 'Esame diagnostico del cervello.', 'prescrizioni' => 'Digiuno da 6 ore. No metalli.', 'dipartimento_id' => 3, 'giorni' => 'Mer', 'orario_inizio' => '11:00'],
        ['nome' => 'Visita pediatrica', 'descrizione' => 'Controllo generale per bambini.', 'prescrizioni' => null, 'dipartimento_id' => 4, 'giorni' => 'Lun,Mar,Mer,Gio,Ven', 'orario_inizio' => '08:30'],
        ['nome' => 'Spirometria', 'descrizione' => 'Valutazione della funzione respiratoria.', 'prescrizioni' => 'Evitare fumo 12h prima.', 'dipartimento_id' => 5, 'giorni' => 'Gio,Ven', 'orario_inizio' => '09:30'],
    ]);
    
    DB::table('prenotazioni')->insert([
        ['idPrenot' => 1, 'utente_id' => 1, 'prestazione_id' => 1, 'stato' => 'confermata', 'giorno_escluso' => null, 'created_at' => now(), 'updated_at' => now()],
        ['idPrenot' => 2, 'utente_id' => 2, 'prestazione_id' => 2, 'stato' => 'confermata', 'giorno_escluso' => 3, 'created_at' => now(), 'updated_at' => now()],
        ['idPrenot' => 3, 'utente_id' => 3, 'prestazione_id' => 3, 'stato' => 'richiesta',  'giorno_escluso' => null, 'created_at' => now(), 'updated_at' => now()],
    ]);

        // Agenda
    DB::table('agenda')->insert([
        ['idAgenda' => 1, 'idPrenotazione' => 1, 'giorno_prenotazione' => '2025-05-21', 'slot_orario' => 3, 'utente_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['idAgenda' => 2, 'idPrenotazione' => 2, 'giorno_prenotazione' => '2025-05-22', 'slot_orario' => 2, 'utente_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['idAgenda' => 3, 'idPrenotazione' => 3, 'giorno_prenotazione' => '2025-05-23', 'slot_orario' => 4, 'utente_id' => null, 'created_at' => now(), 'updated_at' => now()],
    ]);

        // Notifiche
    DB::table('notifiche')->insert([
        ['idNotifica' => 1, 'utente_id' => 1, 'prenotazione_id' => 1, 'messaggio' => 'La prestazione "Elettrocardiogramma" è stata spostata a mercoledì 21 alle ore 10:00.', 'visualizzato' => false, 'created_at' => now(), 'updated_at' => now()],
        ['idNotifica' => 2, 'utente_id' => 2, 'prenotazione_id' => 2, 'messaggio' => 'La prestazione "Radiografia toracica" è confermata per giovedì 22 alle ore 09:00.', 'visualizzato' => false, 'created_at' => now(), 'updated_at' => now()],
    ]);
}

}

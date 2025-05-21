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
    DB::table('users')->insert([
            ['nome' => 'Mario', 'cognome' => 'Rossi', 'indirizzo' => 'Via Roma 1', 'citta' => 'Ancona', 'data_di_nascita' => '1980-01-15', 'username' => 'pazipazi', 'password' => Hash::make('mLqMmLqM'), 'ruolo' => 'user'],
            ['nome' => 'Luisa', 'cognome' => 'Bianchi', 'indirizzo' => 'Via Milano 2', 'citta' => 'Ancona', 'data_di_nascita' => '1992-03-21', 'username' => 'pazipazi', 'password' => Hash::make('mLqMmLqM'), 'ruolo' => 'user'],
            ['nome' => 'Giovanni', 'cognome' => 'Verdi', 'indirizzo' => 'Via Napoli 3', 'citta' => 'Jesi', 'data_di_nascita' => '1975-08-09', 'username' => 'staffstaff', 'password' => Hash::make('mLqMmLqM'), 'ruolo' => 'staff'],
            ['nome' => 'Sara', 'cognome' => 'Neri', 'indirizzo' => 'Via Firenze 10', 'citta' => 'Osimo', 'data_di_nascita' => '1985-12-01', 'username' => 'staffstaff', 'password' => Hash::make('mLqMmLqM'), 'ruolo' => 'staff'],
            ['nome' => 'Elena', 'cognome' => 'Moretti', 'indirizzo' => 'Via Venezia 8', 'citta' => 'Senigallia', 'data_di_nascita' => '1990-06-05', 'username' => 'pazipazi', 'password' => Hash::make('mLqMmLqM'), 'ruolo' => 'user'],
            ['nome' => 'Paolo', 'cognome' => 'Ferrari', 'indirizzo' => 'Via Genova 11', 'citta' => 'Ancona', 'data_di_nascita' => '1983-02-17', 'username' => 'staffstaff', 'password' => Hash::make('mLqMmLqM'), 'ruolo' => 'staff'],
            ['nome' => 'Chiara', 'cognome' => 'Galli', 'indirizzo' => 'Via Palermo 6', 'citta' => 'Jesi', 'data_di_nascita' => '1996-09-30', 'username' => 'pazipazi', 'password' => Hash::make('mLqMmLqM'), 'ruolo' => 'user'],
            ['nome' => 'Andrea', 'cognome' => 'Fontana', 'indirizzo' => 'Via Torino 3', 'citta' => 'Fabriano', 'data_di_nascita' => '1978-11-11', 'username' => 'staffstaff', 'password' => Hash::make('mLqMmLqM'), 'ruolo' => 'staff'],
            ['nome' => 'Lucia', 'cognome' => 'Rinaldi', 'indirizzo' => 'Via Trieste 5', 'citta' => 'Osimo', 'data_di_nascita' => '1989-07-22', 'username' => 'pazipazi', 'password' => Hash::make('mLqMmLqM'), 'ruolo' => 'user'],
            ['nome' => 'Marco', 'cognome' => 'Conti', 'indirizzo' => 'Via Bologna 1', 'citta' => 'Ancona', 'data_di_nascita' => '1984-10-04', 'username' => 'staffstaff', 'password' => Hash::make('mLqMmLqM'), 'ruolo' => 'staff'],
            ['nome' => 'Giulia', 'cognome' => 'De Luca', 'indirizzo' => 'Via Bari 14', 'citta' => 'Loreto', 'data_di_nascita' => '1995-04-12', 'username' => 'pazipazi', 'password' => Hash::make('mLqMmLqM'), 'ruolo' => 'user'],
            ['nome' => 'Francesco', 'cognome' => 'Mariani', 'indirizzo' => 'Via Pisa 22', 'citta' => 'Senigallia', 'data_di_nascita' => '1993-01-07', 'username' => 'staffstaff', 'password' => Hash::make('mLqMmLqM'), 'ruolo' => 'staff'],
            ['nome' => 'Alessia', 'cognome' => 'Gentili', 'indirizzo' => 'Via Como 19', 'citta' => 'Ancona', 'data_di_nascita' => '1997-05-03', 'username' => 'pazipazi', 'password' => Hash::make('mLqMmLqM'), 'ruolo' => 'user'],
            ['nome' => 'Davide', 'cognome' => 'Serra', 'indirizzo' => 'Via Latina 2', 'citta' => 'Camerano', 'data_di_nascita' => '1987-12-28', 'username' => 'staffstaff', 'password' => Hash::make('mLqMmLqM'), 'ruolo' => 'staff'],
            ['nome' => 'Laura', 'cognome' => 'Bellini', 'indirizzo' => 'Via Salerno 9', 'citta' => 'Falconara', 'data_di_nascita' => '1991-08-18', 'username' => 'adminadmin', 'password' => Hash::make('mLqMmLqM'), 'ruolo' => 'admin'],
        ]);
    
    DB::table('dipartimenti')->insert([
        ['nome' => 'Cardiologia', 'descrizione' => 'Dipartimento dedicato alle malattie cardiovascolari e alla diagnostica cardiologica.'],
        ['nome' => 'Neurologia', 'descrizione' => 'Diagnosi e cura delle patologie del sistema nervoso.'],
        ['nome' => 'Ortopedia', 'descrizione' => 'Trattamento delle malattie e traumi dell’apparato muscolo-scheletrico.'],
        ['nome' => 'Pediatria', 'descrizione' => 'Assistenza medica e cura delle malattie pediatriche.'],
        ['nome' => 'Pneumologia', 'descrizione' => 'Diagnosi e trattamento delle malattie dell’apparato respiratorio.'],
        ['nome' => 'Radiologia', 'descrizione' => 'Centro specializzato in diagnostica per immagini e radioterapia.'],
    ]);
    
    DB::table('specialisti')->insert([
        // CARDIOLOGIA
        ['nome' => 'Luca', 'cognome' => 'Rinaldi', 'dipartimento_id' => 1],
        ['nome' => 'Elena', 'cognome' => 'Moretti', 'dipartimento_id' => 1],
        ['nome' => 'Giuseppe', 'cognome' => 'Conti', 'dipartimento_id' => 1],

        // NEUROLOGIA
        ['nome' => 'Marco', 'cognome' => 'Bianchi', 'dipartimento_id' => 2],
        ['nome' => 'Laura', 'cognome' => 'Ferri', 'dipartimento_id' => 2],
        ['nome' => 'Alessandro', 'cognome' => 'Greco', 'dipartimento_id' => 2],

        // ORTOPEDIA
        ['nome' => 'Federica', 'cognome' => 'Galli', 'dipartimento_id' => 3],
        ['nome' => 'Matteo', 'cognome' => 'Colombo', 'dipartimento_id' => 3],
        ['nome' => 'Silvia', 'cognome' => 'Romano', 'dipartimento_id' => 3],

        // PEDIATRIA
        ['nome' => 'Chiara', 'cognome' => 'Valentini', 'dipartimento_id' => 4],
        ['nome' => 'Lorenzo', 'cognome' => 'Marchetti', 'dipartimento_id' => 4],
        ['nome' => 'Martina', 'cognome' => 'Bellini', 'dipartimento_id' => 4],

        // PNEUMOLOGIA
        ['nome' => 'Riccardo', 'cognome' => 'Fontana', 'dipartimento_id' => 5],
        ['nome' => 'Federica', 'cognome' => 'Pini', 'dipartimento_id' => 5],
        ['nome' => 'Gabriele', 'cognome' => 'Neri', 'dipartimento_id' => 5],

        // RADIOLOGIA
        ['nome' => 'Alessia', 'cognome' => 'Mancini', 'dipartimento_id' => 6],
        ['nome' => 'Tommaso', 'cognome' => 'Barone', 'dipartimento_id' => 6],
        ['nome' => 'Elisa', 'cognome' => 'Ferretti', 'dipartimento_id' => 6],
    ]);
    
    DB::table('time_slots')->insert([
        ['id' => 1, 'start_time' => '08:00:00', 'end_time' => '09:00:00'],
        ['id' => 2, 'start_time' => '09:00:00', 'end_time' => '10:00:00'],
        ['id' => 3, 'start_time' => '10:00:00', 'end_time' => '11:00:00'],
        ['id' => 4, 'start_time' => '11:00:00', 'end_time' => '12:00:00'],
        ['id' => 5, 'start_time' => '14:00:00', 'end_time' => '15:00:00'],
        ['id' => 6, 'start_time' => '15:00:00', 'end_time' => '16:00:00'],
        ['id' => 7, 'start_time' => '16:00:00', 'end_time' => '17:00:00'],
        ['id' => 8, 'start_time' => '17:00:00', 'end_time' => '18:00:00'],
    ]);
    
    DB::table('prestazioni')->insert([
        // Cardiologia
        ['nome' => 'Elettrocardiogramma', 'descrizione' => 'Registrazione dell’attività elettrica del cuore.', 'prescrizioni' => 'Nessuna preparazione richiesta.', 'dipartimento_id' => 1, 'specialista_id' => 2, 'giorni_settimana' => 'Lunedì,Mercoledì,Venerdì', 'slots' => '1,2,3',],
        ['nome' => 'Holter cardiaco', 'descrizione' => 'Monitoraggio continuo dell’attività cardiaca per 24-48 ore.', 'prescrizioni' => 'Evitare dispositivi elettronici vicino al torace.', 'dipartimento_id' => 1, 'specialista_id' => 3, 'giorni_settimana' => 'Martedì,Giovedì', 'slots' => '2,3'],
        ['nome' => 'Prova da sforzo', 'descrizione' => 'Test per valutare la risposta del cuore allo sforzo fisico.', 'prescrizioni' => 'Portare abbigliamento sportivo.', 'dipartimento_id' => 1, 'specialista_id' => 1, 'giorni_settimana' => 'Lunedì,Mercoledì', 'slots' => '1,2'],
        // Ortopedia
        ['nome' => 'Ecografia muscolo-tendinea', 'descrizione' => 'Valutazione dei tessuti molli muscolari e tendinei.', 'prescrizioni' => null, 'dipartimento_id' => 2, 'specialista_id' => 5, 'giorni_settimana' => 'Martedì,Venerdì', 'slots' => '2,3'],
        ['nome' => 'Infiltrazioni articolari', 'descrizione' => 'Trattamento antinfiammatorio per articolazioni.', 'prescrizioni' => 'Portare esami recenti.', 'dipartimento_id' => 2, 'specialista_id' => 5, 'giorni_settimana' => 'Mercoledì', 'slots' => '4'],
        ['nome' => 'Visita ortopedica', 'descrizione' => 'Valutazione articolazioni e sistema muscolo-scheletrico.', 'prescrizioni' => null, 'dipartimento_id' => 2, 'specialista_id' => 5, 'giorni_settimana' => 'Lunedì,Venerdì', 'slots' => '3,4'],
        // Neurologia
        ['nome' => 'Risonanza magnetica cerebrale', 'descrizione' => 'Esame diagnostico del cervello.', 'prescrizioni' => 'Digiuno da 6 ore. No metalli.', 'dipartimento_id' => 3, 'specialista_id' => 9, 'giorni_settimana' => 'Mercoledì', 'slots' => '5,6'],
        ['nome' => 'Elettroencefalogramma (EEG)', 'descrizione' => 'Registrazione dell’attività elettrica cerebrale.', 'prescrizioni' => 'Capelli puliti, evitare caffeina.', 'dipartimento_id' => 3, 'specialista_id' => 9, 'giorni_settimana' => 'Lunedì,Venerdì', 'slots' => '1,2'],
        ['nome' => 'Valutazione cognitiva', 'descrizione' => 'Test per memoria e funzioni cognitive.', 'prescrizioni' => null, 'dipartimento_id' => 3, 'specialista_id' => 10, 'giorni_settimana' => 'Giovedì', 'slots' => '3'],
        // Pediatria
        ['nome' => 'Visita pediatrica', 'descrizione' => 'Controllo generale per bambini.', 'prescrizioni' => null, 'dipartimento_id' => 4, 'specialista_id' => 11, 'giorni_settimana' => 'Lunedì,Martedì,Mercoledì,Giovedì,Venerdì', 'slots' => '1,2,3,4,5'],
        ['nome' => 'Vaccinazioni pediatriche', 'descrizione' => 'Somministrazione vaccini previsti dal calendario.', 'prescrizioni' => 'Portare libretto sanitario.', 'dipartimento_id' => 4, 'specialista_id' => 11, 'giorni_settimana' => 'Martedì,Giovedì', 'slots' => '1,2'],
        ['nome' => 'Screening neonatale', 'descrizione' => 'Controlli diagnostici nei primi mesi di vita.', 'prescrizioni' => null, 'dipartimento_id' => 4, 'specialista_id' => 12, 'giorni_settimana' => 'Lunedì', 'slots' => '3'],
        // Pneumologia
        ['nome' => 'Spirometria', 'descrizione' => 'Valutazione della funzione respiratoria.', 'prescrizioni' => 'Evitare fumo 12h prima.', 'dipartimento_id' => 5, 'specialista_id' =>13, 'giorni_settimana' => 'Giovedì,Venerdì', 'slots' => '4,5',],
        ['nome' => 'Test di diffusione polmonare', 'descrizione' => 'Misura la capacità di trasferimento dell’ossigeno ai tessuti.', 'prescrizioni' => 'No fumo per 12 ore.', 'dipartimento_id' => 5, 'specialista_id' => 13, 'giorni_settimana' => 'Martedì', 'slots' => '4'],
        ['nome' => 'Controllo post-broncopneumopatia', 'descrizione' => 'Monitoraggio pazienti con BPCO.', 'prescrizioni' => 'Portare esami precedenti.', 'dipartimento_id' => 5, 'specialista_id' => 14, 'giorni_settimana' => 'Venerdì', 'slots' => '5'],
        // Radiologia
        ['nome' => 'Radiografia toracica', 'descrizione' => 'Esame radiologico del torace.', 'prescrizioni' => 'Rimuovere oggetti metallici.', 'dipartimento_id' => 6, 'specialista_id' => 18, 'giorni_settimana' => 'Martedì,Giovedì', 'slots' => '2,3,4',],
        ['nome' => 'TAC addome', 'descrizione' => 'Tomografia computerizzata della cavità addominale.', 'prescrizioni' => 'Digiuno da 6 ore.', 'dipartimento_id' => 6, 'specialista_id' => 18, 'giorni_settimana' => 'Mercoledì,Venerdì', 'slots' => '2,3'],
        ['nome' => 'Mammografia', 'descrizione' => 'Esame radiologico del seno.', 'prescrizioni' => 'Evitare creme o deodoranti prima dell’esame.', 'dipartimento_id' => 6, 'specialista_id' => 18, 'giorni_settimana' => 'Lunedì,Giovedì', 'slots' => '1,2'],
    ]);
    
    DB::table('prenotazioni')->insert([
        ['idPrenot' => 1, 'users_id' => 1, 'prestazione_id' => 1, 'stato' => 'confermata', 'giorno_escluso' => null, 'created_at' => now(), 'updated_at' => now()],
        ['idPrenot' => 2, 'users_id' => 2, 'prestazione_id' => 2, 'stato' => 'confermata', 'giorno_escluso' => 3, 'created_at' => now(), 'updated_at' => now()],
        ['idPrenot' => 3, 'users_id' => 3, 'prestazione_id' => 3, 'stato' => 'richiesta',  'giorno_escluso' => null, 'created_at' => now(), 'updated_at' => now()],
    ]);

        // Agenda
    DB::table('agenda')->insert([
        ['idAgenda' => 1, 'idPrenotazione' => 1, 'giorno_prenotazione' => '2025-05-21', 'slot_orario' => 3, 'users_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['idAgenda' => 2, 'idPrenotazione' => 2, 'giorno_prenotazione' => '2025-05-22', 'slot_orario' => 2, 'usersid' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['idAgenda' => 3, 'idPrenotazione' => 3, 'giorno_prenotazione' => '2025-05-23', 'slot_orario' => 4, 'users_id' => null, 'created_at' => now(), 'updated_at' => now()],
    ]);

        // Notifiche
    DB::table('notifiche')->insert([
        ['idNotifica' => 1, 'users_id' => 1, 'prenotazione_id' => 1, 'messaggio' => 'La prestazione "Elettrocardiogramma" è stata spostata a mercoledì 21 alle ore 10:00.', 'visualizzato' => false, 'created_at' => now(), 'updated_at' => now()],
        ['idNotifica' => 2, 'usersid' => 2, 'prenotazione_id' => 2, 'messaggio' => 'La prestazione "Radiografia toracica" è confermata per giovedì 22 alle ore 09:00.', 'visualizzato' => false, 'created_at' => now(), 'updated_at' => now()],
    ]);
    
}

}
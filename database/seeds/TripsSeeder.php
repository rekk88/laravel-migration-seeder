<?php

use Illuminate\Database\Seeder;
use App\Trip; //richiamo il model per poter leggere i dati dal db

class TripsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trip = new Trip(); //creo un nuovo oggetto di tipo Trip
        
        // inserisco tutte le proprietà dell'oggetto
        // $trip->id=1; //parte da 1 e autoincrementa ad ogni nuovo inserimento
        $trip->title="gita1";
        $trip->destination="Rata Sum";
        $trip->departure="1/10/2021";
        $trip->days="10";

        //salva i dati nel db
        $trip->save();
    }
}
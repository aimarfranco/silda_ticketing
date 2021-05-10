<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Ticket;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ticket = new Ticket();

        $ticket->contacto = "Aimar Franco";
        $ticket->asunto = "Primer ticket seeder";
        $ticket->grupo = "ninguno";
        $ticket->agente = "Daniel";
        $ticket->prioridad = "Alta";
        $ticket->estado= "Abierto";
      
        $ticket->save();
    }
}

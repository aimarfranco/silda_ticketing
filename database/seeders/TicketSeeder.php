<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
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

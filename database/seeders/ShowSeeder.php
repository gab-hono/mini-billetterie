<?php

namespace Database\Seeders;

use App\Models\Show;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Show::create([
            'title' => 'Hamlet',
            'venue' => 'Théâtre de la Ville',
            'date' => '2027-02-12 20:00:00',
            'capacity' => 300,
            'tickets_sold' => 240,
            'ticket_price' => 25.00,
        ]);

        Show::create([
            'title' => 'The Age of Content',
            'venue' => 'Théâtre de Chatelet',
            'date' => '2027-05-20 20:00:00',
            'capacity' => 500,
            'tickets_sold' => 480,
            'ticket_price' => 25.00,
        ]);

        Show::create([
            'title' => 'Faust, fait non dit',
            'venue' => 'Odeon - Théâtre de l’Europe',
            'date' => '2026-11-20 20:00:00',
            'capacity' => 400,
            'tickets_sold' => 120,
            'ticket_price' => 30.00,
        ]);
    }
}

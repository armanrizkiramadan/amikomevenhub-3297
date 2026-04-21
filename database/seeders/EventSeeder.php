<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event; // Pastikan baris ini ada untuk memanggil Model Event

class EventSeeder extends Seeder
{
    public function run(): void
    {
        Event::create([
            'name' => 'Seminar Teknologi AI',
            'description' => 'Seminar tentang masa depan AI di Amikom.',
            'start_time' => '2024-05-10 09:00:00',
            'end_time' => '2024-05-10 12:00:00',
        ]);

        Event::create([
            'name' => 'Workshop Laravel Dasar',
            'description' => 'Belajar membuat web dengan framework Laravel.',
            'start_time' => '2024-06-15 13:00:00',
            'end_time' => '2024-06-15 16:00:00',
        ]);
    }
}
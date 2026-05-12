<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Event;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin
        User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // 2. Buat 3 Kategori (Sesuai Tugas)
        $katSeminar = Category::create(['name' => 'Seminar IT', 'slug' => 'seminar-it']);
        $katHiburan = Category::create(['name' => 'Entertainment', 'slug' => 'entertainment']);
        $katWorkshop = Category::create(['name' => 'Workshop & Lomba', 'slug' => 'workshop-lomba']);

        // 3. Buat 6 Event (Sesuai Tugas)
        Event::create([
            'category_id' => $katSeminar->id,
            'title' => 'AI & FUTURE TECH SUMMIT 2026',
            'description' => 'Jelajahi tren terkini dalam kecerdasan buatan.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-1.png',
        ]);

        Event::create([
            'category_id' => $katHiburan->id,
            'title' => 'Jazz Night 2025',
            'description' => 'Nikmati malam dengan alunan musik jazz.',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 75000,
            'stock' => 200,
            'poster_path' => 'posters/event-2.png',
        ]);

        Event::create([
            'category_id' => $katWorkshop->id,
            'title' => 'Hackathon: Unleash Your Developer',
            'description' => 'Ciptakan solusi inovatif untuk tantangan masa depan.',
            'date' => '2026-05-05 10:00:00',
            'location' => 'Inkubator Amikom',
            'price' => 50000,
            'stock' => 50,
            'poster_path' => 'posters/event-3.png',
        ]);

        Event::create([
            'category_id' => $katSeminar->id,
            'title' => 'UI/UX Masterclass',
            'description' => 'Belajar rahasia desain antarmuka dari ahlinya.',
            'date' => '2026-06-15 09:00:00',
            'location' => 'Ruang Citra 1',
            'price' => 100000,
            'stock' => 80,
            'poster_path' => 'posters/event-4.png',
        ]);

        Event::create([
            'category_id' => $katHiburan->id,
            'title' => 'E-Sport U-Champ Amikom',
            'description' => 'Turnamen Mobile Legends antar mahasiswa.',
            'date' => '2026-06-20 08:00:00',
            'location' => 'Basement V',
            'price' => 25000,
            'stock' => 300,
            'poster_path' => 'posters/event-5.png',
        ]);

        Event::create([
            'category_id' => $katWorkshop->id,
            'title' => 'Startup Pitching Bootcamp',
            'description' => 'Siapkan ide bisnismu untuk dilirik investor.',
            'date' => '2026-07-01 10:00:00',
            'location' => 'Ruang 7.3.1',
            'price' => 150000,
            'stock' => 40,
            'poster_path' => 'posters/event-6.png',
        ]);
    }
}
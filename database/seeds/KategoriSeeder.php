<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        KategoriSeeder::insert([
            ['name' => 'Ruang Tamu', 'slug' => 'ruang-tamu', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ruang Makan', 'slug' => 'ruang-makan', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kamar Tidur', 'slug' => 'kamar-tidur', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ruang Kerja', 'slug' => 'ruang-kerja', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dekorasi', 'slug' => 'dekorasi', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}

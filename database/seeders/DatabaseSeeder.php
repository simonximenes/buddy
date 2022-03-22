<?php

namespace Database\Seeders;

use App\Models\Todo;
use Database\Factories\TodoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //seeder yang kecil-kecilan
        // $this->call([
        //     TodoSeeder::class,
        // ]);
        //seeder yang besar-besaran
        Todo::factory(1000)->create();

    }
}

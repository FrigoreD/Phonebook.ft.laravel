<?php

namespace Database\Seeders;

use App\models\Phonebook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhonebookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        Phonebook::factory()->count(100)->create();
    }
}


//namespace Database\Seeders;
//
//use App\models\Phonebook;
//
//// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
//use Illuminate\Database\Seeder;
//
//class DatabaseSeeder extends Seeder
//{
//    /**
//     * Seed the application's database.
//     *
//     * @return void
//     */
//    public function run(): void
//    {
//        Phonebook::factory()->count(100)->create();
//    }
//}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Faker\Factory as Faker;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $faker = Faker::create();

        User::create([
            'name' => 'Agi Sahriza',
            'email' => 'agisahriza@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Peserta',
            'email' => 'peserta@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'examinee',
            'examinee_number' => '123456',
        ]);

        for ($i = 0; $i < 50; $i++) {
            $question = Question::create([
                'question' => $faker->paragraph(mt_rand(5, 10))
            ]);

            $jumlahPilihan = $i % 2 == 0 ? 5 : 4;

            for ($j = 0; $j < $jumlahPilihan; $j++) {
                Answer::create([
                    'id_question' => $question->id,
                    'answer' => $faker->paragraph(1),
                    'is_correct' => $j == 0 ? 1 : 0,
                ]);
            }
        }
    }
}

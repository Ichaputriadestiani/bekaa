<?php

namespace Database\Seeders;

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
        \App\Models\User::insert(
            [
                [
                    'name' => 'Mentro Test',
                    'email' => 'mentort@test.com',
                    'password' => bcrypt('123456'),
                    'role' => 'mentor',
                ],
                [
                    'name' => 'Siswa Test',
                    'email' => 'siswa@test.com',
                    'password' => bcrypt('123456'),
                    'role' => 'student',
                ]
            ]
        );

        \App\Models\ConsultSession::insert(
            [

                [
                    'topic' => 'Eh`tika 1',
                    'user_id' => 2,
                    'mentor_id' => 1,
                    'start_at' => '2020-12-03 00:00:00',
                    'end_at' => '2020-12-04 00:00:00',
                    'link' => 'https://docs.google.com/forms/d/e/1FAIpQLSf6yS47FBSRVoHpcRuvba3oiqeyX3I4eWpbjygkjpztnWnmiw/viewform?usp=sf_link'
                ],
                [
                    'topic' => 'Eh`tika 2',
                    'user_id' => 2,
                    'mentor_id' => 1,
                    'start_at' => '2020-12-04 00:00:00',
                    'end_at' => '2020-12-05 00:00:00',
                    'link' => 'https://docs.google.com/forms/d/e/1FAIpQLSf6yS47FBSRVoHpcRuvba3oiqeyX3I4eWpbjygkjpztnWnmiw/viewform?usp=sf_link'
                ],
                [
                    'topic' => 'Eh`tika 3',
                    'user_id' => 2,
                    'mentor_id' => 1,
                    'start_at' => '2020-12-05 00:00:00',
                    'end_at' => '2020-12-06 00:00:00',
                    'link' => 'https://docs.google.com/forms/d/e/1FAIpQLSf6yS47FBSRVoHpcRuvba3oiqeyX3I4eWpbjygkjpztnWnmiw/viewform?usp=sf_link'
                ],
            ]
        );
    }
}

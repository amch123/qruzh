<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Admnistrador',
            'email' => 'info@qrzh.com.mx',
            'password' => bcrypt(1234),
            'id_role' => 1, ],
        ];

        DB::table('users')->insert($data);
    }
}

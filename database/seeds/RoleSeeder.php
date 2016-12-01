<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['role' => 'administrator',
                'created_at' => '2016-11-27 00:00:00',
                'updated_at' => '2016-11-27 00:00:00', ],

            ['role' => 'client',
                'created_at' => '2016-11-27 00:00:00',
                'updated_at' => '2016-11-27 00:00:00', ],
        ];

        DB::table('roles')->insert($data);
    }
}

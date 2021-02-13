<?php

use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_outlet')->insert([
            'nama_outlet' => 'Outlet Super Admin',
            'alamat' => 'Pusat',
            'tlp' => 8881324,
        ]);
    }
}

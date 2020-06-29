<?php

use Illuminate\Database\Seeder;

class restaurantSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')
            ->insert($this->generateData());
    }
    protected function generateData()
    {
        $facker = Faker\Factory::create('ru_RU');
        $data = [];
        for ($i=0; $i <  10; $i++) {
            $data[] = [
                'r_restHolderId' => rand(1,5),
                'r_phone' => rand(0000000001,9999999999),
                'r_name' => $facker->company,
                'r_description' => $facker->realText(rand(100,450)),
                'r_address' => $facker->address,
                'r_site' => $facker->url,
                'r_email' => $facker->email,
                'r_tables' => '{"table": 1, "person": 6}',

            ];
        }
        return $data;


    }
}

<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                 'unit_type'=> "ampere",
                'description'=>' unit of measure of the rate of electron flow or current in an electrical conductor',
            ],
            [
                'unit_type'=> "candela",
                'description'=>'SI unit of luminous intensity',
            ],
            [
                'unit_type'=> "kelvin",
                'description'=>'primary unit of temperature in the International System of Units (SI)',
            ],
            [
                'unit_type'=> "pascal",
                'description'=>'unit of pressure or stress in the International System of Units (SI)',
            ],
        ];
        foreach($data as $u){
            \App\Unit::create($u);
        }
    }
}
<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->create_Units();

        Eloquent::reguard();
    }

    private function create_Units()
    {
        $statuses = [

            ['name' => 'Adminsitración'],
            ['name' => 'Recursos Humanos'],
            ['name' => 'Unidad de Sistemas'],
            ['name' => 'Prestamos'],
            ['name' => 'Fondo de Retiro'],
            ['name' => 'Complemento Económico'],
            ['name' => 'Asesoria Legal'],
            ['name' => 'Regional SCZ'],
            ['name' => 'Regional Oruro']

        ];

        foreach ($statuses as $status) {

            App\Unit::create($status);

        }
    }
}

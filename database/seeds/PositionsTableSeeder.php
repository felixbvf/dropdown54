<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->create_Positions();

        Eloquent::reguard();
    }

    private function create_Positions()
    {
        $statuses = [

            ['unit_id' => 1, 'name' => 'Adminsitración'],
            ['unit_id' => 2, 'name' => 'Recursos Humanos'],
            ['unit_id' => 2, 'name' => 'Unidad de Sistemas'],
            ['unit_id' => 3, 'name' => 'Prestamos'],
            ['unit_id' => 3, 'name' => 'Fondo de Retiro'],
            ['unit_id' => 4, 'name' => 'Complemento Económico'],
            ['unit_id' => 4, 'name' => 'Asesoria Legal'],
            ['unit_id' => 4, 'name' => 'Regional SCZ'],
            ['unit_id' => 1, 'name' => 'Regional Oruro']

        ];

        foreach ($statuses as $status) {

            App\Position::create($status);

        }
    }
}

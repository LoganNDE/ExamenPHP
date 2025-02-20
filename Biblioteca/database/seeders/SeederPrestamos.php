<?php

namespace Database\Seeders;

use App\Models\Prestamo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeederPrestamos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prestamo = new Prestamo();
        $prestamo->libro_id = 1;
        $prestamo->socio_id = 1;
        $prestamo->created_at= date('Y-m-d H:m:s');
        $prestamo->updated_at = date('Y-m-d H:m:s');
        $prestamo->save();
    }
}

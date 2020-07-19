<?php

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::create([
            'id' => '55a2ff90-83fb-4077-80ee-20e779518447',
            'name' => 'LAKI-LAKI'
        ]);

        Gender::create([
            'id' => '7c500287-62d2-4f98-9ab9-40e974af9baa',
            'name' => 'PEREMPUAN'
        ]);
    }
}

<?php

use App\Models\ActiveStatus;
use Illuminate\Database\Seeder;

class ActiveStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActiveStatus::create([
            'id' => 'e2eb3489-42cc-45ac-a9fa-b89e039aaf82',
            'name' => 'AKTIF',
        ]);

        ActiveStatus::create([
            'id' => 'e7258eae-182b-4782-a85c-86f309ff37f3',
            'name' => 'NON-AKTIF',
        ]);
    }
}

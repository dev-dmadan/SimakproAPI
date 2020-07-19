<?php

use App\Models\ContactType;
use Illuminate\Database\Seeder;

class ContactTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactType::create([
            'id' => 'b2d36b65-3827-4f59-92c6-f0521385fdbb',
            'name' => 'OWNER',
        ]);

        ContactType::create([
            'id' => '9a162bce-625d-4fcb-9399-0f611e76dcad',
            'name' => 'KAS BESAR',
        ]);

        ContactType::create([
            'id' => '50a8a4bb-2271-4ba6-ac16-47d660e3d2c2',
            'name' => 'KAS KECIL',
        ]);

        ContactType::create([
            'id' => '1055b8fe-fe19-43ba-ac26-259974ca8ea5',
            'name' => 'SUB KAS KECIL',
        ]);
    }
}

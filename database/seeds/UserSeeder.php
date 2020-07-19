<?php

use App\Repository\UserRepository;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    function __construct()
    {

        $this->activeStatus = 'e2eb3489-42cc-45ac-a9fa-b89e039aaf82';
        $this->password = '$2y$10$ACsdeRsdFAHHvP784s4RaOcNVy8FEnsEzhkePjqJIpiqW7t34skzu';

        $this->userRepository = new UserRepository();
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            foreach ($this->owner() as $data) $this->userRepository->create($data['contact'], $data['user'], $data['access_right']);
        } catch (Exception $e) {
            dd("ERROR SEEDER TAMBAH USER OWNER:\n\n" . $e->getMessage());
        }

        try {
            foreach ($this->kasBesar() as $data) $this->userRepository->create($data['contact'], $data['user'], $data['access_right']);
        } catch (Exception $e) {
            dd("ERROR SEEDER TAMBAH USER KAS BESAR:\n\n" . $e->getMessage());
        }

        try {
            foreach ($this->kasKecil() as $data) $this->userRepository->create($data['contact'], $data['user'], $data['access_right']);
        } catch (Exception $e) {
            dd("ERROR SEEDER TAMBAH USER KAS KECIL:\n\n" . $e->getMessage());
        }

        try {
            foreach ($this->subKasKecil() as $data) $this->userRepository->create($data['contact'], $data['user'], $data['access_right']);
        } catch (Exception $e) {
            dd("ERROR SEEDER TAMBAH USER SUB KAS KECIL:\n\n" . $e->getMessage());
        }
    }

    // TODO: Isi access right jika AccessRightSeeder sudah siap.
    public function owner()
    {
        $data = [];
        $contactType = 'b2d36b65-3827-4f59-92c6-f0521385fdbb';
        $accessRight = [];

        array_push($data, [
            'contact' => [
                'id' => 'a71d4df7-1c8d-4a4f-a198-fa4f73c366e3',
                'name' => 'OWNER 1',
                'contact_typeId' => $contactType,
                'active_statusId' => $this->activeStatus,
            ],
            'user' => [
                'id' => '7886b65c-2641-4505-8fee-ef89f4e90184',
                'username' => 'owner1',
                'password' => $this->password,
                'contactId' => 'a71d4df7-1c8d-4a4f-a198-fa4f73c366e3',
            ],
            'access_right' => $accessRight,
        ]);

        return $data;
    }

    // TODO: Isi access right jika AccessRightSeeder sudah siap.
    public function kasBesar()
    {
        $data = [];
        $contactType = '9a162bce-625d-4fcb-9399-0f611e76dcad';
        $accessRight = [];

        array_push($data, [
            'contact' => [
                'id' => '26ff42eb-fa9a-48e0-aad2-58342df1d00f',
                'name' => 'KAS BESAR 1',
                'contact_typeId' => $contactType,
                'active_statusId' => $this->activeStatus,
            ],
            'user' => [
                'id' => '49cb4425-4f5a-43a4-9fde-2fe68ee5cf24',
                'username' => 'kas_besar1',
                'password' => $this->password,
                'contactId' => '26ff42eb-fa9a-48e0-aad2-58342df1d00f',
            ],
            'access_right' => $accessRight
        ]);

        array_push($data, [
            'contact' => [
                'id' => 'b378ec89-6112-4bf4-bdc1-35375d7d8a2a',
                'name' => 'KAS BESAR 2',
                'contact_typeId' => $contactType,
                'active_statusId' => $this->activeStatus,
            ],
            'user' => [
                'id' => '3d8cf0ff-63f2-4474-95ab-b2a048dd2f56',
                'username' => 'kas_besar2',
                'password' => $this->password,
                'contactId' => 'b378ec89-6112-4bf4-bdc1-35375d7d8a2a',
            ],
            'access_right' => $accessRight
        ]);

        array_push($data, [
            'contact' => [
                'id' => 'b6af9ed4-8fc4-4cec-8744-f5b4841e5e0d',
                'name' => 'KAS BESAR 3',
                'contact_typeId' => $contactType,
                'active_statusId' => $this->activeStatus,
            ],
            'user' => [
                'id' => 'a62fb649-ec56-488a-a6e4-730fbf06532b',
                'username' => 'kas_besar3',
                'password' => $this->password,
                'contactId' => 'b6af9ed4-8fc4-4cec-8744-f5b4841e5e0d',
            ],
            'access_right' => $accessRight
        ]);

        return $data;
    }

    // TODO: Isi access right jika AccessRightSeeder sudah siap.
    private function kasKecil()
    {
        $data = [];
        $contactType = '50a8a4bb-2271-4ba6-ac16-47d660e3d2c2';
        $accessRight = [];

        array_push($data, [
            'contact' => [
                'id' => 'df762570-5672-4d52-b649-174585dc17a8',
                'name' => 'KAS KECIL 1',
                'contact_typeId' => $contactType,
                'active_statusId' => $this->activeStatus,
            ],
            'user' => [
                'id' => 'b5a60d7d-09b3-45b4-97f9-0d93cb441766',
                'username' => 'kas_kecil1',
                'password' => $this->password,
                'contactId' => 'df762570-5672-4d52-b649-174585dc17a8',
            ],
            'access_right' => $accessRight
        ]);

        array_push($data, [
            'contact' => [
                'id' => '738f256c-c982-4534-93ca-11dcce20f1a2',
                'name' => 'KAS KECIL 2',
                'contact_typeId' => $contactType,
                'active_statusId' => $this->activeStatus,
            ],
            'user' => [
                'id' => 'ccbba336-bd03-419a-aae8-e66855d27863',
                'username' => 'kas_kecil2',
                'password' => $this->password,
                'contactId' => '738f256c-c982-4534-93ca-11dcce20f1a2',
            ],
            'access_right' => $accessRight
        ]);

        array_push($data, [
            'contact' => [
                'id' => 'a9e6d2d6-d22a-4b67-a5b9-731e4697eafb',
                'name' => 'KAS KECIL 3',
                'contact_typeId' => $contactType,
                'active_statusId' => $this->activeStatus,
            ],
            'user' => [
                'id' => '58b849bb-baa9-4b7f-9a75-5a3ed29632fb',
                'username' => 'kas_kecil3',
                'password' => $this->password,
                'contactId' => 'a9e6d2d6-d22a-4b67-a5b9-731e4697eafb',
            ],
            'access_right' => $accessRight
        ]);

        array_push($data, [
            'contact' => [
                'id' => 'dbc1fdb1-3c0a-47c7-8b04-a8249c176b06',
                'name' => 'KAS KECIL 4',
                'contact_typeId' => $contactType,
                'active_statusId' => $this->activeStatus,
            ],
            'user' => [
                'id' => '5e7d35e3-a6ba-4a5d-81a6-3d8193c73426',
                'username' => 'kas_kecil4',
                'password' => $this->password,
                'contactId' => 'dbc1fdb1-3c0a-47c7-8b04-a8249c176b06',
            ],
            'access_right' => $accessRight
        ]);

        return $data;
    }

    // TODO: Isi access right jika AccessRightSeeder sudah siap.
    private function subKasKecil()
    {
        $data = [];
        $contactType = '1055b8fe-fe19-43ba-ac26-259974ca8ea5';
        $accessRight = [];

        array_push($data, [
            'contact' => [
                'id' => 'b2cc1a66-24f5-4c62-92be-255a5f9a6572',
                'name' => 'SUB KAS KECIL 1',
                'contact_typeId' => $contactType,
                'active_statusId' => $this->activeStatus,
            ],
            'user' => [
                'id' => 'a7d7a0d1-91e0-4509-b9e7-40325beb47c9',
                'username' => 'sub_kas_kecil1',
                'password' => $this->password,
                'contactId' => 'b2cc1a66-24f5-4c62-92be-255a5f9a6572',
            ],
            'access_right' => $accessRight
        ]);

        array_push($data, [
            'contact' => [
                'id' => 'c586a51a-c4e4-4490-8df7-6a8d7ddf861f',
                'name' => 'SUB KAS KECIL 2',
                'contact_typeId' => $contactType,
                'active_statusId' => $this->activeStatus,
            ],
            'user' => [
                'id' => '5b147fa6-1c0e-4cb5-96f6-a8481609be06',
                'username' => 'sub_kas_kecil2',
                'password' => $this->password,
                'contactId' => 'c586a51a-c4e4-4490-8df7-6a8d7ddf861f',
            ],
            'access_right' => $accessRight
        ]);

        array_push($data, [
            'contact' => [
                'id' => '418855c7-ad03-457f-baba-1dc48e943c04',
                'name' => 'SUB KAS KECIL 3',
                'contact_typeId' => $contactType,
                'active_statusId' => $this->activeStatus,
            ],
            'user' => [
                'id' => '51a1aeab-3c88-4670-b70b-3c253d5fbccd',
                'username' => 'sub_kas_kecil3',
                'password' => $this->password,
                'contactId' => '418855c7-ad03-457f-baba-1dc48e943c04',
            ],
            'access_right' => $accessRight
        ]);

        array_push($data, [
            'contact' => [
                'id' => 'c9806606-7366-4f42-8156-6c8f4fad6e3f',
                'name' => 'SUB KAS KECIL 4',
                'contact_typeId' => $contactType,
                'active_statusId' => $this->activeStatus,
            ],
            'user' => [
                'id' => 'dc4ce8a3-3dfe-41f3-b7a5-226cba481a1f',
                'username' => 'sub_kas_kecil4',
                'password' => $this->password,
                'contactId' => 'c9806606-7366-4f42-8156-6c8f4fad6e3f',
            ],
            'access_right' => $accessRight
        ]);

        return $data;
    }
}

<?php

namespace App\Repository;

use App\Models\AccessRight;
use App\Models\Contact;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * BERISI KUMPULAN METHOD (QUERY) YANG BERHUBUNGAN DENGAN DATA/INFORMASI USER.
 * 
 * Seluruh method yang terkadung dalam class ini akan mengembalikan exception jika terjadi error.
 */
class UserRepository
{

  /**
   * Method tambah user yang merupakan proses penambahan data kedalam tabel contact, user, dan access_right secara bersamaan.
   *
   * 
   * @param {array} $contact Merupakan data array dengan index sesuai nama  kolom pada tabel contact.
   * @param {array} $user Merupakan data array dengan index sesuai nama kolom pada tabel user.
   * @param {array} $accessRight Merupakan data array dengan index sesuai nama kolom padal tabel access_right.
   * 
   */
  public function create($contact, $user, $accessRight)
  {
    DB::beginTransaction();
    try {
      Contact::create($contact);
      User::create($user);

      // TODO: Buka access_right jika seeder user sudah siap
      // AccessRight::create($accessRight);

      DB::commit();
    } catch (Exception $e) {
      throw $e;
      DB::rollBack();
    }
  }
}

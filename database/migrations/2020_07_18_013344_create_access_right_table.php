<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessRightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_right', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('userId');
            $table->uuid('accessId');
            $table->boolean('isCanInsert')->default(false);
            $table->boolean('isCanUpdate')->default(false);
            $table->boolean('isCanDelete')->default(false);
            $table->boolean('isCanRead')->default(false);
            $table->boolean('isCanExport')->default(false);
            $table->timestamps();

            $table->primary('id');
            $table->foreign('userId')->references('id')->on('user')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('accessId')->references('id')->on('access')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('access_right');
    }
}

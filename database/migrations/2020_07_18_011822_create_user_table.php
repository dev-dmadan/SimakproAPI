<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('username');
            $table->text('password');
            $table->uuid('contactId');
            $table->uuid('created_by')->nullable();
            $table->uuid('updated_by')->nullable();
            $table->timestamps();

            $table->primary('id');
            $table->unique('username');
            $table->foreign('contactId')->references('id')->on('contact')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('contact')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('contact')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}

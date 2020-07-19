<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->string('birthplace')->nullable();
            $table->date('birthdate')->nullable();
            $table->uuid('genderId')->nullable();
            $table->text('address')->nullable();
            $table->string('email')->nullable();
            $table->string('phoneNumber', 150)->nullable();
            $table->text('image')->nullable();
            $table->uuid('contact_typeId');
            $table->uuid('active_statusId');
            $table->double('saldo')->default(0);
            $table->uuid('created_by')->nullable();
            $table->uuid('updated_by')->nullable();
            $table->timestamps();

            $table->primary('id');
            $table->unique('email');
            $table->foreign('genderId')->references('id')->on('gender')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('contact_typeId')->references('id')->on('contact_type')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('active_statusId')->references('id')->on('active_status')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('contact');
    }
}

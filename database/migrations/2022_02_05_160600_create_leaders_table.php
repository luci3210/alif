<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaders', function (Blueprint $table) {
            $table->id('ldr_id');
            $table->integer('ldr_slug');
            $table->string('ldr_name',60);
            $table->string('ldr_contact',15);
            $table->string('ldr_province',12);
            $table->string('ldr_city',12);
            $table->string('ldr_barangay',12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaders');
    }
}

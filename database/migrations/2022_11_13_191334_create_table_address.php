<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_address', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->string('address')->default('');
            $table->string('number')->default('');;
            $table->string('district')->default('');;
            $table->string('city')->default('');;
            $table->string('state')->default('');;
            $table->string('country')->default('');;
            $table->timestamps();
        });

        Schema::table('table_address', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_address');
    }
}

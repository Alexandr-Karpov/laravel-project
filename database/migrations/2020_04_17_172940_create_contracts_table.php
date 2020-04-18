<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('tariff_id')->unsigned();
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', ['Активен', 'Неактивен'])->default('Неактивен');
            $table->timestamps();
        });

        Schema::table('contracts', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('tariff_id')->references('id')->on('tariffs');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}

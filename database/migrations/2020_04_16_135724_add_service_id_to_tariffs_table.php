<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddServiceIdToTariffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tariffs', function (Blueprint $table) {
            $table->bigInteger('service_id')->after('name')->unsigned();
            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tariffs', function (Blueprint $table) {
            $table->dropForeign('tariffs_service_id_foreign');
            $table->dropColumn('service_id');
        });
    }
}

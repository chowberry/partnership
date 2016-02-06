<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZoneInChurchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("churches", function (Blueprint $table) {
            $table->foreign("zone_id")->references("id")
                ->on("zones")
                ->onDelete("cascade");
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("churches", function (Blueprint $table) {
            $table->dropForeign("churches_zone_id_foreign");
        });
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateChurchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("churches", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name", 300);
            $table->integer("zone_id")->unsigned();
            $table->foreign("zone_id")->references("zones")
                ->on("id")
                ->onDelete("cascade")
                ->onUpdate("cascade");
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

        Schema::drop("churches");
    }
}

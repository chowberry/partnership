<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnershipForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("partnerships", function (Blueprint $table) {

            $table->foreign("church_id")->references("id")
                ->on("churches")
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
        Schema::table("partnerships", function (Blueprint $table) {
            $table->dropForeign("partnerships_church_id_foreign");
        });
    }
}

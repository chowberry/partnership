<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreatePartnershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("partnerships", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("title")->nullable();
            $table->string("surname");
            $table->string("other_names");
            $table->string("pcf");
            $table->enum("gender", array("Male", "Female"));
            $table->date("birthday")->nullable();
            $table->enum("marital_status", array("Married", "Divorced", "Separated", "Single", "Other"))->nullable();
            $table->integer("church_id")->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign("church_id")->references("churches")
                ->on("id")
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

        Schema::drop("partnerships");
    }
}

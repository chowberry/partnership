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
            $table->date("wedding_anniv")->nullable();
            $table->bigInteger("church_id")->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("partnerships");
    }
}

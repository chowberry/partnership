<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreatePartnershipsArmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("partnerships_arms", function (Blueprint $table) {
            $table->bigInteger("partnership_id")->unsigned();
            $table->bigInteger("arms_id")->unsigned();
            $table->primary(array("arms_id", "partnership_id"));
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("partnerships_arms");
    }
}

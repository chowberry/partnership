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
            $table->integer("partnership_id")->unsigned();
            $table->integer("arms_id")->unsigned();
        });

        Schema::table("partnerships_arms", function (Blueprint $table) {
            $table->foreign("partnership_id")->references("partnerships")
                ->on("id")->onDelete("cascade");
            $table->foreign("arms_id")->references("arms")
                ->on("id")->onDelete("cascade");
            $table->unique(array("partnership_id", "arms_id"));
            $table->index(["partnership_id", "arms_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

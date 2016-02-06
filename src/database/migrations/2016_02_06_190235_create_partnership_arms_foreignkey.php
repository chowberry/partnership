<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreatePartnershipArmsForeignkey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("partnerships_arms", function (Blueprint $table) {
            $table->foreign("partnership_id")->references("id")
                ->on("partnerships")->onDelete("cascade");
            $table->foreign("arms_id")->references("id")
                ->on("arms")->onDelete("cascade");
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
        Schema::table("partnerships_arms", function (Blueprint $table) {
            $table->dropForeign("partnerships_arms_partnership_id_foreign");
            $table->dropForeign("partnerships_arms_arms_id_foreign");
        });
    }
}

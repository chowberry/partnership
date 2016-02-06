<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("contacts", function (Blueprint $table) {
            $table->bigInteger("partnership_id")->unsigned();
            $table->string("email");
            $table->string("alt_email");
            $table->string("phones", 20);
            $table->string("alt_phones", 20);
            $table->foreign("partnership_id")->references("id")->on("partnerships")
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
        Schema::table("contacts", function (Blueprint $table) {
            $table->dropForeign("contacts_partnership_id_foreign");
        });

        Schema::drop("contacts");
    }
}

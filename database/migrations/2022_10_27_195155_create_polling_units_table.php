<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollingUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polling_units', function (Blueprint $table) {
            $table->integer('uniqueid', true);
             $table->integer('polling_unit_id')->nullable();
            $table->integer('ward_id');
            $table->integer('lga_id');
            $table->integer('uniquewardid')->nullable();
            $table->string('polling_unit_number', 50)->nullable();
            $table->string('polling_unit_name', 50)->nullable();
            $table->text('polling_unit_description')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('entered_by_user', 50)->nullable();
            $table->dateTime('date_entered')->nullable();
            $table->string('user_ip_address', 50)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('polling_unit');
    }
}

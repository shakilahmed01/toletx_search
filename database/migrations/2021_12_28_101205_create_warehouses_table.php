<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('post_type');
            $table->string('address');
            $table->string('type');
            $table->string('floor_level');
            $table->string('floor_size');
            $table->string('road_width');
            $table->string('utilities')->nullable();
            $table->string('building_condition');
            $table->string('fire_safety')->nullable();
            $table->string('lift')->nullable();
            $table->string('parking')->nullable();
            $table->string('interior_condition')->nullable();
            $table->string('drainage_system')->nullable();
            $table->string('price');
            $table->string('photo');
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warehouses');
    }
}

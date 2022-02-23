<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('post_type');
            $table->string('hotel_name');
            $table->string('location');
            $table->string('wifi')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('cctv')->nullable();
            $table->string('lift')->nullable();
            $table->string('furnished')->nullable();
            $table->string('security')->nullable();
            $table->string('parking')->nullable();
            $table->string('price');
            $table->string('guest_count');
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
        Schema::dropIfExists('hotels');
    }
}

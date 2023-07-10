<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('unit', function (Blueprint $table) {
            $table->id('uid');
            $table->string('car_year');
            $table->string('car_make');
            $table->string('car_model');
            $table->string('car_variant');
            $table->string('image');
            $table->string('description');
            $table->string('price');
            $table->string('engine');
            $table->string('transmission');
            $table->string('fuel');
            $table->string('odometer');
            $table->string('interior_color');
            $table->string('exterior_color');
            $table->string('drive_train');
            $table->string('body_type');
            $table->string('no_of_owners');
            $table->string('unit_type');
            $table->string('display_image_1');
            $table->string('display_image_2');
            $table->string('display_image_3');
            $table->string('display_image_4');
            $table->string('display_image_5');
            $table->string('display_image_6');
            $table->string('display_image_7');
            $table->string('display_image_8');
            $table->string('display_image_9');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unit');
    }
};

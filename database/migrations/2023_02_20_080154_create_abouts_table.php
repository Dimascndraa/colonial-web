<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('alias')->nullable();
            $table->text('short_descript')->nullable();
            $table->text('motto')->nullable();
            $table->string('logo_primary')->nullable();
            $table->string('logo_secondary')->nullable();
            $table->string('header_img')->nullable();
            $table->string('about_img')->nullable();
            $table->string('icon')->nullable();
            $table->text('address')->nullable();
            $table->text('google_maps')->nullable();
            $table->string('email')->nullable();
            $table->string('telp')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}

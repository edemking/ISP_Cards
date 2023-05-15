<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->integer('user_id');
            $table->string('position');
            $table->string('email');
            $table->text('address');
            $table->string('location');
            $table->string('pnumber');
            $table->string('pnumber2');
            $table->string('pnumber3');
            $table->string('cname');
            $table->string('photo');
            $table->string('whatsapp');
            $table->string('website');
            $table->string('company_logo');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('products');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('youtube');
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
        Schema::dropIfExists('details');
    }
}

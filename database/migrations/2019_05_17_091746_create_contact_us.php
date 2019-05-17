<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name_1', 200)->nullable();
            $table->string('name_2', 200)->nullable();
            $table->string('name_3', 200)->nullable();
            $table->string('name_4', 200)->nullable();

            $table->string('number_1', 200)->nullable();
            $table->string('number_2', 200)->nullable();
            $table->string('number_3', 200)->nullable();
            $table->string('number_4', 200)->nullable();

            $table->string('address', 200)->nullable();
            $table->string('email',200)->nullable();
            $table->string('googlemap', 400)->nullable();
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
        Schema::dropIfExists('contact_us');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBaptismData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baptism_details', function (Blueprint $table) {
            $table->increments('id');

            $table->char('gender', 10);
            $table->char('adopted', 10);
            $table->string('birth_date',50);
            $table->string('baptism_date',50);
            $table->string('birthplace', 80);

            $table->string('newborn_firstname', 25);
            $table->string('newborn_middlename', 25);
            $table->string('newborn_surname', 25);

            $table->string('father_first_name', 25);
            $table->string('father_middle_name', 25);
            $table->string('father_last_name', 25);

            $table->string('mother_first_name', 25);
            $table->string('mother_middle_name', 25);
            $table->string('mother_last_name', 25);

            $table->string('guardian_resident_adrs', 150);
            $table->string('contact_number', 15);

            $table->string('gmother_first_name', 25);
            $table->string('gmother_middle_name', 25);
            $table->string('gmother_last_name', 25);
            $table->string('gmother_adrs', 150);
            $table->string('gmother_contact_no', 15);

            $table->string('gfather_first_name', 25);
            $table->string('gfather_middle_name', 25);
            $table->string('gfather_last_name', 25);
            $table->string('gfather_adrs', 150);
            $table->string('gfather_contact_no', 15);

            $table->string('pastor',80);
            $table->string('baptism_church', 150);

            $table->string('remark', 200)->nullable();

            $table->integer('is_updated')->nullable();

            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baptism_details');
    }
}

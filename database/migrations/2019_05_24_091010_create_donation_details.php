<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('church_building_fund', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('donor_name',60)->nullable();
            $table->string('pannumber',15)->nullable();
            $table->string('donation_amount',10)->nullable();
            $table->string('donor_address',150)->nullable();
            $table->string('donation_date',15)->nullable();
            $table->string('bank_name',50)->nullable();
            $table->string('bank_branch',25)->nullable();
            $table->string('payment_mode',20);


            $table->string('bn_account_no',25)->nullable();
            $table->string('cheque_number',25)->nullable();
            $table->string('cheque_amount',25)->nullable();
            $table->string('cq_issue_date',20)->nullable();
            $table->string('receivername',60)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('church_building_fund');
    }
}

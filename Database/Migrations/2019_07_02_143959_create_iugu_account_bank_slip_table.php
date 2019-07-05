<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIuguAccountBankSlipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iugu_account_bank_slip', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('account_id')->unsigned();
            $table->foreign('account_id')->references('id')->on('iugu_accounts');
            $table->boolean('active')->default(true);
            $table->integer('extra_due')->nullable();
            $table->integer('reprint_extra_due')->nullable();
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
        Schema::dropIfExists('iugu_account_bank_slip');
    }
}

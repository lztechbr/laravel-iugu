<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIuguAccountCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iugu_account_commissions', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('account_id')->unsigned();
            $table->foreign('account_id')->references('id')->on('iugu_accounts');
            $table->integer('cents')->nullable();
            $table->float('percent')->nullable();
            $table->integer('credit_card_cents')->nullable();
            $table->float('credit_card_percent')->nullable();
            $table->integer('bank_slip_cents')->nullable();
            $table->float('bank_slip_percent')->nullable();
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
        Schema::dropIfExists('iugu_account_commissions');
    }
}

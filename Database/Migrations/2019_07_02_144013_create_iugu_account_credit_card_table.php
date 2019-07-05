<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIuguAccountCreditCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iugu_account_credit_card', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('account_id')->unsigned();
            $table->foreign('account_id')->references('id')->on('iugu_accounts');
            $table->boolean('active')->default(false);
            $table->string('soft_descriptor')->nullable();
            $table->boolean('installments')->default(false);
            $table->integer('max_installments')->default(1);
            $table->integer('max_installments_without_interest')->default(1);
            $table->boolean('two_step_transaction')->default(false);
            $table->boolean('installments_pass_interest')->default(false);
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
        Schema::dropIfExists('iugu_account_credit_card');
    }
}

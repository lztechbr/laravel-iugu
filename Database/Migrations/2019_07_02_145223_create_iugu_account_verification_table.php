<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIuguAccountVerificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iugu_account_verification', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('account_id')->unsigned();
            $table->foreign('account_id')->references('id')->on('iugu_accounts');
            $table->string('price_range')->nullable();
            $table->boolean('physical_products')->default(false);
            $table->string('business_type')->nullable();
            $table->string('person_type')->nullable()->comment('Pessoa Física ou Pessoa Jurídica');
            $table->boolean('automatic_transfer')->default(false);
            $table->string('cnpj')->nullable();
            $table->string('cpf')->nullable();
            $table->string('company_name')->nullable();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('cep')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('telephone')->nullable();
            $table->string('resp_name')->nullable();
            $table->string('resp_cpf')->nullable();
            $table->string('bank')->nullable()->comment("'Itaú', 'Bradesco', 'Caixa Econômica', 'Banco do Brasil', 'Santander', 'Banrisul', 'Sicredi', 'Sicoob', 'Inter', 'BRB'");
            $table->string('bank_ag')->nullable();
            $table->string('account_type')->nullable();
            $table->string('bank_cc')->nullable();
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
        Schema::dropIfExists('iugu_account_verification');
    }
}

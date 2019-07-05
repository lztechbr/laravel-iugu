<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIuguAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iugu_accounts', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('iugu_id');
            $table->boolean('auto_withdraw')->default(false);
            $table->boolean('fines')->default(true);
            $table->boolean('per_day_interest')->default(true);
            $table->integer('late_payment_fine')->nullable();
            $table->boolean('auto_advance')->default(false);
            $table->string('auto_advance_type')->nullable();
            $table->integer('auto_advance_option')->nullable();
            $table->boolean('payment_email_notification')->default(false);
            $table->string('payment_email_notification_receiver')->nullable();
            $table->boolean('early_payment_discount')->default(false);
            $table->integer('subscriptions_billing_days')->nullable();
            $table->integer('subscriptions_trial_period')->nullable();
            $table->string('default_return_url')->nullable();
            $table->text('owner_emails_to_notify')->nullable();

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
        Schema::dropIfExists('iugu_accounts');
    }
}

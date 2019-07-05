<?php

namespace Modules\IuguMarketplace\Entities;

use Illuminate\Database\Eloquent\Model;

class IuguAccount extends Model
{
    protected $fillable = [
        'name',
        'iugu_id',
        'auto_withdraw',
        'fines',
        'per_day_interest',
        'late_payment_fine',
        'auto_advance',
        'auto_advance_type',
        'auto_advance_option',
        'payment_email_notification',
        'payment_email_notification_receiver',
        'early_payment_discount',
        'subscriptions_billing_days',
        'subscriptions_trial_period',
        'default_return_url',
        'owner_emails_to_notify',
    ];
}

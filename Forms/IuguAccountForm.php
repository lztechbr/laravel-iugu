<?php

namespace Modules\IuguMarketplace\Forms;

use Kris\LaravelFormBuilder\Form;

class IuguAccountForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}

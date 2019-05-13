<?php

namespace LaravelEnso\MenuManager\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\MenuManager\app\Forms\Builders\MenuForm;

class Create extends Controller
{
    public function __invoke(MenuForm $form)
    {
        return ['form' => $form->create()];
    }
}
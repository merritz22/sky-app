<?php

namespace App\Actions;

use LaravelViews\Actions\Action;
use LaravelViews\Views\View;

class ClientAction extends Action
{
    /**
     * Any title you want to be displayed
     * @var String
     * */
    public $title = "Editer";

    /**
     * This should be a valid Feather icon string
     * @var String
     */
    public $icon = "edit-3";
}

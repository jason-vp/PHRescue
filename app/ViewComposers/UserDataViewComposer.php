<?php

namespace App\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class UserDataViewComposer {

    public function compose(View $view) {

        $view->with('user', Auth::user());
    }
}
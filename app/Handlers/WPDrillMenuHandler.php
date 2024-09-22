<?php

namespace App\Handlers;

use WPDrill\Facades\Config;
use WPDrill\Contracts\InvokableContract;
use WPDrill\Facades\DB;
use WPDrill\Facades\View;

class WPDrillMenuHandler implements InvokableContract {

	public function __invoke()
    {
		 View::output('wpdrill', [
            'title' => 'Welcome to WPDrill',
            'content' => 'A WordPress Plugin development framework for humans',
        ]);
	}
}

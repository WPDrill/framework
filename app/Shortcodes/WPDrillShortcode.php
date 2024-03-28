<?php

namespace App\Shortcodes;

use WPDrill\Facades\View;
use WPDrill\Contracts\ShortcodeContract;

class WPDrillShortcode implements ShortcodeContract
{

	public function render( array $attrs, string $content = null ): string
    {
		  $attrs = shortcode_atts(
            [
                'title' => 'Default Title',
            ],
            $attrs
        );

        return View::render('shortcode/wpdrill', [
            'title' => $attrs['title'],
            'content' => $content,
        ]);
	}
}

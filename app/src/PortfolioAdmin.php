<?php

namespace Website\Gallery;

use SilverStripe\Admin\ModelAdmin;

class PortfolioAdmin extends ModelAdmin
{
    private static $menu_title = 'Portfolio';

    private static $url_segment = 'portfolio';

    private static $managed_models = [
        Portfolio::class,
    ];
}
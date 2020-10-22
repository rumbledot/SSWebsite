<?php

namespace Website\Gallery;

use SilverStripe\Admin\ModelAdmin;

class GalleryAdmin extends ModelAdmin
{
    private static $menu_title = 'Categories';

    private static $url_segment = 'categories';

    private static $managed_models = [
        Category::class,
    ];
}
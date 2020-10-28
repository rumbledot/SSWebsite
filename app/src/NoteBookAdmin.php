<?php

namespace Website\Note;

use SilverStripe\Admin\ModelAdmin;

class NoteBookAdmin extends ModelAdmin
{
    private static $menu_title = 'Note books';

    private static $url_segment = 'NoteBooks';

    private static $managed_models = [
        NoteBook::class,
    ];
}
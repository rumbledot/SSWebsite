<?php

namespace Website\Note;

use SilverStripe\Admin\ModelAdmin;

class NoteAdmin extends ModelAdmin
{
    private static $menu_title = 'a line of note ';

    private static $url_segment = 'note';

    private static $managed_models = [
        Note::class,
    ];
}
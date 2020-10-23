<?php

namespace Website\Arcade;

use Page;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

class ArcadePage extends Page
{
    private static $has_many = [
        'Games' => Games::class,
    ];

    private static $owns = [
        'Games'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Games', GridField::create(
            'Games',
            'Arcade\'s Games',
            $this->Games(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }
}
<?php

namespace Website\PegBoard;

use Page;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

class BoardPage extends Page
{
    private static $has_many = [
        'Pins' => Pin::class,
    ];

    private static $owns = [
        'Pins'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Pins', GridField::create(
            'Pins',
            'Board\'s pins',
            $this->Pins(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }
}
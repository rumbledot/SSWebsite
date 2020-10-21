<?php

namespace Website\PegBoard;

use Page;
use SilverStripe\Forms\DateField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;

class PegBoard extends Page
{
    private static $allowed_children = [
        PegBoardPin::class
    ];

    private static $db = [
        'CreatedAt' => 'Date',
        'Description' => 'Text',
        'Title' => 'Varchar',
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', DateField::create('CreatedAt','Created at'),'Content');
        $fields->addFieldToTab('Root.Main', TextField::create('Title','Board\'s Title'),'Content');

        return $fields;
    }
}
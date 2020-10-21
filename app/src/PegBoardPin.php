<?php

namespace Website\PegBoard;

use Page;
use SilverStripe\Forms\DateField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;

class PegBoardPin extends Page
{
    private static $can_be_root = false;
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
        $fields->addFieldToTab('Root.Main', TextareaField::create('Description')
            ->setDescription('Short description of this board content.')
            ->setMaxLength(1000)
            ->setRows(6),
            'Content');

        return $fields;
    }
}
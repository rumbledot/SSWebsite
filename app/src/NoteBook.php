<?php

namespace Website\Note;

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Versioned\Versioned;
use SilverStripe\Forms\TabSet;

class NoteBook extends DataObject
{
    private static $table_name = 'NoteBooks';
    private static $versioned_gridfield_extensions = true;

    private static $db = [
        'Title' => 'Varchar(100)',
        'Description' => 'Varchar(255)',
    ];

    private static $has_one = [
        'NoteBookPage' => NoteBookPage::class,
    ];

    private static $has_many = [
        'Notes' => Note::class,
    ];

    private static $owns = [
        'Notes'
    ];

    private static $extensions = [
        Versioned::class,
    ];

    public function getCMSFields()
    {
        $fields = FieldList::create(TabSet::create('Root'));
        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Title'),
            TextField::create('Description'),
        ]);

        return $fields;
    }

    private static $summary_fields = [
        'Title' => 'Note book\'s title',
        'Description' => 'Note book\'s short description',
    ];

    public function Link()
    {
        return $this->NoteBookPage()->Link('NoteBook/view/'.$this->ID);
    }
}
<?php

namespace Website\Gallery;

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Versioned\Versioned;
use SilverStripe\Forms\TabSet;

class Category extends DataObject
{
    private static $table_name = 'Categories';
    private static $versioned_gridfield_extensions = true;

    private static $db = [
        'Name' => 'Varchar(20)',
        'Description' => 'Varchar(100)',
    ];

    private static $has_one = [
        'GalleryPage' => GalleryPage::class,
    ];

    private static $has_many = [
        'Portfolios' => Portfolio::class,
    ];

    private static $owns = [
        'Portfolios'
    ];

    private static $extensions = [
        Versioned::class,
    ];

    public function getCMSFields()
    {
        $fields = FieldList::create(TabSet::create('Root'));
        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Name'),
            TextField::create('Description'),
            DropdownField::create('Portfolios','Portfolios')
                ->setSource(Portfolio::get()->map('ID','Title')),
        ]);

        return $fields;
    }

    private static $summary_fields = [
        'Name' => 'Category name',
        'Description' => 'Category short description',
    ];

    public function Link()
    {
        return $this->GalleryPage()->Link('gallery/view/'.$this->ID);
    }
}
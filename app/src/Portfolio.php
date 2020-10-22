<?php

namespace Website\Gallery;

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Versioned\Versioned;
use SilverStripe\Forms\TabSet;

class Portfolio extends DataObject
{
    private static $table_name = 'Portfolios';
    private static $versioned_gridfield_extensions = true;

    private static $db = [
        'Title' => 'Varchar(20)',
        'Description' => 'Varchar(100)',
    ];

    private static $has_one = [
        'PortfolioPic' => Image::class,
        'Category' => Category::class,
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
            DropdownField::create('CategoryID','Category')
                ->setSource(Category::get()->map('ID','Name')),
            $uploader = UploadField::create('PortfolioPic'),
        ]);

        $uploader->setFolderName('portfolio-photos');
        $uploader->getValidator()->setAllowedExtensions(['png','gif','jpeg','jpg']);

        return $fields;
    }

    private static $summary_fields = [
        'Title' => 'Title',
        'Description' => 'Description',
    ];

    public function Link()
    {
        return $this->GalleryPage()->Link('gallery/view/'.$this->ID);
    }
}
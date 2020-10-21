<?php

namespace Website\PegBoard;

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Versioned\Versioned;

class Pin extends DataObject
{
    private static $table_name = 'Pins';
    private static $versioned_gridfield_extensions = true;

    private static $db = [
        'Title' => 'Varchar',
        'Description' => 'Text',
        'Colour' => 'Varchar(20)',
    ];

    private static $has_one = [
        'Pic' => Image::class,
        'BoardPage' => BoardPage::class,
    ];

    private static $extensions = [
        Versioned::class,
    ];

    public function getCMSFields()
    {
        $fields = FieldList::create(
            TextField::create('Title'),
            TextareaField::create('Description'),
            DropdownField::create( 'Colour', 'Colour',
            array(
                'white' => 'White',
                'green' => 'Green',
                'yellow' => 'Yellow',
                'pink' => 'Pink',
                'blue' => 'Blue',
            )),
            $uploader = UploadField::create('Pic')
        );

        $uploader->setFolderName('pins-photos');
        $uploader->getValidator()->setAllowedExtensions(['png','gif','jpeg','jpg']);

        return $fields;
    }

    private static $summary_fields = [
        'GridThumbnail' => '',
        'Title' => 'Title',
        'Description' => 'Description',
        'Colour' => 'Stiky\'s color'
    ];

    public function getGridThumbnail()
    {
        if($this->Pic()->exists()) {
            return $this->Pic()->ScaleWidth(100);
        }

        return "(no image)";
    }

    public function Link()
    {
        return $this->BoardPage()->Link('show/'.$this->ID);
    }
}
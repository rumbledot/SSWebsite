<?php

namespace Website\Arcade;

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Versioned\Versioned;

class Games extends DataObject
{
    private static $table_name = 'Games';
    private static $versioned_gridfield_extensions = true;

    private static $db = [
        'Title' => 'Varchar(20)',
        'Description' => 'Varchar(100)',
        'Location' => 'Text',
    ];

    private static $has_one = [
        'Thumbnail' => Image::class,
        'ArcadePage' => ArcadePage::class,
    ];

    private static $extensions = [
        Versioned::class,
    ];

    public function getCMSFields()
    {
        $fields = FieldList::create(
            TextField::create('Title'),
            TextField::create('Description'),
            TextField::create('Location'),
            $uploader = UploadField::create('Thumbnail')
        );
        $uploader->setFolderName('games-photos');
        $uploader->getValidator()->setAllowedExtensions(['png','gif','jpeg','jpg']);

        return $fields;
    }

    private static $summary_fields = [
        'GridThumbnail' => '',
        'Title' => 'Title',
        'Description' => 'Description',
        'Location' => 'Location',
    ];

    public function getGridThumbnail()
    {
        if($this->Thumbnail()->exists()) {
            return $this->Thumbnail()->ScaleWidth(20);
        }

        return "(no image)";
    }
}
<?php

namespace Website\Note;

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Versioned\Versioned;

class Note extends DataObject
{
    private static $table_name = 'Notes';
    private static $versioned_gridfield_extensions = true;

    private static $db = [
        'NoteLine' => 'Text',
    ];

    private static $has_one = [
        'Pic' => Image::class,
        'NoteBook' => NoteBook::class,
    ];

    private static $extensions = [
        Versioned::class,
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab('Root.Main', [
            DropdownField::create('NoteBookID','NoteBook')
                ->setSource(NoteBook::get()->map('ID','Title')),
            $uploader = UploadField::create('Pic'),
        ]);

        $uploader->setFolderName('note-photos');
        $uploader->getValidator()->setAllowedExtensions(['png','gif','jpeg','jpg']);

        return $fields;
    }

    private static $summary_fields = [
        'NoteLine' => 'Note',
        'NoteBookTitle' => 'in Book',
    ];

    public function getNoteBookTitle()
    {
        $notebook = NoteBook::get()->byID($this->NoteBookID);

        if ($notebook)
        {
            return $notebook->Title;
        } else
        {
            return '(not written in a note book)';
        }
    }

    // public function Link()
    // {
    //     return $this->GalleryPage()->Link('gallery/view/'.$this->ID);
    // }
}
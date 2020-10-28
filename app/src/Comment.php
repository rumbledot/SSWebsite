<?php

namespace Website\Comment;

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Versioned\Versioned;

class Comment extends DataObject
{
    private static $table_name = 'Comments';
    private static $versioned_gridfield_extensions = true;

    private static $db = [
        'Name' => 'Varchar(100)',
        'Comment' => 'Varchar(255)',
        'isChecked' => 'Boolean',
    ];

    private static $has_one = [
        'CommentPage' => CommentPage::class,
    ];

    private static $extensions = [
        Versioned::class,
    ];

    public function getCMSFields()
    {
        $fields = FieldList::create(
            TextField::create('Name'),
            TextField::create('Comment'),
            CheckboxField::create('isChecked'),
        );

        return $fields;
    }

    private static $summary_fields = [
        'Name' => 'Name',
        'Comment' => 'Comment',
        'isChecked'=> 'Checked',
    ];
}
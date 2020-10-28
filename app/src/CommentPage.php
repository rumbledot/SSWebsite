<?php

namespace Website\Comment;

use Page;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\RequiredFields;

class CommentPage extends Page
{
    private static $has_many = [
        'Comments' => Comment::class,
    ];

    private static $owns = [
        'Comments'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Comments', GridField::create(
            'Comments',
            'Comments Board',
            $this->Comments(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }
}
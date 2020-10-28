<?php

namespace Website\Comment;

use SilverStripe\Forms\LabelField;
use PageController;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextAreaField;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\RequiredFields;

class CommentPageController extends PageController
{
    private static $allowed_actions = [
        'CheckedComment', 'CommentForm'
    ];

    public function CommentForm()
    {
        $myForm = Form::create(
            $this,
            __FUNCTION__,
            FieldList::create(
                LabelField::create('Enter your name'),
                TextField::create('Name','')
                    ->setMaxLength(100),
                LabelField::create('comments?'),
                TextAreaField::create('Comment','')
                    ->setMaxLength(255),
            ),
            FieldList::create(
                FormAction::create('sendCommentForm','Post Comment')
                    ->setUseButtonTag(true)
                    ->addExtraClass('btn btn-dark btn-md')
            ),
            RequiredFields::create('Name', 'Comment')
        );

        foreach($myForm->Fields() as $field) {
            $field->addExtraClass('')
                ->setAttribute('placeholder', $field->getName().'*');
        }

        $data = $this->getRequest()->getSession()->get("FormData.{$myForm->getName()}.data");

        return $data ? $myForm->loadDataFrom($data) : $myForm;
    }

    public function sendCommentForm($data, $form)
    {
        $session = $this->getRequest()->getSession();
        $session->set("FormData.{$form->getName()}.data", $data);

        $name = $data['Name'];
        $message = $data['Comment'];
        if(strlen($message) < 2) {
            $form->addErrorMessage('YourComments','Your comment is too short','bad');
            return $this->redirectBack();
        }

        $comment = Comment::create();
        $comment->Name = $name;
        $comment->Comment = $message;
        $comment->isChecked = false;
        $comment->CommentPageID = $this->ID;
        $comment->write();

        $session->clear("FormData.{$form->getName()}.data");
        $form->sessionMessage('Thanks for your comment! I will check it later..','good');

        return $this->redirect('/comments');
    }

    public function CheckedComment()
    {
        $comments =  Comment::get()
            ->filter([
                'isChecked' => true,
            ])
            -> sort('Created', 'DESC');

        return ($comments);
    }
}
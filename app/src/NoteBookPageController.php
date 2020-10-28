<?php

namespace Website\Note;

use PageController;
use SilverStripe\Control\HTTPRequest;

class NoteBookPageController extends PageController
{
    public function AllBooks()
    {
        return NoteBook::get();
    }

    private static $allowed_actions = [
        'view'
    ];

    public function view(HTTPRequest $request)
    {
        $req_id = $request->param('ID');
        $book = NoteBook::get()->byID($req_id);

        if(!$book) {
            return $this->httpError(404,'That region could not be found');
        } else {
            $porto = Note::get()->filter([
                'NoteBookID' => $req_id,
            ]);
        }

        return [
            'NoteBook' => $book,
        ];
    }
}
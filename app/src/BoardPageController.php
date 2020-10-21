<?php

namespace Website\PegBoard;

use PageController;
use SilverStripe\Control\HTTPRequest;

class BoardPageController extends PageController
{
    private static $allowed_actions = [
        'show'
    ];

    public function show(HTTPRequest $request)
    {
        $pin = Pin::get()->byID($request->param('ID'));

        if(!$pin) {
            return $this->httpError(404,'That region could not be found');
        }

        return [
            'Pin' => $pin
        ];
    }
}
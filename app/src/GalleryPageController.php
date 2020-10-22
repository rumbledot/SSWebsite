<?php

namespace Website\Gallery;

use PageController;
use SilverStripe\Control\HTTPRequest;

class GalleryPageController extends PageController
{
    public function AllCategories()
    {
        return Category::get();
    }

    private static $allowed_actions = [
        'view'
    ];

    public function view(HTTPRequest $request)
    {
        $req_id = $request->param('ID');
        $cat = Category::get()->byID($req_id);

        if(!$cat) {
            return $this->httpError(404,'That region could not be found');
        } else {
            $porto = Portfolio::get()->filter([
                'CategoryID' => $req_id,
            ]);
        }

        return [
            'Category' => $cat,
        ];
    }
}
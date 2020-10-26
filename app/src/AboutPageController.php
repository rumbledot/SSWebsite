<?php

namespace Website;

use PageController;
use SilverStripe\View\SSViewer;

class AboutPageController extends PageController
{
    protected function init()
    {
        parent::init();
        SSViewer::setRewriteHashLinksDefault(false);
    }
}
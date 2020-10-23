<?php

namespace Website;

use Page;

class HomePage extends Page
{
    public function rndColour() {
        $colours = [
            'white', 'green', 'blue', 'pink', 'yellow'
        ];

        return $colours[rand(0, 4)];
    }
}
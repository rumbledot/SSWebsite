<?php

namespace Website\PegBoard;

use Page;

class PegBoard extends Page
{
    private static $allowed_children = [
        PegBoardPin::class
    ];
}
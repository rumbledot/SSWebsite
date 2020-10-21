<?php

namespace Website\PegBoard;

use PageController;

class PegBoardController extends PageController
{
    public function GetAllPins()
    {
        return PegBoardPin::get()
            ->sort('CreatedAt', 'DESC');
    }
}
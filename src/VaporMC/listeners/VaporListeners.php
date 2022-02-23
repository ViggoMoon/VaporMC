<?php

namespace VaporMC\listeners;

use VaporMC\Vapor;

class VaporListeners
{

    public static function init()
    {
        Vapor::getInstance()->getServer()->getPluginManager()->registerEvents(new PlayerListeners(), Vapor::getInstance());
    }

}
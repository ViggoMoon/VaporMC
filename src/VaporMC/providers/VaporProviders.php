<?php

namespace VaporMC\providers;

use VaporMC\Vapor;

class VaporProviders
{

    public static function init()
    {
        @mkdir(Vapor::getInstance()->getDataFolder()."factions");
        @mkdir(Vapor::getInstance()->getDataFolder()."sessions");
    }

}
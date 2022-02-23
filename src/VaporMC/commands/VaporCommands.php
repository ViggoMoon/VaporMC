<?php

namespace VaporMC\commands;

use VaporMC\Vapor;

class VaporCommands
{

    public static function init()
    {
        Vapor::getInstance()->getServer()->getCommandMap()->register("VaporMC", new VaporCommand("vapor"));
    }

}
<?php

namespace VaporMC\cooldowns;

use pocketmine\utils\Config;
use VaporMC\sessions\VaporSessions;

class VaporCooldowns
{

    public static function getConfigPlayer(string $playerName): Config
    {
        return VaporSessions::getSession($playerName)->getConfig();
    }

    public static function addCooldown(string $playerName, string $time, string $type)
    {
        $cooldown[$type] = ["time" => $time];
        self::getConfigPlayer($playerName)->set("cooldowns", $cooldown);
        self::getConfigPlayer($playerName)->save();
    }

}
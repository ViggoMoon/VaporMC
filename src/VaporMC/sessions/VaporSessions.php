<?php

namespace VaporMC\sessions;

use VaporMC\player\VaporPlayer;
use VaporMC\Vapor;

class VaporSessions
{

    public static array $sessions = [];

    public static function create(VaporPlayer $player)
    {
        self::$sessions[$player->getName()] = new Session($player->getName());
    }

    public static function isSession(string $session): bool
    {
        if(isset(self::$sessions[$session])){
            return true;
        }
        return false;
    }

    public static function getSession(string $sessionName): Session
    {
        return self::$sessions[$sessionName];
    }

    public static function getAllSessions(): array
    {
        $sessions = [];
        $sessionsFiles = glob(Vapor::getInstance()->getDataFolder()."sessions/*.json");
        foreach($sessionsFiles as $sessionFile){
            $sessionName = explode(".", $sessionFile);
            self::$sessions[] = $sessionName[0];
        }
        return $sessions;
    }

}
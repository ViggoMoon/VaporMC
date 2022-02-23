<?php

namespace VaporMC\sessions;

use pocketmine\utils\Config;
use VaporMC\Vapor;

class Session
{

    public Config $config;

    public function __construct(string $sessionName)
    {
        $this->config = new Config(Vapor::getInstance()->getDataFolder() . "sessions/{$sessionName}.json", Config::JSON);
        $this->getConfig()->set("balance", 250);
        $this->getConfig()->save();
    }

    public function getConfig(): Config
    {
        return $this->config;
    }

}
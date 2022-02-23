<?php

namespace VaporMC;

use pocketmine\plugin\PluginBase;
use VaporMC\commands\VaporCommands;
use VaporMC\listeners\VaporListeners;
use VaporMC\providers\VaporProviders;
use VaporMC\task\VaporTask;

class Vapor extends PluginBase
{

    public static Vapor $instance;

    public static function getInstance(): Vapor
    {
        return self::$instance;
    }

    protected function onEnable(): void
    {
        self::$instance = $this;
        VaporCommands::init();
        VaporListeners::init();
        VaporProviders::init();
        $this->getScheduler()->scheduleRepeatingTask(new VaporTask(), 20);
    }

}
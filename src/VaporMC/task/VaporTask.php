<?php

namespace VaporMC\task;

use pocketmine\scheduler\Task;
use VaporMC\Vapor;

class VaporTask extends Task
{

    public function onRun(): void
    {
        Vapor::getInstance()->getLogger()->alert("Task Running");
    }

}
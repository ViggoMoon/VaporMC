<?php

namespace VaporMC\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\lang\Translatable;
use pocketmine\utils\TextFormat;

class VaporCommand extends Command
{

    public function __construct(string $name, Translatable|string $description = "", Translatable|string|null $usageMessage = null, array $aliases = [])
    {
        parent::__construct($name, $description, $usageMessage, $aliases);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $sender->sendMessage(TextFormat::colorize("&6VaporMC-HCFCore"));
        $sender->sendMessage(TextFormat::colorize("&eCreated By: &6ViggoMoon"));
    }

}
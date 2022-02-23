<?php

namespace VaporMC\listeners;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerCreationEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\utils\TextFormat;
use VaporMC\cooldowns\VaporCooldowns;
use VaporMC\player\VaporPlayer;
use VaporMC\sessions\VaporSessions;

class PlayerListeners implements Listener
{

    public function onCreation(PlayerCreationEvent $event)
    {
        $event->setPlayerClass(VaporPlayer::class);
    }

    public function onJoin(PlayerJoinEvent $event)
    {
        $player = $event->getPlayer();
        if($player instanceof VaporPlayer){
            if(!VaporSessions::isSession($player->getName())){
                VaporSessions::create($player);
            }
            VaporCooldowns::addCooldown($player->getName(), 30, "prueba");
        }
        $event->setJoinMessage(TextFormat::colorize("&a[+] {$player->getName()}"));
    }

    public function onQuit(PlayerQuitEvent $event)
    {
        $player = $event->getPlayer();
        $event->setQuitMessage(TextFormat::colorize("&c[-] {$player->getName()}"));
    }

}
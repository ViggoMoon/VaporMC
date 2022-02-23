<?php

namespace VaporMC\player;

use pocketmine\player\Player;

class VaporPlayer extends Player
{

    public ?string $faction = "*";

    public function setFaction(?string $faction): void
    {
        $this->faction = $faction;
    }

    public function getFaction(): ?string
    {
        return $this->faction;
    }

}
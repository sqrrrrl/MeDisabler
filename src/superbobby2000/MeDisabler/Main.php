<?php

declare(strict_types=1);

namespace superbobby2000\MeDisabler;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    public function onEnable() {
        $commandMap = $this->getServer()->getCommandMap();
        $cmd = $commandMap->getCommand("me");
        $commandMap->unregister($cmd);
    }
}

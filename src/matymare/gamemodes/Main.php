<?php

    /*
     * Plugin created by matymare
     * GAMEMODES - It is a PocketMine-MP plugin which makes it easy for you to change the gamemode!
     * The plugin must not be modified without asking the plugin owner
     * You can write to me on Discord: Roospy#1666
     */
     
namespace matymare\gamemodes;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		    if($command->getName() == "gm") {
			        $sender->sendMessage("§8[§eGAMEMODES§8] §cTry commands: /gms, /gmc, /gmsp, /gma");
		
		    return true;
	}
	        if($command->getName() == "gms") {
			        $sender->setGamemode(0);
				    $sender->sendMessage("§8[§eGAMEMODES§8] §aYour game mode has been set to survival!");
		
		    return true;
	}
	        if($command->getName() == "gmc") {
			        $sender->setGamemode(1);
				    $sender->sendMessage("§8[§eGAMEMODES§8] §aYour game mode has been set to creative!");
		
		    return true;
	}
	        if($command->getName() == "gmsp") {
			        $sender->setGamemode(3);
				    $sender->sendMessage("§8[§eGAMEMODES§8] §aYour game mode has been set to spectate!");
		
		    return true;
	}
	        if($command->getName() == "gma") {
			        $sender->setGamemode(2);
				    $sender->sendMessage("§8[§eGAMEMODES§8] §aYour game mode has been set to adventure!");
		
		    return true;
	}
		}
}
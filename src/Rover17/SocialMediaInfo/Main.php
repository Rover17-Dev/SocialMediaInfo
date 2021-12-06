<?php

declare(strict_types=1);

namespace Rover17\SocialMediaInfo;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\item\Item;
use pocketmine\player\Player;
use pocketmine\event\Listener;
use pocketmine\utils\Config;



class Main extends PluginBase{
    

  public Config $config;

    
    public function onEnable() : void{
     $this->saveResource("config.yml");
            }

    public function onCommand(CommandSender $sender, Command $cmd,$label, array $args) : bool {
        switch($cmd->getName()) {
            case "info":
                if($sender instanceof Player){
                        $sender->sendMessage("§3==== §r§4Informations §r§3=====");
                        $sender->sendMessage($this->config->get("Line1"));
                        $sender->sendMessage($this->config->get["Line2"]);
                        $sender->sendMessage($this->config->get["Line3"]);
                } else {
                    $sender->sendMessage("§4Please run this command in game");
                }
        }
        return true;
        
      
    }


    

    }

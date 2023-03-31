<?php
namespace skyss0fly\FWEssents;

use skyss0fly\src\config\config;
use pocketmine\scheduler\AsyncTask;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;


class Main extends PluginBase
{
  private Config $config;
	private static self $instance;

function onLoad(): void
			
	
	{
		self::$instance = $this;
		$this->saveResource("config.yml");
		$this->config = new Config(new Config($this->getDataFolder() . "config.yml", Config::YAML));
    $this->getLogger()->info(TextFormat::LIGHT_PURPLE . "FWEssents: V0.0.0.1 Loaded successfully");
	}


	 function onEnable(): void
	 {
			 $this->getLogger()->info(TextFormat::LIGHT_PURPLE . "FWEssents: V0.0.0.1 Enabled successfully! Have a great day!");
}
		
	
}

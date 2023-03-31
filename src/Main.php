<?php
namespace skyss0fly\FWEssents;

use skyss0fly\src\config\config;
use pocketmine\scheduler\AsyncTask;
use pocketmine\Server;
use pocketmine\utils\Config;

class Main extends PluginBase
{
  private CustomConfig $config;
	private static self $instance;

function onLoad(): void
			
	
	{
		self::$instance = $this;
		$this->saveResource("config.yml");
		$this->config = new CustomConfig(new Config($this->getDataFolder() . "config.yml", Config::YAML));
    $this->getLogger()->info(TextFormat::LIGHT_PURPLE . "FWEssents: V0.0.0.1 Loaded successfully");
	}


	 function onEnable(): void
	 {
			 $this->getLogger()->info(TextFormat::LIGHT_PURPLE . "FWEssents: V0.0.0.1 Enabled successfully! Have a great day!");
}
		
	
}

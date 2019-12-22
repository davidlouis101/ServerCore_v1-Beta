<?php

namespace Aleondev;


use pocketmine\level\sound\PopSound;
use pocketmine\math\Vector3;
use pocketmine\scheduler\Task;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as f;

class FlyBooster extends Task
{

    protected $plugin;

    public function __construct(Main $plugin)
    {
        $this->plugin = $plugin;
    }

    public function onRun(int $currentTick) : void {
        $config = new Config($this->plugin->getDataFolder()."server.yml", Config::YAML);
            $this->plugin->fsek--;
            if($this->plugin->fsek === 30) {
                foreach ($this->plugin->getServer()->getOnlinePlayers() as $p) {
                         $p->sendMessage("§eCore§c §b»§l§aFlyall wird in §c30 sekunden §adeaktiviert.");
                         }
            }elseif($this->plugin->fsek === 10) {
                foreach ($this->plugin->getServer()->getOnlinePlayers() as $p) {
                         $p->sendMessage("§eCore§c §b»§l§aFlyall wird in §c10 sekunden §adeaktiviert.");
                         }
            }elseif($this->plugin->fsek === 0) {
                foreach ($this->plugin->getServer()->getOnlinePlayers() as $p) {
                         $p->sendMessage("§eCore§c §8»§l§aFlyall wurde nun deaktiviert. \n\n§r§aDu kannst nun nicht mehr Fliegen.");
                    if($p->getGamemode() == 0) {
                        $p->setFlying(FALSE);
                        $p->setAllowFlight(FALSE);
                        $config->set("Flyall", false);
                        $config->save();
                    }
                   }
                }
            }
        }

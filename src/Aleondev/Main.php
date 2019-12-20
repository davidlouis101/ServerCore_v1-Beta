<?php

 namespace Aleondev;
 
 use pocketmine\event\Listener;
 use pocketmine\plugin\PluginBase;
 use pocketmine\command\Command;
 use pocketmine\command\CommandSender;
 use pocketmine\Player;


 class Main extends PluginBase implements Listener {

    public function onEnable()
    {
        $this->getLogger()->info("[core] Aktiviert by Aleondev.");
    }

    public $fts;

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool
    {
        $fts = "[CORE]";
        $this->fts = $fts;

        if ($cmd->getName() == "tag") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("tag.core")) {
                    $sender->getLevel()->setTime(6000);
                    $sender->sendMessage("§eCore§b >> §4Du hast Tag gemacht");
                    return true;
                } else {
                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");
                    return true;
                }
            }
            return true;
        }
        if ($cmd->getName() == "core") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("core.core")) {
                    $sender->sendMessage("§6>>§eCore§6<<\n§4/tag\n§4/nacht\n§4gm0,1,2,3\n§4/food\n§4/heal\n§4/fly\n§6>>§eCore§6<<");
                } else {
                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");
                }
            }
            return true;
        }
        if ($cmd->getName() == "info") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("core.info")) {
                    $sender->sendMessage("§eCore §4Plugin §eVon §4Aleondev");
                } else {
                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");
                }
            }
            return true;
        }
        if ($cmd->getName() == "fly") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("fly.core")) {
                    $sender->setAllowFlight(true);
                    $sender->sendMessage("§eCore§b >>§4 Fly Wurde §aAktiviert!");
                } else {
                    $sender->sendMessage("Du hast keine rechte für disen command");
                    return true;
                }
            }
            return true;
        }
        if ($cmd->getName() == "nacht") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("nacht.core")) {
                    $sender->getLevel()->setTime(16000);
                    $sender->sendMessage("§eCore§b >> §4Du hast Nacht gemacht");
                    return true;
                } else {
                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");
                    return true;
                }
            }
            return true;
        }
        if ($cmd->getName() == "gm0") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("gm0.core")) {
                    $sender->setGamemode(0);
                    $sender->sendMessage("§eCore§b >> §4Du bist jetzt im gm0");
                } else {
                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");
                }
            }
            return true;
        }
        if ($cmd->getName() == "gm1") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("gm1.core")) {
                    $sender->setGamemode(1);
                    $sender->sendMessage("§eCore§b >> §4Du bist jetzt im gm1");
                } else {
                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");
                }
            }
            return true;
        }
        if ($cmd->getName() == "gm2") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("gm2.core")) {
                    $sender->setGamemode(2);
                    $sender->sendMessage("§eCore§b >> §4Du bist jetzt im gm2");
                } else {
                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");
                }
            }
            return true;
		}
        if ($cmd->getName() == "gm3") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("gm3.core")) {
                    $sender->setGamemode(3);
                    $sender->sendMessage("§eCore§b >> §4Du bist jetzt im gm3");
                } else {
                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");
                }
            }
            return true;
        }
        if ($cmd->getName() == "food") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("food.core")) {
                    $sender->setFood(20);
                    $sender->sendMessage("§eCore§b >> §4Deine Hungersleiste wurde gefüllt");
                } else {
                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");
                }
            }
            return true;
        }
        if ($cmd->getName() == "heal") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("heal.core")) {
                    $sender->setHealth(20);
                    $sender->sendMessage("§eCore§b >> §4Deine Herzen würden gefüllt");
                } else {
                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");
                }
            }
            return true;
         }
        return true;
        }
    }

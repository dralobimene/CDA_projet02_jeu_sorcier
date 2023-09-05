<?php

class Wizard implements \JsonSerializable {
    public $name;
    public $health;
    public $power;
    public $surnom;

  public function __construct(
    string $name,
    int $health,
    int $power,
    string $surnom) {
        $this->name = $name;
        $this->health = $health;
        $this->power = $power;
        $this->surnom = $surnom;
    }

    public function getName():string {
        return $this->name;
    }
    public function setName(string $name) :void {
        $this->name = $name;
    }
    public function getHealth():int {
        return $this->health;
    }
    public function setHealth(int $health) :void {
        $this->health = $health;
    }
    public function getPower():int {
        return $this->power;
    }
    public function setPower(int $power) :void {
        $this->power = $power;
    }
    public function getSurnom():string {
        return $this->surnom;
    }
    public function setSurnom(string $surnom) :void {
        $this->surnom = $surnom;
    }

    // methode obligatoire car implementation de l'interface
    // JsonSerializable
    public function jsonSerialize(): array {
        return get_object_vars($this);
     }

     //
     public function randomPercent(): int {
         return rand(0, 100) / 100;
    }

    //
    public function fight(Wizard $target) :void {
        echo "affichage de la methode fight()";
        echo "<br>";
        while ($this->health > 0 && $target->health > 0) {
            $target->health -= $this->power;
            if($target->health <= 0){
                echo $this->name.' won the fight ';
                return;
            }
            $this->health -= $target->power;
            if($this->health <= 0){
                echo $target->name.' won the fight ';
                return;
            }
        }
}



/*
class Wizard implements \JsonSerializable
{

    // attributs
    private string $name;
    private int $PV;
    private int $XP;
    private int $damages;
    private string $sexe;

    // constructeur
    public function __construct(string $name,
                                bool $sexe = null)
    {
        $this->name = $name;
        $this->PV = rand(50, 100);
        $this->XP = 0;

        if ($sexe === null) {
            $this->sexe = rand(0, 1) == 1;
        } else {
            $this->sexe = $sexe;
        }
    }

    // getters / setters
    public function getName(): string
    {
        return $this->name;
    }

    public function getPV(): int
    {
        return $this->PV;
    }

    public function setPV(int $PV): void
    {
        $this->PV = $PV;
    }

    public function getXP(): int
    {
        return $this->XP;
    }

    public function setXP(int $XP): void
    {
        $this->XP = $XP;
    }

    public function getDamages(): int
    {
        return $this->damages;
    }

    public function setDamages(int $damages): void
    {
        $this->damages = $damages;
    }

    public function getSexe(): bool 
    {
        return $this->sexe;
    }

    // methode obligatoire car implementation de l'interface
    // JsonSerializable
    public function jsonSerialize() {
        return get_object_vars($this);
     }

    // methodes persos
    public function drinkPotion(): void
    {
        $this->PV = $this->PV + 25;
    }

    public function makeBabies(): void
    {
        // Your code here
    }

    public function attack(Wizard $target): void
    {
        $target->setPV($target->getPV() - $this->damages);
    }
 */
}

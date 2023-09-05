<?php

require_once "Wizard.php";

class ApprenticeWizard extends Wizard implements \JsonSerializable
{

    // attributs
    private int $agility;

    // constructeur
    public function __construct(string $name,
                                int $agility) {
        parent::__construct($name);
        $this->agility = $agility;
    }

    // getters / setters
    public function getAgility(): int {
        return $this->agility;
    }
    
    public function setAgility(int $agility): void {
        $this->agility = $agility;
    }

    // methode obligatoire car la class 
    // implemente l'interface JsonSerializable
    public function jsonSerialize(): array {
        return get_object_vars($this);
     }

}

<?php


class Chest {

    // attributs
    private string $content;

    // constructeur
    public function __construct() {
        $random = rand(1, 3);
        if ($random === 1) {
            $this->content = "stone";
        } else if ($random === 2) {
            $this->content = "PIERRE";
        } else {
            $this->content = "$600";
        }
    }

    // getters / setters
    public function getContent(): string {
        return $this->content;
    }
}

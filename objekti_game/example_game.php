<?php


class Game {
    
    const BR = '<br/>';
    
    var $price;
    var $name;
    var $dir = 'games/';
    
    public function print_game() {
        echo "<div style='float: left; margin-right: 40px; '>";
        echo "<font size='5px'>{$this->name}</font>".self::BR;
        echo '$'.$this->price;
        echo "</div>";
    }

    public function set_game($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

}

$game = new Game;
$game->name = 'Call of Duty®: Modern Warfare';
$game->price = 14.99;
$game->print_game();

$game->set_game('Call of Duty®: Black Ops 4', 15.99);
$game->print_game();

$game->set_game('Call of Duty®: WWII', 9.99);
$game->print_game();

$game->set_game('Call of Duty®: Infinite Warfare', 11.99);
$game->print_game();
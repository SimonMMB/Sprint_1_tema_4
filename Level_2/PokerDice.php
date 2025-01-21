<?php
enum Face : string {
    case Ace = 'Ace';
    case K = 'K';
    case Q = 'Q';
    case J = 'J';
    case Seven = '7';
    case Eight = '8';
}
class PokerDice {
    private Face $face;
    private int $numberOfThrows;
    
    public function __construct() {
        $this->numberOfThrows = 0;
    }
    public function throwDice() : void {
        $faces = Face::cases();
        $randomFace = $faces[array_rand($faces)];
        $this->face = $randomFace;
        $this->numberOfThrows++;
    }
    public function shapeName() : Face {
        return $this->face;
    }
    public function getNumberOfThrows() : int {
        return $this->numberOfThrows;
    }
}
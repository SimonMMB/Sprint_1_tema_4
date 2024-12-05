<?php
declare(strict_types = 1);
//Sprint 1, topic 4: POO 1

//Exercise 1
class PokerDice {
    private array $face;
    public function __construct(array $face = []) {
        $this->face = ["As", "K", "Q", "J", "7", "8"];
    }
    public function throw() {
        
    }


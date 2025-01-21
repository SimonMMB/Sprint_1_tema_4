<?php
require_once 'PokerDice.php';
//DECLARATION OF GLOBAL ARRAY $dices
$dices = [];
//FUNCTIONS
function throwFiveDices() : string {
    global $dices;
    $message = "";
    //Initialization of 5 dices
    for ($i = 0; $i < 5; $i++) {
        $dice = new PokerDice();
        $dices[] = $dice;
    }
    //Throwing these 5 dices
    for ($i = 0; $i < 5; $i++) {
        $dices[$i]->throwDice();
    }
    //Getting the faces
    for ($i = 0; $i < 5; $i++) {
        $face = $dices[$i]->shapeName();
        $faces[] = $face;
    }
    //Showing the luck
    for ($i = 0; $i < 5; $i ++) {
        $message .= "Dice " . ($i + 1) . ": " . $faces[$i]->value . PHP_EOL;
    }
    return $message;
}
function getTotalThrows() : int {
    global $dices;
    $totalThrows = 0;
    foreach ($dices as $dice) {
        $totalThrows += $dice->getNumberOfThrows();
    }
    return $totalThrows;
}
//EXECUTION (CONSOLE INTERACTION)
echo 'Hello! how many players will participate?' . PHP_EOL;
$numberOfPlayers = fgets(STDIN);
$numberOfPlayers = trim($numberOfPlayers);
for ($i = 0; $i < $numberOfPlayers; $i++) {
    echo "Put the name of player " . ($i + 1) . ':' . PHP_EOL;
    $player = fgets(STDIN);
    $player = trim($player);
    $players[] = $player;
}
echo "Great! How many rounds do you want to play?" . PHP_EOL;
$numberOfRounds = fgets(STDIN);
$numberOfRounds = trim($numberOfRounds);
for ($i = 0; $i < $numberOfRounds; $i++) {
    echo "Let's play round number " . ($i + 1) . "! Press any key to continue";
    fgets(STDIN);
    for ($j = 0; $j < $numberOfPlayers; $j++) {
        echo $players[$j] . ", it's your turn! Press any key to throw 5 dices";
        fgets(STDIN);
        $luck = throwFiveDices();
        echo "You obtain: " . PHP_EOL 
                . $luck . PHP_EOL;
    }
}
echo "Finished game! Press any key to see the total number of throws among all the dices?";
fgets(STDIN);
$totalThrows = getTotalThrows();
echo "Total throws: " . $totalThrows . PHP_EOL;
?>
<?php

require_once(PATH_MODELS . 'cards.php');

$cards = getAllCards();

require_once(PATH_VIEWS . 'card.php');
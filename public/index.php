<?php

use App\TextMaster;
use App\TextWizard;

require __DIR__.'/../vendor/autoload.php';

$text = readline('Print some text, please: ');

//TextWizard::findUniqueWordsOfLength(3, $text);
TextMaster::findUniqueWordsOfLength(3, $text);

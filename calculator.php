<?php
$operation = $argv[2];

$result = '';
switch ($operation) {
  case '+':
    $result = $argv[1] + $argv[3];
    break;
  case '-':
    $result = $argv[1] - $argv[3];
    break;
  case 'x':
    $result = $argv[1] * $argv[3];
    break;
  case '/':
    $result = $argv[1] / $argv[3];
    break;
  case 'sqrt':
    $result = sqrt($argv[1]);
    break;
}

// Output the result
echo "$result\n";
?>
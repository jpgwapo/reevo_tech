<?php

$testCases = array(
  array(
    'input' => array('5', '+', '2'),
    'expected' => '7',
  ),
  array(
    'input' => array('9', 'sqrt'),
    'expected' => '3',
  ),
  array(
    'input' => array('10', 'x', '5'),
    'expected' => '50',
  ),
  array(
    'input' => array('20', '/', '4'),
    'expected' => '5',
  ),
  array(
    'input' => array('10', '-', '4'),
    'expected' => '6',
  ),
);

foreach ($testCases as $testCase) {
  $output = exec('php calculator.php ' . implode(' ', $testCase['input']));
    // echo "$output\n";
    assert($output == $testCase['expected']);
}

echo "Finish unit test!\n";

<?php
$file = 'counter.txt'; // Text file to store the count
if (file_exists($file)) {
    $count = file_get_contents($file); // Get the current count
} else {
    $count = 0;
}

$count++; // Increment the counter
file_put_contents($file, $count); // Update the file with the new count
echo $count; // Return the visitor count
?>

<?php
// File that stores the visitor count
$counter_file = 'counter.txt';

// Check if the file exists
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, 0); // Create the file if it doesn't exist
}

// Read the current count
$count = file_get_contents($counter_file);

// Increment the count
$count++;

// Save the new count back to the file
file_put_contents($counter_file, $count);

// Display the visitor count
echo "Visitor Count: " . $count;
?>

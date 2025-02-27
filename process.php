<?php
$a = $_GET['a'] ?? 0;
$b = $_GET['b'] ?? 0;
$c = $_GET['c'] ?? 0;
$d = $_GET['d'] ?? 0;
$e = $_GET['e'] ?? 0;

$command = escapeshellcmd("python3 data_management.py $a $b $c $d $e");
$output = shell_exec($command);
$data = json_decode($output, true);

if (isset($data['error'])) {
    echo "<h2>Error:</h2>";
    echo "<p>" . $data['error'] . "</p>";
} else {
    $original_values = $data['original_values'];
    $sorted_values = $data['sorted_values'];
    $average_msg = $data['average_msg'];
    $positive_count_msg = $data['positive_count_msg'];

    echo "<h2>Results:</h2>";
    echo "<p>Original Values: " . implode(", ", $original_values) . "</p>";
    echo "<p>Sorted Values: " . implode(", ", $sorted_values) . "</p>";
    echo "<p>$average_msg</p>";
    echo "<p>$positive_count_msg</p>";
}
?>

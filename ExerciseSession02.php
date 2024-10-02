<?php
session_start();

if (!isset($_SESSION['numbers'])) {
    $_SESSION['numbers'] = [10, 20, 30];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['modify'])) {
        $position = intval($_POST['position']);
        $new_value = intval($_POST['new_value']);
        $_SESSION['numbers'][$position] = $new_value;
    } elseif (isset($_POST['average'])) {
        $average = array_sum($_SESSION['numbers']) / count($_SESSION['numbers']);
    } elseif (isset($_POST['reset'])) {
        $_SESSION['numbers'] = [10, 20, 30];
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modify array saved in session</title>
</head>
<body>
    <h2>Modify array saved in session</h2>
    
    <form method="post" action="">
        <label for="position">Position to modify:</label>
        <select name="position" id="position">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
        </select><br><br>

        <label for="new_value">New value:</label>
        <input type="number" name="new_value" id="new_value"><br><br>

        <button type="submit" name="modify">Modify</button>
        <button type="submit" name="average">Average</button>
        <button type="submit" name="reset">Reset</button>
    </form>

    <h3>Current array: <?php echo implode(", ", $_SESSION['numbers']); ?></h3>

    <?php
    if (isset($average)) {
        echo "<h3>Average: " . number_format($average, 2) . "</h3>";
    }
    ?>
</body>
</html>

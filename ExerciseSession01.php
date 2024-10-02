<?php
session_start();

if (!isset($_SESSION['worker'])) {
    $_SESSION['worker'] = '';
}
if (!isset($_SESSION['milk'])) {
    $_SESSION['milk'] = 0;
}
if (!isset($_SESSION['soft_drink'])) {
    $_SESSION['soft_drink'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $worker_name = $_POST['worker_name'];
    $product = $_POST['product'];
    $quantity = intval($_POST['quantity']);

    $_SESSION['worker'] = $worker_name;

    if (isset($_POST['add'])) {
        if ($product == 'milk') {
            $_SESSION['milk'] += $quantity;
        } elseif ($product == 'soft_drink') {
            $_SESSION['soft_drink'] += $quantity;
        }
    } elseif (isset($_POST['remove'])) {
        if ($product == 'milk') {
            if ($_SESSION['milk'] >= $quantity) {
                $_SESSION['milk'] -= $quantity;
            } else {
                echo "Error: No se pueden quitar más unidades de leche de las que hay.<br>";
            }
        } elseif ($product == 'soft_drink') {
            if ($_SESSION['soft_drink'] >= $quantity) {
                $_SESSION['soft_drink'] -= $quantity;
            } else {
                echo "Error: No se pueden quitar más unidades de refresco de las que hay.<br>";
            }
        }
    } elseif (isset($_POST['reset'])) {
        $_SESSION['milk'] = 0;
        $_SESSION['soft_drink'] = 0;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Supermarket Management</title>
</head>
<body>
    <h2>Supermarket management</h2>
    
    <form method="post" action="">
        <label for="worker_name">Worker name:</label>
        <input type="text" name="worker_name" id="worker_name" value="<?php echo $_SESSION['worker']; ?>" required><br><br>
        
        <label for="product">Choose product:</label>
        <select name="product" id="product">
            <option value="milk">Milk</option>
            <option value="soft_drink">Soft Drink</option>
        </select><br><br>
        
        <label for="quantity">Product quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" required><br><br>
        
        <button type="submit" name="add">Add</button>
        <button type="submit" name="remove">Remove</button>
        <button type="submit" name="reset">Reset</button>
    </form>
    
    <h3>Inventory:</h3>
    <p>worker: <?php echo $_SESSION['worker']; ?></p>
    <p>units milk: <?php echo $_SESSION['milk']; ?></p>
    <p>units soft drink: <?php echo $_SESSION['soft_drink']; ?></p>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Dynamic Page Title"; ?></title>
</head>
<body>

    <h1>Welcome to My Website</h1>

    <!-- Example 1: Outputting simple text -->
    <p>Today's date is: <?php echo date('Y-m-d'); ?></p>

    <!-- Example 2: Using a PHP variable inside HTML -->
    <?php 
        $username = "Alex"; 
    ?>
    <p>Hello, <?php echo $username; ?>!</p>

    <!-- Example 3: Wrapping HTML inside a PHP conditional statement -->
    <?php if (true): ?>
        <div class="alert">This HTML block only shows if the condition is true.</div>
    <?php endif; ?>

</body>
</html>

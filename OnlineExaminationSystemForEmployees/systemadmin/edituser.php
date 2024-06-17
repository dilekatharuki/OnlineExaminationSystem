<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="edituser.css" /> 
</head>
<body>
    <?php include 'navbar.php'; ?>
    <h1>Edit User</h1><br><br>

    <form action="updateEmp.php" method="post">
        <?php
        $employeeID = $_GET['id'] ?? '';

        echo '<input type="hidden" id="id" name="id" value="' . $employeeID . '" required>';

        echo '<label for="id">Employee ID:</label>';
        echo '<input type="text" id="id" name="id" value="' . $employeeID . '" disabled><br><br>';
        ?>

        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required><br><br>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required><br><br>

        <label for="password">Password:</label>
        <input type="text" id="password" name="password" required><br><br>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Save Changes">
    </form>
    
    <?php include 'footer.php'; ?>
</body>
</html>

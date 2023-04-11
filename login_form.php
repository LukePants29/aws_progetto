<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Utente</title>
        <!-- Link al file Bootstrap CSS -->
    </head>

    <body>
        <h1>Login Utente</h1>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="name" maxlength="100" placeholder="DanielePredello-RubenScopacasa" require>
            <label for="password">Password:</label>
            <input type="password" name="password" maxlength="100" placeholder="12345678-87654321" require>
            <button type="submit">Accedi</button>
        </form>
    </body>
</html>
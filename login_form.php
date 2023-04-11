<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Utente</title>
        <!-- Link al file Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <h1>Login Utente</h1>
            <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Nickname:</label>
                <input type="text" class="form-control" id="username" name="nickname" maxlength="100" placeholder="DanielePrevedello     RubenScopacasa" require>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" maxlength="100" placeholder="12345678    87654321" require>
            </div>
            <button type="submit" class="btn btn-primary">Accedi</button>
            </form>
        </div>

        <!-- Link al file Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
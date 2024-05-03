<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /Bootstrap CSS -->
    <title>Document</title>
</head>
<body>
    <div class="section d-flex justify-content-center align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 my-3">
                    <h1 class=" fw-bold">Ecco la tua password!!!</h1>
                </div>
                <div class="card text-bg-info col-4 offset-4 text-center py-3">La tua password è: <?php echo $_SESSION['userPassword']; ?> , lunga <?php echo $_SESSION['userPasswordLength']; ?> caratteri.</div>
                <div class="btn-wrapper col-12 my-3">
                    <button class="btn btn-primary">
                        <a href="./index.php">Torna alla Home Page</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /Bootstrap CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Strong password generator</title>
</head>
<body>
    <div class="section d-flex justify-content-center align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class=" fw-bold">Strong Password Generator</h1>
                </div>
                <div class="col-12 py-1">
                    <h3 class=" fw-bold">Genera una password sicura</h3>
                </div>
                <div class="card col-12 text-bg-info text-start py-3 mb-3">
                    Nessun parametro valido inserito
                </div>
                <div class="card col-12 py-3">
                    <form method="get">
                        <div class="input-wrapper d-flex text-start">
                            <label class="col-7" for="password-length">Lunghezza password:</label>
                            <div class="input-col col-5">
                                <input type="number" id="password-length" name="password-length">
                            </div>
                        </div>
                        <div class="btn-wrapper my-3">
                            <button class="btn btn-primary" type="submit">Invia</button>
                            <button class="btn btn-secondary" type="submit">Annulla</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
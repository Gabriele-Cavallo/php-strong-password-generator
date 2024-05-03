<?php 
$userPasswordLength = isset($_GET['password-length']) ? $_GET['password-length'] : 0;
$userPasswordLengthAsNumber = intval($userPasswordLength);
$lowerCaseLetters = 'abcdefghil';
$upperCaseLetters = 'ABCDEFGHIL';
$numbers = '0123456789';
$symbols = '!?$%&<>{}`';
$fullPasswordCharacters;
$fullPasswordCharacters = $lowerCaseLetters;

// Filtri per lettere maiuscole, numeri e simboli
$filterUpperCase = isset($_GET['upperCase']) ? true : false;
$filterNumbers = isset($_GET['numbers']) ? true : false;
$filterSymbols = isset($_GET['symbols']) ? true : false;

// Filtro per i duplicati
$filterDuplicate = isset($_GET['duplicate']) &&  $_GET['duplicate'] == '1' ? true : false;

if ($filterUpperCase) {
    $fullPasswordCharacters .= $upperCaseLetters;
}
if ($filterNumbers) {
    $fullPasswordCharacters .= $numbers;
}
if ($filterSymbols) {
    $fullPasswordCharacters .= $symbols;
}
// Richiamo delle funzioni inserite nella pagina functions.php
require __DIR__ . '/functions.php';

// Password dell'utente generata random
$userPassword = generateRandomPassword($userPasswordLengthAsNumber, $fullPasswordCharacters, $filterDuplicate);
$userPasswordCharacter = strlen($userPassword);
var_dump($fullPasswordCharacters);
var_dump($filterDuplicate);

// Inizializzo la sessione
session_start();
$_SESSION['userPassword'] = $userPassword;
$_SESSION['userPasswordLength'] = $userPasswordCharacter;
if ($userPassword) {
    header('Location: ./password.php');
};
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
                    <?php if(empty($userPassword) || $userPassword == '') { ?>
                        <div>Nessun parametro valido inserito</div>
                    <?php } else { ?>
                        <div>La tua password è: <?php echo $userPassword; ?> , lunga <?php echo $userPasswordLength ?> caratteri.</div>
                    <?php } ?>
                </div>
                <div class="card col-12 py-3">
                    <form method="get">
                        <div class="input-wrapper d-flex text-start">
                            <label class="col-7" for="password-length">Lunghezza password:</label>
                            <div class="input-col col-5">
                                <input type="number" id="password-length" name="password-length">
                            </div>
                        </div>
                        <div class="d-flex text-start">
                            <div class="col-7">Consenti ripetizioni di uno o piu' caratteri:</div>
                            <div class="radio-wrapper col-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="duplicate" id="flexRadioDefault1" value="1">
                                    <label class="form-check-label" for="flexRadioDefault1">Si</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="duplicate" id="flexRadioDefault2" value="0">
                                    <label class="form-check-label" for="flexRadioDefault2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-wrapper col-5 offset-7 text-start">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upperCase" value="1" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Lettere maiuscole
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="numbers" value="1" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Numeri
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="symbols" value="1" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Simboli
                                </label>
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
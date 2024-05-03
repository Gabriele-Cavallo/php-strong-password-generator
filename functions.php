<?php
// Funzione che genera una password randomicamente
// $passwordLength --> lunghezza della password scelta dall'utente
// $passwordCharactersString --> stringa contenente tutti i caratteri a disposizione per la generazione della password
// return --> password contenente caratteri random fra quelli a disposizione e lunga quanto deciso dall'utente
function generateRandomPassword($passwordLength, $passwordCharactersString){
    $randomPassword = '';
    $passwordCharactersStringLength = strlen($passwordCharactersString);
    $passwordCharactersStringLengthIndex = $passwordCharactersStringLength - 1;
    for ($i = 0; $i < $passwordLength; $i++) {
        $randomIndex= rand(0, $passwordCharactersStringLengthIndex);
        $randomPassword .= $passwordCharactersString[$randomIndex];
    }
    return $randomPassword;
}
?>
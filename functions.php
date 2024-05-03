<?php
// Funzione che genera una password randomicamente
// $passwordLength --> lunghezza della password scelta dall'utente
// $passwordCharactersString --> stringa contenente tutti i caratteri a disposizione per la generazione della password
// return --> password contenente caratteri random fra quelli a disposizione e lunga quanto deciso dall'utente
function generateRandomPassword($passwordLength, $passwordCharactersString, $duplicate){
    $randomPassword = '';
    $passwordCharactersStringLength = strlen($passwordCharactersString);
    $passwordCharactersStringLengthIndex = $passwordCharactersStringLength - 1;
    for ($i = 0; $i < $passwordLength; $i++) {
        $randomIndex= rand(0, $passwordCharactersStringLengthIndex);
        if($duplicate == true) {
            $randomPassword .= $passwordCharactersString[$randomIndex];
        } else if ((!str_contains($randomPassword, $passwordCharactersString[$randomIndex]) && $duplicate == false)){
            $randomPassword .= $passwordCharactersString[$randomIndex]; 
        } else if (((str_contains($randomPassword, $passwordCharactersString[$randomIndex])) && $duplicate == false)){
            $i--;
        }
    }
    return $randomPassword;
}
?>
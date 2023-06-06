<?php
// <!-- Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
  ['name' => 'Giulia', 'surname' => 'Bianchi', 'gender' => 'F'],
  ['name' => 'Antonio', 'surname' => 'Rossi', 'gender' => 'M']
]; 
foreach ($users as $user){
    if ($user["gender"]== "M"){
        echo "Buongiorno " . $user['name'].$user['surname'] ."\n" ; 
    }
    else {
        echo "Buongiorno Signo.ra " . $user['name']. $user['surname'] ."\n" ; 
    }
}


<?php
// Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY66".


for( $numero = 1; $numero<=100; $numero++){
    if ( $numero % 3 == 0 && $numero % 5 == 0){
        echo("“HACKADEMY66 \n");
    }  else if ( $numero % "3" == "0") {
        echo("PHP \n");
    }  else if ( $numero % "5" == "0") {
        echo("JAVASCRIPT \n");
    } else { echo($numero ."\n");
    }
}
        
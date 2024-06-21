<?php
$altura = $_POST['altura'];
$edad = $_POST['edad'];
$juicio = $_POST['juicio'];


$validado = true;
$mensaje = '';


if ($altura < 120) {
    $validado = false;
    $mensaje .= "Debe superar una altura de 120cm.<br>";
}


if ($edad <= 16) {
    $validado = false;
    $mensaje .= "Debe tener más de 16 años.<br>";
}

if ($juicio != 'no') {
    $validado = false;
    $mensaje .= "Debe aceptar no llevarnos a juicio por daños y perjuicios.<br>";
}


if ($validado) {
    echo "<h2>Felicidades Puedes subir a la Montaña Rusa</h2>";
    echo "<img src='https://www.google.com/imgres?q=imagen%20boleto%20de%20six%20flag&imgurl=https%3A%2F%2Fimgv2-2-f.scribdassets.com%2Fimg%2Fdocument%2F362875735%2Foriginal%2F0fefb147e9%2F1714182447%3Fv%3D1&imgrefurl=https%3A%2F%2Fes.scribd.com%2Fdocument%2F362875735%2FSix-Flags&docid=zOmnKin2lmvVXM&tbnid=Tv4t18MYEFCxYM&vet=12ahUKEwjpx7qH2uuGAxWQ5MkDHSmpAPwQM3oECCcQAA..i&w=768&h=1024&hcb=2&ved=2ahUKEwjpx7qH2uuGAxWQ5MkDHSmpAPwQM3oECCcQAA'>";
} else {
    echo "<h2>Lo sentimos, no cumples con los requisitos:</h2>";
    echo "<p>$mensaje</p>";
}

?>
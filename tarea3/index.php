<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Montaña Rusa</title>
</head>
<body>
    <form action="montaña.php" method="POST">
        <h2>Validador de Montaña Rusa</h2>
        <label for="altura">Altura:</label>
        <input type="text" name="altura" pattern="[0-9|.]{3}" required>
    
        <label for="edad">Edad:</label>
        <input type="text"  name="edad" pattern="[0-9]{1,99}" required>
        
        <label>¿Rechaza llevarnos a juicio por daños y perjuicios de un mal mantenimiento?</label>
        <label><input  type="radio" name="juicio" value="si" required> Sí</label>
        <label><input type="radio" name="juicio" value="no"> No</label>
        
        <button type="submit">Validar</button>
    </form>
</body>
</html>

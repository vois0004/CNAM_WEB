<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <title>CNAM_WEB Formulaire</title>
</head>
<body>
<form id="formulaire" action="bonjour.php" method="post">
    <div class="container">

        <label>Nom</label>
        <input name="lastname">
        <label>Prénom</label>
        <input name="firstname">

        <label>Do you like rain ?</label>
        <div>
            <label>
                <input type="checkbox"  class="filled-in" />
                <span>Yes</span>
            </label>
        </div>
        <div>
            <label>
                <input type="checkbox"  class="filled-in" />
                <span>No</span>
            </label>
        </div>


    </div>
    <input type="submit">
</form>
</body>
</html>
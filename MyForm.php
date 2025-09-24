<?php
//attributo action indica il file che elaborerà il mio form
//<input type="submit" value="Submit"> fa comparire un elemento che permette di inviare i dati in display.php con il metodo post


//Controlli:
//input type="text" id="name" value="your name">


//<label for="name">Enter your name</label> con il for gli dico di identificarsi al tipo name

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="MyStyle.css">
    <title>Document</title>
</head>
<body>
    <h2>PHP Form validation with main controllers</h2>
    <form method="post" action="display.php">
        <label for="name">Enter your name</label>
        <br>
        <input type="text" id="name" name="name" value="your name"> <!-- Name serve per inviare i dati -->
        <br><br>

        <label for="password">Enter your password</label>
        <br>
        <input type="password" id="password" name="password">
        <br> <br>

        <!-- TEXT AREA -->
        <label for="comment">Enter your comment</label>
        <br>
        <textarea id="comment" name="comment" rows="5" cols="40"></textarea>
        <br> <br>

        <!-- RADIO BUTTONS -->
        <label for="gender">Enter your gender</label>
        <br>
        <input type="radio" id="gender" name="gender" value="female">Female
        <input type="radio" id="gender" name="gender" value="male">Male
        <input type="radio" id="gender" name="gender" value="other">Other

        <br> <br>


        <!-- RADIO BUTTONS -->
        <label for="top">Toppings</label>
        <br>
        <input type="checkbox" id="top" name="top[]" value="pep">Pepperoni
        <input type="checkbox" id="top" name="top[]" value="msh">Mushrooms
        <input type="checkbox" id="top" name="top[]" value="olive">Olives

        <br> <br>

        <!-- DROP DOWN LIST -->
        <label for="car">Cars</label>
        <br>
        <select id="car" name="car">
            <option value="volvo">Volvo</option> <!-- Viene spedito il valore dentro a value che potrebbe essere anche pippo -->
            <option value="mazda">Mazda</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>

        <br> <br>


        <!-- LIST BOX SINGLE SELECTION -->
        <label for="carList" >Choose a car from the list:</label>
        <br>
        <select id="carList" name="carList" size="4">
            <option value="volvo">Volvo</option> <!-- Viene spedito il valore dentro a value che potrebbe essere anche pippo -->
            <option value="mazda">Mazda</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>

        <br> <br>


        <!-- LIST BOX MULTIPLE SELECTION -->
        <label for="cars">Choose your favorite cars:</label>
        <br>
        <select id="cars" size="4" multiple name="cars[]">
            <option value="volvo">Volvo</option> <!-- Viene spedito il valore dentro a value che potrebbe essere anche pippo -->
            <option value="mazda">Mazda</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>

        <br> <br>


        <input type="submit" value="Submit">
    </form>
</body>
</html>
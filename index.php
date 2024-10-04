<!DOCTYPE html>
<html>
<head>
    <title>Php WebSite</title>
</head>
<body>
<form action="index.php" method="post">
    <label>First Name:
        <input type="text" name="First Name" required><br>
    </label>
    <label>Last Name:
        <input type="text" name="Last Name" required><br>
    </label>
    <label>Username:</label>
    <input type="text" name="username" required><br>
    <!-- <label>Email:</label> -->
    <input type="text" name="email" required><br>
    <!-- <label>Age:</label> -->
    <input type="text" name="age" required><br>
    <!-- <label>Contry:</label><br> -->
    <input type="radio" name="nationality" value="Morroco" required>Morroco<br>
    <input type="radio" name="nationality" value="Other Contry" required>Other Contry<br>
    <!-- <label>Password:</label> -->
    <input type="password" name="password" required><br>
    <!-- <label>Confirm Password:</label> -->
    <input type="password" name="passwordConfirm" required><br>
    <input type="submit" value="log in"><br>

    
</form>
</body>
</html>

<?php
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordConfirm = $_POST["passwordConfirm"];
    $age = $_POST["age"];
    $login = $_POST["log in"];
    $totale = array($_POST["email"],$_POST["username"],$_POST["password"],$_POST["age"]);
    array_push($totale, "student");
    $reversedTotale = array_reverse($totale);
    // if (isset($login)){
        // if ($age < 18){
        //     echo"cannot access <br>";
        //     exit;
        // }
        // foreach ($totale as $key)
        //     echo $key . "<br>";
        // foreach($_POST as $key => $value)
        //     echo $key." = ".$value."<br>";
    // }
?>
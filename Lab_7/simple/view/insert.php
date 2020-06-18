<?php
    if(isset($_POST["insertbutton"])){
        $name = $_POST['name'];
        $last = $_POST['last'];
        $age = $_POST['age'];
        $date = $_POST['date'];
        $regdate = $_POST['reg_date'];
        $password = $_POST['pass'];
        $gender = $_POST['gender'];
        $sql = "INSERT INTO users (name,last,age,date,reg_date,pass,gender)
                    VALUES(
                        '$name',
                        '$last',
                        '$age',
                        '$date',
                        '$regdate',
                        '$password',
                        '$gender')";
        mysqli_query($connection,$sql);
    }
?>
<article>
    <h1>INSERT</h1>
    <br><br>
    <form action="" style="padding: 20px" method="post">
        Name <input type="text" name="name">
        <br>
        Last_name <input type="text" name="last">
        <br>
        Age <input type="number" name="age">
        <br>
        Date <input type="date" name="date" >
        <br>
        Reg_Date <input type="date" name="reg_date" >
        <br>
        Password <input type="text" name="pass">
        <br>
        Gender <input type="hidden" name="gender">
        <br>
        <input type="submit" value="INSERT" name="insertbutton">
    </form>
</article>
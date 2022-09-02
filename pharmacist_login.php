<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy_Login</title>
    <link rel='icon' href='/icons/log-in.ico'/>
    <link rel='stylesheet' href='styles_e_hospital.css'/>
</head>
<body style='background-color:azure;'>
    <form class='box' method='post'>
        <div style='font-weight:bold;font-size:30px;margin:auto;'>Pharmacist Login Page</div><br>
        <button  type='submit' title='Opens Working Time Analyser' name='analyser_btn' class='analyser_btn'>Open Analyser</button><br>
        Login Id : <input class='text' style='margin-left:6px;margin-top:20px;margin-bottom:5px;' type='number' name='pharm_id' placeholder='Enter your id number'><br>
        Password : <input class='text' type='number' name='password' placeholder='Enter your password'><br>
        <button style='margin-top:7px;' class='button' type='submit' name='sub-btn'>Login</button>
    </form>
    <?php
    
        if (isset($_POST['sub-btn'])){
            if ($_POST['pharm_id']=='' or $_POST['password']==''){
                echo "<script>alert('Id/password cannot be empty!');</script>";
                die;
            }
            echo "<script>alert('Entered some data');</script>";
            
        }
        if (isset($_POST['analyser_btn'])){
            echo "<script>alert('This redirects to my second project');</script>";
        }
    ?>
</body>
</html>
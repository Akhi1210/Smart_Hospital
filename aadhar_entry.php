
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aadhar Entry</title>
    <link rel='icon' href='/icons/aadhar.png'/>
    <link rel='stylesheet' href='styles_e_hospital.css'/>
</head>
<body class='box_plp' style="background-image:url('/background_images/aadhar.jpeg');background-size: cover;margin-left:15px;margin-top:15px;">
    <form method = 'post'>
        Aadhar No: <input type='number' name='aadhar_no' placeholder = 'Enter Aadhar number'><br><br>
        Name : <input style='margin-left:29px;' type = 'text' name = 'name' placeholder='Full name'><br><br>
        D.O.B : <input style='margin-left:26px;' type = 'date' name = 'dob' placeholder='Date of Birth'><br><br>
        Gender : <select style='margin-left:21px;' id='gender' name='gender' autocomplete='off'>
                    <option value='M'>Male</option>
                    <option value='F'>Female</option>
                </select><br><br>
        Address : <input style='margin-left:14px;' type = 'text' name = 'address' placeholder='Address'><br><br>
        Mobile no : <input type = 'number' name = 'mob' placeholder='Mobile number'><br><br>
        <input type = 'submit' name = 'submit' ><br><br>
        
    <?php
        if (isset($_POST['submit'])){
            $adhar_no = $_POST['aadhar_no'];
            $name = $_POST['name'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $mob = $_POST['mob'];
            
            echo "<script>alert('Adding to the data base');</script>";
        }
        
    ?>
</html>

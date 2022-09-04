
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication@Doctor</title>
    <link rel='icon' href='/icons/lock.ico'/>
    <link rel='stylesheet' href='styles_e_hospital.css' />
</head>
<body class='box' style="background-image:url('/background_images/pat_doc.jpg');background-size: cover">
    
        
    <form  method='post'>
        <br>
        <div style="font-weight:bold;font-size:30px;">Patient authentication at OP </div><br><br>
        <div>Aadhar No : <input class='text' type="number" name="Aadhar_no" placeholder ="Enter Aadhar number"><br>
        <br></div>
        <input class='button' type="submit" name='sub-btn'><br>
    <br>
    </form>
    
    <?php
        if (isset($_POST['sub-btn'])){
            $p_a_no = $_POST["Aadhar_no"];
            if ($p_a_no){
                
                echo "<script>alert('Checking for any active prescription with this aadhar id');</script>";
            }
            else{
                echo "<script>alert('Aadhar_no cannot be null');</script>";
            }
        }
    ?>
    
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy</title>
    <link rel='icon' href='/icons/pharmacy.ico'/>
    <link rel='stylesheet' href='styles_e_hospital.css'/>
</head>
<body class='box_pp' style="background-image:url('/background_images/pharm_ui.jpeg');background-size: cover">

    <?php
        
        $var_logout = "<form method='post'>
                        Hello pharmacist !! Nice to see you again.
                        <button class='logout_btn' type='submit' name='logout-btn'>Logout</button><br>
                        </form><br>";
        echo "$var_logout";

        
        if(isset($_POST['logout-btn'])){
            echo "<script>alert('Logging out');</script>";
        }

        echo "<div style='font-weight:bold;padding-bottom:6px;padding-top:2px;'>Prescription</div><br>";
        echo "Prescription table comes here when connected to data base<br><br>";
        $save_btn ="<form method='post'>
                    <button class='logout_btn' style='margin-left:0px;' type='submit' name='exit'>Exit</button>
                    <button class='logout_btn' type='submit' name='save_exit'>Save & Exit</button>
                    </form>";
        echo "$save_btn";
        if (isset($_POST['save_exit'])){
            echo "<script>alert('Issued prescribed medicines');</script>"; 
            }
        if (isset($_POST['exit'])){
            
            echo "<script>alert('Exited without issuing');</script>"; 
            
        }

    ?>
    
</body>
</html>

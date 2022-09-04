<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <link rel='icon' href='/icons/Doctor.ico'/>

    <link rel="stylesheet" href='styles_e_hospital.css' />
        

</head>

<body class='box_dp' style="background-image:url('/background_images/doc_ui.jpg');background-size: cover">

    
    <?php

        $var_logout = "<form method='post'>
                            Hi Doctor ! Nice to see you again.
                            <input class='logout_btn' style='margin-left:100px' type='submit' name='logout' value='Logout'>
                            </form>";
        echo "$var_logout";
        
        if (isset($_POST['logout'])){
            echo "<script>alert('logging out');</script>"
        }
    
        
        // If both Doctor and Pateint are logged in page loads as:-


        $var_p_details = "<div style='padding-bottom:15px;'>
                            <div style='font-weight:bold;display:inline;padding-bottom:30px;'>Patient Name:</div> 'name here' <br>
                          </div>
                          <div style='padding-bottom:15px;'>
                            <div style='padding-right:40px;display:inline'>
                                <div style='font-weight:bold;display:inline;'>DOB :</div> 'DOB here'
                             </div>
                            <div style='margin-left:40px;font-weight:bold;display:inline;'>Gender :</div> 'Gender here'<br>
                          </div>
                        ";
        $var_add_med = "<form method='post'>
                        <div style=' padding-bottom:5px;'>Problem Description:</div>
                        <textarea id='description' name='description' rows='4' cols='55'>'problem description here'</textarea><br><br>
                        Medicine: <input type='text' name='med_name' placeholder='Medicine'>
                        Quantity: <input style='width:30px' type='number' name='med_quan'>
                        <input style='height:27px;background-color:lightblue;border-radius: 5px;border-color:white;' type='submit' name='add-btn' value='Add'><br>
                        </form><br>";
                

        $var_save_exit = "<form method='post'>
                            <input class='button_dp' type='submit' name='sub-save' value='Save & Exit'>
                            <input class='button_dp' style='width:150px' type='submit' name='del_p' value='Delete Prescription'><br>
                          </form>";
        
        print_r($var_p_details);
        echo "$var_add_med";


        if(isset($_POST['add-btn'])){
            
            $med_name = $_POST['med_name'];
            $med_quan = $_POST['med_quan'];
            if ($med_name=='' or $med_quan==0){
                echo "<script>alert('Invalid data');</script>";
                
            }
            else{
                unset($_POST['add-btn']);
                echo "<script>alert('Added to data base');</script>";
                
            }
            
        }

        // Prescription Table starts;

        echo "<div style='font-weight:bold;padding-bottom:6px;padding-top:2px;'>Prescription</div>";
        echo "Prescription table comes here when connected to data base<br>";
        echo "<br>$var_save_exit";
        if (isset($_POST['sub-save'])){
            echo "<script>alert('Saved to the data base');</script>";
            die;
        }
        if (isset($_POST['del_p'])){
            echo "<script>alert('Deleted from data base');</script>";
            die;
        }
        
        
    ?>
</body>
</html>

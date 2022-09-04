

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Login</title>
    <link rel='icon' href='/icons/log-in.ico'/>
    <link rel='stylesheet' href='styles_e_hospital.css'/>
</head>
<body style="background-image:url('/background_images/login_doc.jpg');background-size: cover">
    
    <form class='box_ld' method='post'>
        <div  style='font-weight:bold;font-size:30px;margin:auto;'>Doctor authentication</div><br>
        <button  type='submit' title='Opens Working Time Analyser' name='analyser_btn' class='analyser_btn'>Open Analyser</button><br>
        Login Id : <input class='text' style='margin-top:25px;margin-bottom:18px;'  type='number' name='doc_id' placeholder='Enter your Id'><br>
        Password: <input class='text' type='text' name='doc_pass' placeholder='Enter password'><br><br>
        <input class='button' style='margin-top:7px;' type='submit' name='sub-log' value='Login'><br>
    </from>
    <?php
    
        if(isset($_POST['sub-log'])){
            $doc_id = $_POST['doc_id'];
            $doc_pass = $_POST['doc_pass'];
            if($_POST['doc_id']=='' or $_POST['doc_pass']==''){
                echo "<script>alert('Empty Data');</script>";
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

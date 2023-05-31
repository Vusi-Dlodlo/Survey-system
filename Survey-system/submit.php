<?php
include('connect.php');
if(isset($_POST['Submit']))
{
    $Name = $_POST['userName'];
    $Surname = $_POST['userSur'];
    $No = $_POST['userNo'];
    $date = $_POST['userDate'];
    $age = $_POST['userAge'];
    $checkbox = $_POST['gridCheck1'];
    $rdout = $_POST['radioOut'];
    $rdMovies = $_POST['radioMovies'];
    $rdTV = $_POST['radioTV'];
    $rdRd = $_POST['radioRadio'];
    
    if($age <5 && $age >120 ){
        echo '<script>alert("Please enter Age between 6 to 120")</script>';
        echo '<script> location.href="form.html" </script>';
    }else{
        
    }
    
    $chk = '';
    if(!empty($_POST['gridCheck1']) || !empty($_POST['radioOut']) || !empty($_POST['radioOut']) || !empty($_POST['radioTV']) || !empty($_POST['radioRadio']) ) {
         echo $chk = implode(" ,",$_POST['gridCheck1']).'\n';
        $sql = "INSERT INTO `surveydata`(`Surname`, `Names`, `contactNo`,`Age`, `currentDate`, `favouriteFoods`, `eatingOut`, `watchingMovies`, `watchTv`, `radioListener`) VALUES ('$Name','$Surname','$No','$age','$date','$chk','$rdout','$rdMovies','$rdTV','$rdRd')"; 
        $insert = $conn->query($sql);
        if($insert){
            echo '<script>alert("Inserted Successfully")</script>';
            header('location: index.html');
            exit();
        }
    }
    else {
        echo '<script>alert("Please check atleast one checkbox and One Radio Button")</script>';
        echo '<script> location.href="form.html" </script>';
    }


}
?>

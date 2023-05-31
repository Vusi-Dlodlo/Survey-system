<?php
include('connect.php');
$AVGA = ")";
$totalSurvey = "select Count(ID) as 'Total' from surveydata "; 
$total = mysqli_query($conn,$totalSurvey)or die("database error".mysqli_error($conn));
while($row = mysqli_fetch_assoc($total)){ 
    if($row != 0){
        $TotalP = $row['Total'];
    }else{
        $TotalP = "0";
    }
    $_SESSION["total"]=$TotalP;
}
    
 $avgAge = "select AVG(Age) AS 'AverageAge' FROM surveydata"; 
 $getAvgAge =  mysqli_query($conn,$avgAge)or die("database error".mysqli_error($conn));
while($row = mysqli_fetch_assoc($getAvgAge)){ 
    if($row != 0){
        $AVGA = $row['AverageAge'];
    }else{
        $AVGA = "0";
    }
    $_SESSION["AvgAge"]=$AVGA;
}

 $maxAge = "select MAX(Age) as 'OldestPerson' from surveydata "; 
 $getMaxAge =mysqli_query($conn,$maxAge)or die("database error".mysqli_error($conn));
while($row = mysqli_fetch_assoc($getMaxAge)){ 
    if($row != 0){
        $MaxAge = $row['OldestPerson'];
    }else{
        $MaxAge = "0";
    }
    $_SESSION["OldestPerson"]=$MaxAge;
}


 $minAge = "select MIN(Age) as 'YongestPerson' from surveydata "; 
 $getMinAge = mysqli_query($conn,$minAge)or die("database error".mysqli_error($conn));
while($row = mysqli_fetch_assoc($getMinAge)){ 
    if($row != 0){
        $MinAge = $row['YongestPerson'];
    }else{
        $MinAge = "0";
    }
    $_SESSION["YongestPerson"]=$MinAge;
}

 $pPizza = "SELECT cast(COUNT(favouriteFoods) / '$TotalP' * 100 as Decimal(1,0)) as 'PizzaP' FROM `surveydata` WHERE favouriteFoods like '%Pizza%'"; 
 $getPizzaP = mysqli_query($conn,$pPizza)or die("databas error".mysqli_error($conn));
while($row = mysqli_fetch_assoc($getPizzaP)){ 
    if($row != 0){
        $getPizza= $row['PizzaP'];
    }else{
        $getPizza = "0";
    }
      $_SESSION["PizzaP"]=$getPizza;
}

 $pPasta = "SELECT cast(COUNT(favouriteFoods) / '$TotalP' * 100 as Decimal(1,0)) as 'PastaP' FROM `surveydata` WHERE favouriteFoods like '%Pasta%'"; 
 $getPastaP = mysqli_query($conn,$pPasta)or die("databas error".mysqli_error($conn));
while($row = mysqli_fetch_assoc($getPastaP)){ 
    if($row != 0){
        $getPasta= $row['PastaP'];
    }else{
        $getPasta = "0";
    }
      $_SESSION["PastaP"]=$getPasta;
}

 $pPap_Wors = "SELECT cast(COUNT(favouriteFoods) / '$TotalP' * 100 as Decimal(1,0)) as 'PAP&WorsP' FROM `surveydata` WHERE favouriteFoods like '%Pap And Wors%'"; 
 $getPap_Wors = mysqli_query($conn,$pPap_Wors)or die("databas error".mysqli_error($conn));
while($row = mysqli_fetch_assoc($getPap_Wors)){ 
    if($row != 0){
        $getPapWors= $row['PAP&WorsP'];
    }else{
        $getPapWors = "0";
    }
      $_SESSION["PAP&WorsP"] = $getPapWors;
}

 $avgEatOut = "select cast(AVG(eatingOut) as decimal(1,0)) as 'EatingOutAvg' FROM surveydata WHERE watchTv <= '3' "; 
 $getAvgEat = mysqli_query($conn,$avgEatOut)or die("databas error".mysqli_error($conn));
while($row = mysqli_fetch_assoc($getAvgEat)){ 
    if($row != 0){
        $getAvgeat= $row['EatingOutAvg'];
    }else{
        $getAvgeat = "0";
    }
      $_SESSION["EatingOutAvg"]=$getAvgeat;
}

 $avgWatchMovies = "select cast(AVG(watchTv) as decimal(1,0)) as 'AVGMOVIES' FROM surveydata WHERE watchTv <= '3'"; 
 $getMovies = mysqli_query($conn,$avgWatchMovies)or die("databas error".mysqli_error($conn));
while($row = mysqli_fetch_assoc($getMovies)){ 
    if($row != 0){
        $getmovies= $row['AVGMOVIES'];
    }else{
        $getmovies = "0";
    }
      $_SESSION["AVGMOVIES"]=$getmovies;
}




 $avgTV = "select cast(AVG(watchTv) as decimal(1,0)) as 'AvgTV' FROM surveydata WHERE watchTv <= '3'"; 
 $getAvgTV = mysqli_query($conn,$avgTV)or die("databas error".mysqli_error($conn));
while($row = mysqli_fetch_assoc($getAvgTV)){ 
    if($row != 0){
        $getAvgtv= $row['AvgTV'];
    }else{
        $getAvgtv = "0";
    }
      $_SESSION["AVGTV"]=$getAvgtv;
}


 $avgRadio = "select cast(AVG(watchTv) as decimal(1,0)) as 'AVGRadio' FROM surveydata WHERE watchTv <= '3'"; 
 $getAvgRadio = mysqli_query($conn,$avgRadio)or die("databas error".mysqli_error($conn));
while($row = mysqli_fetch_assoc($getAvgRadio)){ 
    if($row != 0){
        $getAvgradio= $row['AVGRadio'];
    }else{
        $getAvgradio = "0";
    }
      $_SESSION["Radio"]=$getAvgradio;
}



?>

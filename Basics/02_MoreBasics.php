<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width:80%;
        background-color: grey;
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1> Lets learn about PHP </h1>
        <p> Your party status is here: </p>
        <?php
         $age = 34;
         if($age>18){
            echo "You cn go to party";
         }
         else{
            echo"You can not go to the party";
         }

         //Arrays in PHP
         $langauges = array("Python", "c++", "php", "NodeJs");
         echo $langauges[0];
         echo count($langauges);

         //Loops in PHP
         $a = 0;
        while($a <= 10){
            echo "<br>The value of a is: ";
            echo $a;
            $a++;
        }
        //Iterating array in PHP using while loop
        $a = 0;
        while($a < count($langauges)){
            echo "<br>The value of langauges is: ";
            echo $langauges[$a];
            $a++;    
        }
         //Iterating array in PHP using do while loop
         $a = 0;
         do{
             echo "<br>The value of a is: ";
             echo $a;
             $a++;    
         }while($a < 10);
         //For loop
        for($a=0; $a < 10; $a++){
            echo "<br>The value of a from the for loop is: ";
            echo $a;
        }

        foreach($langauges as $value){
            echo "<br>The value from foreach loop is ";
            echo $value;
        }

        function print5(){
            echo"FIVE";
        }
        print5();
        function print_number($number){
            echo "<br>Your number is ";
            echo $number;
        }
        print_number(45);
        ?>
        
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>EXERCISE 2</title>
</head>
<body>
    <h1>EXERCISE 2 <br>Roy Adrian Rondina</h1>
    <?php 
     $city = [
        "Tokyo",
        "Mexico City",
        "New York City",
        "Mumbai",
        "Seoul",
        "Shanghai",
        "Lagos",
        "Buenos Aires",
        "Cairo",
        "London"
     ];

     echo "Largest Cities:  <br>";
     foreach ($city as $ct){
        echo $ct.",  ";
     }
     echo "<br><br> Sorted List:";
     sort($city);

     echo "<ul>";
     foreach ($city as $ct){
        echo "<li>$ct</li>";
     }
     echo "</ul>";
     
     array_push(
        $city,
        "Los Angeles",
        "Calcutta",
        "Osaka",
        "Beijing",
     );

     echo "Adding : Los Angeles, Calcutta, Osaka, Beijing, to the list ";

     echo "<br><br> Sorted List with additional cities:";
     sort($city);

     echo "<ul>";
     foreach ($city as $ct){
        echo "<li>$ct</li>";
     }
     echo "</ul>";


    ?>
</body>
</html>
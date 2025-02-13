<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>EXERCISE 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class='container'>
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
            
        

         // i decided to use function to lessen the code redundancy
        function printCities($city){
            echo "<ul>";
            foreach ($city as $ct){
                echo "<li>$ct</li>";
            }
            echo "</ul>";
        }
        function sortCities($city){
            sort($city);
        }

        echo "<div class='list'>";
            echo "<div class='cities_comma'>";
               echo "<p>";
                  foreach ($city as $index => $ct) {
                     echo $ct. ", ";
                     
                  }
                  echo "</p>";
            echo "</div>";  
         
            echo "<div class = 'sorted_list'>";
               echo "<div class='list_title'>";
                  echo "<h3>Sorted Cities</h3>";
                  sortCities($city);
                  printCities($city);
                  echo "</div>";
               
                  array_push( $city, 
                              "Los Angeles",
                              "Calcutta", 
                              "Osaka", 
                              "Beijing"
                  );
                  
                  echo "<div class='list_title'>";
                  echo "<h3>Sorted With New Added Cities</h3>";
                  sortCities($city);
                  printCities($city);
               echo "</div>";
            echo "</div>";
        echo "</div>";  
    ?>
</div>
</body>
</html>
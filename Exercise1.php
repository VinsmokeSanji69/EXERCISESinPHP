<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP EXERCISE 1</title>
</head>
<body>
    <h1>EXERCISE 1 <br> Roy Adrian Rondina</h1>

    <?php
        $weather = [
            "rain", //0
            "sunshine", //1
            "clouds", //2
            "hail", //3
            "sleet", //4
            "snow", //5
            "wind" //6
        ];

        echo "<h2>Array of weathers: ";
        foreach ($weather as $wea){
            echo $wea . ", ";
        }
        
        echo "<br>";  

        echo "<h3>We've seen all kinds of weather this month. <br> At the beginning of the month, we had
            " . $weather[5] . " and " . $weather[6] .". <br> Then came " . $weather[1] ." with a few ". $weather[2] ." and some ". $weather[0] 
            .". <br> At least we didn't get any". $weather[3] ." or ". $weather[4] .".";
    ?>
</body>
</html>
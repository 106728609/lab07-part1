<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <tittle>Using PHP Variables, arrays and operators</title> 
    <!-- add other meta -->
</head>
<body>
    
    <h1>PHP Variables, Arrays and Operators</h1>

    <?php
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    echo nl2br ("<p>The days of the week in English are: \n$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6].</p>");
    
    $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    echo nl2br("<p>The days of the week in French are: \n$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6].</p>");
    ?>

</body>
</html>
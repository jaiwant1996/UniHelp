<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UniHelp</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="stylesheet.css?v=<?=time();?>">





</head>
<body>
<br><br><br>

<h1 align="center">A great way to collaborate and study with your classmates anonymously.</h1>
<h2 align="center">Start by typing a course name or code.</h2>






<div id="test-list">
    <!--

    <input type="text" class="fuzzy-search" />
    -->

    <input class="form-control input-lg fuzzy-search" id="inputlg" type="text">
    <ul class="list">

        <?php

        error_reporting(E_ALL);
        ini_set('display_errors',1);

        $filename = 'actual_list_of_courses.txt';
        $eachlines = file($filename, FILE_IGNORE_NEW_LINES);
        $html = "";
        $c=0;
        foreach($eachlines as $lines) { //add php code here

            echo <<<EOT
<li><p class="name">
EOT;

            echo $lines;

            echo "</p></li>";
            $c += 1;

            if($c==20){
                //break;
            }
        }
        echo $html;

        echo "change";
        ?>


        <li><p class="name">Guybrush Threepwood</p></li>
        <li><p class="name">Elaine Marley</p></li>
        <li><p class="name">LeChuck</p></li>
        <li><p class="name">Stan</p></li>
        <li><p class="name">Voodoo Lady</p></li>
        <li><p class="name">Herman Toothrot</p></li>
        <li><p class="name">Meathook</p></li>
        <li><p class="name">Carla</p></li>
        <li><p class="name">Otis</p></li>
        <li><p class="name">Rapp Scallion</p></li>
        <li><p class="name">Rum Rogers Sr.</p></li>
        <li><p class="name">Men of Low Moral Fiber</p></li>
        <li><p class="name">Murray</p></li>
        <li><p class="name">Cannibals</p></li>
    </ul>

</div>





<script>

    var monkeyList = new List('test-list', {
        valueNames: ['name'],
        page: 10,
        pagination: true
    });

</script>





</body>
</html>
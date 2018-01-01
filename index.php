<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UniHelp</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="stylesheet.css?v=<?=time();?>">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


</head>
<body>


<div class="wrapper">
    <div id="button-todd">
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">About this Website</button>
    </div>
</div>



<!-- Modal -->
<div id="myModal" class="modal fade color" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">UniHelp - University Helper</h4>
            </div>
            <div class="modal-body">
                <p>This website is for students who want to connect with there classmates anonymously.</p>
                <p>Click on any course to connect with your fellow classmates.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<hr class="style18">

<h1 align="center">A great way to collaborate and study with your classmates anonymously.</h1>
<h2 align="center">Start by typing a course name or code.</h2>






<div id="test-list">
    <!--

    <input type="text" class="fuzzy-search" />
    -->

    <input class="form-control input-lg fuzzy-search" id="inputlg" type="text" name="main-search">
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
<li><p class="name circle">
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

    </ul>

</div>







<script>

    var monkeyList = new List('test-list', {
        valueNames: ['name'],
        page: 50,
        pagination: true
    });


</script>





</body>
</html>
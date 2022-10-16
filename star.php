<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Shah Abhay PhotoGraphy | Feedback </title>

    <link rel="stylesheet" href="style.css">
    <link href="../../css/style.css" rel="stylesheet" />
    <link href="../../css/responsive.css" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        .center{
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .center .stars{
            height: 150px;
            width: 500px;
            text-align: center;
        }
        .stars input{
            display: none;
        }
        .stars label{
            float: right;
            font-size: 100px;
            color: lightgrey;
            margin: 0 5px;
            text-shadow: 1px 1px #bbb;
        }
        .stars label:before{
            content: '★';
        }
        .stars input:checked ~ label{
            color: gold;
            text-shadow: 1px 1px #c60;
        }
        .stars:not(:checked) > label:hover,
        .stars:not(:checked) > label:hover ~ label{
            color: gold;
        }
        .stars input:checked > label:hover,
        .stars input:checked > label:hover ~ label{
            color: yellow;
            text-shadow: 1px 1px goldenrod;
        }
        .stars .result:before{
            position: absolute;
            content: "";
            width: 100%;
            left: 50%;
            transform: translateX(-47%);
            top: 50%;
            font-size: 30px;
            font-weight: 500;
            color: gold;
            /* background-color:black; */
            font-family: 'Poppins', sans-serif;
            display: none;
        }
        .stars input:checked ~ .result:before{
            display: block;
        }
        .stars #five:checked ~ .result:before{
            content: "I love it ";
        }
        .stars #four:checked ~ .result:before{
            content: "I like it ";
        }
        .stars #three:checked ~ .result:before{
            content: "It's good ";
        }
        .stars #two:checked ~ .result:before{
            content: "I don't like it ";
        }
        .stars #one:checked ~ .result:before{
             content: "I hate it ";
        }
        .form {
            padding-top:100px;
            /* background-color:lime; */
            display: block;
            font-size: x-large;
        }
    </style>
  </head>
  <body>
    <h1 style="text-align: center;"> Feedback</h1>
    <div class="center">
        <div class="stars">
            <form method="POST">
                <input type="radio" id="five" name="rate" value="5">
                <label for="five"></label>
                <input type="radio" id="four" name="rate" value="4">
                <label for="four"></label>
                <input type="radio" id="three" name="rate" value="3">
                <label for="three"></label>
                <input type="radio" id="two" name="rate" value="2">
                <label for="two"></label>
                <input type="radio" id="one" name="rate" value="1">
                <label for="one"></label>
                <span class="result"></span>
                <input type="submit" style="display:inline; margin-top:200px;background-color:black; color:white; width:150px; height: 50px; font-size:xx-large" name="submit" value="Submit">
            </form>
        </div>

        <div class="form">
            <center>
                <form method="get">
                    <label for="subject"> Subject : </label>
                    <input type="text" name="subject" id="subject" value=""> <br> <br>
                    <label for="exp"> Experience : </label>
                    <input type="text" name="exp" id="exp" value="">
                </form>
            </center>
        </div>
    </div>

    <?php
        if(isset($_POST['submit'])){
            $star=$_POST['rate'];
            
        }
    ?>
  </body>
</html>
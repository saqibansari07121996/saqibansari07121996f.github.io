<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url(fr.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: black;
            margin-top: 50px;

        }

        .form-group {
            text-align: center;
            font-size: 1.5rem;
            padding: 10px;
            color: rgb(187, 154, 10);

        }

        .header {
            width: 29%;
            margin: auto;
            text-align: center;
            padding: 30px;
            color: rgb(2, 3, 49);

            box-shadow: 0 0 6px 7px rgb(181, 184, 11);
            font-family: 'Roboto', sans-serif;

            font-size: 1.2rem;
        }

        .footer {
            text-align: center;
            box-shadow: rgb(8, 161, 175);
            padding: 10px;
            color: white;
            font-size: 2rem;
            font-family: 'Roboto', sans-serif;
        }

        input {
            padding: 10px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 10px 3px rgb(0, 217, 255);
            font-family: 'Roboto', sans-serif;
            font-family: 'Roboto', sans-serif;
            

        }

        .button {
            text-align: center;
            font-size: 1rem;
            font-family: 'Roboto', sans-serif;
            
            

        }

       .but
       {
        cursor: pointer;
       }

        .foot2 {
            text-align: center;
            box-shadow: 0 0 10px 5px rgb(67, 216, 8);
            width: 30%;
            margin: auto;
            background-color: rgb(199, 112, 71);
            font-size: 1rem;
            border-radius: 5px;
            font-family: 'Roboto', sans-serif;
        }

        .display {
            text-align: center;
            padding : 10px;
            width: 20%;
            height : 20%;
            margin: auto;
            color : blue;
            background : white;
            border-radius: 10px;
        }

       
        .paragraph {
            font-family: 'Roboto', sans-serif;
            width: 20%;
            height: 10%;
            background-color: rgb(255, 71, 95);
            font-size: 1rem;
        }
    </style>
</head>

<body>

    <div class="header">FRIENDSHIP CALCULATOR</div>
    <div class="paragraph">
        <p><b> <mark> NOTE </mark></b>: This application works on how you feel about each other.
            This feeling of friendship changes randomly according to your mood.
            So, at every instant of time <b> Bond Percentage </b> differs.

        </p>
    </div>
    <div class="body">
        <form method="POST" action="" class="layer">
            <div class="form-group">
                <input type="text" name="" placeholder="Your Name" id="name" required>
                <b><b>+</b></b>
                <input type="text" name="" placeholder="Friend Name" id="fname" required>
            </div>
            <div class="button">
               <input class="but" type="submit" name="submit", value="CHECK NOW">
            </div>
            <div class="display">
                <p>
                <?php
    if(isset($_POST['submit']))
    {
    $percent = rand(0,100);
    echo $percent ."%";
    }
    else{
        $null= NULL ;
        echo $null;
    }
    ?>
                </p>
            </div>
        
            

        </form>
    </div>
    <div class="footer">CONGRATULATIONS!</div>
    <div class="foot2">This Is Your Bond Percentage Till Now

    </div>
  

   



</body>

</html>
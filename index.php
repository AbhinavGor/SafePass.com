<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href="style/style.css">

    <title>SafePass</title>
</head>
<body>
<div class="parallax">
        <header>
                <div class="logo-container">
                    <h1 >SafePass</h1>
                </div>

                <nav class = "nav-hamburger">
                        <ul class="nav-links-hamburger">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li><a href = "https://abhinavgor.netlify.com/contactus.html">Contact Me</a></li>
                        </ul>
                      </nav>
            </header>
</div>

<div class="checkbox-container">
    <h2>Please tick the appropriate boxes.</h2>
<div class="checkboxes">
        <form action = "index.php" method="POST">
            <label class="container">
                Uppercase Letters
                <input type="checkbox" name = 'Uletters' value = 'UL'checked="checked">
                <span class="checkmark"></span>
              </label>
              
              <label class="container">
                Lowercase Letters
                <input type="checkbox" name = 'Lletters' value = 'LL' checked = "checked">
                <span class="checkmark"></span>
              </label>
              
              <label class="container">
                  Numbers
                <input type="checkbox" name = 'Numbers' value = 'N' checked = " checked">
                <span class="checkmark"></span>
              </label>
              
              <label class="container">
                  Special Characters(\ _ - )
                <input type="checkbox" name = "Special" value="S">
                <span class="checkmark"></span>
              </label>
              <br>Length of password<input type = "number" min = 1 max = 30 name = 'length' value = '10' placeholder = "Length of password"><br><br><br><br>
              <input type = "submit" name = 'generate' value = "Get a secure password!" class = "submit">
        </form>
    </div>
    <?php
    $length = 10;
    $charset = '';
    if(isset($_POST['Uletters']))
    {
        $charset = $charset.'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if(isset($_POST['Lletters']))
    {
        $charset  = $charset.'abcdefghijklmnopqrstuvwxyz';
    }
    if(isset($_POST['Numbers']))
    {
        $charset = $charset.'1234567890';
    }
    if(isset($_POST['Special']))
    {
        $charset = $charset.'%$&@!\'\"\\\/.,[]{}()^~`';
    }
    $rand = rand(0,50);
?>

<div class = "res">Here's a secure password for you</div>
<img src = "style/arrow.png" class = "arrow">
<input disabled class = "output" type  = " text" value = "<?php

if(isset($_POST['length'])){$length = $_POST['length'];}
if(isset($_POST['generate']))
{
    if(!(isset($_POST['Uletters']) or isset($_POST['Lletters']) or isset($_POST['Numbers']) or isset($_POST['Symbols'])))
    {
        echo 'Select at least one of the options.';
    }
    else{
        if(isset($_POST['Uletters']))
        {
            $generate_password = substr(str_shuffle($charset), (int)$rand,(int)$length); 
            echo $generate_password;    
        }
        
        else
        {
            $generate_password = substr(str_shuffle($charset), (int)$rand,(int)$length); 
            $final_password = md5($generate_password); 
            $final_password = substr(str_shuffle($final_password),(int)$rand,(int)$length);
            echo ($final_password);
        }
            
        }
} ?>">
</div>

<div class="parallaxbottom">

<div class="website"><br><br>&copyAbhinav Gorantla<a href = "https://abhinavgor.netlify.com/contactus.html">www.abhinavgor.netlify.com</a></div>
</div>

</body>

</html>

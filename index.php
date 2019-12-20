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
              <input type = "number" min = 1 name = 'length' value = '10' placeholder = "Length of password"><br>
              <input type = "submit" name = 'generate' value = "Get a secure password!" class = "submit">
        </form>
    </div>
    <?php
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
    $length = $_POST['length'];
    $rand = rand(0,50);
?>

<h2>Securely generated password</h2>
<input disabled class = "output" type  = " text" value = "<?php if(isset($_POST['generate'])){if(!(isset($_POST['Uletters']) or isset($_POST['Lletters']) or isset($_POST['Numbers']) or isset($_POST['Symbols']))){echo 'Select at least one of the options.';}else{$generate_password = substr(str_shuffle($charset), (int)$rand,(int)$length); echo $generate_password;}} ?>">
</div>

<div class="parallaxbottom">
    <div class="copy">
    
    </div>

<div class="website"><br><br>&copyAbhinav Gorantla<a href = "https://abhinavgor.netlify.com/contactus.html">www.abhinavgor.netlify.com</a></div>
</div>

</body>

</html>

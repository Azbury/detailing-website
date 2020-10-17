<!DOCTYPE html>
<?php
    $clicked_drop_down = false
?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Royal Roman Detailing</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            if(array_key_exists('button1', $_POST)) {
                if ($clicked_drop_down == false) {
                    $clicked_drop_down = true;
                } else {
                    $clicked_drop_down = false;
                }
            }
        ?>
        <div class="dropdown">
            <form method="post">
                <input type="submit" name="button1" id="button1" value="Dropdown" class="dropbtn">
            </form>
            <div id="myDropdown" <?php if($clicked_drop_down == true) echo 'class="dropdown-content show"'; else echo 'class="dropdown-content"'; ?>>
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
        </div>
    </body>
</html>
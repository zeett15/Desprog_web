<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">Name <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    if($_SERVER ["REQUEST_METHOD"] == "POST"){
        $name = $_POST['fname'];
        if(empty($name)){
            echo "Name is empty";
        }else{
            echo $name;
        }
    }
    ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>ITF lab</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color:#6ac5fe;">
        <?php

            $conn = mysqli_init();
            mysqli_real_connect($conn, 'server-pp.mysql.database.azure.com', 'Piradon@server-pp', 'HJWgbw86', 'itf_lab', 3306);
            if (mysqli_connect_errno($conn))
            {
                die('Failed to connect to MySQL: '.mysqli_connect_error());
            }

            $id = $_REQUEST['delete_id'];
            $sql = "DELETE FROM guestbook WHERE id='$id'";


            if (mysqli_query($conn, $sql)) {
                echo "<h2 style='text-align:center; color:white;'>Record has been removed</h2>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
  
            mysqli_close($conn);
        ?>
        <center><a href = "index.php"><button type="button" class="btn btn-light">Continue</button></a></center>
    </body>
</html>

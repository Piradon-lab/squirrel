<html>

<head>
    <title>ITF Lab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'server-pp.mysql.database.azure.com', 'Piradon@server-pp', 'HJWgbw86', 'itf_lab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
   <table class="table table-primary table table-boarded">
        <tr>
            <p class="text-white">
            <th width="20%">
                <div align="center"><h4><p class="text-white">Name </p></h4></div>
            </th>
            <th width="35%">
                <div align="center"><h4><p class="text-white">Comment </p></h4></div>
            </th>
            <th width="30%">
                <div align="center"><h4><p class="text-white">Link </p></h4></div>
            </th>
            <th width="15%">
                <div align="center"><h4><p class="text-white">Action </p></h4></div>
            </th>
        </tr>
        <?php
while($Result = mysqli_fetch_array($res))
{
?>
        <tr>
            <td><?php echo $Result['Name'];?></div></td>
            <td><?php echo $Result['Comment'];?></td>
            <td><?php echo $Result['Link'];?></td>
            <td><?php echo $Result['Action'];?><a href = "edit_form.php?edit_id=<?php echo $Result['ID']; ?>"><button type="button" class="btn btn-primary">Edit</button>   <button type="button" class="btn btn-primary">Delete</button></td>        
        </tr>
        <?php
}
?>
    </table>
    <?php
mysqli_close($conn);
?>
</body>

</html>

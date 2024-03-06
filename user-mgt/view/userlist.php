<?php
    require_once('../model/userModel.php');
    $users = getAllUser()
?>

<html>
<head>
    <title>Userlist</title>
</head>
<body>
    <a href="home.php">Back </a>  |
    <a href="logout.php">logout </a>
    
    <table border=1>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
        <tr>
        <?php for($i=0; $i<count($users); $i++){?>
        <tr>
            <td><?=$users[$i]['id']?></td>
            <td><?php echo $users[$i]['name']?></td>
            <td><?php echo $users[$i]['email']?></td>
            <td>
            <a href="edit.php?id=<?=$users[$i]['id']?>">Edit </a> |
            <a href="delete.php?id=<?=$users[$i]['id']?>">Delete </a> |
            <a href="details.php?id=<?=$users[$i]['id']?>">Details </a> 
            </td>
        <tr>
        <?php } ?>
    </table>
</body>
</html>
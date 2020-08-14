<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>IT-3rd M</title>
</head>
<body>
    <header>
    <h1>IT Morning 2018</h1>
    </header>
    <form action="adddata.php" method="post">
    <div class= "main">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br><br>
    <label for="contact">Roll No.:</label>
    <input type="number" name="contact" id="contact" required><br><br>
    <input type="submit" type="save">
    
    </div>
    </form>
    <hr>
    <h2>Student Record</h2>
    <table>
    <tr>
    <th>Name</th>
    <th>Roll</th>
    <th>Actions</th>
    </tr>

    <?php
    include 'db.php';
    $sql = "SELECT * FROM names";
    
    $result = mysqli_query($conn, $sql);

    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $Roll  = $row['Roll'];
            ?>
            <tr>
            <td><?php echo $name ?></td>
            <td><?php echo $Roll ?></td>
            <td>
                <a href="edit.php?id=<?php echo $id?>">Update</a>
                <a href="delete.php?id=<?php echo $id?>">Delete</a>
            </td>
            </tr>
            <?php
        }
    }
    ?>
    </table>
</body>
</html>
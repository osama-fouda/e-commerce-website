<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update | Rakez Shwya</title>
    <style>
        body{
    background-color: beige;
}
h2{
    font-family: "Cairo", sans-serif;
}
.main{
    width: 50%;
    box-shadow: 1px 1px 10px silver;
    margin-top: 55px;
    padding: 10px;
}
input{
    margin-bottom: 10px;
    width: 60%;
    padding: 5px;
    font-size: 15px;
    font-weight: bold;
    font-family: "Cairo", sans-serif;
}
button{
    border: none;
    padding: 10px;
    width: 40%;
    font-weight: bold;
    font-size: 15px;
    background-color: gainsboro;
    cursor: pointer;
    font-family: "Cairo", sans-serif;
    margin-bottom: 15px;
}
label{
    padding: 10px;
    cursor: pointer;
    font-weight: bold;
    font-size: 15px;
    background-color: #65a9da;
    font-family: "Cairo", sans-serif;
    color: whitesmoke;
}
a{
    text-decoration: none;
    font-size: 20px;
    color: teal;
    font-family: "Cairo", sans-serif;
    font-weight: bold;
}
    </style>
</head>
<body>
    <?php
    include('config.php');
    $ID=$_GET['id'];
    $up = mysqli_query($con, "select * from products where id =$ID");
    $data = mysqli_fetch_array($up);
    
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2> Update The Products</h2>
                <input type="text" name='id' value='<?php echo $data['id']?>'  style='display:none;'>
                <br>
                <input type="text" name='name' value='<?php echo $data['name']?>'>
                <br>
                <input type="text" name='price' value='<?php echo $data['price']?>'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file">Update Image</label>
                <button name='update' type='submit'>Update the product</button>
                <br><br>
                <a href="products.php">View all products</a>
            </form>
        </div>
        <p>Developer By OFouda</p>
    </center>
</body>
</html>
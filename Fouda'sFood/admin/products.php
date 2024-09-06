<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | El7agat</title>
    <style>
        body{
            background-color: beige;
        }
        h3{
            margin-top:50px;
            font-family: "Cairo", sans-serif;
            font-weight:bold;
            color: teal;
        }
        .card{
            background-color: whitesmoke;
            float:right;
            margin-top:40px;
            margin-left:10px;
            margin-right:10px;
        }
        .card img{
            width:100%;
            height:250px;
        }
        main{
            width: 70%;
        }
    </style>
</head>
<body>
    <center>
        <h3>Fouda's Food Products Admin</h3>
    </center>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM products");
    while($row = mysqli_fetch_array($result)){
        echo "
        <center>
        <main>
            <div class='card' style='width: 15rem;'>
                <img src='$row[image]' class='card-img-top'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <p class='card-text'>$row[price]</p>
                    <a href='delete.php? id=$row[id]' class='btn btn-danger'> Delete</a>
                    <a href='update.php? id=$row[id]' class='btn btn-primary'>Edit </a>
                </div>
            </div>
        </main>
        <center>
        ";
    }
    ?>
</body>
</html>
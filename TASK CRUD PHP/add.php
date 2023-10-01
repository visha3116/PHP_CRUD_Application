<?php
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"querycrud");

    

    if(isset($_POST['Submit']))
        {
            $name = $_POST['name'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $query = $_POST['query'];

            $sql = "insert into queryapplication(name,mobile,email,query)values('$name','$mobile','$email','$query')";
            
            if(mysqli_query($connection,$sql)) {
                echo '<script>location.replace("index.php")</script>';
                 } 
            else {
                echo "Some thing Error".$connection->error;
                 }

        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solve Query Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                <div class="card-header">
                    <h1> Solve Query Application </h1>
                </div>
                <div class="card-body">

                <form action="add.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name">
                    </div>

                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="number" name="mobile" class="form-control" placeholder="Enter Mobile">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label>Your Query</label>
                        <input type="text" name="query" class="form-control" placeholder="Enter your Query">
                    </div>
                    <br/>

                    <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
                </form>

                </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
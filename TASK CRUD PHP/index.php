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
            <div class="col-md-15">
                <div class="card">
                <div class="card-header">
                    <h1> Solve Query Application </h1>
                </div>
                <div class="card-body">
                <button class="btn btn-success"> <a href="add.php" class="text-light"> Add Query </a> </button>
                <br/>
                <br/>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                        <th scope="col">Your Query</th>
                        <th scope="col">option </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $connection=mysqli_connect("localhost","root","");
                        $db=mysqli_select_db($connection,"querycrud");

                        $sql = "select * from queryapplication";
                        $run=mysqli_query($connection,$sql);

                        $id =1;
                        while($row=mysqli_fetch_array($run)){
                            $uid = $row['id'];
                            $name = $row['name'];
                            $mobile = $row['mobile'];
                            $email = $row['email'];
                            $query = $row['query'];
                        ?>
                            <tr>
                                <td><?php echo $id ?></td>
                                <td><?php echo $name ?></td>
                                <td><?php echo $mobile ?></td>
                                <td><?php echo $email ?></td>
                                <td><?php echo $query ?></td>
                                <td>
                                    <button class="btn btn-success"> <a href='edit.php?edit=<?php echo $uid ?>' class ="text-light"> Edit </a> </button> &nbsp;
                                    <button class="btn btn-danger"> <a href='delete.php?del=<?php echo $uid ?>' class ="text-light"> Delete </a> </button>
                                </td>
                            </tr>

                               <?php $id++; } ?>


                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
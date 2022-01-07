<?php 
    
    include "./connec.php";

    

        function rowgen(){
            include "./connec.php";
            echo('<div class="container my-2"><table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID Numbers</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Password</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
            <tbody>');
            $req = "select * from usert";
            $result = mysqli_query($con,$req);
            if($result){
                                
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $name = $row['name'];
                $email  = $row['email'];
                $phone  = $row['phone'];
                $password = $row['password'];
                echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$password.'</td>
                        <td><button type="button" class =" text-white m-2 btn btn-success"><a class ="text-white" href="update.php?upid='.$id.'">Update datas</a></button><button type="button" class ="text-white m-2 btn btn-danger"><a class ="text-white" href="delete.php?did='.$id.'">Delete</a></button></td>
                    </tr>';
                }
                echo '</tbody>
                </table> </div>' ;
            }
        }
    
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container my-5">
            <button class="btn btn-primary"><a href="useradd.php" class="text-white">Add User</a></button>'
                    .rowgen().
        '</div>
    </body>
    </html>'
?>
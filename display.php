

<?php
    
    $conn=mysqli_connect('localhost','root','','dummy');
    
?>

<html> 
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
</head>
<body>
    <div class="container">
        <div class="row ">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 pt-4 mt-4 border border-success">
                <div class="reg">
                    <h3 class="text-center p-2 m-2 bg-info text-black">User's Information</h3>
                    <?php
                        $sql="SELECT * FROM student";
                        $query=$conn->query($sql);
                        
                        echo "
                        <table class='table table-info'>
                        <tr>
                           <th>First Name</th>
                           <th>Last Name</th>
                           <th>Email</th>
                           <th>Password</th>
                        </tr>
                        
                        ";
                        while($data=$query->fetch_array()){
                            
                            $firstname=$data['firstname'];
                            $lastname=$data['lastname'];
                            $email=$data['email'];
                            $password=$data['pass'];

                            echo "
                            <tr>
                            <td>$firstname</td>
                            <td>$lastname</td>
                            <td>$email</td>
                            <td>$password</td>
                            ";
                        }
                    ?>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</body>
</html>









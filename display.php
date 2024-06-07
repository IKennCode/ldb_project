
    
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="icon" href="logoldb.png"/>
    <title>LDB InfoSys</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-custom">
            <div class="container-fluid">
                <a class="navbar-brand" href="user.php">
                <img src="ldb.ico" alt="Logo" height="60" width="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-light"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active  text-light" aria-current="page"href="user.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  text-light" href="#">About</a>
                            </li>
                                <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggl1e  text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item " href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            </li>
                            <!-- <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li> -->
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search here" aria-label="Search">
                                <button class="btn btn-outline-success  text-light" type="submit">Search</button>
                        </form>
                </div>
            
            </div>
        </nav>

        <div class="container">
            <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a>
                
            </button>
            <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Password</th>
                            <th scope="col">Operation</th>

                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tbody>
                            <?php
                                include 'connect.php';
                                $sql = "Select * from `kennethcrud`";
                                $result = mysqli_query($con, $sql);
                                if($result) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        $email = $row['email'];
                                        $mobile = $row['mobile'];
                                        $password = $row['password'];

                                        echo '<tr>
                                        <th scope="row">'.$id.'</th>
                                        <td>'.$name.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$mobile.'</td>
                                        <td>'.$password.'</td>
                                    </tr> ';

                                    }
                                }

                            ?>
                            <!-- <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr> -->
                            <!-- <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr> -->
                        </tbody>
                </table>
            
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
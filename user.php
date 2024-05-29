
<?php

    include 'connect.php';
    $success = false; // Flag to check if the submission was successful

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO kennethcrud (name, email, mobile, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $mobile, $password);

    if ($stmt->execute()) {
        // echo "Data Inserted Successfully!";
        $success = true; // Set success flag to true
    } else {
        die("Error: " . $stmt->error);
    }

    $stmt->close();
}
?>

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
    <!-- Navbar -->
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
                        <a class="nav-link active  text-light" aria-current="page" href="user.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link  text-light" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <!-- Body -->
    <div class="container">
    <form class="px-5 pt-5" method="post">
        <div class="row">
            <div class="col-lg-6">
                <!-- First group of form elements -->
                <div class="mb-2">
                    <h5>
                        <label for="name" class="form-label">Name</label>
                    </h5>
                    <input type="text" name="name" class="form-control" placeholder="Enter your Name" id="name" autocomplete="off" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Second group of form elements -->
                <div class="mb-2">
                    <h5>
                        <label for="email" class="form-label">Email</label>
                    </h5>
                    <input type="text" name="email" class="form-control" placeholder="Enter your Email" autocomplete="off" id="email">
                    <div class="form-text">We'll never share your email with anyone else.</div>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-lg-6">
                <!-- Second group of form elements -->
                <div class="mb-2">
                    <h5>
                        <label for="mobile" class="form-label">Mobile</label>
                    </h5>
                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter your Mobile Number" autocomplete="off" >
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Fourth group of form elements -->
                <div class="mb-2">
                    <h5>
                        <label for="password" class="form-label">Password</label>
                    </h5>
                    <input type="password" name="password" class="form-control" placeholder="Enter your Password" id="password" autocomplete="off" aria-describedby="emailHelp2">
                    
                </div>
            </div>
        </div>
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        <button type="submit" name="submit" value="submit" class="btn btn-primary" id="liveToastBtn"><a href="display.php" class="text-light">Submit</a></button>

            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="logoldb.png" width="20" height="20" class="rounded me-2" alt="ldblogo">
                        <strong class="me-auto">Hello</strong>
                        <small>5 seconds ago</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                    Submitted Successfully! 
                    </div>
                </div>
            </div>
    </form>
</div>

       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        <?php if ($success): ?>
        document.addEventListener('DOMContentLoaded', function() {
            var toast = new bootstrap.Toast(document.getElementById('liveToast'));
            toast.show();
        });
        <?php endif; ?>
    </script>

 
</body>
</html>
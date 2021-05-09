<?php
        $inserts = false;
if (isset($_POST['name'])) {
   


    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "trip";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("sorry" . mysqli_connect_error());
    }
    // else { echo "okay to go";}

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `password`, `phone`, `desc` ,`dt`) VALUES ('$name', '$age', '$gender', '$email', '$password', '$phone', '$desc',current_timestamp())";

    // echo $sql;

    if ($conn->query($sql) == true) {
        // echo "success";
        $inserts = true;
    } else {
        echo "error: $sql <br> $conn->error";
    }
    $conn->close();
}


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>welcome to zland</title>
</head>

<body>


    <div class="container w-50  m-auto my-5">
        <h1 class="text-center">Welcome To Zland</h1>
        <h5 class="text-center">Be Ready To Get the Best Feeling Ever</h5>

        <?php if ($inserts==true) {echo ' <p class="text-center">thanks for submitting the form let\'s hope for safe & nice trip stay turned see you soon  </p>';} ?>

        <form action="index.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Enter Your Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="text" class="form-control" id="age" name="age">
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <input type="gender" class="form-control" id="gender" name="gender">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="phone" class="form-control" id="phone" name="phone">
            </div>

            <textarea name="desc" id="desc" cols="30" rows="4" placeholder="Enter whatever you have to say"></textarea>

            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </div>

        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
</body>

</html>
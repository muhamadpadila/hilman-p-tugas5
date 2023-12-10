<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $umur = isset($_POST["umur"]) ? $_POST["umur"] : "";
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $pendidikan = isset($_POST["pendidikan"]) ? $_POST["pendidikan"] : "";

    // Hobi is an array, use isset to check if it's set and then join the values
    $hobi = isset($_POST["hobi"]) ? join(", ", $_POST["hobi"]) : "Tidak Ada Hobi";
}
?>

<!-- Your existing HTML code here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Registration Form</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal" method="post">
                    <!-- Your existing form code here -->

                    

            <!-- Display results in a table -->
            <div class="col-md-6">
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                    <h2>Form Data:</h2>
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Lengkap</th>
                            <td><?php echo $nama; ?></td>
                        </tr>
                        <tr>
                            <th>Umur</th>
                            <td><?php echo $umur; ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td><?php echo ($gender == "male") ? "Laki-Laki" : "Perempuan"; ?></td>
                        </tr>
                        <tr>
                            <th>Pendidikan</th>
                            <td><?php echo $pendidikan; ?></td>
                        </tr>
                        <tr>
                            <th>Hobi</th>
                            <td><?php echo $hobi; ?></td>
                        </tr>
                    </table>
                    <a href="index.php" class="btn btn-primary"> Utama</a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery (place at the end of the body for faster page loading) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.dropdown-toggle').dropdown();
        });
    </script>
</body>
</html>

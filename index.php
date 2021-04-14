<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Job Portal System</title>
    <?php include('assets/includes/css.php') ?>
</head>

<body class="home">
    <!-- nav -->
    <?php include('assets/includes/nav.php') ?>

    <section class="banner">
        <div class="container">
            <div class="wrap-flex">
                <div class="banner-wrap">
                    <h1>Welcome to Online Job <br>Portal System</h1>
                    <p class="pd-10">A bridge for Jobseeker and a Company</p>
                    <div class="pd-top-30">
                        <ul>
                            <li class="pd-right-10"><a class="btn" href="upload-file.php">upload plans</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
        include ('assets/includes/connection.php');

        

     ?>

    <section class="plan pd-40">
        <div class="container">
            <div class="three_col--grid grid-gap">
                <?php 
                $query = "SELECT * FROM fileupload ORDER BY id DESC LIMIT 6";
$run_query = mysqli_query($con, $query) or die(mysqli_error($con));
if (mysqli_num_rows($run_query) > 0) {
while ($row = mysqli_fetch_array($run_query)) {
    $plan_id = $row['id'];
    $plan_name = $row['Plan'];
    $plan_description = $row['Plandetail'];
    $plan_img = $row['Imgfile'];

    echo '<div class="each-grid">';
    echo '<a href="">';
    echo '<img src="images/plan-default.jpg" alt="plan1">';
    echo '<div class="small-haeding plan-title">';
    echo '<h4>'.$plan_name.'</h4>';
    echo '</div>';
    echo '</a>';
    echo '</div>';

}
}
else {
    echo "<script>alert('Not Plans yet! Start uploading now');
    window.location.href= 'index.php';</script>";
}
                 ?>
            </div>
        </div>
    </section>

    <?php include('assets/includes/footer.php') ?>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
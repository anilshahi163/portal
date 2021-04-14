<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Money</title>
    <?php include('assets/includes/css.php') ?>
</head>

<body>
    <!-- nav -->
    <?php include('assets/includes/nav.php') ?>

    <?php include('assets/includes/breadcrumb.php') ?>

    <section class="upload-file pd-30">
        <div class="container">
            <div class="upload-wrap">
                <h2 class="large-heading pd-bottom-30">Tell us what you need done</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <form action="fileuploaddatabase.php" method="post">
                    <div class="form-group pd-bottom-20">
                        <span>Choose a plan</span>
                        <input class="form-control" required placeholder="e.g. plan name" value="" type="text"name="plan">
                    </div>
                    <div class="form-group pd-bottom-20">
                        <span>Tell us more about your plan</span>
                        <textarea id="" placeholder="More about your plan" cols="30" rows="10" name="detail"></textarea>
                    </div>
                    <input type="file"  name="upload" value="upload"> 
                    <input class="btn" type="submit" value="upload">
                </form>
            </div>
        </div>
    </section>

    <?php include('assets/includes/footer.php') ?>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
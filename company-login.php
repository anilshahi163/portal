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

    <div class="login invester-login pd-40">
        <div class="container">
            <div class="one_col--grid grid-gap">
                <div class="each-grid">
                    <div class="new-customer">
                        <h2 class="medium-heading">Jobseeker Login</h2>
                    </div>
                    <form action="invester-database.php" method="post">
                        <div class="form-group pd-bottom-20">
                            <span>Full name</span>
                            <input class="form-control" required placeholder="Full name" name="name"  value="" type="text">
                        </div>
                        <div class="form-group pd-bottom-20">
                            <span>Email</span>
                            <input class="form-control" required placeholder="E-mail" name="email"  value="" type="text">
                        </div>
                        <div class="form-group pd-bottom-20">
                            <span>Password</span>
                            <input class="form-control" required placeholder="password" name="password" value="" type="password">
                        </div>
                        <div class="form-group pd-bottom-20">
                            <span>Address</span>
                            <input class="form-control" required placeholder="" name="address"  value="" type="text">
                        </div>
                        <div class="form-group pd-bottom-20">
                            <span>Phone</span>
                            <input class="form-control" required placeholder="" name="phone"  value="" type="text">
                        </div>
                        <div class="form-group pd-bottom-20">
                            <span>City</span>
                            <input class="form-control" required placeholder="" name="city"  value="" type="text">
                        </div>
                        <button class="btn mg-top-10" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include('assets/includes/footer.php') ?>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
<?php ob_start(); ?>
<?php
    session_start();
    if(isset($_SESSION['login']))
        echo '<script>window.location.href="'.$_SESSION['login']['redirect'].'"</script>';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Rai's Hotel</title>

        <?php include_once('includes/header.php'); ?>
        
    </head>
    <body class="bg-white">
        <?php include_once('includes/navbar.php'); ?>

        <div class="my-5"></div>

        <!-- login -->
        <section class="section py-5" id="login">
            <div class="container py-4">
                <!-- <h2 class="section-title w-100 text-center fs-1 fw-bold mb-5"><span>Sign In</span></h2> -->
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6 pb-3">
                        <div class="card bg-gradient-pink border-0 text-white py-2 pb-3 px-4 mx-2 user-form-card">
                            <div class="card-body">
                                <div class="card-title h1 fw-bold text-center">Sign In</div>
                                <div class="card-subtitle text-center text-white">Sign in to your account</div> 
                                <hr/>
                                <div class="card-text w-100 pt-3">
                                    <form action="functions/login.php" method="POST">
                                        <?php if(isset($_GET['attempt']) && $_GET['attempt']=='failed') { ?>
                                        <div class="alert alert-danger">Incorrect email or password</div>
                                        <?php } ?>
                                        <div class="form-group mb-3">
                                            <label for="email" class="form-label fw-bold fs-5">Email</label>
                                            <input class="form-control" type="email" name="email" id="email" placeholder="Email" required />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="password" class="form-label fw-bold fs-5">Password</label>
                                            <input class="form-control" type="password" name="password" id="password" placeholder="Password" required />
                                        </div>
                                        <input type="hidden" name="action" value="do-login" />
                                        <div class="text-center"><button type="submit" class="btn btn-lg btn-warning fw-bold">Sign In</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        </section>
        <!-- login -->

        <?php include_once('includes/footer.php'); ?>

    </body>
</html>

<?php ob_end_flush(); ?>
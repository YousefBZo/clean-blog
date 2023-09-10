<?php
require_once 'include/db.inc.php';
require_once 'include/class_autoloader.inc.php';
require_once 'include/config.inc.php';
require_once 'include/vendor/plasticbrain/php-flash-messages/src/FlashMessages.php';
$msg = new \Plasticbrain\FlashMessages\FlashMessages();
$logged = new User();
if ($logged->checkIsUserLoggedIn()) {
    header('Location:index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'partials/__head.php'; ?>
    <title>User login |
        <?= SITE_NAME ?>
    </title>
    <style type="text/css">
        .my-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .my-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .login-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }
    </style>
</head>

<body>
    <!-- Navigation-->
    <?php require_once 'partials/__nav.php'; ?>
    <!-- Page Header-->
    <?php require_once 'partials/__page_header.php'; ?>

    <!-- Main Content-->
    <main class="my-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">User login</div>
                        <div class="card-body">
                            <?php
                            try {
                                if (isset($_POST['userLogin'])) {
                                    $email = htmlspecialchars(trim($_POST['email']));
                                    $password = trim($_POST['password']);
                                    $user = new User();
                                    $user->userLogin($email, $password);
                                }
                            } catch (PDOException $e) {
                                echo $e->getMessage();
                            }
                            $msg->display();

                            ?>
                            <form name="my-form" action="login.php" method="POST" id="demo-form">


                                <!-- Email Address -->
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail
                                        Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email">
                                    </div>
                                </div>


                                <!-- Password -->
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="email_address"
                                        class="col-md-4 col-form-label text-md-right">Recaptcha</label>
                                    <div class="col-md-6">
                                        <div class="g-recaptcha"
                                            data-sitekey="6Ld2bdInAAAAAJnoZop8pUi3S2dne3ehh6nac0LJ">
                                        </div>
                                    </div>
                                </div>


                                <!-- Submit Button -->
                                <div class="col-md-12 offset-md-4">
                                    <button type="submit" name="userLogin" class="btn btn-primary">Login</button>

                                    <a type="submit" href="password-reset.php" role="button" class="btn btn-primary">Password
                                        reset</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require_once 'partials/__footer.php' ?>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>

</html>
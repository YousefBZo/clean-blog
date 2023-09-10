<?php

require_once 'include/db.inc.php';
require_once 'include/class_autoloader.inc.php';
require_once 'include/config.inc.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'partials/__head.php'; ?>
    <style>
        body {
            background: #fff;
        }

        .error-container {
            height: 100vh !important;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: montserrat, sans-serif;

        }

        .big-text {
            font-size: 200px;
            font-weight: 900;
            font-family: sans-serif;
            background: url(https://cdn.pixabay.com/photo/2018/05/30/15/39/thunderstorm-3441687_960_720.jpg) no-repeat;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: cover;
            background-position: center;
        }

        .small-text {
            font-family: montserrat, sans-serif;
            color: rgb(0, 0, 0);
            font-size: 24px;
            font-weight: 700;
            text-transform: uppercase;
        }




        /* Style the search field */
        /*form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}
    */

        .form-group {
            display: flex;
            /* border: 1px #53a0e4 solid;
        border-radius:30px;
        overflow: hidden;*/
        }

        /*	
    .form-group:focus-within{
       border: 1px green solid;
    }
    */

        /*	input:focus + .control-label
    */
        .form-control {
            overflow: hidden;
            background: #fff;
            border: 1px #53a0e4 solid;
            border-right: none;
            border-radius: 25px 0px 0px 25px;
            font-size: 1rem;
        }

        .form-control:focus {
            border-color: #61b045;
            box-shadow: none;
        }


        /* Style the submit button */
        form .search-btn {
            all: unset;
            width: 15%;
            padding: 10px;
            background: #1e50e2;
            color: white;
            font-size: 17px;
            border: 1px #1e50e2 solid;
            border-left: none;
            /* Prevent double borders */
            border: 1px #53a0e4 solid;
            border-radius: 0px 25px 25px 0px;
            cursor: pointer;
        }

        form .search-btn:hover {
            background: #0b7dda;
        }

        .button {
            color: #fff;
            padding: 12px 36px;
            font-weight: 600;
            border: none;
            position: relative;
            font-family: 'Raleway', sans-serif;
            display: inline-block;
            text-transform: uppercase;
            -webkit-border-radius: 90px;
            -moz-border-radius: 90px;
            border-radius: 90px;
            margin: 2px;
            margin-top: 2px;
            background-image: linear-gradient(to right, #09b3ef 0%, #1e50e2 51%, #09b3ef 100%);
            background-size: 200% auto;
            flex: 1 1 auto;
            text-decoration: none;

        }


        .button:hover,
        .button:focus {
            color: #ffffff;
            background-position: right center;
            -webkit-box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.1);
            text-decoration: none;
        }
    </style>
    <title>Error 404 |
        <?= SITE_NAME ?>
    </title>
</head>

<body>
    <!-- Navigation -->
    <?php require_once 'partials/__nav.php'; ?>

    <!-- Page Header -->
    <?php require_once 'partials/__page_header.php'; ?>

    <!-- Pager -->
    <div class="container error-container">
        <div class="row  d-flex align-items-center justify-content-center">
            <div class="col-md-12 text-center">
                <h1 class="big-text">Oops!</h1>
                <h2 class="small-text">404 - PAGE NOT FOUND</h2>

            </div>
            <div class="col-md-6  text-center">
                <p>The page you are looking for might have been removed had its name changed or is temporarily
                    unavailable.</p>


                <form class="example" action="search.php">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search.." name="search">
                        <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                    </div>

                </form>
                <h2 class="small-text">OR</h2>

                <a href="index.php" class="button button-dark-blue iq-mt-15 text-center">GOTO HOME PAGE</a>

            </div>

        </div>


    </div>
        
    <!-- Footer -->
    <?php require_once 'partials/__footer.php'; ?>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    <script src="js/scripts.js"></script>
</body>

</html>
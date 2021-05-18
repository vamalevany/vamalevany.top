<?php
    include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="программирование">
        <meta name="keywords" content="Vamalevany">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Kuzmenko | web-studio</title>

            <!-- Styles -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon_io/favicon-32x32.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css" charset="utf-8">
    </head>

    <body>
        <div class="row no-gutters">
            <div class="col-md-6" style="background: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ),url(img/coming.jpg) no-repeat; background-size: cover; height: 100vh;">
                <div class="d-flex flex-column py-5 px-3 justify-content-center align-items-center text-white text-center">
                    <div class="text-normal mb-5">
                        <h3><a style="text-decoration: none; color: #fff;" href="/"><?=$lang['vamalevany']?></a></h3>
                    </div>
                    <div class="text-normal mb-5">
                        <h1><?=$lang['coming']?></h1>
                    </div>
                    <div class="opacity-0.8 mb-5">
                        <h6><?=$lang['construct']?></h6>
                    </div>
                    <div id="social">
                            <!-- https://www.youtube.com/channel/UCP3fJuJddTL13flFMk7SbVQ -->
                        <a href="https://www.linkedin.com/in/malevany" title="<?=$lang['connect']?>" target="_blank"><i class="fab fa-linkedin h3 text-white"></i></a>
                        <a href="coming.html" title="<?=$lang['subscribe']?>" target="_blank"><i class="fab fa-youtube h3 mr-5 ml-5 text-white"></i></a>
                        <a href="https://github.com/vamalevany/vamalevany.top" title="<?=$lang['code']?>" target="_blank"><i class="fab fa-github-square h3 text-white"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6" id="notify">
                <div class="d-flex flex-column py-5 px-3 justify-content-center align-items-center">
                    <div class="text-center" style="max-width: 500px;">
                        <div class="h1 text-normal mb-5"><?=$lang['notify']?></div>
                        <h6 class="text-muted mb-5"><?=$lang['know']?> <br> <?=$lang['here']?></h6>
                        <form>
                            <!-- Hidden Required Fields -->
                            <input type="hidden" name="project_name" value="vamalevany.top">
                            <input type="hidden" name="admin_email" value="vamalevany@gmail.com">
                            <input type="hidden" name="form_subject" value="Contact form">
                            <!-- END Hidden Required Fields -->
                            <div class="form-group mb-5">
                                <input class="form-control" type="email" name="email" id="email" placeholder="<?=$lang['email']?>" required>
                            </div>
                            <button class="btn btn-primary" id="send" type="submit"><?=$lang['send']?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/mail.js"></script>
    </body>
</html>

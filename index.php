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
    <title>Vamalevany | web-studio</title>

        <!-- Styles -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon_io/favicon-32x32.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" charset="utf-8">
  </head>

  <body>
    <section id="about">
      <div class="container">
          <div class="row justify-content-around">
              <div class="col-md-4 text-center" id="foto">
                  <img src="img/img2.jpg" alt="foto">
              </div>
              <div class="col-md-8 text-center">
                  <p><?=$lang['hi_am_i_1']?></p>
                  <p><?=$lang['hi_am_i_2']?></p>
                  <p><?=$lang['hi_am_i_3']?></p>
                  <p><?=$lang['hi_am_i_4']?></p>
              </div>
          </div>
      </div>
    </section>

    <section id="contact">
        <div class="container text-center">
            <form>
                <!-- Hidden Required Fields -->
                <input type="hidden" name="project_name" value="vamalevany.top">
                <input type="hidden" name="admin_email" value="vamalevany@gmail.com">
                <input type="hidden" name="form_subject" value="Contact form">
                <!-- END Hidden Required Fields -->
                <textarea rows="3" name="msg" id="message" placeholder="<?=$lang['msg']?>" required></textarea><br>
                <input type="email" name="email" id="email" placeholder="<?=$lang['email']?>" required>
                <button type="submit" id="send"><?=$lang['send']?></button>
            </form>
        </div>
    </section>
    <footer>
      <div class="container-fluid text-center">
          <div class="row justify-content-between">
              <div id="copy"><i><?=$lang['copy']?> &copy <?=$lang['vamalevany']?></i></div>
              <div id="menu">
                  <ul class="menu">
                    <li><a href="coming.php"><i><?=$lang['assistent']?></i></a></li>
                    <li><a href="coming.php"><i><?=$lang['portfolio']?></i></a></li>
                    <li><a href="coming.php"><i><?=$lang['blog']?></i></a></li>
                  </ul>
              </div>
              <div id="social">
                  <ul class="lang">
                      <li><a href="#" id="lang"><i>
                        <?php
                            if ($_SESSION['lang'] == "ru") {
                                    echo $lang['ru'];
                                } elseif ($_SESSION['lang'] == "uk") {
                                    echo $lang['uk'];
                                } else {
                                    echo $lang['en'];
                                }
                        ?>
                      </i></a></li>
                      <span id="sublang">
                          <ul class="sublang">
                              <li><a href="index.php?lang=en"><i><?=$lang['en']?></i></a></li>
                              <li><a href="index.php?lang=ru"><i><?=$lang['ru']?></i></a></li>
                              <li><a href="index.php?lang=uk"><i><?=$lang['uk']?></i></a></li>
                          </ul>
                      </span>
                  </ul>
                    <a href="https://www.linkedin.com/in/malevany" title="<?=$lang['connect']?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                      <!-- https://www.youtube.com/channel/UCP3fJuJddTL13flFMk7SbVQ -->
                  <a href="coming.php" title="<?=$lang['subscribe']?>" target="_blank"><i class="fab fa-youtube"></i></a>
                  <a href="https://github.com/vamalevany/react-movie.git" title="<?=$lang['code']?>" target="_blank"><i class="fab fa-github-square"></i></a>
              </div>
          </div>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/mail.js"></script>
  </body>
</html>

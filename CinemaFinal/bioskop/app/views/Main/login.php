<!DOCTYPE html>
<html lang="sr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Igor Stricevic">
        <!--<link rel="icon" href="../../favicon.ico">-->

        <title>Dzigerica</title>

        <link rel="shortcut icon" href="<?php echo Configuration::BASE_URL; ?>assets/img/favicon.png">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo Configuration::BASE_URL; ?>assets/css/bootstrap.min.css">

        <!--Custom CSS-->
        <link rel="stylesheet" href="<?php echo Configuration::BASE_URL; ?>assets/css/custom.css">

        <!--Custom CSS-->
        <link rel="stylesheet" href="<?php echo Configuration::BASE_URL; ?>assets/css/carousel.css">

        <link rel="stylesheet" href="<?php echo Configuration::BASE_URL; ?>assets/css/hover.css">
    </head>
    <body>
        <main>
            <div class="extremeLogger">
                <div class="login-wrap">
                    <div class="login-html">
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Administrator</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab" style="display: none;">Provera</label>
                        <div class="login-form">
                            <form  method="POST" >
                                <div class="sign-in-htm">
                                    <div class="group">
                                        <label for="user" class="label">Username</label>
                                        <input id="user" name="user" type="text" class="input" required pattern="^[a-z]{4,}$">
                                    </div>
                                    <div class="group">
                                        <label for="pass" class="label">Lozinka</label>
                                        <input id="pass" name="pass" type="password" class="input" data-type="password" required pattern="^.{6,}$">
                                    </div>
                                    <div class="group"> 
                                        <input type="submit" class="button" value="Prijavi se">
                                    </div>
                                    <div class="hr"></div>
                                    <div class="foot-lnk">
                                        <a href="#forgot">Zaboravili lozinku?</a>
                                    </div>
                                </div>
                                <div class="sign-up-htm"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
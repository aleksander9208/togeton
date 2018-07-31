<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Тестовое задание тогетон</title>
    </head>

    <body>
        <div class="wrapper uk-flex uk-flex-middle uk-flex-center">
            <div class="block" uk-grid>
                <div class="uk-width-1-2@m">
                    <div class="firsth">
                        <?php
                            if(isset($_POST['name'])) $name = $_POST['name'];
                            if (isset($_POST['phone'])) $phone = $_POST['phone'];
                            if (isset($_POST['email'])) $email = $_POST['email'];
                            
                            echo "$name  <br> $phone <br> $email";
                        ?>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <div class="two">
                        <?php
                            if(isset($_POST['name'])) $name = $_POST['name'];
                            if (isset($_POST['phone'])) $phone = $_POST['phone'];
                            if (isset($_POST['email'])) $email = $_POST['email'];
                            
                            echo "$name  <br> $phone <br> $email";
                        ?>
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <div class="three">
                        <?php
                            if(isset($_POST['name'])) $name = $_POST['name'];
                            if (isset($_POST['phone'])) $phone = $_POST['phone'];
                            if (isset($_POST['email'])) $email = $_POST['email'];
                            
                            echo "$name  <br> $phone <br> $email";
                        ?>
                    </div>
                </div>
                <div class="uk-width-2-3@m">
                    <div class="twor">
                        <?php
                            if(isset($_POST['name'])) $name = $_POST['name'];
                            if (isset($_POST['phone'])) $phone = $_POST['phone'];
                            if (isset($_POST['email'])) $email = $_POST['email'];
                            
                            echo "$name  <br> $phone <br> $email";
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <link href="css/styles.css" rel="stylesheet">
        <link href="js/uikit/dist/css/uikit.min.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/uikit/dist/js/uikit.min.js"></script>
        <script src="js/uikit/dist/js/uikit-icons.min.js"></script>
        <script src="js/jquery.maskedinput.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>





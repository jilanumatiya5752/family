
<!DOCTYPE html> <html lang="en"> 
    <head>
        <meta charset="utf-8"/> <meta http-equiv="X-UA-Compatible" content="IE=Edge" /> 
        <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="css/style.css">   
        <?php if (!isset($_SESSION['user_id'])) { ?>
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <?php } ?>

    </head>
<body>          
        <div id="wrapper">
            <div id="wrapper" class="sticky">
                <?php require_once dirname(__FILE__) . '/header.php'; ?>
            </div>
        </div>
        <?php //require_once dirname(__FILE__) . '/footer.php'; ?> 
    <!-- <script async src="https://platform-api.sharethis.com/js/sharethis.js#property=5d5f8a17f0c30b0012259240&product=sticky-share-buttons"></script> -->
    </body>
</html>


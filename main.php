<!DOCTYPE html> <html lang="en"> 
    <head>
        <meta charset="utf-8"/> <meta http-equiv="X-UA-Compatible" content="IE=Edge" /> 
        <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="css/style.css"/> 

    
     </head>
<body>          
        <div id="wrapper">
            <div id="wrapper">
                <?php require_once dirname(__FILE__) . '/header.php'; ?>
            </div>
            <section class="container">
                <div class=" ml-15 pr-15 mb-10 mt-10">
                    <div class="row no-gutters d-flex">
                        <div class="col-xl-12 col-sm-12" >
                            <?php
                            echo $content;
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php //require_once dirname(__FILE__) . '/footer.php'; ?>
        
    </body>
</html>


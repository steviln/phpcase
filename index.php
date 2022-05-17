<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="no">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visma Commerce Case</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  </head>
  <body>
        <?php

        // For simplicity I have not used namespaces in this case, but I do use namespaces usually
        // Also, I gave no thought to the order of these functions, something I should really do to optimize the number of calls.

            spl_autoload_register(function ($class_name) {
                $includepath = 'interface/'.$class_name.'.php';
                if(file_exists($includepath))
                    include $includepath;
            });

            spl_autoload_register(function ($class_name) {
                $includepath = 'helpers/'.$class_name.'.php';
                if(file_exists($includepath))
                    include $includepath;
            });

            spl_autoload_register(function ($class_name) {
                $includepath = 'actions/'.$class_name.'.php';
                if(file_exists($includepath))
                    include $includepath;
            });

            spl_autoload_register(function ($class_name) {
                $includepath = 'other/'.$class_name.'.php';
                if(file_exists($includepath))
                    include $includepath;

            });

            spl_autoload_register(function ($class_name) {
                $includepath = 'repository/'.$class_name.'.php';
                if(file_exists($includepath))
                    include $includepath;

            });

            $holder = PageViewIntializer::initialize();
            $holder->getAction()->setData($holder);
            if($holder->getAction()->postCheck()){
                $holder->getAction()->display();
            }else{
                $holder->getAction()->redirect();
            }




        ?>
  </body>
</html>
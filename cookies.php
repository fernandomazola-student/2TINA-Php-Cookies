<?php

$nome = "NomeDoCookie";
$valor = 100;
$expira = time() + (60*60*24*7);

setcookie($nome,$valor,$expira);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cookies</title>
  </head>
  <body>
      <?php
      //LEITURA DO COOKIE
        // if(isset($_COOKIE["NomeDoCookie"])){
        //     $nomeCookie = $_COOKIE["NomeDoCookie"];
        //     echo $nomeCookie;
        // }else{
        //     $nomeCookie = "";
        // }

        if($result){
          header("Location: cookies.php");
        }else{
          header("Location: cookiesredirect.html");
        }

            if(isset($_COOKIE['cookie_teste'])){
              echo "Você já passou aqui! Este cookie existe";
          }else{
            echo "Você NUNCA passou aqui";
            $result = setcookie('cookie_teste', 'algum valor...', time() + 3600);
          }



       ?>
  </body>
</html>

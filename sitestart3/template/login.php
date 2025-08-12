<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
      <link rel="stylesheet" href="template/css/style.css">  
    </head>
    <body><h1><?= RESULT; ?></h1>
        <div style=" text-align: center;">
        <div style=" text-align: left; display: inline-block;">
        <h1 style="text-align: center;">Вход</h1>
        <div style="max-width: 400px; ">
            <div style="width: 100%;">
      
    <form action="" method="POST" class="form">

  <div class="container">
    <label for="uname"><b>Имя Пользователя</b></label>
    <input type="hidden"  name="action" value = "classes/Login/log" required>
    <input type="text"name="login" required>

    <label for="psw"><b>Пароль</b></label>
    <input type="password" name="password" required>
    
    <button type="submit">Войти</button>
  </div>
</form> 
            </div>
        </div>
        </div>
       </div>
        
        
        
        
        

    </div>

        <?php
  
        ?>
    </body>
</html>

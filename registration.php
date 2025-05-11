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
    <body><h1><?php ?></h1>
                      
        <div style=" text-align: center;">
        <div style=" text-align: left; display: inline-block;">
        <h1 style="text-align: center;">Регистрация</h1>
        <div style="max-width: 400px; ">
        <div style="width: 100%;">
      
        <form action="" method="POST"  class="form">

        <div class="container">
            <input type="hidden"  name="action" value = 'classes/Registration/registr'>
            
            <label><b>Логин</b></label>      
            <input type="text" placeholder="" name="login">
            <!-- timepayment -->
            <!-- settings -->
            <!-- marker -->                 
            <label><b>Имя</b></label>      
            <input type="text" placeholder="" name="name">
            
            <label><b>Фамилия</b></label>    
            <input type="text" placeholder="" name="surname">
            
            <label><b>Отчество</b></label>      
            <input type="text" placeholder="" name="patronymic">
            
            <label><b>Номер телефона</b></label>      
            <input type="text" placeholder="" name="phone">
            <!-- photo --> 
            <!-- pasportphoto --> 
            <!-- inn --> 
            <!-- orn --> 
            <!-- oge --> 
            <label><b>Вид деятельности</b></label>      
            <select name="typeactivit">
                <option value="admin">Администрирование</option>
                <option value="analys">Aнализ данных</option>
                <option value="webmaster">Вебмастер</option>
                <option value="verstka">Верстка и дизайн</option>
                <option value="kompmaster">Комьютерный мастер</option>
                <option value="obrabotka">Обработка данных</option>
                <option value="coder">Программист</option>
                <option value="poddershka">Тех. поддержка</option>
            </select>
            <!-- status -->
            <label><b>Пароль</b></label>      
            <input type="text" placeholder="" name="pass">
            
            <label><b>Повтор пароля</b></label>      
            <input type="text" placeholder="" name="repeatPass">
          
            <button type="submit">Зарегистрироватся</button>  
        </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Отмена</button>

  </div>
            </div>
        </div>
    </div>
   
        
        

        <?php
        // put your code here
        ?>
    </body>
</html>
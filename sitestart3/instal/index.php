<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        
        
        <style type="text/css">
             /* Bordered form */
.form {
    border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
    width: 40%;
    border-radius: 50%;
}

/* Add padding to containers */
.container {
    padding: 16px;
}

/* The "Forgot password" text */
span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    }
} 





            
            
            
.password {

	position: relative;

}

.password-control {

	position: absolute;

	top: 11px;

	right: 6px;

	display: inline-block;

	width: 20px;

	height: 20px;

	background: url(https://snipp.ru/demo/495/view.svg) 0 0 no-repeat;

}

.password-control.view {

	background: url(https://snipp.ru/demo/495/no-view.svg) 0 0 no-repeat;

}


</style>



        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        
        
             <div style=" text-align: center;">
             <div style=" text-align: left; display: inline-block;">
        <h1 style="text-align: center;">CMS</h1>
        <div style="max-width: 400px; ">
            <div style="width: 100%;">
      
                <form action="instal.php" method="POST" class="form">
   
  <div class="imgcontainer">

  </div>

  <div class="container">
    <label for="uname"><b>Имя Хостинга БД</b></label>
    <input type="text" placeholder="Имя Хостинга БД" name="host" required>
      
      
      
    <label for="uname"><b>Имя Пользователя  БД</b></label>
    <input type="text" placeholder="Имя Пользователя  БД" name="logindb" required>

    <label for="psw"><b>Пароль БД</b></label>
    <input type="text" placeholder="пароль" name="passdb" required>
    
    
            <label for="psw"><b>Логин администратора</b></label>
    <input type="text" placeholder="Логин" name="login" required>
        <label for="psw"><b>Пароль для входа</b></label>
    <input type="text" placeholder="пароль" name="pass" required>
    
            <label for="psw"><b>Повтор пороля</b></label>
    <input type="text" placeholder="пароль" name="repitpass" required>
    
    
    <button type="submit">Установка</button>

  </div>


</form> 
            </div>
        </div>
        </div>
        
        
             </div>
        
        
    </body>
</html>

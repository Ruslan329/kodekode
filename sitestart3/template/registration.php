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
    <body><h1><?php echo RESULT;?></h1>
                      
        <div style=" text-align: center;">
        <div style=" text-align: left; display: inline-block;">
        <h1 style="text-align: center;">Регистрация</h1>
        <div style="max-width: 400px; ">
        <div style="width: 100%;">
      
        <form action="" method="POST"  class="form">

        <div class="container">
            <input type="hidden"  name="action" value = 'classes/Registration/registr'>
            
            
            <!-- timepayment -->
            <!-- settings -->
            <!-- marker -->                 
            <label><b>Имя</b></label>      
            <input type="text" placeholder="" name="name">
            
            <label><b>Фамилия</b></label>    
            <input type="text" placeholder="" name="surname">
            
            <label><b>Отчество</b></label>      
            <input type="text" placeholder="" name="fathername">
            
            <label><b>Номер телефона</b></label>      
            <input type="text" placeholder="" name="phone">
            <!-- photo --> 
            <!-- pasportphoto fathername --> 
            <!-- inn --> 
            <!-- orn --> 
            <!-- oge --> 
            <label><b>Вид деятельности</b></label>      
            
            
            
<select class="form-select" aria-label="Default select example" name="typeactivit">
  <option selected>Здесь  в.д</option>
<option>IT-сфера</option>
<option>Администрирование</option>
<option>Анализ данных</option>
<option>Вебмастер</option>
<option>Верстка и дизайн</option>
<option>Компьютерный мастер</option>
<option>Обработка данных</option>
<option>Программист</option>
<option>Техническая поддержка</option>
<option>Автомойка</option>
<option>Автосервис</option>
<option>Автоэвакуация и буксировка</option>
<option>Водитель</option>
<option>Перевозка грузов</option>
<option>Перевозка пассажиров</option>
<option>Аренда</option>
<option>Аренда квартир</option>
<option>Аренда машин</option>
<option>Предоставление лиценз</option>ий
<option>Прокат</option>
<option>Услуга по временному проживанию</option>
<option>Услуга по хранению</option>
<option>Ведение хозяйства</option>
<option>Гувернантка</option>
<option>Доставка</option>
<option>Няня</option>
<option>Повар</option>
<option>Сиделка</option>
<option>Социальная помощь</option>
<option>Сторож</option>
<option>Уборка и клининг</option>
<option>Химчистка</option>
<option>Животные</option>
<option>Вакцинация животных</option>
<option>Груминг</option>
<option>Дрессировщик</option>
<option>Кинология</option>
<option>Передержка животных</option>
<option>Уход за животными</option>
<option>Здоровье</option>
<option>Диетолог</option>
<option>Консультирование</option>
<option>Логопед</option>
<option>Массажист</option>
<option>Психолог</option>
<option>Тренер, инструктор</option>
<option>Информационные услуги</option>
<option>Исследования</option>
<option>Маркетинг, реклама</option>
<option>Обрядовые услуги</option>
<option>Опросы, сбор мнений</option>
<option>Переводчик</option>
<option>Красота</option>
<option>Консультирование</option>
<option>Косметолог</option>
<option>Маникюр, педикюр</option>
<option>Модель</option>
<option>Парикмахер</option>
<option>Стилист</option>
<option>Тату и пирсинг</option>
<option>Эпиляция</option>
<option>Обучение</option>
<option>Репетитор</option>
<option>Тренер</option>
<option>Учитель</option>
<option>Общественное питание</option>
<option>Кондитер</option>
<option>Обслуживание</option>
<option>Повар</option>
<option>Одежда</option>
<option>Модельер, дизайнер</option>
<option>Пошив</option>
<option>Ткани, кройка, шитьё</option>
<option>Природа</option>
<option>Благоустройство территории</option>
<option>Животноводство</option>
<option>Лес, охота, рыбалка</option>
<option>Переработка отходов</option>
<option>Приём или сдача лома</option>
<option>Сельхоз услуги</option>
<option>Прочее</option>
<option>Грузчик</option>
<option>Копирайтер</option>
<option>Носильщик</option>
<option>Обеспечение безопасности</option>
<option>Писатель</option>
<option>Платные туалеты</option>
<option>Развлечения</option>
<option>Аниматор</option>
<option>Артист, певец, музыкант</option>
<option>Ведущий, шоумен, тамада</option>
<option>Гид, экскурсовод</option>
<option>Ремонт</option>
<option>Бытовой ремонт</option>
<option>Дизайн</option>
<option>Ремонт бытовой техники</option>
<option>Ремонт квартир</option>
<option>Реставрация</option>
<option>Сантехник</option>
<option>Строительство</option>
<option>Техобслуживание</option>
<option>Электрик</option>
<option>Сделай сам</option>
<option>Кузнец</option>
<option>Металлообработка</option>
<option>Проектирование</option>
<option>Производственные услуги</option>
<option>Столяр, плотник</option>
<option>Услуги по сборке</option>
<option>Спорт</option>
<option>Консультирование</option>
<option>Массажист</option>
<option>Тренер, инструктор</option>
</select>
            <label><b>Название</b></label>      
            <input type="text" placeholder="" name="title">
            
            <label><b>Логин</b></label>      
            <input type="text" placeholder="" name="login">
            <!-- status -->
            <label><b>Пароль</b></label>      
            <input type="text" placeholder="" name="pass">
            
            <label><b>Повтор пароля</b></label>      
            <input type="text" placeholder="" name="repeatPass">
            
            <label><b>E-mail</b></label>      
            <input type="text" placeholder="" name="email">
          
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


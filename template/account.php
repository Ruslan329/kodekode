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
        <h1 style="text-align: center;">Аккаунт</h1>
        <div style="max-width: 400px; ">
        <div style="width: 100%;">
      
        <form action="" method="POST"  class="form">

        <div class="container">
          <h5><?php echo $result['login']."<br>"?></h5>    
            
       
            
            <form method="post" enctype="multipart/form-data">
                <input type="hidden"  name="action" value = 'classes/Account/updName'>
                <input type="hidden"  name="date" value="<?php echo $result['datetime']; ?>">    
                <input type="hidden"  name="typeactivit" value="<?php echo $result['typeactivit']; ?>">    
                <input type="hidden"  name="phone" value="<?php echo $result['phone']; ?>">    
                <input type="hidden"  name="surname" value="<?php echo $result['surname']; ?>">    
                <input type="hidden"  name="fathername" value="<?php echo $result['fathername']; ?>">    
                <input type="hidden"  name="pass" value="<?php echo $result['pass']; ?>">  
                <input type="hidden"  name="title" value="<?php echo $result['title']; ?>">    
                <input type="hidden"  name="email" value="<?php echo $result['email']; ?>">    
                <input type="hidden"  name="descr" value="<?php echo $result['descr']; ?>">   
                <label for="uname"><b>Имя</b></label>
	      	<input type="text" name="name" value="<?php echo $result['name']; ?>">
		<br>	     
                <button type="submit">Изменить имя</button>
	    </form>
        <?php
        
        ?>           
            <form method="post" enctype="multipart/form-data">
                <input type="hidden"  name="action" value = 'classes/Account/updSurname'>  
                <input type="hidden"  name="date" value="<?php echo $result['datetime']; ?>">    
                <input type="hidden"  name="typeactivit" value="<?php echo $result['typeactivit']; ?>">    
                <input type="hidden"  name="phone" value="<?php echo $result['phone']; ?>">    
                <input type="hidden"  name="name" value="<?php echo $result['name']; ?>">    
                <input type="hidden"  name="fathername" value="<?php echo $result['fathername']; ?>">    
                <input type="hidden"  name="pass" value="<?php echo $result['pass']; ?>">  
                <input type="hidden"  name="title" value="<?php echo $result['title']; ?>">    
                <input type="hidden"  name="email" value="<?php echo $result['email']; ?>">  
                <input type="hidden"  name="descr" value="<?php echo $result['descr']; ?>">  
                <label for="uname"><b>Фамилия</b></label>
	      	<input type="text" name="surname" value="<?php echo $result['surname']; ?>">
		<br>
	        <button type="submit">Изменить фамилию</button>
	    </form>
            <br>
        <?php
        
        ?>           
            <form method="post" enctype="multipart/form-data">
                <input type="hidden"  name="action" value = 'classes/Account/updFathername'> 
                <input type="hidden"  name="date" value="<?php echo $result['datetime']; ?>">    
                <input type="hidden"  name="typeactivit" value="<?php echo $result['typeactivit']; ?>">    
                <input type="hidden"  name="phone" value="<?php echo $result['phone']; ?>">    
                <input type="hidden"  name="name" value="<?php echo $result['name']; ?>">    
                <input type="hidden"  name="surname" value="<?php echo $result['surname']; ?>">    
                <input type="hidden"  name="pass" value="<?php echo $result['pass']; ?>">  
                <input type="hidden"  name="title" value="<?php echo $result['title']; ?>">    
                <input type="hidden"  name="email" value="<?php echo $result['email']; ?>">  
                <input type="hidden"  name="descr" value="<?php echo $result['descr']; ?>">  
                <label for="uname"><b>Отчество</b></label>
	      	<input type="text" name="fathername" value="<?php echo $result['fathername']; ?>">
		<br>
	        <button type="submit">Изменить отчество</button>
	    </form>
            <br>
        <?php
        
        ?> 
            <form method="post" enctype="multipart/form-data">
                <input type="hidden"  name="action" value = 'classes/Account/updPass'>
                <input type="hidden"  name="date" value="<?php echo $result['datetime']; ?>">    
                <input type="hidden"  name="typeactivit" value="<?php echo $result['typeactivit']; ?>">    
                <input type="hidden"  name="phone" value="<?php echo $result['phone']; ?>">    
                <input type="hidden"  name="name" value="<?php echo $result['name']; ?>">    
                <input type="hidden"  name="surname" value="<?php echo $result['surname']; ?>">    
                <input type="hidden"  name="fathername" value="<?php echo $result['fathername']; ?>">  
                <input type="hidden"  name="title" value="<?php echo $result['title']; ?>">    
                <input type="hidden"  name="email" value="<?php echo $result['email']; ?>">
                <input type="hidden"  name="descr" value="<?php echo $result['descr']; ?>">  

                <label for="uname"><b>Старый пароль</b></label>
	         	<input type="password" name="ppass">
                <br>              
                <label for="uname"><b>Новый пароль</b></label>
	         	<input type="password" name="npass">
		        <br>
                <label for="uname"><b>Повтор нового пароля</b></label>
	         	<input type="password" name="repeatnpass">
		        <br>
	            <button type="submit">Изменить пароль</button>
	    </form>
        <br>
        <?php
             
        echo "<br>";  
        
        $path = 'i/avatar_'.$_SESSION['user'].'.jpeg';
        
        if(!file_exists($path)){           
        ?>    
            <form method="post" enctype="multipart/form-data">
                <input type="hidden"  name="action" value = 'classes/imageUpload/upload'>     
	      	<input type="file" name="file">
		<br>
	        <button type="submit">Загрузить аватар</button>         
	    </form>
            <br>
        
        <?php
        }
        elseif(file_exists($path)){
        ?>        
            <img src="i/avatar_<?php echo $_SESSION['user']; ?>.jpeg" alt="avatar">          
            <form method="post" enctype="multipart/form-data">
                <input type="hidden"  name="action" value = 'classes/imageUpload/delete'>
	        <button type="submit">Удалить аватар</button>
	    </form>
            <br>
        <?php
        }
        ?> 
            <form method="post" enctype="multipart/form-data">
                <input type="hidden"  name="action" value = 'classes/Account/accountData'>
                <input type="hidden"  name="date" value="<?php echo $result['datetime']; ?>">    
                <input type="hidden"  name="typeactivit" value="<?php echo $result['typeactivit']; ?>">    
                <input type="hidden"  name="phone" value="<?php echo $result['phone']; ?>">    
                <input type="hidden"  name="name" value="<?php echo $result['name']; ?>">    
                <input type="hidden"  name="surname" value="<?php echo $result['surname']; ?>">    
                <input type="hidden"  name="pass" value="<?php echo $result['pass']; ?>">  
                <input type="hidden"  name="title" value="<?php echo $result['title']; ?>">    
                <input type="hidden"  name="email" value="<?php echo $result['email']; ?>">  
                <input type="hidden"  name="descr" value="<?php echo $result['fathername']; ?>"> 
                <label for="uname"><b>Описание</b></label>
                <textarea rows="10" cols="45" name="descr"><?php echo $result['descr']; ?></textarea>
                
                <?php 
                if(empty($result['descr'])){ 
                ?> 
                    <button type="submit">Добавить описание</button>
                <?php                 
                } 
                elseif(!empty($result['descr'])){ 
                ?> 
                    <button type="submit">Изменить описание</button>
                <?php  
                }               
                ?>   
        </div>

        

        <?php
        // put your code here
        ?>
    </body>
</html>

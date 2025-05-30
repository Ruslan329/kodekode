  <nav class="navbar navbar-expand-lg navbar-light bg-light">     
    <a class="navbar-brand" href="#">Сайт</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="http://<?= HOSTNAME; ?>/loged">Главная</a>
        </li>      
        <li class="nav-item">
          <a class="nav-link" href="http://<?= HOSTNAME; ?>/account">Личный кабинет</a>
        </li>   
        <li class="nav-item dropdown">        
            <?php  
              foreach(RESULTCATEGORIES as $key => $items){
                foreach($items as $k => $value1){
                  echo "<a style='display: inline;' class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>".$value1."</a>";
                  echo  "<ul class='dropdown-menu' aria-labelledby='navbarDropdown'><li>";
                  foreach(RESULTPAGENAME as $key => $items){                             
                    if($items['cat'] == $value1){    
                      echo "<a href='http://sitestart/page/$items[id]'>"  .$items['page'].  "<br /></a>";           
                    }  
                  } 
                  echo "</li></ul>"; 
                }
              } 
              
            ?>
        </li>
      </ul>
    </div> 
  </nav>





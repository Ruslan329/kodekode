<?php
session_start();
spl_autoload_extensions('.php');
spl_autoload_register(); 

require_once 'settings/settings.php';
//echo HOSTNAME;


$obj = new Controller;
$result = $obj->result();


define("RESULT",    $result);

//-----------------------------------



  
router\Router::route('/test', function(){
    require_once 'template/test.php';
});

// ниже пример использованияж пример!
router\Router::route('/', function(){
    
        $obj = new \classes\Category;
    $obj1 = new \classes\Admin();
    $obj2 = new \classes\AdminPage();
    $resu = $obj->cat();
    $resu2 = $obj1->catId();
    $resu3 = $obj->pageName();
    $resu4 = $obj2->page();

    define("RESULTCATEGORIES",    $resu);  
    define("RESULTCATEGORIESID",    $resu2); 
    define("RESULTPAGENAME",    $resu3);
    define("RESULTAPAGEADMIN",    $resu3);
    
echo 'главная';
require_once 'template/Page.php';
});
router\Router::route('/registration', function(){
    //classes/Registration/registr
    require_once 'template/registration.php';
});
router\Router::route('/login', function(){  
    require_once 'template/login.php';
});





router\Router::route('/admin', function(){
    require_once 'template/admin.php';
});
router\Router::route('/adminPanel', function(){   
    $obj = new \classes\Category;
    $obj1 = new \classes\Admin();
    $obj2 = new \classes\AdminPage();
    $resu = $obj->cat();
    $resu2 = $obj1->catId();
    $resu3 = $obj->pageName();
    $resu4 = $obj2->page();

    define("RESULTCATEGORIES",    $resu);  
    define("RESULTCATEGORIESID",    $resu2); 
    define("RESULTPAGENAME",    $resu3);
    define("RESULTAPAGEADMIN",    $resu3);
    //print_r(RESULTAPAGEADMIN);
    require_once 'template/panel.php';
});
router\Router::route('/catdel', function(){
    $obj = new \classes\Category;
    $obj1 = new \classes\Admin();
    $resu = $obj->cat();
    $resu2 = $obj1->catId();
    $resu3 = $obj->pageName();

    define("RESULTCATEGORIES",    $resu);  
    define("RESULTCATEGORIESID",    $resu2); 
    define("RESULTPAGENAME",    $resu3);
    require_once 'template/catdel.php';
});
router\Router::route('/catadd', function(){
    require_once 'template/catadd.php';
});


router\Router::route('/pagedel', function(){
    $obj = new \classes\Category;
    $obj1 = new \classes\Admin();
    $obj2 = new \classes\AdminPage();
    $resu = $obj->cat();
    $resu2 = $obj1->catId();
    $resu3 = $obj->pageName();
    $resu4 = $obj2->page();

    define("RESULTCATEGORIES",    $resu);  
    define("RESULTCATEGORIESID",    $resu2); 
    define("RESULTPAGENAME",    $resu3);
    define("RESULTAPAGEADMIN",    $resu3);
//    print_r(RESULTAPAGEADMIN);
    require_once 'template/pagedel.php';
});


router\Router::route('/pageadd', function(){
    require_once 'template/admin.php';
});
router\Router::route('/uppage/(\d+)', function($id){  
    $obj = new \classes\UpPage();
    $result = $obj->update($id);
    define("RESULTUP", $result);  
 //   print_r(RESULTUP);
    require_once 'template/uppage.php';  
});




// router\Router::route('/(\d+)', function($category){
//     echo $category." site/цифры";
// });
//---------------------------
//router\Router::route('/(\w+)/(\d+)', function($category, $id){  
//echo '/(\w+)/(\d+)';
//});

router\Router::route('/loged', function(){  
    $obj = new \classes\Category;
    $obj1 = new \classes\Admin();
   $resu = $obj->cat();
   $resu2 = $obj1->catId();
    $resu3 = $obj->pageName();
 
    
  define("RESULTCATEGORIES",    $resu);  
    define("RESULTCATEGORIESID",    $resu2); 
    define("RESULTPAGENAME",    $resu3);

    require_once 'template/loged.php';
});
router\Router::route('/account', function(){
    $obj = new \classes\Category;
    $obj1 = new \classes\Admin();
   $resu = $obj->cat();
   $resu2 = $obj1->catId();
    $resu3 = $obj->pageName();
 
    
  define("RESULTCATEGORIES",    $resu);  
    define("RESULTCATEGORIESID",    $resu2); 
    define("RESULTPAGENAME",    $resu3);

    
    require_once 'template/account.php';
});



router\Router::route('/(\w+)/(\d+)', function($page, $id){  
    echo $page.$id;
    
    $obj = new \classes\Category;
    $resu = $obj->cat();
    $resu3 = $obj->pageName();     
    define("RESULTCATEGORIES",    $resu);  
    define("RESULTPAGENAME",    $resu3);

    
      $obj =  new classes\Page;
  $result = $obj->id($id);
  define("RESULTPAGE",    $result);
  require_once 'template/Page.php';
});



  
  
  
  





router\Router::execute($_SERVER['REQUEST_URI']);


?>



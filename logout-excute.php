<?php
    session_start();
    
    
    //header('Location:PHP-PROJECT-COMPONENT/index.php');
    //unset($_SESSION['user']);  
    print_r($_GET['location'])  ;
    if($_GET['location']=='AD'){
        unset($_SESSION['admin']);  
?>
    <script>
                                            
        window.location.href='login.php';
                                                    
    </script>

<?php        
    }  else{
        unset($_SESSION['user']);  
?> 
    <script>
                                            
        window.location.href='./index.php';
                                                                        
    </script>

<?php
    }
    
?>
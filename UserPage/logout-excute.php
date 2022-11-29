<?php
    session_start();
    
    
    //header('Location:PHP-PROJECT-COMPONENT/index.php');
    unset($_SESSION['user']);  
    print_r($_GET['location'])  ;
    if($_GET['location']=='AD'){
?>
    <script>
                                            
        window.location.href='login.php';
                                                    
    </script>

<?php        
    }  else{
?> 
    <script>
                                            
        window.location.href='./index.php';
                                                                        
    </script>

<?php
    }
    
?>
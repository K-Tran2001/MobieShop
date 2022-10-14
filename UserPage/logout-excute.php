<?php
    session_start();
    
    
    //header('Location:PHP-PROJECT-COMPONENT/index.php');
    unset($_SESSION['user']);    
    if($_GET['location']=='header'){
?>
    <script>
                                            
        window.location.href='./PHP-PROJECT-COMPONENT/index.php';
                                                    
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
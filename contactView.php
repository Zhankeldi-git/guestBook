<!DOCTYPE html>
<html>
    <head>
    <title>
        
        
        </title>
    
    </head>
    
    <body>
<div class="view">
            <ul>
        <?php
            require 'dbconnect.php';
        
            $query = $pdo->query('SELECT * FROM `mydate` ORDER BY `id` DESC');
        
            while($tmp = $query->fetch(PDO::FETCH_ASSOC)){
                
                echo'<p> Name:'.$tmp[db_name].'</p>';
                echo'<p> Lastname:'.$tmp[db_last].'</p>';
                echo'<p> Bbday:'. $tmp[db_bday].'</p>';
                echo'<p> Age:'.$tmp[db_age].'</p>';
                echo '<hr>';
        
                
            };

        ?>
</ul>
</div>
        </body>
    </html>


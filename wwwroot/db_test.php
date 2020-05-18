<?php
    $mysqlServer = ['mysql56','mysql57'];

    foreach($mysqlServer as $mysql){
       echo  helper($mysql);
    } 
    
    function helper($link){
        $mysql_server_name = "$link"; 
        $mysql_username = 'root'; 
        $mysql_password = '123456'; 
        $conn=mysqli_connect($mysql_server_name,$mysql_username,$mysql_password); 
        $sql = 'select version() as version';
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($query);
        return $row['version'];
    }

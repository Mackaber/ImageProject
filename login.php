<?php 
if(isset($_POST['submit'])){ 
    $dbHost = "localhost";        //Location Of Database usually its localhost 
    $dbUser = "root";            //Database User Name 
    $dbPass = "";            //Database Password 
    $dbDatabase = "db1150184";    //Database Name 
     
    $db = mysql_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database."); 
    //Connect to the databasse 
    mysql_select_db($dbDatabase, $db)or die("Couldn't select the database."); 
    //Selects the database 
     
    /* 
    The Above code can be in a different file, then you can place include'filename.php'; instead. 
    */ 
     
    //Lets search the databse for the user name and password 
    //Choose some sort of password encryption, I choose sha256 
    //Password function (Not In all versions of MySQL). 
    $email = mysql_real_escape_string($_POST['email']); 
    $password = hash('sha256', mysql_real_escape_string($_POST['password'])); 
    $sql = mysql_query("SELECT * FROM usuarios  
        WHERE mail='$email' AND 
        password='$password' 
        LIMIT 1"); 

    if(mysql_num_rows($sql) == 1){ 
        $row = mysql_fetch_array($sql); 
        session_start(); 
        $_SESSION['nombre'] = $row['nombre']; 
        $_SESSION['mail'] = $row['mail']; 
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['logged'] = TRUE; 
        
        header("Location: index.php"); // Modify to go to the page you would like 
        echo "Loggeado";
        echo $_SESSION['logged'];
        exit; 
    }else{ 
        header("Location: index.php?mensaje=Contraseña Incorrecta"); 
        exit; 
    } 
    
}else{    //If the form button wasn't submitted go to the index page, or login page 
    header("Location: index.php?mensaje=No se presiono el boton de login");   
    exit; 
} 
?>
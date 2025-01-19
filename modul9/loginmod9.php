<?php 
    session_start(); 
    error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED); 
    $cnn = mysqli_connect('localhost','root', '' , 'informatikaa');

    $Username = $_POST['Username']; 
    $Password = $_POST['Password']; 
    $submit = $_POST['submit']; 

    if($submit){ 
        $sql = "select * from user where Username='$Username' and Password='$Password'"; 
        $query = mysqli_query($conn, $sql); 
        $row = mysqli_fetch_array($query); 
        if($row['Username']!=""){ 
            //berhasil login 
            $_SESSION['Username']=$row['Username']; 
            $_SESSION['Status']=$row['Status']; 
            ?> 
            <script language script="JavaScript"> 
                alert('Anda Login Sebagai <?php echo $row['Username']; ?>'); 
                document.location='hasilloginmod9.php';
            </script> 
        
        <?php  
    }else{ 
            //gagal login 
            ?> 
            <script language script="JavaScript"> 
                alert('Gagal Login'); 
                document.location='loginmod9.php'; 
            </script>  
            <?php 
        } 
    } 
?> 
<form method='post' action='loginmod9.php'> 
<p align='center'> 
    Username : <input type='text' name='Username'><br> 
    Password : <input 
    type='Password' 
    name='Password'><br> 
    <input type='submit' name='submit'> 
</p> 
</form>
<html>
    <body>
        <div class="system_name">
            <h2>中山學生租屋網</h2>
        </div>

        <div class="login_page">
            <div id="container1">
                <div class="login">  
                    <h3>房東登入</h3>
                    <form action="" method="post">
                        <input type="text" id="contact" name="contact" placeholder="手機號碼" required>
                        <input type="password" id="password" name="password" placeholder="密碼" required>
                        <input type="submit" value="登入" class="submit" onclick="'"><!--登入後回主頁，要加主頁連結-->
                    </form>  
                    <div class="go">
                    <h5 onclick="window.location.href='register_lord.php'">註冊帳號</h5>
                    <h5 onclick="window.location.href='main1.php'">回首頁</h5>
                    </div>
                </div><!-- login end-->
            </div><!-- container1 end-->
        </div><!-- login_page end-->
    </body>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        $contact = $_POST["contact"];
        $password = $_POST["password"];
        $authenticated = false;
        $db = new PDO("mysql:dbname=dbfinal", "root", "0000");
        $contact = $db->quote($contact);
        $password = $db->quote($password);
        $rows = $db->query("SELECT * FROM Lord WHERE contact=$contact AND password=$password");
        $authenticated = false;
        if($rows->rowCount() > 0){
            $authenticated = true;
        }
        if($authenticated){
            header('location:main_lord.php');
            // echo '<div class="echo"><p>登入成功！</p></div>';
            ?>
        <?php    
        }
        else{
            echo '<div class="echo"><p>您輸入的手機號碼號碼或密碼錯誤，請再試一次！</p></div>';
        }
        }
    ?>
</html>

<style>
    /* 主色：#99bd60 副色：#1b3a59*/
    *{
        font-family:微軟正黑體;  
    }

    body{
        background-color: white;
    }

    #contact, #password, h3{
        width: 200px;
        height: 30px;
        margin: 10px;
        color: #99bd60;
    }

    h5{
        margin: 20px;
        color: #a3a2a3;
    }

    h5:hover{
        color: black;
    }

    #container1{
        margin: 50px;
        padding: 10px;
        width: 230px;
        height: 250px;
        background-color: white;
        border-radius: 5px;
        border-top: 10px solid #99bd60;
        box-shadow: 0 0px 70px rgba(0, 0, 0, 0.1);
        
        /*定位對齊*/
        position:relative;   
        margin: auto;
        top: 100px;
        //text-align:center;  
    }

    .system_name{
        /*定位對齊*/
        position:relative;   
        margin: auto;
        top: 100px;
        text-align:center; 
    }

    .submit{
        color: white;  
        background: #99bd60;
        width: 200px;
        height: 30px;
        margin: 10px;
        padding: 5px;
        border-radius: 5px;
        border: 0px;
    }

    .submit:hover{
      background: #1b3a59;
    }

    input{
        padding: 5px;
        border: none; 
        border:solid 1px #ccc;
        border-radius: 5px;
    }

    .echo{
        position:relative;   
        margin: auto;
        top: 100px;
        text-align:center;
    }

    .go{
        display: flex;
        margin-top:-20px;
    }

</style>



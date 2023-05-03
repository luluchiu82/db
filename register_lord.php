
<html>
    <body>
        <div class="system_name">
            <h2>中山學生租屋網</h2>
        </div>
        <div class="signup_page">
            <div id="container2">
                <div class="signup">  
                    <h3>房東註冊</h3>
                    <form action="" method="post">
                        <input type="text" id="lordname" name="lordname" placeholder="使用者全名" required>
                        <input type="text" id="gender" name="gender" placeholder="性別：男/女" required>
                        <input type="tel" id="contact" name="contact" placeholder="聯絡電話" required>
                        <input type="text" id="password" name="password" placeholder="密碼" required>
                        <input type="text" id="comfirm_password" name="comfirm_password" placeholder="確認密碼" required>           
                        <input type="submit" value="註冊" class="submit" onclick="'" name="submit">
                    </form>  
                    <div class="go">
                    <h5 onclick="window.location.href='login_lord.php'">登入帳號</h5>
                    <h5 onclick="window.location.href='main1.php'">回首頁</h5>
                    </div>
                </div><!-- signup end-->
            </div><!-- container2 end-->
        </div><!-- signup_page end--> 
    </body>
</html>
<?php
        $db = new PDO("mysql:dbname=dbfinal", "root", "0000");
        if(isset($_POST['submit'])){
        $lordname = $_POST['lordname'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $password = $_POST['password'];
        $sql = "INSERT INTO `Lord`(`lordname`, `gender`, `contact`, `password`) VALUES ('{$lordname}', '{$gender}', '{$contact}', '{$password}')";
        $result = $db->query($sql);
        header('location:login_lord.php');
        echo '<div class="echo"><p>新增成功！請登入帳號</p></div>';
    }
    ?>

<style>
    /* 主色：#99bd60 副色：#1b3a59*/
    *{
        font-family:微軟正黑體;  
    }

    body{
        background-color: white;
    }

    h3, #lordname, #gender, #contact, #password, #comfirm_password{
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

    #container2{
        margin: 50px;
        padding: 10px;
        width: 230px;
        height: 400px;
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


<html>
    <body>
        <div class="system_name">
            <h2>中山學生租屋網</h2>
        </div>

        <div class="login_page">
            <div id="container1">
                <div class="login">  
                    <h3>學生登入</h3>
                    <form action="" method="post">
                        <input type="text" id="phone" name="phone" placeholder="手機號碼" required>
                        <input type="password" id="password" name="password" placeholder="密碼" required>
                        <input type="submit" value="登入" class="submit" onclick="'"><!--登入後回主頁，要加主頁連結-->
                    </form>  
                    <div class="go">
                    <h5 onclick="window.location.href='register_stu.php'">註冊帳號</h5>
                    <h5 onclick="window.location.href='main1.php'">回首頁</h5>
                    </div>
                </div><!-- login end-->
            </div><!-- container1 end-->
        </div><!-- login_page end-->
    </body>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $authenticated = false;
        $db = new PDO("mysql:dbname=dbfinal", "root", "0000");
        $phone = $db->quote($phone);
        $password = $db->quote($password);
        $rows = $db->query("SELECT * FROM Member WHERE phone=$phone AND password=$password");
        $authenticated = false;
        if($rows->rowCount() > 0){
            $authenticated = true;
        }
        if($authenticated){
            header('location:main_stu.php');
            // echo '<div class="echo"><p>登入成功！</p></div>';
            alert(登入成功！);
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
    *{
        font-family:微軟正黑體;  
    }

    body{
        background-color: white;
    }

    #phone, #password, h3{
        width: 200px;
        height: 30px;
        margin: 10px;
        color: #1b3a59;
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
        border-top: 10px solid #1b3a59;
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
        background: #1b3a59;
        width: 200px;
        height: 30px;
        margin: 10px;
        padding: 5px;
        border-radius: 5px;
        border: 0px;
    }

    .submit:hover{
      background: #99bd60;
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

<!-- <script>
    $.ajax({
    type: 'POST',
    url: '/login_stu.php',
    data: { phone: 'phone', password: 'password' },
    dataType: 'json',
    success: function(data) {
      if (data.success) {
        // 登入成功，跳轉到主頁面
        window.location.href = 'main_stu.php';
        // 在主頁面顯示成功訊息
        alert(登入成功！);
      } else {
        // 登入失敗，顯示錯誤訊息
        alert(您輸入的手機號碼號碼或密碼錯誤，請再試一次！);
      }
    },
    error: function() {
      // 處理錯誤
    }
    });
</script> -->



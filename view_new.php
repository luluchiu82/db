<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>中山學生租屋網</title>
    <link href="webpage_new.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  </head>
  <body>
    <!-- navbar -->
    <div class="longnavbar">
      <ul>
        <li><a href="#home">中山學生租房網</a></li>
        <li><a class = "back" onclick="window.location.href='main1.php'">回首頁</a></li>
        <li style="float:right"><a class="active" id="active" onclick="window.location.href='.php'">已刊登</a></li>
      </ul>
    </div>  

  <!-- 圖片 -->
  <form action="" method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-item active">
              <input type="file" id="mainphoto" name="mainphoto" class="d-block w-100">
            </div>
        </div>
      </div>
      <div class="col-lg-3">
        <input type="file" id="photo1" name="photo1" class="d-block w-100">
        <br>
        <input type="file" id="photo1" name="photo2" class="d-block w-100">
      </div> 
      <div class="col-lg-3">
        <input type="file" id="photo1" name="photo3" class="d-block w-100">
        <br>
        <input type="file" id="photo1" name="photo4" class="d-block w-100">
      </div> 
      <br>
      <div class="col-lg-6">
      <br>
      <div class="container text-center">
        <div class="row justify-container-center">
          <div class="col-6 title">
            <h2 style="text-align:left"><strong><input type="text" id="title" name="title" placeholder="房屋標題" ></strong></h2>
          </div>
            <div class="row">
              <br>
            </div>
          <div class="row" id="tags">
          <div class="col-2"class = "tagss">
            <span class="badge bg-info text-dark" ><input type="text" id="type" name="type" placeholder="雅房/套房/家庭式套房" ></span>
          </div>
          <div class="col-2">
            <!-- <span class="badge bg-info text-dark">免管理費</span> -->
          </div>
          <div class="col-2"class = "tagss">
            <span class="badge bg-info text-dark" ><input type="text" id="size" name="size" placeholder="坪數" ></span>
          </div>
          <div class="col-2">
            <!-- <span class="badge bg-info text-dark">免管理費</span> -->
          </div>
          <div class="col-2">
            <span class="badge bg-info text-dark" class = "tagss"><input type="text" id="pet" name="pet" placeholder="可/不可養寵物" ></span>
          </div> 
          <div class="col-2">
            <!-- <span class="badge bg-info text-dark">免管理費</span> -->
          </div>
          <div class="col-2">
            <span class="badge bg-info text-dark" class = "tagss"><input type="text" id="cook" name="cook" placeholder="可/不可開伙" ></span>
          </div>
          </div>
          <div class="row">
          <br>
          </div>
          <div class="col-9">
          <div class="col-6">
            <h5><input type="text" id="address" name="address" placeholder="房屋地址" ></h5>
          </div> 
      </div>                  
    </div>
    </div>
    </div>
    <div class="row">
    <br>
    </div>
    <hr>

    <div class="col-7">
      <h2><strong>設備與設施</strong></h2>   
    </div>
    <div class="row">
    <br>
    </div>
    <div class="row">
    <input type="text" id="equipment" name="equipment" placeholder="租屋處設備與設施介紹">
    </div>  

    <hr>               
      <div class="container">
        <div class="row">
          <div class="col-9">
            <h2><strong>屋主說</strong></h2> 
        </div>
        <div class="col-8">
          <div  class="info">
            <input type="text" id="notice" name="notice" placeholder="注意事項">        
          </div> 
         </div> 
      </div>
 <hr>
    <div class="container">
          <div class="col-6">
            <h2><strong>房屋詳情</strong></h2> 
          </div>
          <p> <strong>租金費用</strong></p>
   
        <div class="col-8">
          <div  class="info2">
          <input type="text" id="contract" name="contract" placeholder="最短租期（月）">月
          <br>
          <input type="text" id="rental" name="rental" placeholder="租金（月）">元/月
          <br>
          <input type="text" id="deposit" name="deposit" placeholder="押金費用">元
          <br>
          <input type="text" id="water" name="water" placeholder="水費（月）">元/月
          <br>
          <input type="text" id="electric" name="electric" placeholder="電費（月）">元/月       
          </div> 
         </div> 
      </div>
      <hr>
      <input type="submit" value="確認送出" class="submit" onclick="'" name="submit">
      <input type="reset" value="重設" class="reset" onclick="'" name="reset">
      

  <title>跟隨頁面滾動的區塊</title>

  <div id="myDiv">
    <p>屋主:<input type="text" id="contact_name" name="contact_name" placeholder="屋主姓名"></p>
		<p>屋主電話:<input type="text" id="contact_phone" name="contact_phone" placeholder="屋主電話"></p>
  </div>
  </form>
</body>
</html>
<?php
        $db = new PDO("mysql:dbname=dbfinal; host=localhost", "root","0000");
        if (!$db) {
            $error = $db->errorInfo();
            echo "Failed to connect to database: " . $error[2];
        }
        $max="SET global max_allowed_packet=33554432";
        $db->exec($max);
        // if($db){
        //   echo 'yes';
        // }
        if(isset($_POST['submit'])){
        // 房屋資訊
        // $mainphoto = $_POST['mainphoto'];
        // $photo1 = $_POST['photo1'];
        // $photo2 = $_POST['photo2'];
        // $photo3 = $_POST['photo3'];
        // $photo4 = $_POST['photo4'];
        $title = $_POST['title'];
        $type = $_POST['type'];
        $size = $_POST['size'];
        $pet = $_POST['pet'];
        $cook = $_POST['cook'];
        $address = $_POST['address'];
        $equipment = $_POST['equipment'];
        $notice = $_POST['notice'];
        $contract = $_POST['contract'];
        $rental = $_POST['rental'];
        $deposit = $_POST['deposit'];
        $water = $_POST['water'];
        $electric = $_POST['electric'];
        $contact_name = $_POST['contact_name'];
        $contact_phone = $_POST['contact_phone'];;
        // 房屋資訊
        $sql = "INSERT INTO `House`(`title`,`type`, `size`, `pet`, `cook`, `address`, `equipment`, `notice`, `contract`, `rental`, `deposit`, `water`, `electric`, `contact_name`, `contact_phone`) VALUES ('{$title}','{$type}','{$size}','{$pet}','{$cook}', '{$address}', '{$equipment}', '{$notice}', '{$contract}', '{$rental}', '{$deposit}', '{$water}', '{$electric}', '{$contact_name}', '{$contact_phone}')";
        // $result = $db->query($sql);
        $db -> exec($sql);
        header('location:main.php');
        // echo '<div class="echo"><p>新增成功！</p></div>';
    
    if(($_FILES['mainphoto']['name'])!=NULL){
      $img=$_FILES['mainphoto']['name'];
      $file_temp = $_FILES['mainphoto']['temp_name'];
      $fp=fopen($file_temp, 'r');
      $data1=fread($fp, filesize($file_temp));
      $data1=addslashes($data1);
      $sql1="INSERT INTO `House`(`mainphoto`) VALUES ('{$data1}')";
      $db -> exec($sql1);
    }
    if(($_FILES['photo1']['name'])!=NULL){
      $img=$_FILES['photo1']['name'];
      $file_temp = $_FILES['photo1']['temp_name'];
      $fp=fopen($file_temp, 'r');
      $data2=fread($fp, filesize($file_temp));
      $data2=addslashes($data2);
      // $sql2="INSERT INTO `House` SET photo1 = '$data2'";
      $sql2="INSERT INTO `House`(`photo1`) VALUES ('{$data2}')";
      $db -> exec($sql2);
    }
    if(($_FILES['photo2']['name'])!=NULL){
      $img=$_FILES['photo2']['name'];
      $file_temp = $_FILES['photo2']['temp_name'];
      $fp=fopen($file_temp, 'r');
      $data3=fread($fp, filesize($file_temp));
      $data3=addslashes($data3);
      // $sql3=$sql2="INSERT INTO `House` SET photo2 = '$data3'";
      $sql3="INSERT INTO `House`(`photo2`) VALUES ('{$data3}')";
      $db -> exec($sql3);
    }
    if(($_FILES['photo3']['name'])!=NULL){
      $img=$_FILES['photo3']['name'];
      $file_temp = $_FILES['photo3']['temp_name'];
      $fp=fopen($file_temp, 'r');
      $data4=fread($fp, filesize($file_temp));
      $data4=addslashes($data4);
      // $sql4=$sql2="INSERT INTO `House` SET photo3 = '$data4'";
      $sql4="INSERT INTO `House`(`photo3`) VALUES ('{$data4}')";
      $db -> exec($sql4);
    }
    if(($_FILES['photo4']['name'])!=NULL){
      $img=$_FILES['photo4']['name'];
      $file_temp = $_FILES['photo4']['temp_name'];
      $fp=fopen($file_temp, 'r');
      $data5=fread($fp, filesize($file_temp));
      $data5=addslashes($data5);
      // $sql5=$sql2="INSERT INTO `House` SET photo4 = '$data5'";
      $sql5="INSERT INTO `House`(`photo4`) VALUES ('{$data5}')";
      $db -> exec($sql5);
    }
  }
    ?>
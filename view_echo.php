<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>中山學生租屋網</title>
    <link href="webpage.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  </head>
  <body>
    <!-- navbar -->
    <div class="longnavbar">
      <ul class="nav">
        <li class="navs"><a href="#home">中山學生租房網</a></li>
        <li class="navs"><a class = "back" onclick="window.location.href='main1.php'">回首頁</a></li>
        <li class="navs" id="navs2"><a class="active" id="active" onclick="window.location.href='.php'">已刊登物件</a></li>
      </ul>
    </div>  

<?php 
  $db = new PDO("mysql:dbname=dbfinal", "root", "0000");
  // 準備查詢指令
  $sql = "SELECT * FROM House WHERE hId = 5";
  // 執行查詢指令
  $stmt = $db->query($sql);
  // 取得查詢結果
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
		?>

  <!-- 圖片 -->
  <form action="" method="post">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-item active">
              <!-- <input type="file" id="mainphoto" name="mainphoto" class="d-block w-100"> -->
              <?php echo '<img class="d-block w-100 id="showpic" src="data:image;base64,' .base64_encode($result['mainphoto']).'"/>' ?>
            </div>
        </div>
      </div>
      <div class="col-lg-3">
        <!-- <input type="file" id="photo1" name="photo1" class="d-block w-100"> -->
        <?php echo '<img class="d-block w-100 id="showpic" src="data:image;base64,' .base64_encode($result['photo1']).'"/>' ?>
        <br>
        <!-- <input type="file" id="photo1" name="photo2" class="d-block w-100"> -->
        <?php echo '<img class="d-block w-100 id="showpic" src="data:image;base64,' .base64_encode($result['photo2']).'"/>' ?>
      </div> 
      <div class="col-lg-3">
        <!-- <input type="file" id="photo1" name="photo3" class="d-block w-100"> -->
        <?php echo '<img class="d-block w-100 id="showpic" src="data:image;base64,' .base64_encode($result['photo3']).'"/>' ?>
        <br>
        <!-- <input type="file" id="photo1" name="photo4" class="d-block w-100"> -->
        <?php echo '<img class="d-block w-100 id="showpic" src="data:image;base64,' .base64_encode($result['photo4']).'"/>' ?>
      </div> 
      <br>
      <div class="col-lg-6">
      <br>
      <div class="container text-center">
        <div class="row justify-container-center">
          <div class="col-6 title">
            <h2 style="text-align:left"><strong>
              <!-- <input type="text" id="title" name="title" placeholder="房屋標題" > -->
              <?php echo $title = $result['title'];?>
            </strong></h2>
          </div>
            <div class="row">
              <br>
            </div>
          <div class="row" id="tags">
          <div class="col-2">
            <span class="badge bg-info text-dark" class = "tagss">
              <!-- <input type="text" id="size" name="size" placeholder="坪數" > -->
              <?php echo $type = $result['type'];?>
            </span>
          </div>

          <div class="col-2">
            <span class="badge bg-info text-dark" class = "tagss">
              <!-- <input type="text" id="size" name="size" placeholder="坪數" > -->
              <?php echo $size = $result['size'];?>坪
            </span>
          </div>
          
          <div class="col-2">
            <span class="badge bg-info text-dark" class = "tagss">
              <!-- <input type="text" id="pet" name="pet" placeholder="可/不可養寵物" > -->
              <?php echo $pet = $result['pet'];?>養寵物
            </span>
          </div> 
          
          <div class="col-2">
            <span class="badge bg-info text-dark" class = "tagss">
              <!-- <input type="text" id="cook" name="cook" placeholder="可/不可開伙" > -->
              <?php echo $cook = $result['cook'];?>開伙
            </span>
          </div>
          </div>
          <br>
          <br>
          <div class="col-6">
            <h5 class="addresss">
              <!-- <input type="text" id="address" name="address" placeholder="房屋地址" > -->
              <?php echo $address = $result['address'];?>
            </h5>
          </div>        
        </div>
      </div>                  
    </div>
    <div class="row">
    <br>
                  </div>
    <hr>
    <div class="container">
    <div class="row">
    <div class="col-9">
      <h2><strong>設備與設施</strong></h2>   
    </div>
    <div class="col-8">
    <div class="info">
    <!-- <input type="text" id="equipment" name="equipment" placeholder="租屋處設備與設施介紹"> -->
    <?php echo $equipment = $result['equipment'];?>
    </div>
  </div>
  </div>
  

    <hr>               
      <div class="container">
        <div class="row">
          <div class="col-9">
            <h2><strong>屋主說</strong></h2> 
        </div>
        <div class="col-8">
          <div class="info">
            <!-- <input type="text" id="notice" name="notice" placeholder="注意事項">         -->
            <?php echo $notice = $result['notice'];?>
          </div> 
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
            <!-- <input type="number" id="contract" name="contract" placeholder="最短租期（月）"> -->
            最短租期：<?php echo $contract = $result['contract'];?>月
          <br>
            <!-- <input type="text" id="rental" name="rental" placeholder="租金（月）"> -->
            租金：<?php echo $rental = $result['rental'];?>元/月
          <br>
            <!-- <input type="text" id="deposit" name="deposit" placeholder="押金費用"> -->
            押金：<?php echo $deposit = $result['deposit'];?>元
          <br>
            <!-- <input type="text" id="water" name="water" placeholder="水費（月）"> -->
            水費：<?php echo $water = $result['water'];?>
          <br>
            <!-- <input type="text" id="electric" name="electric" placeholder="電費（月）"> -->
            電費：<?php echo $electric = $result['electric'];?>      
          </div> 
          
         </div> 
      </div>
      <hr>
      <input type="submit" value="確認送出" class="submit" onclick="'" name="submit">
      <input type="reset" value="重設" class="reset" onclick="'" name="reset">
  
      <div class="content6" id="content6">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-10">
            <h1>
              房屋附近地圖
            </h1>
          </div>
        </div>
      </div>
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14730.72894051157!2d120.24567548715821!3d22.628338400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e040f54057675%3A0xdf976ed7fa8cba08!2z5ZyL56uL5Lit5bGx5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1682480148598!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <br>
    </div>


<?php
// 設定 PDO 連線資訊
$dsn = "mysql:host=localhost;dbname=dbfinal;charset=utf8mb4";
$username = "root";
$password = "0000";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

// 連線資料庫
date_default_timezone_set('Asia/Taipei');
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


// 如果是表單提交，將留言存入資料庫
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(isset($_POST['submit'])){
    $message = $_POST['message'];
    $timestamp = date('Y-m-d H:i:s');
    $stmt = $pdo->prepare("INSERT INTO `留言區` (`message`, `timestamp`) VALUES (:message, :timestamp)");
    $stmt->execute([':message' => $message, ':timestamp' => $timestamp]);
}

// 從資料庫中讀取留言
$stmt = $pdo->query('SELECT * FROM 留言區 ORDER BY id DESC');
$messages = $stmt->fetchAll();
?>

<!-- <script>
    // 阻止表單預設提交行為，使用 AJAX 請求提交表單數據
    document.querySelector('#message-form').addEventListener('submit', function (event) {
        event.preventDefault();
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '');
        xhr.onload = function () {
            if (xhr.status === 200) {
                document.querySelector('#message-container').innerHTML = xhr.responseText;
                document.querySelector('#message-form').reset();
            }
        };
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send(new FormData(event.target));
    });
</script> -->
    <title>留言板</title>
    <div id="message-container">
        <?php foreach ($messages as $message): ?>
            <div class="message">
            <div class="dd">
              <ul class="ddm">
                <li class="ddli">
        	  	  <a id="dropdown_dots"><img src="dots.png" id="dots"></a>
        	  	<ul class="ddul">
        	  		<li class="ddli">
        	  			<a class="ddm_content"><button id="edit-btn">編輯留言</button></a>
        	  		</li>

        	  		<li class="ddli">
        	  			<a class="ddm_content">刪除留言</a>
        	  		</li>
        	  	</ul>
        	      </li>
              </ul>
            </div>
                <div class="content"><?php echo $message['message'] ?></div>
                <div class="timestamp"><?php echo $message['timestamp'] ?></div>
            </div>
        <?php endforeach; ?>
    </div>
    
    <form method="POST" action="">
        <div class="row justify-content-center">
            <label class="row justify-content-center" for="message-input">留言:</label>
            <input type="text" id="message-input" name="message">
        </div>
        <div class="button-container">
            <input type="submit" name="submit">
        </div>
    </form>
    
<!-- <div class="content4" id="content4">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-10">
              <h1>
                推薦房屋
              </h1>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-10">
            <div id="carouselExampleIndicators" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100">
                        <img src="https://picsum.photos/300/200?random=1" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="https://picsum.photos/300/200?random=2" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="https://picsum.photos/300/200?random=3" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100">
                        <img src="https://picsum.photos/300/200?random=1" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="https://picsum.photos/300/200?random=2" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="https://picsum.photos/300/200?random=3" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100">
                        <img src="https://picsum.photos/300/200?random=1" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="https://picsum.photos/300/200?random=2" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="https://picsum.photos/300/200?random=3" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>-->
    </div> 
    <title>跟隨頁面滾動的區塊</title>

<div id="myDiv">
  <p>屋主:
    <!-- <input type="text" id="contact_name" name="contact_name" placeholder="屋主姓名"> -->
    <?php echo $contact_name = $result['contact_name'];?></p>
  <p>屋主電話:
    <!-- <input type="text" id="contact_phone" name="contact_phone" placeholder="屋主電話"> -->
    <?php echo $contact_phone = $result['contact_phone'];?>
  </p>
</div>
</form>
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>中山租屋網</title>
    <link href="webpage.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  </head>
  <body>
    <!-- navbar -->
  <div class="navbar2 sticky-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">中山租屋網</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#header">新屋推薦</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#content1">降價房屋</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#content2">房東出租屋</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#content3">房屋周邊</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#content4">移動找房</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#content5">優質房屋</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                  </ul>
                <div class="dropdown">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                    搜尋
                  </button>
                    <form class="dropdown-menu dropdown-menu-end p-4">
                      <div class="mb-1">
                        <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="搜索vivo.com">
                      </div>
                      <button class="btn btn-outline-danger" type="submit">放大鏡</button>
                    </form>
                </div>
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                      登入/註冊
                    </button>
                    
                </div>
              </div>
            </div>
        </nav>
    </div>

  <!-- 圖片 -->
  <div class="container">
    <div class="row">
      <div class="col-9">
      <p></p>
      </div>
      <div class="col-lg-6">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://picsum.photos/300/200?random=1" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="https://picsum.photos/300/200?random=2" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="https://picsum.photos/300/200?random=3" class="d-block w-100" alt="">
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
    <div class="col-lg-3">
      <img src="https://picsum.photos/300/200?random=3" class="d-block w-100" alt="">
      <br>
      <img src="https://picsum.photos/300/200?random=3" class="d-block w-100" alt="">
    </div> 
    <div class="col-lg-3">
      <img src="https://picsum.photos/300/200?random=3" class="d-block w-100" alt="">
      <br>
      <img src="https://picsum.photos/300/200?random=3" class="d-block w-100" alt="">
    </div> 
    <br>
    <div class="col-lg-6">
    <br>
      <div class="container text-center">
        <div class="row justify-container-center">
          <div class="col-2">
            <span class="badge bg-info text-dark">免管理費</span>
          </div>
          <div class="col-6 title">
            <h2 style="text-align:left"><strong>中山最優質租屋</strong></h2>
          </div>
            <div class="row">
              <br>
            </div>
          <div class="row">
          <div class="col-2">
            <span class="badge bg-info text-dark">免管理費</span>
          </div>
          <div class="col-2">
            <span class="badge bg-info text-dark">免管理費</span>
          </div> 
          <div class="col-2">
            <span class="badge bg-info text-dark">免管理費</span>
          </div>
          <div class="col-2">
            <span class="badge bg-warning text-dark">Warning</span>
          </div> 
          <div class="col-2">
            <span class="badge bg-warning text-dark">Warning</span>
          </div> 
          <div class="col-2">
            <span class="badge bg-warning text-dark">Warning</span>
          </div>
                </div>
          <br>
          <br>
          <div class="col-6">
            <h5>獨立套房 | 6.5坪 | 4F | 透天厝</h5>
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
      <p><strong>居住說明</strong></p>
      <p>最短租期</p>
      <p><strong>房屋守則</strong></p>
      <p>最短租期</p>
      <p><strong>房屋設備</strong></p>
      <p>最短租期</p>
    </div>  

    <hr>               
      <div class="container">
        <div class="row">
          <div class="col-9">
            <h2><strong>屋主說</strong></h2> 
          </div>
          <p> 屋主:吳威和</p>
        </div>
        <div class="col-8">
          <div  class="info">
         <p>禁止抽菸</p>
         <p>租屋地址:</p>
         <p>離千光路十分鐘等</p>
         <p style: color="red">要有正當工作</p>         
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
         <p>租金含</p>
         <p>押金<p>
         <p>管理費</p>
         <p style: color="red">要有正當工作</p>         
          </div> 
         </div> 
      </div>

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
    
<div class="content4" id="content4">
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
      </div>
    </div>

  <div id="myDiv">
    <p>屋主：楊先生</p>
    <p>屋主電話:0978-845-612</p>
    <a href="#">聯絡屋主</a>
  </div>
</body>
</html>
<!-- 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // 綁定點擊事件
    $('#edit-btn').click(function() {
      // 在這裡撰寫更新留言的程式碼
    });
  });
  $(document).ready(function() {
  $('#edit-btn').click(function() {
    // 獲取留言的id和新的內容
    var messageId = /* 留言的id */;
    var newContent = /* 新的內容 */;

    // 發送POST請求，更新留言內容
    $.ajax({
      type: 'POST',
      url: '/update-message',  // 更新留言的API路徑
      data: {
        id: messageId,
        content: newContent
      },
      dataType: 'json',
      success: function(response) {
        // 更新成功
        alert('留言已更新！');
        // 在這裡更新留言列表的顯示
      },
      error: function() {
        // 更新失敗
        alert('留言更新失敗！');
      }
    });
  });
});

</script> -->



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>中山學生租屋網</title>
    <link href="webpage_model.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  </head>
  <body>
    <!-- navbar -->
    <div class="longnavbar">
      <ul>
        <li><a href="#home">中山學生租房網</a></li>
        <li><a class = "back" onclick="window.location.href='main1.php'">回首頁</a></li>
        <li style="float:right"><a class="active" id="active" onclick="window.location.href='login.php'">登入/註冊</a></li>
      </ul>
    </div>  
    <?php
            $host = 'localhost';
            $dbuser = 'root';
            $dbpw = '';
            $dbname = 'dbfinal';
            $link = mysqli_connect($host, $dbuser, $dbpw, $dbname);
            $max = "SET global max_allowed_packet=33554432";
            mysqli_query($link,$max);
            // if($link){
            //     mysqli_query($link, "SET NAMES utf8");
            //     echo "success";
            // }?>
        <?php 
	        $query = "SELECT * FROM dbfinal";
	        $query_run = mysqli_query($link,$query);
	        if(mysqli_num_rows($query_run) > 0){
			    foreach($query_run as $query){
		?>
  <!-- 圖片 -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-item active">
              <img src="https://picsum.photos/300/200?random=1" class="d-block w-100" alt="">
          </div>
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
          <div class="col-6 title">
            <h2 style="text-align:left"><strong><?php echo $title = $query['title'];?></strong></h2>
          </div>
            <div class="row">
              <br>
            </div>
          <div class="row" id="tags">
          <div class="col-2">
            <span class="badge bg-info text-dark"><?php echo $size = $query['size'];?></span>
          </div>
          <div class="col-2">
            <span class="badge bg-info text-dark"><?php echo $pet = $query['pet'];?>養寵物</span>
          </div> 
          <div class="col-2">
            <span class="badge bg-info text-dark"><?php echo $cook = $query['cook'];?>開伙</span>
          </div>
          </div>
          <br>
          <br>
          <div class="col-6">
            <h5><?php echo $address = $query['address'];?></h5>
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
      <p><?php echo $equipment = $query['equipment'];?></p>
    </div>  

    <hr>               
      <div class="container">
        <div class="row">
          <div class="col-9">
            <h2><strong>屋主說</strong></h2> 
        </div>
        <div class="col-8">
          <div  class="info">
         <p><?php echo $notice = $query['notice'];?></p>         
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
          <li><?php echo $contract = $query['contract'];?>月</li>
          <br>
          <li><?php echo $rental = $query['rental'];?>元/月</li>
          <br>
          <li><?php echo $deposit = $query['deposit'];?>元</li>
          <br>
          <li><?php echo $water = $query['water'];?>元/月</li>
          <br>
          <li><?php echo $electric = $query['electric'];?>元/月</li>        
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

	<style>
		/* 字型 */
		body {
			font-family: Arial, Helvetica, sans-serif;
		}

		h1 {
			font-size: 2rem;
			margin-bottom: 1rem;
		}

		label {
			font-weight: bold;
		}

		/* 留言輸入欄位 */
		#message-input {
			display: flex;
			width: 80%;
			padding: 0.5rem;
      margin:0 auto;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 1rem;
		}

		/* 留言框 */
		#message-container {
			max-width: 80%;
			margin: 0 auto;
			border: 1px solid #ccc;
			border-radius: 5px;
			padding: 1rem;
			overflow-y: scroll;
			height: 300px;
			background-color: #f8f8f8;
			box-shadow: 0px 0px 5px #ccc;
		}

		.message {
			margin-bottom: 1rem;
			padding: 0.5rem;
			border: 1px solid #ccc;
			border-radius: 5px;
			background-color: #fff;
			box-shadow: 0px 0px 3px #ccc;
		}

		.message .content {
			margin-left: 1rem;
		}

		.message .timestamp {
			font-size: 0.8rem;
			color: #555;
			margin-top: 0.2rem;
			margin-left: 1rem;
		}

/* 送出按鈕 */
#submit-button {
    display: block; /* 讓按鈕轉換為區塊元素 */
    margin: 1rem auto 0;
    background-color: #4CAF50;
    color: #fff;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease-in-out;
}

		#submit-button:hover {
			background-color: #3e8e41;
		}

    .button-container{
      text-align: center;
    }
	</style>

	<h1 class="row justify-content-center">評論區</h1>

  <div id="message-container"></div>
    
  <form method="POST" action="">
  <div class="row justify-content-center">
    <label class="row justify-content-center" for="message-input">留言:</label>
    <input type="text" id="message-input" name="message">
  </div>
  <div class="button-container">
  <button  type="submit" name="submit" onclick="addMessage()">送出</button>
  </div>
</form>
    

	<script>
		function addMessage() {
			const messageInput = document.getElementById("message-input");
			const messageContainer = document.getElementById("message-container");
			const message = messageInput.value;
			if (message.trim() !== "") {
				const newMessage = document.createElement("div");
				newMessage.className = "message";
				const timestamp = new Date().toLocaleString();
				const contentElement = document.createElement("div");
				contentElement.className = "content";
				contentElement.innerText = message;
				const timestampElement = document.createElement("div");
				timestampElement.className = "timestamp";
				timestampElement.innerText = timestamp;
				newMessage.appendChild(contentElement);
				newMessage.appendChild(timestampElement);
				messageContainer.appendChild(newMessage);
				messageInput.value = "";
			}
		}
	</script>

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

  <title>跟隨頁面滾動的區塊</title>

  <div id="myDiv">
    <p>屋主：<?php echo $contact_name = $query['contact_name'];?></p>
    <p>屋主電話：<?php echo $contact_phone = $query['contact_phone'];?></p>
  </div>
  <?php
				  }
				}
			?>



</body>
</html>

<?php 
  $db=new PDO("mysql:dbname=db_test","root","steven900309");
  if(isset($_POST["submit"])){
  //留言資訊
  $message = $_POST["message"];

  $sql="INSERT INTO 留言區 (message) VALUES ('{$message}')";
  $result=$db->query($sql);
  }
  ?>
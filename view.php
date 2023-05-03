<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>中山租屋網</title>
    <!-- <link href="webpage.css" type="text/css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  </head>
  <body>
  <form action="" method="post">
  <div class="navbar2 sticky-top">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">中山租屋網</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" onclick="window.location.href='login.php'">
                      登入/註冊
                    </button>
                </div>
              </div>
            </div>
        </nav>
    </div>

    
    <div class="container">
      <div class="row">
    <div class="col-9">
      <p></p>
    </div>
        <div class="col-lg-6">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div> -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <input type="file" id="mainphoto" name="mainphoto" class="d-block w-100">
    </div>
    <!-- <div class="carousel-item">
    <input type="image" id="phone" name="phone" placeholder="加入圖片" required class="d-block w-100">
    </div>
    <div class="carousel-item">
    <input type="image" id="phone" name="phone" placeholder="加入圖片" required class="d-block w-100">
    </div> -->
  </div>
  <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> -->
</div>

  </div>
  <div class="col-lg-3">
    <input type="file" id="photo1" name="photo1" class="d-block w-100">
    <br>
    <input type="file" id="photo2" name="photo2" class="d-block w-100">
  </div> 

  <div class="col-lg-3">
    <input type="file" id="photo3" name="photo3" class="d-block w-100">
    <br>
    <input type="file" id="photo4" name="photo4" class="d-block w-100">
  </div> 
 
  <br>
  <div class="col-lg-6">
  <br>
    <div class="container text-center">
      <div class="row justify-container-center">
        <div class="col-2">
          <span class="badge bg-info text-dark">Info</span>
        </div>
          <div class="col-6">
          <input type="text" id="title" name="title" placeholder="房屋標題" >
          </div>
            <div class="col-4">
              <p></p>
            </div>     
          <br>
          <br>
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
          <br>
          <br>
          <div class="col-6">
            <input type="text" id="address" name="address" placeholder="房屋地址" >
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
      <input type="text" id="equipment" name="equipment" placeholder="設備與設施">
    </div>  

    <hr>               
      <div class="container">
        <div class="row">
          <div class="col-9">
            <h2><strong>屋主說</strong></h2> 
          </div>
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
   
        <div class="col-8">
          <div  class="info2">
          <input type="number" id="contract" name="contract" placeholder="最短租期（月）">月
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



	<title>留言區</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		#message-input {
			width: 50%;
			padding: 5%;
			box-sizing: border-box;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 10px;
		}

		#message-container {
			width: 50%;
			border: 1px solid #ccc;
			border-radius: 5px;
			padding: 10px;
			overflow-y: scroll;
			max-height: 200px;
		}

		.message {
			margin-bottom: 10px;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		.message .name {
			font-weight: bold;
			margin-bottom: 5px;
		}

		.message .content {
			margin-left: 20px;
		}
	</style>
</head>
<body>
	<h1>留言區</h1>
    
	<form>
		<label for="name-input">名稱:</label>
		<input type="text" id="name-input" name="name">
    <div class="row">
		<label for="message-input">留言:</label>
		<input type="text" id="message-input" name="message">
    </div>
		<button type="button" onclick="addMessage()">送出</button>
	</form>
    
	<div id="message-container"></div>

	<script>
		function addMessage() {
			const nameInput = document.getElementById("name-input");
			const messageInput = document.getElementById("message-input");
			const messageContainer = document.getElementById("message-container");
			const name = nameInput.value;
			const message = messageInput.value;
			if (name.trim() !== "" && message.trim() !== "") {
				const newMessage = document.createElement("div");
				newMessage.className = "message";
				const nameElement = document.createElement("div");
				nameElement.className = "name";
				nameElement.innerText = name;
				const contentElement = document.createElement("div");
				contentElement.className = "content";
				contentElement.innerText = message;
				newMessage.appendChild(nameElement);
				newMessage.appendChild(contentElement);
				messageContainer.appendChild(newMessage);
				nameInput.value = "";
				messageInput.value = "";
			}
		}
	</script>

  <br>
  <br>
  <br>

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
    </div>
    <div class="backtotop">
        <a href="#header">回到最上面</a>
    </div>
  </form>

	<title>跟隨頁面滾動的區塊</title>
	<style>
		#myDiv {
			position: fixed;
			top: 72%;
			right: 7%;
			background-color: white;
			padding: 10px;
			border: 1px solid black;
      width:20%;
		}
	</style>
  <input type="submit" value="確認送出" class="submit" onclick="'" name="submit">
  <input type="reset" value="重設" class="reset" onclick="'" name="reset">
  </form>
</head>

	<div id="myDiv">
		<p>屋主:<input type="text" id="lordname" name="lordname" placeholder="姓名"></p>
		<p>屋主電話:<input type="text" id="contact" name="contact" placeholder="電話"></p>
	</div>

<p>


  </body>


  </html>
  <?php
        $db = new PDO("mysql:dbname=dbfinal", "root", "0000");
        if(isset($_POST['submit'])){
        // 房屋資訊
        // $mainphoto = $_POST['mainphoto'];
        // $photo1 = $_POST['photo1'];
        // $photo2 = $_POST['photo2'];
        // $photo3 = $_POST['photo3'];
        // $photo4 = $_POST['photo4'];
        $title = $_POST['title'];
        $address = $_POST['address'];
        $equipment = $_POST['equipment'];
        $notice = $_POST['notice'];
        $contract = $_POST['contract'];
        $rental = $_POST['rental'];
        $deposit = $_POST['deposit'];
        $water = $_POST['water'];
        $electric = $_POST['electric'];
        // 房屋資訊
        $sql = "INSERT INTO `House`(`title`, `address`, `equipment`, `notice`, `contract`, `rental`, `deposit`, `water`, `electric`) VALUES ('{$title}', '{$address}', '{$equipment}', '{$notice}', '{$contract}', '{$rental}', '{$deposit}', '{$water}', '{$electric}')";
        $result = $db->query($sql);
        header('location:main.php');
        // echo '<div class="echo"><p>新增成功！</p></div>';
    }
    ?>
    <?php
        $db = new PDO("mysql:dbname=dbfinal", "root", "0000");
        if(isset($_POST['submit'])){
        // 屋主資訊
        $lordname = $_POST['lordname'];
        $contact = $_POST['contact'];;
        // 屋主資訊
        $sql = "INSERT INTO `Lord`(`lordname`, `contact`)VALUES ('{$lordname}','{$contact}')";
        $result = $db->query($sql);
        header('location:main.php');
        // echo '<div class="echo"><p>新增成功！</p></div>';
    }
    ?>

<style>
  span{
    transform:scale(1.4);
}
br{
    display: block;
}

.info{
    background-color: rgba(245, 222, 179, 0.889);
}

.introduce{
    background-color: rgba(245, 222, 179, 0.675);
}

#footer{
    background-color: black;
    color:white;
    font-weight: bold;
}

</style>
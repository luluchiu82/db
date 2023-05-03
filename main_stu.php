<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>中山學生租屋網</title>
    <!-- <link href="webpage.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->

</head>
<body>
    <div class="navbar">
        <ul>
          <li><a href="#home">中山學生租房網</a></li>
          <li><a href="#search">搜尋</a></li>
          <li><a href="#new">最新房源</a></li>
          <li style="float:right"><a class="active" onclick="window.location.href='.php'">我的收藏</a></li>
        </ul>
    </div>  
    <div class="container1" id="search">
        <h1>移動找屋</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14730.72894051157!2d120.24567548715821!3d22.628338400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e040f54057675%3A0xdf976ed7fa8cba08!2z5ZyL56uL5Lit5bGx5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1682480148598!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="container2">
        
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

    <div class="container3">
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'suite')">雅房</button>
            <button class="tablinks" onclick="openCity(event, 'private')">套房</button>
            <button class="tablinks" onclick="openCity(event, 'family')">家庭式套房</button>
        </div>

        <div id="suite" class="tabcontent">
            <div class="card">
            <?php echo '<img class="d-block w-100 id="showpic" src="data:image;base64,' .base64_encode($result['mainphoto']).'"/>' ?>
                <div class="card-text">
                    <h2><?php echo $title = $result['title'];?></h2>
                    <p><?php echo $address = $result['address'];?></p>
                    <p><?php echo $rental = $result['rental'];?>元/月</p>
                </div>
            </div>
        </div>

        <div id="private" class="tabcontent">
            <div class="card">
            <?php echo '<img class="d-block w-100 id="showpic" src="data:image;base64,' .base64_encode($result['mainphoto']).'"/>' ?>
                <div class="card-text">
                    <h2><?php echo $title = $result['title'];?></h2>
                    <p><?php echo $rental = $result['rental'];?>元/月</p>
                </div>
            </div>
        </div>

        <div id="family" class="tabcontent">
            <div class="card">
            <?php echo '<img class="d-block w-100 id="showpic" src="data:image;base64,' .base64_encode($result['mainphoto']).'"/>' ?>
                <div class="card-text">
                    <h2><?php echo $title = $result['title'];?></h2>
                    <p><?php echo $rental = $result['rental'];?>元/月</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

<style>
    /* 主色#1b3a59 副色：#99bd60*/
    *{
        font-family:微軟正黑體;  
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #1b3a59;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover:not(.active) {
        background-color: #111;
    }

    .active {
        background-color: #99bd60;
        border-color: #1b3a59;
    }

    .active:hover {
        background-color: white;
        color: #99bd60;
    }

    #search{
        position:relative;   
        margin: auto;
        top: 100px;
        text-align:center;
    }

    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }

    .container1{
        margin: 50px;
    }
    .container3{
        margin-top: 150px;
        width:80%;
    }

    .card {
        display: flex;
        align-items: center;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 16px;
        height: 150px;
        border: 1px solid #ccc;
    }

    .card img {
        width: 130px;
        height: 130px;
        object-fit: cover;
        border-radius: 50%;
        margin-right: 16px;
    }

    .card-text h2 {
        font-size: 24px;
        margin-bottom: 8px;
    }

    .card-text p {
        font-size: 16px;
        color: #555;
    }
</style>
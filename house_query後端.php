<?php
// 连接数据库
$host = 'localhost'; // MySQL 服务器地址
$dbname = 'dbfinal'; // 数据库名称
$username = 'root'; // 用户名
$password = '0000'; // 密码
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

// 从 URL 取得查询参数
$types = isset($_POST['type']) && is_array($_POST['type']) ? $_POST['type'] : array();
$positions = isset($_POST['address']) && is_array($_POST['address']) ? $_POST['address'] : array(); // 新增 position 搜尋條件
$rents = isset($_POST['rental']) && is_array($_POST['rental']) ? $_POST['rental'] : array();
$sizes = isset($_POST['size']) && is_array($_POST['size']) ? $_POST['size'] : array();
$pet = isset($_POST['pet']) ? $_POST['pet'] : 'either';
$cook = isset($_POST['cook']) ? $_POST['cook'] : 'either';

if (empty($types) && empty($positions) && empty($rents) && empty($sizes) && $pet === 'either' && $cook === 'either') { // 更新判斷條件
    // 列出所有房子
    $sql = "SELECT * FROM House";
} else {
    // 构建查询语句
    $wheres = array();
    if (!empty($types)) {
        $typesWheres = array();
        foreach ($types as $type) {
            switch ($type) {
                case "雅房":
                    $typeWheres[] = "type = '雅房'";
                    break;
                case "套房":
                    $typeWheres[] = "type = '套房'";
                    break;
                case "家庭式":
                    $typeWheres[] = "type = '家庭式套房'";
                    break;
                default:
                    break;
            }
        }
        if (!empty($typeWheres)) {
            $wheres[] = '(' . implode(' OR ', $typeWheres) . ')';
        }
    }
    if (!empty($positions)) {
        $positionWheres = array();
        foreach ($positions as $position) {
            switch ($position) {
                case "鼓山區":
                    $positionWheres[] = "address = '%鼓山區%'";
                    break;
                case "鹽埕區":
                    $positionWheres[] = "address = '%鹽埕區%'";
                    break;
                case "前金區":
                    $positionWheres[] = "address = '%前金區%'";
                    break;
                case "其他":
                    $positionWheres[] = "address != '%鼓山區%' AND address != '%鹽埕區%' AND address != '%前金區%'";
                    break;
                default:
                    break;
            }
        }
        if (!empty($positionWheres)) {
            $wheres[] = '(' . implode(' OR ', $positionWheres) . ')';
        }
    }    
    if (!empty($rents)) {
        $rentWheres = array();
        foreach ($rents as $rent) {
            switch ($rent) {
                case 'under_3000':
                    $rentWheres[] = 'rental < 3000';
                    break;
                case '3000_to_4000':
                    $rentWheres[] = 'rental >= 3000 AND rental <= 4000';
                    break;
                case '4000_to_5000':
                    $rentWheres[] = 'rental >= 4000 AND rental <= 5000';
                    break;
                case '5000_to_6000':
                    $rentWheres[] = 'rental >= 5000 AND rental <= 6000';
                    break;
                case 'above_6000':
                    $rentWheres[] = 'rental > 6000';
                    break;
                default:
                    break;
            }
        }
        if (!empty($rentWheres)) {
            $wheres[] = '(' . implode(' OR ', $rentWheres) . ')';
        }
    }
    if (!empty($sizes)) {
        $sizeWheres = array();
        foreach ($sizes as $size) {
            switch ($size) {
                case 'size_3以下':
                    $sizeWheres[] = 'size < 3';
                    break;
                case 'size_3~5':
                    $sizeWheres[] = 'size >= 3 AND size <= 5';
                    break;
                case 'size_6~8':
                    $sizeWheres[] = 'size >= 6 AND size <= 8';
                    break;
                case 'size_8以上':
                    $sizeWheres[] = 'size > 8';
                    break;
                default:
                    break;
            }
        }
        if (!empty($sizeWheres)) {
            $wheres[] = '(' . implode(' OR ', $sizeWheres) . ')';
        }
    }
    if ($pet === 'yes') { // 新增 pet 搜尋條件
        $wheres[] = "pet = '可'";
    } elseif ($pet === 'no') {
        $wheres[] = "pet = '不可'";
    } elseif ($pet === 'either') { // 新增 pet 搜尋條件
        $wheres[] = '(pet = 可 OR pet = 不可)';
    }
    if ($cook === 'yes') { // 新增 pet 搜尋條件
        $wheres[] = "cook = '可'";
    } elseif ($cook === 'no') {
        $wheres[] = "cook = '不可'";
    } elseif ($cook === 'either') { // 新增 pet 搜尋條件
        $wheres[] = '(cook = 可 OR cook = 不可)';
    }
    $whereClause = implode(' AND ', $wheres);
    $sql = "SELECT * FROM House WHERE $whereClause";
}

// 执行查询并输出结果
$stmt = $pdo->query($sql);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(empty($results)){
    echo "<script>alert('查無符合條件的房子');</script>";
}
else{
    echo "<table>";
    foreach ($results as $row) {
        echo "<tr><td>" . $row['type'] . "</td><td>" . $row['hId'] . "</td><td>" . $row['address'] . "</td><td>" . $row['rental'] . "</td><td>" . $row['size'] . "</td><td>". $row['pet_allowed'] . "</td><td>". $row['cook_allowed'] . "</td></tr>";
    }
    echo "</table>";
}
?>
<html>
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
</html>
<style>
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
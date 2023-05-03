<!-- http://localhost/finalproject/mainpage.php -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>中山學生租屋網</title>
    <link href="Logintest.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="search">
      <form method="post" action="house_query後端.php">
        <div class="container-fluid">
          <div class="row">
            <div class="col-10">
              <h1>
                綜合條件查詢
              </h1>
            </div>
          </div>
          <div class="row">
            <div class="col-1">
              <h2>
                房型
              </h2>
            </div>
            <div class="col-10">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-2">
                    <div class="form-check">
                      <input type="checkbox" id="雅房" name="type" value="雅房">
                      <label class="form-check-label" for="flexCheckDefault">
                        雅房
                      </label>
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="form-check">
                      <input type="checkbox" id="套房" name="type" value="套房">
                      <label class="form-check-label" for="flexCheckDefault">
                        套房
                      </label>
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="form-check">
                      <input type="checkbox" id="家庭式" name="type" value="家庭式">
                      <label class="form-check-label" for="flexCheckDefault">
                        家庭式
                      </label>
                    </div>       
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="row">
            <div class="col-1">
              <h2>
                位置
              </h2>
            </div>
            <div class="col-10">
             <div class="container-fluid">
                <div class="row">
                  <div class="col-2">
                    <div class="form-check">
                      <input type="checkbox" id="鼓山區" name="address" value="鼓山區">
                      <label class="form-check-label" for="flexCheckDefault">
                        鼓山區
                      </label>
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="form-check">
                      <input type="checkbox" id="鹽埕區" name="address" value="鹽埕區">
                      <label class="form-check-label" for="flexCheckDefault">
                        鹽埕區
                      </label>
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="form-check">
                      <input type="checkbox" id="前金區" name="address" value="前金區">
                      <label class="form-check-label" for="flexCheckDefault">
                        前金區
                      </label>
                    </div>       
                  </div>
                  <div class="col-2">
                    <div class="form-check">
                      <input type="checkbox" id="其他" name="address" value="其他">
                      <label class="form-check-label" for="flexCheckDefault">
                        其他
                      </label>
                    </div>       
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="row">
            <div class="col-1">
              <h2>
                租金
              </h2>
            </div>
            <div class="col-10">
             <div class="container-fluid">
                <div class="row">
                  <div class="col-2">
                    <div class="form-check">
                      <input type="checkbox" id="under_3000" name="rental" value="under_3000">
                      <label class="form-check-label" for="flexCheckDefault">
                        3000以下
                      </label>
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="form-check">
                      <input type="checkbox" id="3000_to_4000" name="rental" value="3000_to_5000">
                      <label class="form-check-label" for="flexCheckDefault">
                        3000~4000
                      </label>
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="form-check">
                      <input type="checkbox" id="4000_to_5000" name="rental" value="4000_to_5000">
                      <label class="form-check-label" for="flexCheckDefault">
                        4000~5000
                      </label>
                    </div>       
                  </div>
                  <div class="col-2">
                    <div class="form-check">
                      <input type="checkbox" id="5000_to_6000" name="rental" value="5000_to_6000">
                      <label class="form-check-label" for="flexCheckDefault">
                        5000~6000
                      </label>
                    </div>       
                  </div>
                  <div class="col-2">
                    <div class="form-check">
                      <input type="checkbox" id="above_6000" name="rental" value="above_6000">
                      <label class="form-check-label" for="flexCheckDefault">
                        6000以上
                      </label>
                    </div>       
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="row">
            <div class="col-1">
              <h2>
                坪數
              </h2>
            </div>
            <div class="col-10">
             <div class="container-fluid">
                <div class="row">
                  <div class="col-2">
                    <div class="form-check">
                      <input type="checkbox" id="size_3以下" name="size" value="size_3以下">
                      <label class="form-check-label" for="flexCheckDefault">
                        3坪以下
                      </label>
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="form-check">
                      <input type="checkbox" id="size_3~5" name="size" value="size_3~5">
                      <label class="form-check-label" for="flexCheckDefault">
                        3~5坪
                      </label>
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="form-check">
                      <input type="checkbox" id="size_6~8" name="size" value="size_6~8">
                      <label class="form-check-label" for="flexCheckDefault">
                        6~8坪
                      </label>
                    </div>       
                  </div>
                  <div class="col-2">
                    <div class="form-check">
                      <input type="checkbox" id="size_8以上" name="size" value="size_8以上">
                      <label class="form-check-label" for="flexCheckDefault">
                        8坪以上
                      </label>
                    </div>       
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="row">
            <div class="col-1">
              <h2>
                寵物
              </h2>
            </div>
            <div class="col-10">
             <div class="container-fluid">
                <div class="row">
                  <div class="col-2">
                    <div class="form-check">
                      <input type="radio" id="pet_yes" name="pet" value="yes">
                      <label class="form-check-label" for="flexRadioDefault1">
                        是
                      </label>
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="form-check">
                      <input type="radio" id="pet_no" name="pet" value="no">
                      <label class="form-check-label" for="flexRadioDefault1">
                        否
                      </label>
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="form-check">
                      <input type="radio" id="pet_either" name="pet" value="either" checked>
                      <label class="form-check-label" for="flexRadioDefault1">
                        都可以
                      </label>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="row">
            <div class="col-1">
              <h2>
                開火
              </h2>
            </div>
            <div class="col-10">
             <div class="container-fluid">
                <div class="row">
                  <div class="col-2">
                    <div class="form-check">
                      <input type="radio" id="cook_yes" name="cook" value="yes">
                      <label class="form-check-label" for="flexRadioDefault2">
                        是
                      </label>
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="form-check">
                      <input type="radio" id="cook_no" name="cook" value="no">
                      <label class="form-check-label" for="flexRadioDefault2">
                        否
                      </label>
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="form-check">
                      <input type="radio" id="cook_either" name="cook" value="either" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        都可以
                      </label>
                    </div>
                  </div>
                  <div class="col-2">

                  </div>
                  <div class="col-2">
                    <input type="submit" value="查詢">
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="row">
            <div class="col-10">
              <h1>
                關鍵字搜尋
              </h1>
            </div>
          </div>
          <div class="row">
            <div class="col-10">
              <form method="post" action="house_query後端.php">
                <label for="keyword">關鍵字：</label>
                <input type="text" id="keyword" name="address" placeholder="請輸入關鍵字">
                <input type="submit" value="查詢">
              </form>
            </div>
          </div>
        </div>
      </form>
    </div>

  </body>
</html>
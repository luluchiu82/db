<html>
<ul class="ddm">
    <li>
		<a href="#" id="dropdown_dots"><img src="dots.png" id="dots"></a>
		<ul>
			<li>
				<a href="#" class="ddm_content">編輯留言</a>
			</li>
			<li>
				<a href="#" class="ddm_content">刪除留言</a>
			</li>
		</ul>
	</li>
</ul>
</html>

<style>

#dots{
    width: 10px;
    height: 10px;
}

ul {
  /* 取消ul預設的內縮及樣式 */
  margin: 0;
  padding: 0;
  list-style: none;
}

ul.ddm {
  /* border: #ccc 1px solid; */
  display: inline-block;
  font-family:微軟正黑體;
  font-size: 13px;
}

ul.ddm li {
  position: relative;
  white-space: nowrap;
}

ul.ddm>li {
  float: left;
  /* 只有第一層是靠左對齊*/
}

ul.ddm a {
  background-color: #fff;
  color: #333;
  display: block;
  padding: 0 20px;
  text-decoration: none;
  line-height: 30px;
}

.ddm_content:hover {
  /* 滑鼠滑入按鈕變色*/
  background-color: #99bd60;
  color: #fff;
}

ul.ddm ul {
  border: #ccc 1px solid;
  position: absolute;
  z-index: 99;
  left: -1px;
  top: 100%;
  width:100px;
}

ul.ddm ul {
  /*隱藏次選單*/
  display: none;
}

ul.ddm li:hover>ul {
  /* 滑鼠滑入展開次選單*/
  display: block;
}
</style>
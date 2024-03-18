<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 95px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: red;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<ul>
<li><a href="home" id="homeBtn">Trang chủ</a></li>
  <li><a href="introduce">Giới thiệu</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Sản phẩm</a>
    <div class="dropdown-content">
      <a href="table">Bàn</a>
      <a href="chair">Ghế</a>
    </div>
  </li>
  <li><a href="contact">Liên hệ</a></li>
</ul>
<div><h1>Đây là trang giới thiệu</h1></div>
</body>
</html>



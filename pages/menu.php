<?php

	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	
	    		
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<style>
  .custom-bg-color {
	background: linear-gradient(108deg, #f7434c, #ff8949); /* Mã màu sắc tùy chỉnh*/
  }
</style>
<nav class="navbar navbar-expand-lg navbar-dark custom-bg-color" style="width: 100%">
  <a class="navbar-brand" href="index.php">
	<img src="images/PClogo.jpg" style="width:70px" height="35px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false"
		style="color: #fff";>
          Danh mục sản phẩm
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php 
				while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
				?>
        <!-- css của danh mục sản phẩm ở menu  -->
        <style>
          .dropdown-item:hover {
          color: red;
          }
          .dropdown-item:active {
          background-color:  transparent;
          }
        </style>
          <a class="dropdown-item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
        <?php
				} 
				?>
        </div>
      </li>
      <li class="nav-item">
	  <li class="nav-item"><a class="nav-link" href="index.php?quanly=tintuc" style="color: #fff";>Tin tức</a></li>
	  <a class="nav-link" href="index.php?quanly=giohang"style="color: #fff";>Giỏ hàng</a>
      </li>
      	<?php
				if(isset($_SESSION['dangky'])){ 

				?>
				<li class="nav-item"><a class="nav-link" href="index.php?quanly=thaydoimatkhau"style="color: #fff">Thay đổi mật khẩu</a></li>
				<li class="nav-item"><a class="nav-link" href="index.php?quanly=lichsudonhang"style="color: #fff">Lịch sử đơn hàng</a></li>
				<li class="nav-item"><a class="nav-link" href="index.php?dangxuat=1"style="color: #fff">Đăng xuất</a></li>
				<?php
				}else{ 
				?>
				<li class="nav-item"><a class="nav-link" href="index.php?quanly=dangky" style="color: #fff";>Đăng ký/Đăng nhập</a></li>
				<?php
				} 
				?>
		<li class="nav-item"><a class="nav-link" href="index.php?quanly=lienhe" style="color: #fff";>Liên hệ</a></li>

    </ul>
    <form class="form-inline my-2 my-lg-0" action="index.php?quanly=timkiem" method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Nhập tên sản phẩm..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" style="color: #fff; border-color: #fff" hover="
  background-color: #fff" name="timkiem" type="submit">Tìm kiếm</button>
    </form>
  </div>
</nav>
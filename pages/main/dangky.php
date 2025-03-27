<?php
ob_start(); 
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = md5($_POST['matkhau']);
		$diachi = $_POST['diachi'];
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
		if($sql_dangky){
      echo '<p style="color:blued">Bạn đã đăng ký tài khoản thành công, mời bạn đăng nhập </p>';
			header("Location:index.php?quanly=dangnhap");
		}else{
			$_SESSION['dangky'] = $tenkhachhang;
			$_SESSION['email'] = $email;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			header("Location:index.php?quanly=giohang");
		}
}
ob_end_flush(); 
?>
<style type="text/css">
table.dangky tr td {
	padding: 5px;
	}
	body {
  background: #fff;
  color: #666;
  font-family: 'RobotoDraft', 'Roboto', sans-serif;
  font-size: 14px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
/* Form Module */
.form-module {
  position: relative;
  background: #e9e9e9;
  max-width: 320px;
  width: 100%;
  box-shadow: 0 0 3px rgba(0, 0, 0, .1);
  margin: 0 auto;
}

.form-module .toggle {
  cursor: pointer;
  position: absolute;
  top: 0;
  right: 0;
  width: 30px;
  height: 30px;
  margin: -5px 0 0;
  color: #e9e9e9;
  font-size: 12px;
  line-height: 30px;
  text-align: center;
}
.form-module .toggle .tooltip:before {
  content: '';
  position: absolute;
  top: 5px;
  left: -5px;
  display: block;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-right: 5px solid rgba(0, 0, 0, .6);
}

.form-module .form {
  display: none;
  padding: 40px;
}

.form-module .form:nth-child(2) {
  display: block;
}

.form-module h2 {
  text-align: center;
  color: #33b5e5;
  font-size: 18px;
  font-weight: 400;
  line-height: 1;
}

.form-module input {
  outline: none;
  display: block;
  width: 100%;
  border: 1px solid #d9d9d9;
  margin: 0 0 20px;
  padding: 10px 15px;
  box-sizing: border-box;
  font-wieght: 400;
  -webkit-transition: .3s ease;
  transition: .3s ease;
}

.form-module input:focus {
  border: 1px solid #33b5e5;
  color: #333;
}

.form-module button {
  cursor: pointer;
  background: linear-gradient(108deg, #f7434c, #ff8949);
  width: 100%;
  border: 0;
  padding: 10px 15px;
  color: #fff;
  -webkit-transition: .3s ease;
  transition: .3s ease;
}

.form-module button:hover {
  background: #f7434c;
}

.form-module .cta {
  background: #f2f2f2;
  width: 100%;
  padding: 15px 40px;
  box-sizing: border-box;
  color: #666;
  font-size: 12px;
  text-align: center;
}
</style>
<form action="" method="POST">
<table class="dangky" border="1" width="50%" style="border-collapse: collapse;">
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
  </div>
  <div class="form">
    <h2>Đăng ký thành viên</h2>
    <form>
      <input type="text" placeholder="Họ và tên" name="hovaten"/>
      <input type="text"placeholder="Email" name="email"/>
      <input type="text"placeholder="Điện thoại" name="dienthoai"/>
      <input type="text"placeholder="Địa chỉ" name="diachi"/>
      <input type="password"placeholder="Mật khẩu" name="matkhau"/>
      <button input type="submit" name="dangky">Đăng ký</button>
    </form>
  </div>
  <div class="cta"><a href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a></div>
</div>
</table>
</form>
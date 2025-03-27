<?php
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);

		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
			$_SESSION['email'] = $row_data['email'];
			$_SESSION['id_khachhang'] = $row_data['id_dangky'];
			echo '<p style="color:blued">Đăng nhập thành công,Mời bạn vào giỏ hàng </p>';
		}else{
			echo '<p style="color:red">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
			header("Location:index.php?quanly=dangnhap");
		}
	}
?>
<style type="text/css">
	body {
  background: #fff;
  color: #666;
  font-family: 'RobotoDraft', 'Roboto', sans-serif;
  font-size: 14px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
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
</head>
<form action="" autocomplete="off" method="POST">
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
  </div>
  <div class="form">
    <h2>Đăng nhập khách hàng</h2>
    <form>
      <input type="text" name="email" placeholder="Email..."/>
      <input type="password" name="password" placeholder="Mật khẩu..."/>
      <button input type="submit" name="dangnhap">Đăng nhập</button>
    </form>
  </div>
</form>
<!-- <form action="" autocomplete="off" method="POST">
		<table border="1" width="50%" class="table-login" style="text-align: center;border-collapse: collapse;">
			<tr>
				<td colspan="2"><h3>Đăng nhập khách hàng</h3></td>
			</tr>
			<tr>
				<td>Tài khoản</td>
				<td><input type="text" size="50" name="email" placeholder="Email..."></td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td><input type="password" size="50" name="password" placeholder="Mật khẩu..."></td>
			</tr>
			<tr>
				
				<td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
			</tr>
	</table>
	</form> -->
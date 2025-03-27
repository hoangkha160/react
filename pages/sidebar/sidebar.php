<h4><img width="26" height="23" 
src="https://www.svgrepo.com/show/478672/menu-19.svg"> Danh mục sản phẩm</h4>
<ul class="list_sidebar">
<?php	
	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
		while($row = mysqli_fetch_array($query_danhmuc)){
						    		
?>
	<li style="text-transform: uppercase;"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
<?php
} 
?>	
<style>
	.sidebar{
	border:1px solid #000066;
	height: auto;
	width: 100%;
	margin-top:5px;
	margin-left:5px;
	float: left;
}
ul.list_sidebar {
    padding: 0;
    margin: 0;
    width: 100%;
    border: 1px solid ;
    list-style: none;
    line-height: 27px;
	background-color: #E8E8E8;
}
ul.list_sidebar li:hover {
    background: linear-gradient(108deg, #f7434c, #ff8949);
	
}
ul.list_sidebar li a {
  text-decoration: none;
  text-align: left;
  color: #000000;
  display: block;
  font-family: 'Quicksand', sans-serif;
}
.list_sidebar li a:hover{
  color: #ffff;
}
ul.list_sidebar li {
    margin: 7px;
    padding: 5px; 
}
</style>
</ul>
	<h4 >Danh mục bài viết</h4>
	<ul class="list_sidebar">
<?php
	$sql_danhmuc_bv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
	$query_danhmuc_bv = mysqli_query($mysqli,$sql_danhmuc_bv);
	while($row = mysqli_fetch_array($query_danhmuc_bv)){			    		
?>
	<li style="text-transform: uppercase;"><a href="index.php?quanly=danhmucbaiviet&id=<?php echo $row['id_baiviet'] ?>"><?php echo $row['tendanhmuc_baiviet'] ?></a></li>
<?php
} 
?>
</ul>
			
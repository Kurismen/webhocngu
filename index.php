
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		.wrapper{
			width: 100%;
			height: auto;
			margin: auto;
		}
		.header{
			height: 100px;

		}
		.logo {
			float: left;
			width: 150px;
			padding: 0PX;
		}
		.logo img{
			width: 205px;
			display: block;
		}
		.search input{
			float: right;
			margin-top:0px;
        	
		}
		.search {
			float: right;
			display: flex;
			flex-wrap: nowrap;
			position: relative;
			margin: 20px;
			right: 500px;

        	
		}
		.search input[type=text]{width: 250px; height: 30px}
		.search input[type=submit]{height: 30px}
		#input1{
			float: right;
			width: 300px;
			height: 25px;

		}
		.search a {
	 		float: right;
			display: flex;
			flex-wrap: nowrap;
			position: relative;
			margin: auto;
			left: 450px;

	 	}
	 	.search a img {
	 		width: 30px;

	 	}
	 	.search #dangnhap{
	 		width: 30px;
	 		height: 30px;
	 	}
	 	.search a img{
	 		float: right;
			display: flex;
			flex-wrap: nowrap;
			position: relative;
			left: 85px;

	 	}
	 	.search a p{
	 		float: right;
	 		margin: 40px;
	 	}
		.menu{	
			width: 100%		
			height: 30px;	 
		}
		.menu #trangchu:hover{
			background-color: #00FFFF;

		}
		.menu #ql:hover{
			background-color: #00FFFF;
		}
		.menu #tsp:hover{
			background-color: #00FFFF;
		}
		.menu #gt:hover{
			background-color: #00FFFF;
		}
		.menu ul li{
			list-style: none;
			text-align: center;
			display: inline-table;
		}
		.menu ul li a{
			text-decoration: none;
			font-size: 16px;
			margin: 30px;
			padding: 5px;
			text-transform: uppercase;
		}
		.content{
			width: 100%;
			height: 550px;
			background-image:url(https://lh3.googleusercontent.com/s8lBM-IOBDLzoDCBcBjuJGnrIIrggR8To3W4b3URa7DBURCFVbEtk03PcxAopmyCPAlK3WanTbGo0bbWUfBWknFSiQIkXo-zRw=w1920-rw);

		}
		body {
           font-family: sans-serif;
           font-size: 15px;
         }
		.menudoc ul{
			background: #EEEEEE;
            width: 150px;
            padding: 0;
            list-style-type: none;
            text-align: left;
            text-align: center;
            margin-top: 50px;
		}
		.menudoc li {
            width: auto;
            height: 40px;
            line-height: 40px;
            border-bottom: 1px solid #e8e8e8;
            padding: 0 1em;

        }
        .menudoc{
        	margin-left: 100px;


        }
        .menudoc{
        	margin-top: 100px;
        }

        .menudoc li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            display: block;
        }

        .menudoc li:hover {
            background: #CDE2CD;
        }
        .menudoc ul li {
            position: relative;
        }
        .menudoc .sub-menu {
            position: absolute;
            left: 150px;
            top: 0;
        }
        .menudoc .sub-menu {
            position: absolute;
            left: 150px;
            top: 0;
            display: none;
        }
        .menudoc li:hover .sub-menu {
            display: block;
        }
        .menudoc .sub-menu1 {
            position: absolute;
            left: 150px;
            top: 0;
        }
        .menudoc .sub-menu1 {
            position: absolute;
            left: 150px;
            top: 0;
            display: none;
        }
        .menudoc li:hover .sub-menu1 {
            display: block;
        }
        .menudoc .sub-menu2 {
            position: absolute;
            left: 150px;
            top: 0;
        }
        .menudoc .sub-menu2 {
            position: absolute;
            left: 150px;
            top: 0;
            display: none;
        }
        .menudoc li:hover .sub-menu2 {
            display: block;
        }
        .menudoc .sub-menu3 {
            position: absolute;
            left: 150px;
            top: 0;
        }
        .menudoc .sub-menu3 {
            position: absolute;
            left: 150px;
            top: 0;
            display: none;
        }
        .menudoc li:hover .sub-menu3 {
            display: block;
        }
		
		
		.footer{
			width: 100%;
			height: 100px;
			
			
		}
		.sale{
			margin-left: 150px;
			margin-top: 100px;

		}
		.sanpham img {

			width: 250px;
			height: 250px;

		}
		.sanpham {
			margin-left: 120px;
			margin-top: 100px;
			width: 100px;
			display: flex;
		}
        .sanpham1 img {

			width: 250px;
			height: 250px;

		}
		.sanpham1 {
			margin-left: 120px;
			margin-top: 100px;
			width: 100px;
			display: flex;
		}
		


	</style>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="logo">
				<a href=""><img src="https://danangjob.vn/Upload/Member/201895164039.jpg "></a>
				
			</div>
			<div class="search">
				<form>
					<input type="buton" name="nhap" placeholder="Nhập từ khóa cần tìm" id="input1">
					<input type="submit" name="search" value="search" id="icon">
				</form>
				<a href="account.php">
					<img src="image/my.png" id="dangnhap"> <br>
					<p> Đăng Nhập </p>
				</a>
			</div>
		</div>
		<div class="menu">
			<ul>
				<li id="trangchu"> <a href="index.php"> Trang chủ </a> </li>
				<li id="ql"> <a href="Admin/view_product.html">Quản lý sản phẩm </a></li>
				<li id="tsp"><a href="Admin/add_product.html"> Thêm sản phẩm </a> </li>
				<li id="gt"><a href="about.html"> Giới thiệu </a></li>
			</ul>
		</div>
		<div class ="content">
			<div class ="menudoc">
				<br>
					<br>
				<ul>
					<li><a href="#">Tivi</a>
					     <ul class="sub-menu">
                            <li><a href="#">IOS</a></li>
                            <li><a href="#">Asus</a></li>
                            <li><a href="#">Acer</a></li>
                            <li><a href="#">Dell</a></li>
                            <li><a href="#">HP</a></li>
                            <li><a href="#">Lenovo</a></li>
                        </ul>
                    </li>
					<li><a href="#">Điện máy</a>
						<ul class="sub-menu1">
                            <li><a href="#">LG</a></li>
                            <li><a href="#">Samsung</a></li>
                            <li><a href="#">Sony</a></li>
                            <li><a href="#">TCL</a></li>
                            <li><a href="#">Phanasonic</a></li>
                            <li><a href="#">Toshiba</a></li>

                         </ul>
                     </li>
					<li><a href="#">Điên thoại</a>
					    <ul class="sub-menu2">
                            <li><a href="#">Iphone</a></li>
                            <li><a href="#">Samsung</a></li>
                            <li><a href="#">OPPO</a></li>
                            <li><a href="#">Realme</a></li>
                            <li><a href="#">Xiaomi</a></li>
                            <li><a href="#">Nokia</a></li>

                        </ul>
                     </li>
					<li><a href="#">PC</a>
						<ul class="sub-menu3">
                            <li><a href="#">PC văn phòng</a></li>
                            <li><a href="#">PC gaming</a></li>
                            <li><a href="#">PC đồ họa</a></li>
                            <li><a href="#">PC all-in one</a></li>
                            <li><a href="#">PC mini</a></li> 
                        </ul>       
					</li>
					<li><a href="#">Linh kiện</a>
						<ul class="sub-menu3">
                            <li><a href="#">PC văn phòng</a></li>
                            <li><a href="#">PC gaming</a></li>
                            <li><a href="#">PC đồ họa</a></li>
                            <li><a href="#">PC all-in one</a></li>
                            <li><a href="#">PC mini</a></li> 
                        </ul>       
					</li>
					<li><a href="#">Màn Hình</a>
						<ul class="sub-menu3">
                            <li><a href="#">PC văn phòng</a></li>
                            <li><a href="#">PC gaming</a></li>
                            <li><a href="#">PC đồ họa</a></li>
                            <li><a href="#">PC all-in one</a></li>
                            <li><a href="#">PC mini</a></li> 
                        </ul>       
					</li>
					<li><a href="#">Âm Thanh</a>
						<ul class="sub-menu3">
                            <li><a href="#">PC văn phòng</a></li>
                            <li><a href="#">PC gaming</a></li>
                            <li><a href="#">PC đồ họa</a></li>
                            <li><a href="#">PC all-in one</a></li>
                            <li><a href="#">PC mini</a></li> 
                        </ul>       
					</li>
					<li><a href="#">Network</a>
						<ul class="sub-menu3">
                            <li><a href="#">PC văn phòng</a></li>
                            <li><a href="#">PC gaming</a></li>
                            <li><a href="#">PC đồ họa</a></li>
                            <li><a href="#">PC all-in one</a></li>
                            <li><a href="#">PC mini</a></li> 
                        </ul>       
					</li>
				</ul>
			</div>
			
		</div>
		<div class="footer">
			<div class="sale">
				<a href="#"><img src="https://lh3.googleusercontent.com/8ul66f-ZJf1HUwVziSuntYnf1N3lUd8hv-oPMymbS951tLwZxX-BfycZofk9VgFEBgBTqyktsz_f58bGxumUwTSXIJF8xbJ_=w308-rw" id="sale1" ></a>
				<a href="#"><img src="https://lh3.googleusercontent.com/zKY1OPcji9_M_SsWz7rKXgJ0gvlIl7cpxU_tY0B_90D-DcO_V87oYvq6dniGLWCNv1vQEg8GJQtd9Fb7cXAikzW_4OIFNTQ=w308-rw"></a>
				<a href="#"><img src="https://lh3.googleusercontent.com/UC_ewLSPy08Q85P_dH4_CwSDdDJ3VK7VkVu8jnVvxYhKLsNzoWi5S0FFc6NvHethqIazcZLIJnYqPoQonBxs7bQLC0YRHyMm=w308-rw"></a>
				<a href="#"><img src="https://lh3.googleusercontent.com/5lJX3ShrxL72qpxygQ_-LUXHrtcGYGuVjKuzu5b1IsLHzV_bw9xWCgc9ECMiZz1ZzkaRXTykqdXXMuCsa6EsJ-cmQGEtzZQJ=w308-rw"></a>
			</div>

		</div>

		
		<div class="sanpham5">
			
			<div class="sanpham">
			<a href=""><img src="https://lh3.googleusercontent.com/BIK2lOSb8d5KGAf-XXYj4IHYKjuSSBx9eKoiKlU6hzPCQQoUByctytD7XhMhBEV4tRzebv6FAkd4v-FwkClI6xN8_17y4_fu=w500-rw"><div class="product-card__info"><div class="css-1qgxba5">Màn Hình Dell Ultrasharp 24" U2419H </div><div class="css-uxu180"><div class="css-m5hv1w"><div class="css-nel2x3"><span class="css-1ou7728">5.189.000<span class="css-1ul6wk9">đ</span></span><div class="css-1vptl7o"><span class="css-nq9pgm"><span class="css-1ul6wk9"></span></span><span class="css-1gmlrws"> </span></div></div></div><div class="css-1vhjcbm"><span color="#61c94d" size="22" class="css-rdwktr"></span></div></div></div></a>
			<a href=""><img src="https://lh3.googleusercontent.com/DZ5gwtL8KALjXWUcnQ1wPlM72yMhW5hVuSgitBxcyKBKqeyVErs-0b0rxthJyRcF9XtRHVXYIkvPMotp9A=w500-rw">
				<div>Laptop ASUS VivoBook 15 
					<br>16.990.000đ
				</div>
			</a>
			<a href=""><img src="https://lh3.googleusercontent.com/P7XzCtAKwRt2nv2vQwEejhdVWyJ48fC_8cWU9XcDKAYCchj1s5ERLhNoEChnMozSmIhSNET_M9Kh6A2fspA=w500-rw">
				<div>
					Laptop ASUS ZenBook 14 UX434FAC-A6116T (14" FHD/i5-10210U/8GB/512GB SSD/Intel UHD/Win10/1.3kg)<br>
					24.490.000đ
				</div>
			</a>
			<a href=""><img src="https://lh3.googleusercontent.com/8qWpd-BQk8XPyU-iMx70EAR9HGd16HZaHJBCO0NRiTKAjc4lhtvboSv4ksw7tOKEsWgQuM9m7NlskAOD5g=w500-rw">
				<div>
					Laptop MSI GF63 9SCXR-075VN (15.6" FHD/i5-9300H/8GB/512GB SSD/GeForce GTX 1650/Win10/1.9kg)<br>
					18.990.000đ
				</div>
			</a>
			<a href=""><img src="https://lh3.googleusercontent.com/hzH4kjJabYPNg2A1cNF8TycIaww_CcRbrt264LxdEI-azWmBhn0g9DB9IfPH2j0f7SKWoqDJZdAOHxjK6FV_=w500-rw">
				<div>
					Màn hình LCD Dell U2720Q (3840 x 2160/IPS/60Hz/8 ms)<br>
					13.990.000đ
				</div>
			</a>
			

		</div>
		<div class="sanpham1">
			<a href=""><img src="https://lh3.googleusercontent.com/k4TZRr8JP4kMSs0lWg2uUDlzthMmOep92zrWrYkgcBd35dJU5GMORe7vJ9eHuJC5Rg982x0LVCimgCFzaTIF=w500-rw">
				<div>Laptop LG Gram 17Z90N-V.AH75A5 (17" WQXGA/i7-1065G7/8GB/512GB SSD/Intel Iris Plus/Win10/1.4kg) 
					<br>42.500.000đ
				</div>
			</a>
			<a href=""><img src="https://lh3.googleusercontent.com/dx8HYw7Fk7tLfJy7V0vfCopEil_b6WPKlKw3FywLinFeAiXIY8BtWIrHrjz7cWeY3fEEXh9uJBe1tWxgrhA=w500-rw">
				<div>PC Dell Inspiron 3671 MT 70205608 (i5-9400/8GB/1TB HDD/UHD 630/Win10) 
					<br>12.190.000đ
				</div>
			</a>
			<a href=""><img src="https://lh3.googleusercontent.com/AZudAZyQInOPJohqiqQzDA9GysU4vJrHnwd3ysOeEAaIPknyw4x21_AZsM72u2LG6WTXbgXiCNXitqqDKw=w500-rw">
				<div>
					Chuột máy tính không dây Logitech M171 (Xanh)<br>
					284.000đ
				</div>
			</a>
			<a href=""><img src="https://lh3.googleusercontent.com/G4riNbhKYZYznOOEFU5widbsTs8SmeO1-SnPU03GwEn4uK9LFBiATG4FrQNpZS_w0lOWTr1-66iNpL8jsd4=w500-rw">
				<div>
					Card màn hình MSI GeForce GTX 1050Ti 4GB GDDR5 OCV1 (GTX-1050-Ti-4GT-OCV1)<br>
					4.890.000đ
				</div>
			</a>
			<a href=""><img src="https://lh3.googleusercontent.com/dD0TFbykM-_cF1uT8hNWKU-tim92I4X3qLfPGs44uXzrIF5YjYP44svqNkSptkUajHh4aZThMGLKax6hEJo=w500-rw">
				<div>
					Màn Hình Dell 23" P2319H (1920x1080/IPS/60Hz/8ms)<br>
					3.790.000đ
				</div>
			</a>
			

		</div>
		</div>
		

		

	</div>
</body>
</html>

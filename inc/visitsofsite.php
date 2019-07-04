<?php
	if (isset($_GET[col])) $col=$_GET[col];
	else $col=5;
	$file=file("../base.log"); 
?>
<html lang="ru">
	<head>
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
		<style type='text/css'>
	    	th.zz { 
	    		text-align: center;
	    		padding-left: 3px; 
	    		padding-top: 12px; 
	    		font-family: Arial; 
	    	}
	    	.serviceBox{
				border: 1px solid #8a716a;
				border-radius: 10px;
				margin-top: 30px;
				padding: 25px 20px;
				position: relative;
			}
			.serviceBox .service-icon{
				 width: 60px;
				 height: 60px;
				 line-height: 60px;
				 border-radius: 5px;
				 background: #9074E3;
				 font-size: 40px;
				 color: #fff;
				 text-align: center;
				 position: absolute;
				 top: -30px;
				 right: 40px;
			}
			.serviceBox .service-icon:before{
				 content: "";
				 width: 100%;
				 height: 100%;
				 background: #fff;
				 position: absolute;
				 top: -20px;
				 left: -45px;
				 opacity: 0.1;
				 transform: rotate(137deg) scale(1.5) skew(29deg) translate(-1px);
			}
			.serviceBox .service-icon:after{
				 content: "";
				 border-top: 11px solid #9074E3;
				 border-right: 11px solid transparent;
				 position: absolute;
				 top: 100%;
				 left: 50%;
				 margin-left: -4px;
			}
			.serviceBox .title{
				font-size: 24px;
	 			color: #787472;
			}
			.serviceBox .description{
	 			font-size: 20px;
	 			color: #8a716a;
	 			line-height: 25px;
			}
			@media only screen and (max-width: 990px){
	 			.serviceBox{ margin-bottom: 30px; }
			}
			@media only screen and (max-width: 767px){
	 			.serviceBox{ margin-bottom: 40px; }
			}
		</style>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<?php
					if ($col>sizeof($file)) { $col=sizeof($file); }
					echo " 
					<div class='col-lg-12'>
						<div class='col-md-4 ml-auto mr-auto col-sm-6'>
			                <div class='serviceBox'>
			                    <div class='service-icon'>
			                        <i class='fa fa-user'></i>
			                    </div>
			                    <br>
			                    <h3 class='title'>Последние 5 посещений на страницы сайта</h3>
			                    <h3 class='description'>
			                    	$col
			                    </h3>
			                </div>
			            </div>
			        </div>"; 
				?>
				<table class="col-lg-12 table">
					<tr class="tr">
						<th class="zz">Время, дата</th>
						<th class="zz">Кто посещал</th>
						<th class="zz">IP, прокси</th>
						<th class="zz">Посещенные страницы</th>
					</tr>

					<?php
					 	for ($si=sizeof($file)-1; $si+1>sizeof($file)-$col; $si--) {
							$string=explode("|",$file[$si]);
							$q1[$si]=$string[0]; // дата и время
							$q2[$si]=$string[1]; // имя бота
							$q3[$si]=$string[2]; // ip бота
							$q4[$si]=$string[3]; // адрес посещения
							echo '<tr><td class="zz">'.$q1[$si].'</td>';
							echo '<td class="zz" style="max-width:400px;">'.$q2[$si].'</td>';
							echo '<td class="zz">'.$q3[$si].'</td>';
							echo '<td class="zz">'.$q4[$si].'</td></tr>';
						}
						echo '
						<h2 class="col-lg-12 text-center" style="color:#787472">последние</h2>
						<a class="col-md-3 btn btn-outline-primary ml-auto" href=?col=100>100</a> 
						<a class="col-md-3 btn btn-outline-primary ml-auto mr-auto" href=?col=500>500</a>
						<a class="col-md-3 btn btn-outline-primary mr-auto" href=?col=1000>1000</a> 
						<a class="col-md-4 btn btn-outline-primary ml-auto mr-auto" style="margin:20px 0;" href=?col='.sizeof($file).'>все посещения</a>';
					?>
				</table>	
			</div>
		</div>
	</body>
</html>

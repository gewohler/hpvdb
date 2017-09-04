<!-- 2017/8/1 by seadog007 -->
<!-- developed by Gewohler-->
<!DOCTYPE html>
<html>
<head>
	
	<title>MVISleaks — 比監理網更強大</title>
	<meta charset="utf-8">
	<meta name= "viewport" content= "width=device-width, initial-scale=1" >
	<meta name="author" content="Gewohler">
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./style.css">
	
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Noto+Sans:400,700);
	</style>
	
</head>

<body>
	<div class="container-fluid" id="floatnav">
		<div style="display:inherit; flex-direction:row;justify-content:start; align-items:center">
			<a class="h3 hpvdb themeTextColor" href="hpvdb.php">MVISleaks<span class="titleversion">v0.3.5.5</span></a>
			<span>自己的查牌機自己做 監理網sucks洗洗睡</span>
		</div>
		
		<div style="display:inherit;align-items: center;flex-shrink: 1;">
				
				<div class="dropdown">
					<a class="btn themeTextColor dropdown" href="#" role="button" id="tips" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TIPS</a>
					<div class="dropdown-menu" id="about-area" aria-labelledby="tips">
						
						<p class="dropdown-item" id="about-unit">
						</p>
						<ul>
							<li><a class="clicklink" href="?searchfor=#">?searchfor=#</a></li>
							<li><a class="clicklink" href="?searchfor=#">#</a></li>
							<li><a class="clicklink" href="?searchfor=#">?searchfor=#</a></li>
						</ul>
    
					</div>
				</div>
				
				<div class="dropdown">
					<a class="btn themeTextColor dropdown" href="#" role="button" id="about" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >ABOUT</a>
					<div class="dropdown-menu" id="about-area" aria-labelledby="about">
						
						<p class="dropdown-item" id="about-unit">
							<a class="h5">楔子</a>
						</p>
						<p class="dropdown-item" id="about-unit">
							<a class="h5">資料</a>
							斗內、投稿資料、勘誤或工商服務 請洽<a class="clicklink" href="https://script.google.com/macros/s/AKfycbw8Hn6GLNJ-HLiqd5VgLyLpDlzS6TjH5l1PiyrKezYdDsdlC93_/exec">統一窗口</a>。
						</p>
						<p class="dropdown-item" id="about-unit">
							<a class="h5">未來計劃</a>
						</p>
						<p class="dropdown-item" id="about-unit">
							P.S
						</p>
						
					</div>
				</div>
				
				<div class="dropdown">
					<a class="btn themeTextColor dropdown" href="#" role="button" id="myst-data" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">謎之物</a>
					<div class="dropdown-menu" id="about-area" aria-labelledby="myst-data">
						<iframe src="myst-data.php" class="dropdown-item" id="about-unit"></iframe>
					</div>
				</div>
				
		</div>
	</div>
		
<div style="left:0%;right:0%;position:absolute;" class="container-fluid main area">
		
	<div id="floatnav" style="opacity:0.0;z-index: -100;">
		<div style="display:inherit; flex-direction:row;justify-content:start; align-items:center">
			<a class="h3 hpvdb">　</a>
			<span>　</span>
		</div>
		<div style="display:inherit;align-items: center;flex-shrink: 1;">
			<div class="dropdown">
				<a class="btn themeTextColor dropdown" href="#" role="button" id="tips" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TIPS</a>
			</div>
			<div class="dropdown">
				<a class="btn themeTextColor dropdown" href="#" role="button" id="tips" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TIPS</a>
			</div>
			<div class="dropdown">
				<a class="btn themeTextColor dropdown" href="#" role="button" id="tips" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TIPS</a>
			</div>
		</div>
	</div>
		
	<div id="searchArea">
		<div>
			<h4 class="updatetime">更新時間：20170904-17:14</span>
		</div>
		
		<form method="GET">
			<input class="input" multiple="multiple" type="textbox" id="searchfor" name="searchfor" placeholder="車牌號碼，型號或廠牌">
			<input class="input" type="submit" value="找車">
		</form>
	</div>
	
	
<?php
if (isset($_GET['searchfor']) & $_GET['searchfor'] != ''){
        $file = 'db/demo.csv';
        $searchfor = explode(" ", $_GET['searchfor']);

        $contents = file_get_contents($file);

        foreach ($searchfor as $keyword){
                //https://stackoverflow.com/questions/3686177/php-to-search-within-txt-file-and-echo-the-whole-line
                $pattern = preg_quote($keyword, '/');
                $pattern = "/^.*$pattern.*\$/im";
                preg_match_all($pattern, $contents, $matches);
                $contents = implode("\n", $matches[0]);
        }

        //http://php.net/manual/en/function.str-getcsv.php#114764
        $data = str_getcsv($contents, "\n");
        $csv = array_map('str_getcsv', $data);

        if ($csv[0][0] == NULL){
                echo '<div class="alert alert-warning" style="max-width: 40%;margin-left: 30%;margin-right: 30%;" role="alert">沒東西</div>';
        }else{
                echo '<div class="alert alert-info" style="max-width: 40%;margin-left: 30%;margin-right: 30%;" role="alert" style="font-size:1.5rem;">' . '找到車號：' . count($csv). '個' . '</div>';

                echo '<div class="container-fluid divtable">';
                echo '<div class="thead">';

                $headers = ['車號','車主', '廠牌', '型式（通稱）', '型式（行照）', '引擎', '車體', '出廠年月', '發照日', '繳銷日', '發照單位', '車號歷史(前)', '車號歷史(後)', '備考'];
                echo '<div class="tr">';
                echo '<div class="th"><a data-toggle="tooltip" data-html="true" data-placement="auto" title="..">車號</button></div>';
                echo '<div class="th"><a data-toggle="tooltip" data-html="true" data-placement="auto" title="..">車主</button></div>';
                echo '<div class="th"><a data-toggle="tooltip" data-html="true" data-placement="auto" title="..">廠牌</button></div>';
                echo '<div class="th"><a data-toggle="tooltip" data-html="true" data-placement="auto" title="..">型式（通稱）</button></div>';
                echo '<div class="th"><a data-toggle="tooltip" data-html="true" data-placement="auto" title="..">型式（行照）</button></div>';
                echo '<div class="th"><a data-toggle="tooltip" data-html="true" data-placement="auto" title="..">引擎</button></div>';
                echo '<div class="th"><a data-toggle="tooltip" data-html="true" data-placement="auto" title="..">車體</button></div>';
                echo '<div class="th"><a data-toggle="tooltip" data-html="true" data-placement="auto" title="..">出廠年月</button></div>';
                echo '<div class="th"><a data-toggle="tooltip" data-html="true" data-placement="auto" title="..">發照日</button></div>';
                echo '<div class="th"><a data-toggle="tooltip" data-html="true" data-placement="auto" title="..">繳銷日</button></div>';
                echo '<div class="th"><a data-toggle="tooltip" data-html="true" data-placement="auto" title="..">發照單位</button></div>';
                echo '<div class="th"><a data-toggle="tooltip" data-html="true" data-placement="auto" title="..">車號歷史(前)</button></div>';
                echo '<div class="th"><a data-toggle="tooltip" data-html="true" data-placement="auto" title="..">車號歷史(後)</button></div>';
                echo '<div class="th"><a data-toggle="tooltip" data-html="true" data-placement="auto" title="..">備考</button></div>';
				echo '</div>';

                echo '</div>';
                echo '<div class="tbody">';

                $headernum = count($headers);
                foreach ($csv as $row){
                        echo '<div class="tr">';
                        $count = 0;
                        foreach ($row as $td){
                                $count += 1;
                                if ($count <= $headernum)
                                echo '<div class="td"><a href="?searchfor=' . $td .'">' . $td . '</a></div>';
                        }
                        echo '</div>';
                }

                echo '</div>';
                echo '</div>';
        }
}else{
?>

		

		<?php
}
?>

	<div class="container qsl-panel">
		
		<div class="btn-group-vertical qsl-menu" style="width:12rem;">
			<a href="#" class="qsl-label">監理所站、業者</a>
			
			<a class="qsl-green" data-toggle="collapse" href="#臺北市、區" aria-expanded="false">臺北市、區</a>
			<div class="qsl-green collapse" id="臺北市、區">
				<div class="card qsl-green"> 
					
					<a class="qsl-title">臺北市區監理所</a>
						<a href="?searchfor= 中興大業巴士">中興巴士</a>
						
				</div>	
			</div>
					
			<a class="qsl-green" data-toggle="collapse" href="#新竹區" aria-expanded="false">新竹區</a>
			<div class="qsl-green collapse" id="新竹區">
				<div class="card qsl-green"> 
					
					<a class="qsl-title">新竹區監理所</a>
						<a href="?searchfor= 金牌客運">金牌客運</a>
						
				</div>	
			</div>
					
			<a class="qsl-green" data-toggle="collapse" href="#臺中區" aria-expanded="false">臺中區</a>
			<div class="qsl-green collapse" id="臺中區">
				<div class="card qsl-green"> 
					
					<a class="qsl-title">臺中區監理所</a>
						<a href="?searchfor= 中台灣客運">中台灣客運</a>
					
				</div>	
			</div>
					
			<a class="qsl-green" data-toggle="collapse" href="#嘉義區" aria-expanded="false">嘉義區</a>
			<div class="qsl-green collapse" id="嘉義區">
				<div class="card qsl-green"> 
					
					<a class="qsl-title">雲林監理站</a>
						<a href="?searchfor= 臺西客運">臺西客運</a>
			
				</div>	
			</div>
			
			<a class="qsl-green" data-toggle="collapse" href="#高雄市、區" aria-expanded="false">高雄市、區</a>
			<div class="qsl-green collapse" id="高雄市、區">
				<div class="card qsl-green"> 
					
					<a class="qsl-title">高雄市區監理所</a>
						<a href="?searchfor= 高雄市公共車船管理處">高雄市公車處</a>
						
				</div>	
			</div>
			
		</div>
		
		<div class="btn-group-vertical qsl-menu" style="width: 8rem;">
			<a href="#" class="qsl-label">牌號</a>
			
			<a class="qsl-green" data-toggle="collapse" href="#新制" aria-expanded="false">新制+倒UV系</a>
			<div class="qsl-green collapse" id="新制">
				<div class="card qsl-green"> 
			
					<a href="?searchfor= KKA-0">KKA-0</a>
					
				</div>
			</div>
					
			<a class="qsl-green" data-toggle="collapse" href="#舊制倒F、倒A" aria-expanded="false">舊制倒F、倒A</a>
			<div class="qsl-green collapse" id="舊制倒F、倒A">
				<div class="card qsl-green"> 
							
					<a href="?searchfor= -AB">-AB</a>
					
				</div>
			</div>
					
			<a class="qsl-green" data-toggle="collapse" href="#舊制正F、正A" aria-expanded="false">舊制正F、正A</a>
			<div class="qsl-green collapse" id="舊制正F、正A">
				<div class="card qsl-green"> 
							
					<a href="?searchfor= AG-">AG-</a>
					
				</div>
			</div>
					
			<a class="qsl-red" data-toggle="collapse" href="#紅牌" aria-expanded="false">紅牌</a>
			<div class="qsl-green collapse" id="紅牌">
				<div class="card qsl-red"> 
							
					<a href="?searchfor= -AA">-AA</a>
					
				</div>
			</div>
					
			<a class="qsl-yel" data-toggle="collapse" href="#黃牌" aria-expanded="false">黃牌</a>
			<div class="qsl-yel collapse" id="黃牌">
				<div class="card qsl-yel"> 
							
					<a href="?searchfor= -PP">-PP</a>
					
				</div>
			</div>
					
			<a class="qsl-wg" data-toggle="collapse" href="#自用牌" aria-expanded="false">自用牌</a>
			<div class="qsl-wg collapse" id="自用牌">
				<div class="card qsl-wg"> 
							
					<a href="?searchfor=KJA-">KJA-</a>
					
				</div>
			</div>
					
		</div>
				
		<div class="btn-group-vertical qsl-menu" style="width:8rem;">
				
			<a class="qsl-label" data-toggle="collapse" href="#bodymanu-a" aria-expanded="false">車體/現存</a>
			<div class="qsl-green collapse" id="bodymanu-a">
				<div class="card qsl-green"> 
					
					<a href="?searchfor= 原裝">原裝車</a>
					
				</div>
			</div>
					
			<a class="qsl-green" data-toggle="collapse" href="#bodymanu-o" aria-expanded="false">其他</a>
			<div class="qsl-green collapse" id="bodymanu-o">
				<div class="card qsl-green"> 
							
					<a href="?searchfor= 一加一">一加一</a>
					
				</div>
			</div>
		</div>
		
		<div class="btn-group-vertical qsl-menu" style="width:12rem;">
			<a class="qsl-label" data-toggle="collapse" href="#brands-C" aria-expanded="false">廠牌</a>
			
			<div class="qsl-green collapse show" id="brands-C">
				<div class="card qsl-green"> 
						
					<a href="?searchfor= DAEWOO">DAEWOO</a>
					
				</div>
			</div>
					
			<a class="qsl-green" data-toggle="collapse" href="#brands-O" aria-expanded="false">more..</a>
			<div class="qsl-green collapse" id="brands-O">
				<div class="card qsl-green"> 
							
					<a href="?searchfor= BENZ">Mercedes-Benz</a>
					<a class="qsl-empty">Bluebird</a>
					
				</div>
			</div>
					
		</div>
				
		<div class="btn-group-vertical qsl-menu" style="width:14rem;">
			<a class="qsl-label" data-toggle="collapse" href="#topic" aria-expanded="false">話題</a>
					
			<div class="qsl-bl collapse show" id="topic">
				<div class="card qsl-bl"> 
						
					<a href="?searchfor= 跳號">跳號</a>
					
				</div>
			</div>
				
		</div>
			
	</div>
</div>

	<div class="container-fluid rightsdeclarearea">
		<p class="rightsdeclare themeTextColor">Powered by Bootstrap 4 beta | jQuery 3.2.1 | PHP | HTML</p>
		<p class="rightsdeclare themeTextColor">2017 Gewohler. All Rights Reserved.</p>
	</div>
	
</body>
</html>

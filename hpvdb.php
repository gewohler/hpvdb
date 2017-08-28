<!-- 2017/8/1 by seadog007 -->
<!-- developed by Gewohler-->
<!DOCTYPE html>
<html>
<head>
	
	<title>MVISleaks</title>
	<meta charset="utf-8">
	<meta name= "viewport" content= "width=device-width, initial-scale=1" >
	
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
		<div style="display:flex; flex-direction:row;justify-content:start; align-items:flex-end">
			<a class="h2 hpvdb themeTextColor" href="hpvdb.php">MVISleaks<span class="titleversion">v0.3.4</span></a>
			<span>自己的查牌機自己做 監理網sucks洗洗睡</span>
		</div>
		
		<div style="display:flex; flex-direction:row;justify-content:end">
				
				<div class="dropdown">
					<a class="btn themeTextColor dropdown" href="#" role="button" id="tips" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TIPS</a>
					<div class="dropdown-menu" aria-labelledby="tips">
						
						<p class="dropdown-item">
							可以在網址後直接key"?searchfor=關鍵字"，效果是一樣的。
							關鍵字間留一格空白可以做交集搜尋。範例
						</p>
						<ul>
							<li><a class="clicklink" href="?searchfor=311-WF">?searchfor=311-WF</a></li>
							<li><a class="clicklink" href="?searchfor=北客+ERK+2005">北客 ERK 2005</a></li>
							<li><a class="clicklink" href="?searchfor=北客+ERK+2005">?searchfor=北客+ERK+2005</a></li>
						</ul>
    
					</div>
				</div>
				
				<div class="dropdown">
					<a class="btn themeTextColor dropdown" href="#" role="button" id="about" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" >ABOUT</a>
					<div class="dropdown-menu" aria-labelledby="about">
						
						<p class="dropdown-item">
							嫌監理機關提供的車號資訊對一個公車迷來說太少，於是自己用office做了一些整理。一年過後又覺得監理網功能太殘廢，乾脆把手邊這筆資料弄成互動式的東西這樣。
							資料內容是大客車的型式諸元，基本上只收錄不會變動的東西（例如底盤型式、底盤出廠年份等等），會變動的（如座椅配置、有無中後門）不在此列。
						</p>
						<p class="dropdown-item">
							資料以兩大官方來源為主，監理服務網及公路監理加值服務網。監理網沒有的東西基本上來自民間…對…從各種網站、FB社團看來的OTZ
							所以想斗內、投稿資料、勘誤或工商服務的話 請洽<a class="clicklink" href="https://script.google.com/macros/s/AKfycbw8Hn6GLNJ-HLiqd5VgLyLpDlzS6TjH5l1PiyrKezYdDsdlC93_/exec">統一窗口</a>。
						</p>
						<p class="dropdown-item">
							P.S.
							來稿不要給我維基百科的東西。寫那些巴士向條目的都是些毫無自主品管意識的拉基愛好者，各種fancruft、瑣碎敘述會讓我懷疑這些人的智商。
							以苗栗客運底下車輛表BYD、金旅兩個單元為例，列出苗客自有的車號還算合理，但這兩個單元自2015年底到現在一直在不斷增加中，修訂歷史顯示這些修改都來自同一個User，內容洋洋灑灑一路寫到採購同款車的業者和車號，連BYD跑蘇花公路300公里免充電好棒棒這種業配佚聞都出來了不知道寫這種東西到底是在衝殺小
								
							所以不要給我維基百科那種拉基。
						</p>
						
					</div>
				</div>
				
				<div class="dropdown">
					<a class="btn themeTextColor dropdown" href="#" role="button" id="myst-data" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">謎之物</a>
					<div class="dropdown-menu" style="min-width:60rem" aria-labelledby="myst-data">
							<iframe src="myst-data.php" class="dropdown-item"></iframe>
					</div>
				</div>
				
			</div>
		</div>
	</div>
		
<div style="left:0%;right:0%;position:absolute;" class="container-fluid main area">
		
		<div style="display:flex; flex-direction:row;justify-content:space-between;opacity:0.0;">
			<h2 class="hpvdb">　</h2>
			<div style="display:flex; flex-direction:row;justify-content:end">
				<a class="btn " href="#" role="button" id="garbage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">garbage</a>
			</div>
		</div>
		
		<div id="searchArea">
			<div>
				<h4 class="updatetime">更新時間：20170828-11:39</h4>
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
                echo '<h4 style="text-align: center;">' . '找到車號：' . count($csv). '個' . '</h4>';
                echo '<br>';
                echo '<div class="table-responsive"><table class="table" width="100%">';
                echo '<thead>';

                $headers = ['車號','車主', '廠牌', '型式（通稱）', '型式（行照）', '引擎', '車體', '出廠年月', '發照日', '繳銷日', '發照單位', '車號歷史(前)', '車號歷史(後)', '備考'];
                echo '<td><a data-toggle="tooltip" data-placement="bottom" title="就是車號..">車號</button></td>';
                echo '<td><a data-toggle="tooltip" data-placement="bottom" title="XX客運">車主</button></td>';
                echo '<td><a data-toggle="tooltip" data-placement="bottom" title="國外車系（e.g.歐美日中..etc）以其母廠英文名為主，台系車依其中文廠名">廠牌</button></td>';
                echo '<td><a data-toggle="tooltip" data-placement="bottom" title="e.g.RK8J、K380等等">型式（通稱）</button></td>';
                echo '<td><a data-toggle="tooltip" data-placement="bottom" title="行照上登記的型式">型式（行照）</button></td>';
                echo '<td><a data-toggle="tooltip" data-placement="bottom" title="就是引擎..">引擎</button></td>';
                echo '<td><a data-toggle="tooltip" data-placement="bottom" title="車體打造/組裝廠，CKD進口車以組裝者為主">車體</button></td>';
                echo '<td><a data-toggle="tooltip" data-placement="bottom" title="監理網來的">出廠年月</button></td>';
                echo '<td><a data-toggle="tooltip" data-placement="bottom" title="監理網來的">發照日</button></td>';
                echo '<td><a data-toggle="tooltip" data-placement="bottom" title="監理網來的">繳銷日</button></td>';
                echo '<td><a data-toggle="tooltip" data-placement="bottom" title="XX監理站orXX監理所">發照單位</button></td>';
                echo '<td><a data-toggle="tooltip" data-placement="bottom" title="前車號">車號歷史(前)</button></td>';
                echo '<td><a data-toggle="tooltip" data-placement="bottom" title="現在車號">車號歷史(後)</button></td>';
                echo '<td><a data-toggle="tooltip" data-placement="bottom" title="　">備考</button></td>';
                /*
                foreach ($headers as $td){
                        echo '<td>' . $td . '</td>';
                }
				*/

                echo '</thead>';
                echo '<tbody>';

                $headernum = count($headers);
                foreach ($csv as $row){
                        echo '<tr>';
                        $count = 0;
                        foreach ($row as $td){
                                $count += 1;
                                if ($count <= $headernum)
                                echo '<td><a class="resultlink" href="?searchfor=' . $td .'">' . $td . '</a></td>';
                                //啟用逐格邊框
                                //echo '<td class="resultoutline"><a class="resultlink" href="?searchfor=' . $td .'">' . $td . '</a></td>';
                        }
                        echo '</tr>';
                }

                echo '</tbody>';
                echo '</table></div>';
        }
}else{
?>

		

		<?php
}
?>

	<div>
		<div style="margin-top:30px;margin-bottom:20px">
			
			<div class="container row">
				<div class="btn-group-vertical col">
					<a class="rapidrequest" href="?searchfor= 三重客運">三重客運</a>
					<a class="rapidrequest" href="?searchfor= ZHONGTONG">中通(ZHONGTONG)</a>
				</div>
			</div>
			
			<div class="btn-group">
				<a class="button rapidrequest" href="?searchfor=高雄市公共車船管理處+轉籍">高雄市公車處轉籍車</a>
				<a class="button rapidrequest" href="?searchfor=HS8J">國瑞低床</a>
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

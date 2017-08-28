<!-- 2017/8/1 by seadog007 -->
<!-- developed by Gewohler-->
<!DOCTYPE html>
<html>
<head>
	
	<title>MVISleaks</title>
	<meta charset="utf-8">
	
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
		<div class="container-fluid row floatnav" style="padding:1rem">
		<div class="container col-auto">
			<a class="h1 hpvdb themeTextColor" href="hpvdb.php">MVISleaks<span class="titleversion">v0.3.2.2</span></a>
			<span>自己的查牌機自己做 監理網sucks洗洗睡</span>
		</div>
		
		<div class="container col-auto">
			<div class="row">
				<div class="dropdown">
					<a class="btn themeTextColor dropdown" href="#" role="button" id="tips" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TIPS</a>
					<div class="dropdown-menu" aria-labelledby="tips">
						<a class="dropdown-item">
							<p class="dropdown-item">
								可以在網址後直接key"?searchfor=關鍵字"，效果是一樣的。<br>
								關鍵字間留一格空白可以做交集搜尋。範例<br>
							</p>
						</a>
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
						<a class="dropdown-item">
							<a class="dropdown-item"></a>
							<p class="dropdown-item">
								嫌監理機關提供的車號資訊對一個公車迷來說太少，<br>
								於是自己用office做了一些整理。<br>
								一年過後又覺得監理網功能太殘廢，乾脆把手邊這筆資料弄成互動式的東西這樣。<br>
								資料內容是大客車的型式諸元，<br>
								基本上只收錄不會變動的東西（例如底盤型式、底盤出廠年份等等），<br>
								會變動的（如座椅配置、有無中後門）不在此列。<br>
							</p>
							<p class="dropdown-item">
								資料以兩大官方來源為主，監理服務網及公路監理加值服務網。<br>
								監理網沒有的東西基本上來自民間…<br>
								對…從各種網站、FB社團看來的OTZ<br>
								所以想斗內、投稿資料、勘誤或工商服務的話 請洽<a class="clicklink" href="https://script.google.com/macros/s/AKfycbw8Hn6GLNJ-HLiqd5VgLyLpDlzS6TjH5l1PiyrKezYdDsdlC93_/exec">統一窗口</a>。<br>
							</p>
							<p class="dropdown-item">
								P.S.<br>
								來稿不要給我維基百科的東西。<br>
								寫那些巴士向條目的都是些毫無自主品管意識的拉基愛好者，<br>
								各種fancruft、瑣碎敘述會讓我懷疑這些人的智商。<br>
								<br>
								以苗栗客運底下車輛表BYD、金旅兩個單元為例，列出苗客自有的車號還算合理，<br>
								但這兩個單元自2015年底到現在一直在不斷增加中，<br>
								修訂歷史顯示這些修改都來自同一個User，<br>
								內容洋洋灑灑一路寫到採購同款車的業者和車號，<br>
								連BYD跑蘇花公路300公里免充電好棒棒這種業配佚聞都出來了<br>
								不知道寫這種東西到底是在衝殺小<br>
								<br>
								所以不要給我維基百科那種拉基。<br>
							</p>
						</a>
					</div>
				</div>
				
				<div>
					<a class="btn themeTextColor" href="/myst-data.php" role="button">謎之物</a>
				</div>
			</div>
		</div>
	</div>

<div style="left:0%;right:0%;position:absolute;margin-top:12%;" class="main">
		
		<div style="margin-top:30px;">
			<div>
				<h4 class="updatetime">更新時間：20170827-21:48</h5>
			</div>
			
			<form method="GET">
				<input class="input" multiple="multiple" type="textbox" id="searchfor" name="searchfor" placeholder="車牌號碼，型號或廠牌">
				<input class="input" type="submit" value="找車">
			</form>
		</div>
	
	<div style="margin-top:30px;">
	
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
                echo '<table width="100%">';
                echo '<thead>';

                $headers = ['車號','車主', '廠牌', '型式（通稱）', '型式（行照）', '引擎', '車體', '出廠年月', '發照日', '繳銷日', '發照單位', '車號歷史(前)', '車號歷史(後)', '備考'];
                foreach ($headers as $td){
                        echo '<td class="resultHeader">' . $td . '</td>';
                }

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
                               
                        }
                        echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
        }
}else{
?>

		

		<?php
}
?>
	</div>

	<div>
		<div style="margin-top:30px;margin-bottom:20px">
			<ul>
				<li><a class="rapidrequest" href="?searchfor=臺中快捷巴士">臺中快捷巴士</a></li>
				<li><a class="rapidrequest" href="?searchfor=高雄市公共車船管理處+轉籍">高雄市公車處轉籍車</a></li>
				<li><a class="rapidrequest" href="?searchfor=HS8J">國瑞低床</a></li>
			</ul>
		</div>
	</div>

	<div class="rightsdeclarearea">
		<p class="rightsdeclare themeTextColor">Powered by Bootstrap 4 beta | jQuery 3.2.1 | PHP | HTML</p>
		<p class="rightsdeclare themeTextColor">2017 Gewohler. All Rights Reserved.</p>
	</div>
	
</div>
</body>
</html>

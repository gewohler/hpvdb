<!-- 2017/8/1 by seadog007 -->
<!-- developed by Gewohler-->
<!DOCTYPE html>
<html>
<head>
	
	<title>HPVDB</title>
	<meta charset="utf-8">
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	
	<!--Bootstrap3-->
	<!--
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./style.css">
	
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Noto+Sans:400,700);
	</style>
	
</head>

<body>
		<div style="top:0px;left:0px;right:0px;position:fixed;width:100%;background: #FDFCFC;opacity:1.0;z-index:5;">
			<h1 class="hpvdb">
				<a href="https://gewohler-hpvdb.herokuapp.com/hpvdb.php">HPVDB<span class="titleversion">v0.3.2</span></a>
			</h1>
		</div>
<div style="left:0%;right:0%;position:absolute;margin-top:40px;" class="main">
		
		<div style="margin-top:30px;">
			<div>
				<h3 class="updatetime">更新時間：20170826-00:50</h5>
			</div>
			
			<form method="GET">
				<input class="input" multiple="multiple" type="textbox" id="searchfor" name="searchfor" placeholder="車牌號碼，型號或廠牌">
				<input class="input" type="submit" value="找車">
			</form>
		</div>
	
<!--<div class="main">
	<div class="floatsection">
		
		<h1 style="text-align: left;margin-left:20px;margin-top:20px;"><a href="https://gewohler-hpvdb.herokuapp.com/hpvdb.php">HPVDB<span class="titleversion">v0.3.1</span></a></h1>

		<div>
			<div>
				<h3 style="text-align: center;">更新時間：20170826-00:50</h5>
			</div>
			
			<form method="GET">
				<input class="input" multiple="multiple" type="textbox" id="searchfor" name="searchfor" placeholder="車牌號碼，型號或廠牌">
				<input class="input" type="submit" value="找車">
			</form>
		</div>
		
	</div>-->
	
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
                echo '沒有結果';
        }else{
                echo '<h4 style="text-align: center;">' . '找到車號：' . count($csv). '個' . '</h4>';
                echo '<br>';
                echo '<table width="100%">';
                echo '<thead>';

                $headers = ['車牌號碼','車主', '廠牌', '型式（通稱）', '型式（行照）', '引擎', '車體', '出廠年月', '發照日', '繳銷日', '發照單位', '前車號', '目前狀態', '備考'];
                foreach ($headers as $td){
                        echo '<td>' . $td . '</td>';
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
                                echo '<td>' . $td . '</td>';
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
		<div class="container">
			<button type="button" class="btn btn-info" style="margin-top:20px;" data-toggle="collapse" data-target="#tips">一些tips</button>
			<div id="tips" class="collapse" style="">
				可以在網址後直接key"?searchfor=關鍵字"，效果是一樣的。<br>
				關鍵字間留一格空白可以做交集搜尋。範例<br>
			<ul>
				<li><a class="clicklink" href="?searchfor=311-WF">?searchfor=311-WF</a></li>
				<li><a class="clicklink" href="?searchfor=北客+ERK+2005">北客 ERK 2005</a></li>
				<li><a class="clicklink" href="?searchfor=北客+ERK+2005">?searchfor=北客+ERK+2005</a></li>
			</ul>
			</div>
		</div>

		<div>
			<h3 style="margin-top:30px;margin-bottom:20px">快選</h2>
			<ul>
				<li><a class="rapidrequest" href="?searchfor=臺中快捷巴士">臺中快捷巴士</a></li>
				<li><a class="rapidrequest" href="?searchfor=高雄市公共車船管理處+轉籍">高雄市公車處轉籍車</a></li>
				<li><a class="rapidrequest" href="?searchfor=HS8J">國瑞低床</a></li>
			</ul>
		</div>

		<div>
			<p>
				這是個簡單的資料庫，以領牌字軌為骨幹整理一些大客車的型式諸元。<br>
				資料來源有民間也有官方，官方部份，大部份來自監理服務網及公路監理加值服務網。<br>
				希望這個資料庫可以帶給車迷們一點方便。<br>
				基本上只收錄不會變動的東西（例如底盤型式、底盤出廠年份等等），<br>
				會變動的（如座椅配置、有無中後門）不在此列。<br>
			</p>
		</div>

		<div>
			<p>
				一人維護能力有限，若您喜歡歡迎來共同耕耘<br>
				投稿資料、勘誤或工商服務請洽
				<a class="clicklink" href=https://script.google.com/macros/s/AKfycbw8Hn6GLNJ-HLiqd5VgLyLpDlzS6TjH5l1PiyrKezYdDsdlC93_/exec>統一窗口</a></br>
				<!--上傳程式來自<a href=http://chibaby1231.pixnet.net/blog/post/47094673>chibaby1231.pixnet.net</a>-->
			</p>
		</div>

		<div>
			<h3>資料來源</h3>
				<ul>
					<li><a style="max-height:80px" href=https://www.mvdis.gov.tw><img src="https://www.mvdis.gov.tw/m3/images/m3_logo.jpg"></a></li>
					<li><a href=https://mvdvan.hinet.net/mvdvan/whpg.htm><img src="https://mvdvan.hinet.net/mvdvan/cpage/mvdvan_logo.gif"></a></li>
				</ul>
				<ul>
					<li>某神祕二手車整理表</li>
					<li><a href=https://www.facebook.com/groups/150429951673614>Facebook社團：PTT交通運輸中心</a></li>
					<li><a href=/myst-data.php>謎之物</a></li>
				</ul>
		</div>
	</div>
	
	<div class="rightsdeclarearea">
		<div class="rightsdeclare" style="text-align:right">Powered by Bootstrap 4 beta | jQuery 3.2.1 | PHP | HTML</div>
		<div class="rightsdeclare">2017 Gewohler. All Rights Reserved.</div>
	</div>
</div>
</body>
</html>

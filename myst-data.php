<!-- 2017/8/1 by seadog007 -->
<!-- developed by Gewohler-->
<html>
<head>
	
	<title>HPVDB</title>
	<meta charset="utf-8">
	
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic);

		body {
		font-family: "Noto Sans", /*"Roboto", Helvetica, Arial, sans-serif*/;
		font-weight: 400;
		font-size: 18px;
		//line-height: 30px;
		//color: #AAA;
		background: #F2F4F7; /*背景顏色*/
		}

	</style>
	
</head>

<body>
<h2 style="text-align: center;">HPVDB-謎之物</h2>
<div>
<?php
if (isset($_GET['searchfor']) & $_GET['searchfor'] != ''){
        $file = 'db/all.csv';
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
                echo '<br><br>';
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

	<div style="text-align: center;">
		<form method="GET">
			<input multiple="multiple" type="textbox" id="searchfor" name="searchfor">
			<input type="submit" value="搜尋">
		</form>
	</div>
<br><br>


<br>

<?php
}
?>
</html>

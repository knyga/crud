<html>
	<head>
		<link type="text/css" rel="StyleSheet" href="/css/report.css" />
	</head>
	<body>
		<div class="title">Отчет о прибыли предприятия с <?php echo $from; ?> по <?php echo $to; ?></div>
		<table class="data">
			<tr class="header">
				<td>Дата</td>
				<td>Прибыль</td>
			</tr>
			<?php foreach($data as $key=>$value) { ?>
			<tr>
				<td><?php echo $value["date"]?></td>
				<td><?php echo $value["hourprice"]?></td>
			</tr>
			<? } ?>
			<tr class="total">
				<td>Итого</td>
				<td><?php echo $total?></td>
			</tr>
		</table>
		<div class="sign">
			Подпись, ФИО, дата: _____________________________________________________
		</div>
	</body>
</html>
<html>
	<head>
		<title>Отчет о прибыли по услугам</title>
	</head>
	<body>
		<?php require('../../blocks/head.php') ?>
		<h1>Отчет о прибыли по услугам</h1>
		<form class="form" target="_blank" action="/modules/report-services_revenue/report.php">
			<table>
				<tr>
					<td class="t-label">Дата от: </td>
					<td><input type="text" name="from" data-pattern="^\d{2}\.\d{2}\.\d{4}$"></td>
				</tr>
				<tr>
					<td class="t-label">Дата до: </td>
					<td><input type="text" name="to" data-pattern="^\d{2}\.\d{2}\.\d{4}$"></td>
				</tr>
			</table>
			<div class="submit">
				<div class="btn-group">
					<button type="submit" class="btn btn-primary">Открыть</button>
					<button type="reset" class="btn">Очистить</button>
				</div>
			</div>
		</form>
	</body>
</html>
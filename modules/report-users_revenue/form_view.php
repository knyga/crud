<html>
	<head>
		<title>Отчет о прибыли по сотрудникам</title>
	</head>
	<body>
		<?php require('../../blocks/head.php') ?>
		<h1>Запрос на формирование отчета о продаже сотрудникам</h1>
		<form class="form" target="_blank" action="/modules/report-users_revenue/report.php">
			<table>
				<tr>
					<td class="t-label">Продавец: </td>
					<td>
						<select id="iduser" name="iduser">
							<?php foreach($users as $key=>$value) {?>
							<option value="<?php echo $value["iduser"]?>"><?php echo $value["fnameuser"]." ".$value["lnameuser"]?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
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
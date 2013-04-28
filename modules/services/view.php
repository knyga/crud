<html>
	<head>
		<title>Управление сервисами</title>
	</head>
	<body>
		<?php require('../../blocks/head.php') ?>
		<div style="text-align:center;">
			<h1>Управление сервисами</h1>
		</div>
		<form onsubmit="return false;" id="change" class="form">
			<table>
				<tr>
					<td class="t-label">Действие: </td>
					<td><span id="action">Добавление</span><input type="hidden" id="act" value="create"></td>
				</tr>
				<tr>
					<td class="t-label">Номер: </td>
					<td><input type="text" id="idservice" disabled></td>
				</tr>
				<tr>
					<td class="t-label">Название: </td>
					<td><input type="text" id="nameservice"></td>
				</tr>
				<tr>
					<td class="t-label">Описание: </td>
					<td><input type="text" id="descservice"></td>
				</tr>
				<tr>
					<td class="t-label">Цена за час: </td>
					<td><input type="text" id="hourprice" data-pattern="^\d+(\.\d+)?$"></td>
				</tr>
			</table>
			<div class="submit">
				<div class="btn-group">
					<button id="submit" class="btn btn-primary">Подтвердить</button>
					<button  id="delete" class="btn" disabled>Удалить</button>
				</div>
			</div>
		</form>
		<div class="add-zone"><a href="javascript://" id="add">Добавить</a></div>
		<table class="view table">
			<tr class="header">
				<td>Номер</td>
				<td>Название</td>
				<td>Цена за час</td>
			</tr>
			<?php foreach($services as $key=>$value) {?>
			<tr idservice="<?php echo $value["idservice"]?>" nameservice="<?php echo $value["nameservice"]?>" descservice="<?php echo $value["descservice"]?>" hourprice="<?php echo $value["hourprice"]?>">
				<td><?php echo $value["idservice"]?></td>
				<td><?php echo $value["nameservice"]?></td>
				<td><?php echo $value["hourprice"]?></td>
			</tr>
			<?php } ?>
		</table>
		<!-- =================SCRIPTS======================== -->
		<script>
			$(document).ready(function(){
				$.crud({
					attributes: ['idservice', 'nameservice', 'hourprice', 'descservice'],
					createUrl: '/modules/services/add.php',
					updateUrl: '/modules/services/edit.php',
					deleteUrl: '/modules/services/delete.php',
					idFieldName: 'idservice'
				});
			});
		</script>
	</body>
</html>
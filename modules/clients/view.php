<html>
	<head>
		<title>Управление клиентами</title>
	</head>
	<body>
		<?php require('../../blocks/head.php') ?>
		<div style="text-align:center;">
			<h1>Управление клиентами</h1>
		</div>
		<form onsubmit="return false;" id="change" class="form">
			<table>
				<tr>
					<td class="t-label">Действие: </td>
					<td><span id="action">Добавление</span><input type="hidden" id="act" value="create"></td>
				</tr>
				<tr>
					<td class="t-label">Номер: </td>
					<td><input type="text" id="idclient" disabled></td>
				</tr>
				<tr>
					<td class="t-label">Имя: </td>
					<td><input type="text" id="fnameclient"></td>
				</tr>
				<tr>
					<td class="t-label">Фамилия: </td>
					<td><input type="text" id="lnameclient"></td>
				</tr>
				<tr>
					<td class="t-label">Карта: </td>
					<td>
						<select id="idcard">
							<option value="0">Нету</option>
							<?php foreach($cards as $key=>$value) {?>
							<option value="<?php echo $value["idcard"]?>"><?php echo $value["namecard"]?></option>
							<?php } ?>
						</select>
					</td>
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
				<td>Имя</td>
				<td>Фамилия</td>
			</tr>
			<?php foreach($clients as $key=>$value) {?>
			<tr idclient="<?php echo $value["idclient"]?>" fnameclient="<?php echo $value["fnameclient"]?>" lnameclient="<?php echo $value["lnameclient"]?>" idcard="<?php echo $value["idcard"]?>">
				<td><?php echo $value["idclient"]?></td>
				<td><?php echo $value["fnameclient"]?></td>
				<td><?php echo $value["lnameclient"]?></td>
			</tr>
			<?php } ?>
		</table>
		<!-- =================SCRIPTS======================== -->
		<script>
			$(document).ready(function(){
				$.crud({
					attributes: ['idclient', 'fnameclient', 'lnameclient', 'idcard'],
					createUrl: '/modules/clients/add.php',
					updateUrl: '/modules/clients/edit.php',
					deleteUrl: '/modules/clients/delete.php',
					idFieldName: 'idclient'
				});
			});
		</script>
	</body>
</html>
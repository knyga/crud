<html>
	<head>
		<title>Управление продажей услуг</title>
	</head>
	<body>
		<?php require('../../blocks/head.php') ?>
		<h1>Управление продажей услуг</h1>
		<form onsubmit="return false;" id="change" class="form">
			<table>
				<tr>
					<td class="t-label">Действие: </td>
					<td><span id="action">Добавление</span><input type="hidden" id="act" value="create"></td>
				</tr>
				<tr>
					<td class="t-label">Номер: </td>
					<td><input type="text" id="idsell" disabled></td>
				</tr>
				<tr>
					<td class="t-label">Дата: </td>
					<td><input type="text" id="datetime" disabled></td>
				</tr>
				<tr>
					<td class="t-label">Услуга: </td>
					<td>
						<select id="idservice">
							<?php foreach($services as $key=>$value) {?>
							<option value="<?php echo $value["idservice"]?>"><?php echo $value["nameservice"]?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td class="t-label">Клиент: </td>
					<td>
						<select id="idclient">
							<?php foreach($clients as $key=>$value) {?>
							<option value="<?php echo $value["idclient"]?>"><?php echo $value["fnameclient"]." ".$value["lnameclient"]?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td class="t-label">Продавец: </td>
					<td>
						<select id="iduser">
							<?php foreach($users as $key=>$value) {?>
							<option value="<?php echo $value["iduser"]?>"><?php echo $value["fnameuser"]." ".$value["lnameuser"]?></option>
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
				<td>Дата</td>
				<td>Продавец</td>
				<td>Услуга</td>
				<td>Клиент</td>
			</tr>
			<?php foreach($sells as $key=>$value) {?>
			<tr datetime="<?php echo $value["datetime"]?>" idclient="<?php echo $value["idclient"]?>" idservice="<?php echo $value["idservice"]?>" iduser="<?php echo $value["iduser"]?>" idsell="<?php echo $value["idsell"]?>">
				<td><?php echo $value["idsell"]?></td>
				<td><?php echo $value["datetime"]?></td>
				<td><?php echo $value["fnameuser"]." ".$value["lnameuser"]?></td>
				<td><?php echo $value["nameservice"]?></td>
				<td><?php echo $value["fnameclient"]." ".$value["lnameclient"]?></td>
			</tr>
			<?php } ?>
		</table>
		<!-- =================SCRIPTS======================== -->
		<script>
			$(document).ready(function(){
				$.crud({
					attributes: ['idsell', 'idservice', 'idclient', 'iduser', 'datetime'],
					createUrl: '/modules/sells/add.php',
					updateUrl: '/modules/sells/edit.php',
					deleteUrl: '/modules/sells/delete.php',
					idFieldName: 'idsell'
				});
			});
		</script>
	</body>
</html>
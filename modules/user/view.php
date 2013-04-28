<html>
	<head>
		<title>Авторизация</title>
		<link type="text/css" rel="StyleSheet" href="/css/main.css" />
		<link type="text/css" rel="StyleSheet" href="/bootstrap/css/bootstrap.min.css" />
	</head>
	<body>
		<h1>Авторизация</h1>
		<form class="form" action="/modules/user/do.php" id="login">
			<table>
				<tr>
					<td class="t-label">Логин:  </td>
					<td><input id="username" name="username" type="text"/></td>
				</tr>
				<tr>
					<td class="t-label">Пароль: </td>
					<td><input id="password" name="password" type="password"/></td>
				</tr>
			</table>
			<div class="submit">
				<div class="btn-group">
					<button type="submit" class="btn btn-primary">Вход</button>
					<button type="reset" class="btn">Очистить</button>
				</div>
			</div>
		</form>
	</body>
</html>
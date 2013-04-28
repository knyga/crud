<link type="text/css" rel="StyleSheet" href="/css/main.css" />
<link type="text/css" rel="StyleSheet" href="/bootstrap/css/bootstrap.min.css" />
<script src="/js/jquery-1.9.1.min.js"></script>
<script src="/js/jquery-crud.js"></script>
<script src="/js/jquery-validate.js"></script>
<script src="/js/main.js"></script>
<!-- ===================================================================== -->

<ul class="navigation navbar-inner">
	<li><a href="/">Главная</a></li>
	<?php if($userrights["service_access"]) { ?><li><a href="/modules/sells/model.php">Продажа услуг</a></li>
	<li><a href="/modules/services/model.php">Услуги</a></li><?php } ?>
	<?php if($userrights["client_access"]) { ?><li><a href="/modules/clients/model.php">Клиенты</a></li><?php } ?>
	<?php if($userrights["report_access"]) { ?><li><a href="/modules/report-services_revenue/form.php">Отчет о прибыли по услугам</a></li>
	<li><a href="/modules/report-users_revenue/form.php">Отчет о прибыли по сотрудникам</a></li>
	<li><a href="/modules/report-revenue/form.php">Отчет о прибыли</a></li><?php } ?>
	<li><a href="/modules/user/logout.php">Выход</a></li>
</ul>
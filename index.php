<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8">
		<title>kovalevvb</title>
		<style>
			body {font: 12px Arial;	background: #f8f8f8;}
			header {font: 20px Arial; padding: 5px; color: #1e90ff; background: #f0f8ff;}
			table {background: #f0f8ff;}
			td {padding: 2px;}
			th {text-align: left; font: 12px Arial; background: #efefef;}
			button {font: 12px Arial; text-align: left;}
		</style>
	</head>
	<body>
		<header>НЕСКОЛЬКО ПОЛЕЗНЫХ УТИЛИТ</header>
		<form id="navigationform">
			<table>
				<tr>
					<td><button buttontype="submit" formmethod="get" name="todo" value="about">О САЙТЕ</button></td>
					<td><button buttontype="submit" formmethod="get" name="todo" value="project">ПРОЕКТЫ</button></td>
					<td><button buttontype="submit" formmethod="get" name="todo" value="checklist">ЧЕК-ЛИСТ</button></td>
					<td><button buttontype="submit" formmethod="get" name="todo" value="login">ВОЙТИ</button></td>
				</tr>
			</table>
		</form>
		<table><tr>
			<td width="20%" valign="top">
			</td>
			<td width="80%" valign="top">
			    <?php
//					var_dump($_GET);
                    if(isset($_GET["todo"])){
                        $todo = $_GET["todo"];
                        switch ($todo) {
                            case 'about':
                                echo "САЙТ ПОЛЕЗНЫХ УТИЛИТ";
                                break;
							case 'project':{
								echo "<table>
									<tr>
										<td>001</td>
										<td>ЭСКФ-2</td>
										<td>Ковалев ВБ</td>
									<tr>
									</tr>
										<td>002</td>
										<td>ВЭН</td>
										<td>Балаков ПЮ</td>
									</tr>
								</table>";
							}
								break;
								case 'checklist':{
									echo "<table>
<tr><td>ДАТА</td><td>АВТОР</td><td>ПРОЕКТ</td><td>ОБЪЕКТ</td><td>РАЗДЕЛ/ЭТАП</td><td>ЗАДАЧА</td><td>ОТВЕСТВ</td><td>СТАТУС</td><td>ПЛАН</td><td>
<tr><td>08.08.22</td><td>Ковалев ВБ</td><td>Уралэнергосбыт: Келлогг Псков</td><td></td><td>ПИР</td><td>ТРП</td><td>Беликов М</td><td>выполнено</td><td></td><td>
<tr><td>29.08.22</td><td>Ковалев ВБ</td><td>Уралэнергосбыт: Келлогг Псков</td><td></td><td>ПИР</td><td>ЭД</td><td>Беликов М</td><td>выполнено</td><td></td><td>
<tr><td>08.08.22</td><td>Ковалев ВБ</td><td>Уралэнергосбыт: Келлогг Псков</td><td></td><td>ПИР</td><td>техрешение установки i-tor</td><td>Ковалев ВБ</td><td>выполнено</td><td></td><td>
<tr><td>08.08.22</td><td>Ковалев ВБ</td><td>Уралэнергосбыт: Келлогг Псков</td><td></td><td>ПИР</td><td>документ: задание заводу на ШУ</td><td>Ковалев ВБ</td><td>отменено</td><td></td><td>
<tr><td>08.08.22</td><td>Ковалев ВБ</td><td>Уралэнергосбыт: Келлогг Воронеж</td><td></td><td>ПИР</td><td>утвердить варианты реализации АИИС</td><td>Ковалев ВБ</td><td>выполнено</td><td></td><td>
<tr><td>08.08.22</td><td>Ковалев ВБ</td><td>Уралэнергосбыт: Келлогг Воронеж</td><td></td><td>ПИР</td><td>ТРП</td><td>Беликов М</td><td>выполнено</td><td></td><td>
<tr><td>08.08.22</td><td>Ковалев ВБ</td><td>Уралэнергосбыт: Келлогг Воронеж</td><td></td><td>ТКП</td><td>сделать ТКП на шинный мост</td><td>Ковалев ВБ</td><td>выполнено</td><td></td><td>
<tr><td>08.08.22</td><td>Ковалев ВБ</td><td>Уралэнергосбыт: Кирса</td><td></td><td>ППО</td><td>отчет о ППО</td><td>Ковалев ВБ</td><td>выполнено</td><td></td><td>
<tr><td>08.08.22</td><td>Ковалев ВБ</td><td>Уралэнергосбыт: Кирса</td><td></td><td>ППО</td><td>Техническое решение ПКУ 27,5</td><td>Ковалев ВБ</td><td>выполнено</td><td></td><td>
<tr><td>24.08.22</td><td>Ковалев ВБ</td><td>Уралэнергосбыт: Кирса</td><td></td><td>ПИР</td><td>ТРП</td><td>Беликов М</td><td>выполнено</td><td></td><td>
<tr><td>08.08.22</td><td>Ковалев ВБ</td><td>ЭСКФ-2</td><td>Сочи</td><td>ППО</td><td>схема</td><td>Ковалев ВБ</td><td>выполнено</td><td></td><td>
<tr><td>26.07.22</td><td>Балаков ПЮ</td><td>ЭСКФ-2</td><td>Сочи</td><td> -</td><td>выводить Созыкину полностью</td><td> -</td><td>выполнено</td><td></td><td>
<tr><td>24.08.22</td><td>Ковалев ВБ</td><td>ЭСКФ-2</td><td>Сочи</td><td>ПНР</td><td>комплектация</td><td>Ковалев ВБ</td><td>выполнено</td><td></td><td>
<tr><td>08.08.22</td><td>Ковалев ВБ</td><td>ЭСКФ-2</td><td>Сочи</td><td>МО</td><td>новая ТП</td><td>Ковалев ВБ</td><td>выполнено</td><td></td><td>
<tr><td>08.08.22</td><td>Ковалев ВБ</td><td>ЭСКФ-2</td><td>Самара</td><td>МО</td><td>документы сч ТТ ТН, фото сч есть</td><td>Ковалев ВБ</td><td>отменено</td><td></td><td>
<tr><td>08.08.22</td><td>Ковалев ВБ</td><td>ЭСКФ-2</td><td>Самара</td><td>ППО</td><td>фотоотчет</td><td>Ковалев ВБ</td><td>выполнено</td><td></td><td>
<tr><td>24.08.22</td><td>Ковалев ВБ</td><td>ЭСКФ-2</td><td>Самара</td><td>Комплектация</td><td>ШС, материалы</td><td>Ковалев ВБ</td><td>выполнено</td><td></td><td>
<tr><td>24.08.22</td><td>Ковалев ВБ</td><td>ЭСКФ-2</td><td>Самара</td><td>МНР</td><td>2ТУ ЯСН + связь</td><td>Ковалев ВБ</td><td>выполнено</td><td></td><td>
<tr><td>08.08.22</td><td>Ковалев ВБ</td><td>ЭСКФ-2</td><td>Волгоград</td><td>МО</td><td>организовать поверку счетчиков</td><td>Ковалев ВБ</td><td>выполнено</td><td></td><td>
<tr><td>24.08.22</td><td>Балаков ПЮ</td><td>ЭСКФ-2</td><td>Волгоград</td><td>МО</td><td>поверка счетчиков</td><td>Ковалев ВБ</td><td>отменено</td><td></td><td>
<tr><td>24.08.22</td><td>Ковалев ВБ</td><td>ЭСКФ-2</td><td>Волгоград</td><td>МНР</td><td>связь на ТП</td><td>Ковалев ВБ</td><td>отменено</td><td></td><td>
<tr><td>24.08.22</td><td>Балаков ПЮ</td><td>ЭСКФ-2</td><td>Нновгород</td><td>МО</td><td>поверка счетчиков, поверка ТТ</td><td>Ковалев ВБ</td><td>выполнено</td><td></td><td>
<tr><td>08.08.22</td><td>Ковалев ВБ</td><td>ЭСКФ-2</td><td>Новая Рига</td><td>МО</td><td>поверка ТТ, Ростест </td><td>Ковалев ВБ</td><td>выполнено</td><td></td><td>
<tr><td>08.08.22</td><td>Ковалев ВБ</td><td>ЭСКФ-2</td><td>Новая Рига</td><td>МНР</td><td>монтировать учет на ЯСН</td><td>Ковалев ВБ</td><td>выполнено</td><td></td><td>
<tr><td>08.08.22</td><td>Ковалев ВБ</td><td>ЭСКФ-2</td><td>Выборг</td><td>МНР</td><td>наладить опрос сч 106</td><td>Ковалев ВБ</td><td>выполнено</td><td></td><td>
<tr><td>24.08.22</td><td>Балаков ПЮ</td><td>ЭСКФ-2</td><td>Выборг</td><td>МНР</td><td>завести в АИИС</td><td>Балаков ПЮ</td><td>выполнено</td><td></td><td>
<tr><td>24.08.22</td><td>Балаков ПЮ</td><td>ЭСКФ-2</td><td>Выборг</td><td>МО</td><td>изготовить паспорта ТТ</td><td>Ковалев ВБ</td><td>отменено</td><td></td><td>
<tr><td>05.09.22</td><td>Балаков ПЮ</td><td>ЭСКФ-2</td><td>Выборг</td><td>МО</td><td>организовать поверку ТТ</td><td>Ковалев ВБ</td><td>отменено</td><td></td><td>
<tr><td>08.08.22</td><td>Ковалев ВБ</td><td>ЭСКФ-2</td><td>Липецк</td><td>МО</td><td>организовать фото ТТ ТН</td><td>Ковалев ВБ</td><td>отменено</td><td></td><td>
<tr><td>24.08.22</td><td>Балаков ПЮ</td><td>ЭСКФ-2</td><td>Липецк</td><td>МО</td><td>изготовить паспорта ТТ, ТН</td><td>Ковалев ВБ</td><td>отменено</td><td></td><td>
<tr><td>14.09.22</td><td>Балаков ПЮ</td><td>ЭСКФ-2</td><td>Липецк</td><td>МО</td><td>поверка ТТ ТН</td><td>Ковалев ВБ</td><td>отменено</td><td></td><td>
</table>";
								}
                            default:
                                // code...
                                break;
                        }
                    }
                ?>
			</td>
		</tr></table>
	</body>
</html>
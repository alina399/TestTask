<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?//echo "<pre>"; print_r($arResult); echo "</pre>";  //эта конструкция, если надо посмотреть,что внутри массива $arResult, который передается в шаблон?>

<?if (!empty($arResult)): #если массив результатов обработки логики компонента не пуст, выводим данные в шаблон?>
	<br/>
	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Название</th>
				<th>Описание</th>
				<th>Символьный код</th>
			</tr>
		</thead>
		<tbody>
			<?foreach ($arResult as $k => $value): //идем по записям групп и извлекаем данные в строки и столбцы?>
				<tr>
					<td><?=$value["ID"]?></td>
					<td><?=$value["NAME"]?></td>
					<td><?=$value["DESCRIPTION"]?></td>
					<td><?=$value["STRING_ID"]?></td>
				</tr>
			<?endforeach;?>
		</tbody>
	</table>
	<br/>
<?endif;?>
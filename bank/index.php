<?php //bank ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
<meta charset="utf-8">
    <title>bank</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css">
	<link href="css/nouislider.css?v=1210" rel="stylesheet">

 <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>/-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>  
  
<script src="js/nouislider.js?v=1210"></script>

<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-ui.js"></script>
<script>
jQuery( function() {
jQuery( "#dep-date" ).datepicker();
} );
</script>

<script src="js/script.js"></script>

</head>
<body>
<div class="holder">
	<div class="grid-x">
		
	</div>

	<div class="b_content">
		<div class="b_row">
			<div class="b_col_4_sm b_col_12_m b_col_16_w b_hide_block">				
			</div>
		</div>
	</div>
	
	<div class="b_content">
		<div class="b_row">
			<div class="b_col_4_sm b_col_12_m b_col_16_w">
				<div class="b_top_logo">
					<img src="images/logo.jpg" alt="World Bank Publications" title="World Bank Publications" style="border: none;">
				</div>

				<div class="b_top_phones">
					<img src="images/phones.png" alt="World Bank Publications" title="World Bank Publications" style="border: none;">
				</div>
			</div>
		</div>
	</div>
	
	<!-- top menu /-->
	<div class="b_content">
		<div class="b_row">
			<div class="b_col_4_sm b_col_12_m b_col_16_w b_hide_block">
				<div class="b_top_menu">
					<div class="b_top_menu_item"><a href="#">Кредитные карты</a></div>
					<div class="b_top_menu_item"><a href="#">Вклады</a></div>
					<div class="b_top_menu_item"><a href="#">Дебетовая карта</a></div>
					<div class="b_top_menu_item"><a href="#">Страхование</a></div>
					<div class="b_top_menu_item"><a href="#">Друзья</a></div>
					<div class="b_top_menu_item"><a href="#">Интернет-банк</a></div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- breadcrumb /-->
	<div class="b_content">
		<div class="b_row">
			<div class="b_col_4_sm b_col_12_m b_col_16_w b_breadcrumb">
				<a href="#">Главная</a> - <a href="#">Вклады</a> - Калькулятор
			</div>
		</div>
	</div>
	
	<div class="b_content">
		<div class="b_row">
			<div class="b_col_4_sm b_col_12_m b_col_16_w">
				<div class="b_calc">
					<h1>Калькулятор</h1>
					<div class="b_fields">
						<div class="b_field_3">Дата оформления вклада</div>
						<div class="b_field"><input type="text" name="v_date" value="дд.мм.гг" id="dep-date"></div>
						<div class="b_field"><div style="width: 100%; height: 21px;"></div></div>
						<div class="b_field"><div style="width: 100%; height: 21px;"></div></div>
					</div>
					<div class="b_fields">
						<div class="b_field_3">Сумма вклада</div>
						<div class="b_field b_field_2">
							<div style="float: left;">
								<input type="text" name="v_dep_sum" value="1000 Р" id="min_budget_sum_i_0">
							</div>
						
						
							<div class="quick">

	<div id="slider_0" class="noUi-target noUi-ltr noUi-horizontal">
	</div>
				
</div>
				
<script>
var slider = document.getElementById('slider_0');

noUiSlider.create(slider, {
    start: [0, 100],
    connect: true,
    range: {
        'min': 0,
        'max': 100
    }
});
</script>

<style>
.trackbar { margin: 5px 0 20px 0; } .trackbar img { float: left; position: relative; top: -13px; left: 0px; cursor: pointer; } .trackbar .left_area { margin: 0; border-top: 2px solid #beaea6; width: 30px; float: left; padding: 5px 0; } .trackbar .middle_area { margin: 0; border-top: 2px solid #20b661; width: 30px; float: left; padding: 5px 0; } .trackbar .right_area { margin: 0; border-top: 2px solid #beaea6; width: 30px; float: left; padding: 5px 0; }
.trackbar .middle_area2 { margin: 0; border-top: 2px solid #bb1122; width: 30px; float: left; padding: 5px 0; }
.c_budget2_value {
	color: #676767;
	float: left;
	margin: 10px 0 0 0;
}
</style>

<div class="p_slider_marks">
<div class="clear" style="clear: both;"></div>
							<div class="c_budget2_value" id="budget_value_min_i_0">1&nbsp;000 р</div>
							<div class="c_budget2_value" id="budget_value_max_i_0" style="float: right;">3&nbsp;000&nbsp;000</div>
							<!--<input type="hidden" name="min_budget" value="10&nbsp;000 р" id="min_budget_sum_i_0">/-->
							<input type="hidden" name="max_budget" value="3&nbsp;000&nbsp;000" id="max_budget_sum_i_0">
							
</div>
<div class="b_spacer"></div>		
						</div>
						<!--<div class="b_field">&nbsp;</div>-->
					</div>
					
					<div class="b_fields b_fields_dep_period">
						<div class="b_field_3">Срок вклада</div>
						<div class="b_field">
							<select name="v_dep_period" id="v_dep_period_i">
								<option value="1">1 год</option>
								<option value="2">2 года</option>
								<option value="3">3 года</option>
								<option value="4">4 года</option>
								<option value="5">5 лет</option>
								<option value="100">бессрочно</option>
							</select>
						</div>
						<div class="b_field"><div style="width: 100%; height: 21px;"></div></div>
						<div class="b_field"><div style="width: 100%; height: 21px;"></div></div>
					</div>
					
					<div class="b_fields">
						<div class="b_field_3">Пополнение вклада</div>
						<div class="b_field">
							<input name="v_dep_add" type="radio" checked value="0">Нет
							<input name="v_dep_add" type="radio" value="1">Да
						</div>
						<div class="b_field"><div style="width: 100%; height: 21px;"></div></div>
						<div class="b_field"><div style="width: 100%; height: 21px;"></div></div>
					</div>
					
					<div class="b_fields">
						<div class="b_field_3">Сумма пополнения вклада</div>
						<!--<div class="b_field">
							<input type="text" name="v_dep_sum_add" value="10000">
						</div>/-->
						
						<div class="b_field b_field_2">
							<div style="float: left;">
								<input type="text" name="v_dep_add_sum" value="1000 Р" id="min_budget_sum_i_1">
							</div>
						
						
							<div class="quick">

	<div id="slider_1" class="noUi-target noUi-ltr noUi-horizontal">
	</div>
				
</div>
				
<script>
var slider = document.getElementById('slider_1');

noUiSlider.create(slider, {
    start: [0, 100],
    connect: true,
    range: {
        'min': 0,
        'max': 100
    }
});
</script>

<div class="p_slider_marks">
<div class="clear" style="clear: both;"></div>
							<div class="c_budget2_value" id="budget_value_min_i_1">1&nbsp;000 р</div>
							<div class="c_budget2_value" id="budget_value_max_i_1" style="float: right;">3&nbsp;000&nbsp;000</div>
							<!--<input type="hidden" name="min_budget" value="10&nbsp;000 р" id="min_budget_sum_i_0">/-->
							<input type="hidden" name="max_budget" value="3&nbsp;000&nbsp;000" id="max_budget_sum_i_1">
							
</div>
<div class="b_spacer"></div>		
						</div>
						
						<div class="b_field"><div style="width: 100%; height: 21px;"></div></div>
						<div class="b_field"><div style="width: 100%; height: 21px;"></div></div>
					</div>
					
					<div class="b_fields">
						<div class="b_field b_field_8">
							<div class="b_calc_button_outer" id="b_calc_button_i">
								<div class="b_calc_button_inner">
									Рассчитать
								</div>
							</div>
						</div>
						<div class="b_field b_field_9">
							<div class="b_calc_result_title">Результат: </div><div class="b_calc_result" id="b_calc_result_i"></div>
						</div>
						
					</div>
					
					<div class="b_fields">
						<div class="b_field">
							<div style="width: 100%; height: 51px;"></div>
						</div>
						<div class="b_field">
							<div style="width: 100%; height: 51px;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="b_content footer">
		<div class="b_row">
			<div class="b_col_4_sm b_col_12_m b_col_16_w b_hide_block">
				<div class="b_footer">
					<div class="b_footer_item"><a href="#">Кредитные карты</a></div>
					<div class="b_footer_item"><a href="#">Вклады</a></div>
					<div class="b_footer_item"><a href="#">Дебетовая карта</a></div>
					<div class="b_footer_item"><a href="#">Страхование</a></div>
					<div class="b_footer_item"><a href="#">Друзья</a></div>
					<div class="b_footer_item"><a href="#">Интернет-банк</a></div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

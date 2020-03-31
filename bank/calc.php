<?php
	//echo date('Y-m-d H:i:s'); //test
	
	/*
	4.5 Формула с капитализаций процентов по вкладу:
4.5.1 summn = summn-1 + (summn-1 + summadd)daysn(percent / daysy)
4.5.2 где summn – сумма на счете на месяц n (руб),
4.5.3 summn-1 – сумма на счете на конец прошлого месяца
4.5.4 summadd – сумма ежемесячного пополнения
4.5.5 daysn – количество дней в данном месяце, на которые приходился вклад
4.5.6 percent – процентная ставка банка - 10%
4.5.7 daysy – количество дней в году.
4.5.8 Если в поле «Пополнение вклада» стоит «нет», данные «summadd» не используются.

	*/
	
	$dep_date = substr($_POST['dep_date'], 0, 30);
	
	if ( $dep_date == 'дд.мм.гг' )
		exit;
	
	$v_dep_sum = substr($_POST['v_dep_sum'], 0, 30);
	
	$v_dep_sum = substr($v_dep_sum, 0, -3);
	$v_dep_sum = str_ireplace(' ', '', $v_dep_sum);
	
	$v_dep_add_sum = substr($_POST['v_dep_add_sum'], 0, 30);
	
	$v_dep_add_sum = substr($v_dep_add_sum, 0, -3);
	$v_dep_add_sum = str_ireplace(' ', '', $v_dep_add_sum);
	
	$v_dep_add = intval($_POST['v_dep_add']);
	
	$v_dep_period = intval($_POST['v_dep_period']);
	
	//echo $v_dep_period;
	
	$summn = $v_dep_sum;
	$summn_1 = $v_dep_sum;
	
	$summadd = $v_dep_add_sum;
	
	$dep_date_fields = explode('/', $dep_date);
	
	$daysn = cal_days_in_month(CAL_GREGORIAN, $dep_date_fields[0], $dep_date_fields[2]);
	
	$percent = 0.1;
	
	$daysy = 365 + date("L", mktime(0, 0, 0, 1, 1, $dep_date_fields[2]));
	
	$summ = $summn;
	$summ_1 = 0;
	
	if ( $v_dep_add < 1 )
	{
		$summadd = 0;
	}
		
	for ( $y_n = 1; $y_n < ($v_dep_period +1); $y_n++ )
	{
		for ( $n = 0; $n < 12; $n++ )
		{
			$n_c = $dep_date_fields[0] + $n;
			$n_c = $n_c % 12;
			
			if ( $n_c == 0 )
				$n_c = 1;
		
			$days_m = cal_days_in_month(CAL_GREGORIAN, $n_c, $dep_date_fields[2]);
			
			if ( $n < 1 )
				$daysn = abs($dep_date_fields[1] - $days_m);
			else
				$daysn = $days_m;	
			
			$summ_1 = $summ;
			
			$summ = $summ_1 + ($summ_1+$summadd) * $daysn * ($percent / $daysy);			
			
		}
	}

	echo sprintf("%.2f", $summ).' руб.';
	
	//test
	echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>'; 
	//test
?>

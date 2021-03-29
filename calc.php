<?php

function calculation(){
    /*
    4.5.1 summn = summn-1 + (summn-1 + summadd)daysn(percent / daysy)

    4.5.2 где summn – сумма на счете на месяц n (руб),

    4.5.3 summn-1 – сумма на счете на конец прошлого месяца

    4.5.4 summadd – сумма ежемесячного пополнения

    4.5.5 daysn – количество дней в данном месяце, на которые приходился вклад

    4.5.6 percent – процентная ставка банка - 10%

    4.5.7 daysy – количество дней в году.

    4.5.8 Если в поле «Пополнение вклада» стоит «нет», данные «summadd» не используются.
    */

    
    $summn = $_POST['sum'];
    $percent = 10;
    $daysy = 365;

    if($_POST['answer'] == 1)
    {
        $summadd = $_POST['sumAdding'];
    }
    else
    {
        $summadd = 0;
    }

    $year = substr($_POST['dateIn'], -10, -6);
    $month = substr($_POST['dateIn'], -5, -3); 
    $daysn = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $yearCount = $_POST['dateLong'];

    for ($i=0; $i < 12*$yearCount; $i++) { 
        $summn = $summn + ($summn + $summadd )*$daysn*($percent / $daysy);
        //Не совсем понял как рассчитывается вклад
    }
    echo $summn;
}

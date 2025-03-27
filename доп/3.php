<?php

$cardNumber = '4111111111111111'; 


$pattern = "/^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9]{2})[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|7[0-9]{15}|(?:2131|1800|35\d{3})\d{11})$/";

if (preg_match($pattern, $cardNumber)) {
    print('Корректный номер кредитной карты');
} else {
    print('Некорректный номер кредитной карты');
}
?>

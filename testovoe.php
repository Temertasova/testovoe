<?php
$sum=0;
$i=1;
while($i <= 999999){
$ticket = "";
$null = 6 - strlen($i);
for($null; $null>0; $null--){
$ticket.=0;
}
$ticket.=$i;
if($ticket[0] +$ticket[1] + $ticket[2] == $ticket[3] +$ticket[4] + $ticket[5]){
$sum++;
}
$i++;
}
echo 'Всего ' . $sum . ' счастливых билетов :)';
?>
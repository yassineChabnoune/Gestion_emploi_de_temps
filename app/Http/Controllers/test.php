<?php
  // JSON string
  $someJSON = '{"test":[{"name":"math","hours":3},{"name":"phisique","hours":6},{"name":"chimique","hours":4},{"name":"francais","hours":5},{"name":"sport","hours":2},{"name":"englais","hours":3}]}';
  $j=0;
  $e=0;
  $emploi =[];
  $d=json_decode($someJSON);
  while($j<40)
  {
    for($i=0;(int)$i<$d->{'test'}[$j]->{'hours'}/2;$i++){
        $emploi[]= $d->{'test'}[$j]->{'name'} ;
       }
      
      $j++;
  }
print_r($emploi);
?>











<?php
$data='{"resultList":[{"id":"1839","displayName":"Analytics","subLine":"mljjj"},{"id":"1015","displayName":"Automation","subLine":""},{"id":"1084","displayName":"Aviation","subLine":""},{"id":"554","displayName":"Apparel","subLine":""},{"id":"875","displayName":"Aerospace","subLine":""},{"id":"1990","displayName":"Account Reconciliation","subLine":""},{"id":"3657","displayName":"Android","subLine":""},{"id":"1262","displayName":"Apache","subLine":"bnvjhgcjyh"},{"id":"1440","displayName":"Acting","subLine":""},{"id":"710","displayName":"Aircraft","subLine":""},{"id":"12187","displayName":"AAC","subLine":""}, {"id":"20365","displayName":"AAT","subLine":""}, {"id":"7849","displayName":"AAP","subLine":""}, {"id":"20511","displayName":"AACR2","subLine":""}, {"id":"28585","displayName":"AASHTO","subLine":""}, {"id":"45191","displayName":"AAMS","subLine":""}]}';

$b=json_decode($data);

$i=0;
while($b->{'resultList'}[$i])
{
    print_r($b->{'resultList'}[$i]->{'displayName'});
    echo "<br />";
    $i++;
}

?>
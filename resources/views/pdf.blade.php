
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="{{public_path('css/styleA.css') }}"   rel="stylesheet">
    <link href= "{{public_path('/css/bootstrap.css') }}"  rel="stylesheet">
    <title>Export PDF</title>
</head>
<body>
    
<div  class="card card1 shadow-lg p-3 mb-5 bg-white rounded" >
            <div class="card-body">
                <table class="test">
                    <thead>
                        <td class="width-td">/</td>
                        <td class="width-td">8 -> 10</td>
                        <td class="width-td">10 -> 12</td>
                        <td class="width-td">14 -> 16</td>
                        <td class="width-td">16 -> 18</td>
                    </thead>
                </table>
                <table>
                    <tr class="tr">
                        <td class="td-jour">Lundi</td>
                    </tr>
                    <tr class="tr">
                        <td class="td-jour">mardi</td>
                    </tr>
                    <tr class="tr">
                        <td class="td-jour">mecrodi</td>
                    </tr>
                    <tr class="tr">
                        <td class="td-jour">jeudi</td>
                    </tr>
                    <tr class="tr">
                        <td class="td-jour">ventredi</td>
                    </tr>
                </table>
                <div class="marg">
               <?php
    $i=0;
foreach($final as $f){
   if($i==4 || $i == 8 ||$i== 12 || $i== 16 ){
    echo '<br> ';
  }
  
 echo  '<h5   class="card-emploi">',$f,'</h5>';
 $i++;
}

?>
                        <!-- @foreach($final as $f)
                             <h5   class="card-emploi col-3">{{$f}}</h5>
                             @endforeach  -->
                         
             </div>
            </div>
        </div>

      




<!-- <table style=" border-collapse: collapse;margin-top:0px;margin-bottom:0px;margin:0px;padding:0px;">
  <thead>
    <tr>
    <td style="width:100px;height:30px;text-align:center ;border: 1px solid red;"></th>
      <td style="width:130px;height:30px;text-align:center;border: 1px solid red;">8 -> 10</th>
      <td style="width:130px;height:30px;text-align:center;border: 1px solid red;">10 -> 12</th>
      <td style="width:130px;height:30px;text-align:center;border: 1px solid red;">14 -> 16</th>
      <td style="width:130px;height:30px;text-align:center;border: 1px solid red;">16 -> 18</th>
    </tr>
  </thead>

</table>
<table style=" border-collapse: collapse; border-collapse: collapse;margin-top:0px;margin-bottom:0px;margin:0px;padding:0px;">
  <tr>
     <td style="border: 1px solid red; width:100px;height:100px;text-align:center"> Lundi</td>
  </tr>
  <tr >
     <td style="border: 1px solid red; width:100px;height:100px;text-align:center">mardi</td>
  </tr>
  <tr >
     <td style= "border: 1px solid red; width:100px;height:100px;text-align:center"> mecrodi</td>
  </tr>
  <tr>
     <td style="border: 1px solid red; width:100px;height:100px;text-align:center">jeudi</td>
 </tr>
  <tr>
     <td style=" border: 1px solid red;width:100px;height:100px;text-align:center">ventredi</td>
   </tr>
 </table>                
 -->
<!-- 
<div style="border: 1px solid red; margin-left:100px; margin-top:-500px;width:600px;height:500px;" >
  @foreach($final as $f)
    <p style="border:1px solid black;width:130px;display:inline-block;height:100px; text-align:center;"> {{$f}}</p>
   @endforeach  
   </div> -->
       

</body>
</html>





















<!DOCTYPE html>

<html>

<head>
  <title>Egyption Trains</title>
<title>محطة قطارات مصر</title>
    <link rel="stylesheet" href="style.css">
    
    <script>
    function fun(x)
        {
            <?php
                include_once('database/database.php');
                $sql='select * from train_list';
                $row=$db->getRows($sql);
                $from_station='["';
                $to_station='["';
                foreach($row as $key =>$values)
                {
                $from_station=$from_station.$values['from_station'].'","';
                $to_station=$to_station.$values['to_station'].'","';
                }
                echo 'var arr='.$from_station.'"];';
                echo 'var arr2='.$to_station.'"];';
            ?>
           if(x=='1'){
            var ta=0;
               var count=0;
                
              
           
                for(var k=0;k<arr.length;k++)
               {
                   for(var c=k+1;c<arr.length;c++)
                       {
                           if(arr[k]==arr[c])
                               {
                                   for(var r=c;r<arr.length-1;r++)
                                       {
                                           arr[r]=arr[r+1];
                                       }
                                   arr.pop();
                               }
                       }
                   
               }
                 
               
            document.getElementById('op').innerHTML='';
            document.getElementById('op').style.display='block';
               
            for( ta=0;ta<arr.length;ta++){
                if(arr[ta].indexOf(document.getElementById('txt1').value)==0){
                    
            document.getElementById('op').innerHTML+='<option>'+arr[ta]+'</option>';
                count++;
                }
                if(document.getElementById('txt1').value=='')
                    {
                      document.getElementById('op').style.display='none';  
                    }
            document.getElementById('op').size=count;
           }}
            else{
                var t=0;
                var count2=0;
                 
             for(var k=0;k<arr2.length;k++)
               {
                   for(var c=k+1;c<arr2.length-1;c++)
                       {
                           if(arr2[k]==arr2[c])
                               {
                                   for(var r=c;r<arr2.length-1;r++)
                                       {
                                           arr2[r]=arr2[r+1];
                                       }
                                   arr2.pop();
                               }
                       }
                   
               }
                 
                   
            document.getElementById('op2').innerHTML='';
            document.getElementById('op2').style.display='block';
            for( t=0;t<arr2.length;t++){
                if(arr2[t].indexOf(document.getElementById('txt2').value)==0){
            document.getElementById('op2').innerHTML+='<option>'+arr2[t]+'</option>';
                    count2++;
                }
            }
                if(document.getElementById('txt2').value=='')
                    {
                        document.getElementById('op2').style.display='none';
                    }
            document.getElementById('op2').size=count2;
            }
        }
    function fun2(x)
        {
            if(x=='1'){
           document.getElementById('txt1').value= document.getElementById('op').value;
             document.getElementById('op').style.display='none';
        }
            else if(x=='2')
                {
                    document.getElementById('txt2').value= document.getElementById('op2').value;
             document.getElementById('op2').style.display='none';
                    document.getElementById('op').style.display='none';
                }
            else
                {
                     document.getElementById('txt1').value= document.getElementById('op').value;
             document.getElementById('op').style.display='none';
                     document.getElementById('txt2').value= document.getElementById('op2').value;
             document.getElementById('op2').style.display='none';
                    document.getElementById('op').style.display='none';
                }
        }
    </script>
</head>

 
    
<body onclick="fun2('3')">
    <div class="bord">
        
        
        
        <h2>Egyp Trains-قطارات مصر</h2></div>
<div class="inputs">
    
    <form action="showTrain.php" method="get">
        
        
    <input type="text" placeholder=".......محطة المغادرة" name="from" id="txt1" oninput="fun('1')">
        <select id="op" onchange="fun2('1')" >
        
        </select>
     <input type="text" placeholder="......محطة الوصول" name="to" id="txt2" oninput="fun('2')">
        <select id="op2" onchange="fun2('2')" >
        
        </select>
     <select id="sel" name="sel">
        <option selected>all degrees</option>
         <option>vip</option>
         <option>first</option>
         <option>sleap</option>
         <option>expries</option>
        </select>
    <input type="submit" id="bt" value="عرض جميع القطارات" >
    
    
    
    
    </form>
    
    
    
    
    
    </div>
   

</body>

</html>

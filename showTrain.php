<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
  <title>Egyption Trains</title>
<title>محطة قطارات مصر</title>
    <link rel="stylesheet" href="tstyle.css">
    </head>
    
    
    
    <body>
        <div class="bord">
        
        <h2>Egyp Trains-قطارات مصر</h2></div>
        <div class="slide">
        <div class="show">
            <?php
                include_once('database/database.php');
                if($_GET['sel']=='all degrees'){
                $sql='select * from train_list where from_station ="'.$_GET['from'].'" and to_station="'.$_GET['to'].'"';
                $row=$db->getRows($sql);
                }
                else
                {
                    $sql='select * from train_list where from_station ="'.$_GET['from'].'" and to_station="'.$_GET['to'].'" and level="'.$_GET['sel'].'"';
                $row=$db->getRows($sql);
                }
                $data='';
            $num=0;
    foreach($row as $key =>$values)
{
    $data=$data.'<tr><td>'.$values['t_id'].'</td><td>'.$values['go'].'</td><td>'.$values['arrive'].'</td><td>'.$values['interval_time'].'</td><td>'.$values['speed'].'</td><td>'.$values['level'].'</td><td>!</td></tr>';
     $num++;
}
                
                
                ?>
            <h2>From <?php echo $_GET['from'];?> to <?php echo $_GET['to'];?> thier is <?php echo $num ;?> Train</h2>
            
        
            </div>
          <table class="tab">
            <tr><th>Train Number</th><th>Go At</th><th>Arrive At</th><th>Interval</th><th>Speed</th><th>Degree</th><th>Stop At</th></tr>
            
            
            
            <?php echo $data; ?>
            
            
            
            
            
            </table>
        </div>
        
        
        
        
        
        
        
        
    </body>
    
</html>
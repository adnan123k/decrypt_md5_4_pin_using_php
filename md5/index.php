<title>MHD ADNAN AL KHARFAN </title>
<h1>MD5 cracker</h1>
<p>This application takes an MD5 hash of a four digit pin and check all 10,000 possible four digit PINs to determine the PIN.</p>
<?php
echo '<h4>Debug Output:</h4>';
if(!array_key_exists('md5',$_GET))
echo '<h3>PIN: Not found</h3>';
else{
$counter=0;
$start=microtime(true);
$found=false;
    $theorg=$_GET['md5'];
    for($i=0;$i<10;$i++){
        for($j=0;$j<10;$j++){
            for($t=0;$t<10;$t++){
                for($k=0;$k<10;$k++){
                    $try=$i.$j.$t.$k;
                    $shit=hash('md5',$try);
                    if($shit==$theorg)
                   {
                        $babe= '<h3>PIN: '.(string)$try.'</h3>';
                        $found=true;
                   break;
                    }
                    elseif($counter<15){
                        echo '<pre>'.$shit."   ".$try.'</pre>';
                    }
                    $counter++;

                }
            }
        }
    }
    $finish=microtime(true);
    if($found){
        echo '<h5>Total checks: '.(string)($counter+1).'</h5>';
        echo '<h5>Ellapsed time: '.($finish-$start).'</h5>';
    echo $babe;
}
    else{
        echo '<h5>Total checks: '.(string)$counter.'</h5>';
        echo '<h5>Ellapsed time: '.($finish-$start).'</h5>';
    echo '<h3>PIN: Not found</h3>';}
}
?>
<form method="get">
<input type="text" name="md5" size="40">
<input type="submit" value="Crack MD5"></form>
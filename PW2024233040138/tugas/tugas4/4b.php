<?php 
$hardware=['Motherboard','Processor','Hard Disk','PC Coller','VGA Card','SSD'];
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>
<style>
    h3{
        margin: 2vh;
    }
</style>
<body>


<h3>Macam-macam perangat keras komputer</h3>
<ol>
<?php 
 foreach ($hardware as $list)
 echo "<li>$list</li>"
?>
</ol>




<h3><b>Macam-macam perangat keras komputer baru</b></h3>
    <ol>
<?php 
array_push($hardware,'Card Reader','Modem');
sort($hardware);
for ($i = 0; $i < count($hardware); $i++)
    echo"<li>$hardware[$i]</li>"
?>
</ol>


</body>
</html>
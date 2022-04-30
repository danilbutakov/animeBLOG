<?php
$query3 = $mysqli3->query("SELECT * FROM meta");
$res2 = $query3->fetch_assoc();
?>
<meta name="<?php echo $res2['title'] ?>" content="<?php echo $res2['description'] ?>">
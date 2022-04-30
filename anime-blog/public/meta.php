<?php
$sql2 = $pdo->query("SELECT * FROM meta");
$sql2->execute();
$res2 = $sql2->fetch(PDO::FETCH_ASSOC);
?>
<meta name="<?php echo $res2['title'] ?>" content="<?php echo $res2['description'] ?>">
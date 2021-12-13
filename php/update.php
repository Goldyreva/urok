<?php
 include 'database.php';
    $app_id = $_GET['id'];
    $result = $induction->query("SELECT * FROM `app` WHERE `id` = '$app_id'");
    $app = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>
<body>
<main class="update-main">
<h4>Изменить статус заявки "<?=$app['title']?>"</h4>
                       <form action="../php/update-check.php" method="post">
                       <input type="hidden" name="id" value="<?=$app['id']?>">
                       <select name="status" id="">
                       <option value="в обработке">в обработке</option>
                       <option value="принято">принято</option>
                       <option value="отказанно">отказанно</option>
                       </select>
                       <button type="submit">Изменить</button></form>

</mailn>
</body>
</html>
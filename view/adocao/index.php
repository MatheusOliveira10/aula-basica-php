<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($teste as $item) {?>
        <tr>
            <td><?php echo $item->id; ?></td>
            <td><?php echo $item->nome; ?></td>
            <td><?php echo $item->time; ?></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prenotazioni</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.min.css">
</head>
<body>
<h1>Portale prenotazioni</h1>
<h2>Lista delle prenotazioni</h2>
<table class="striped">
    <caption>Prenotazioni per giorno</caption>
    <thead>
    <tr>
        <th>Data</th>
        <th>Numero di prenotazioni</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($result as $row): ?>
    <tr>
        <td><?php echo $row['giorno'] ?></td>
        <td><?php echo $row['n_prenotazioni'] ?></td>
    </tr>
    <?php endforeach ?>
    </tbody>
</table>
</body>
</html>
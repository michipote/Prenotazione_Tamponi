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
    <caption>Prenotazioni del <?php echo date("d/m/Y"); ?> </caption>
    <thead>
    <tr>
        <th>Codice fiscale</th>
        <th>Codice univoco</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($result as $row): ?>
    <tr>
        <td><?php echo $row['codice_fiscale'] ?></td>
        <td><?php echo $row['codice'] ?></td>
    </tr>
    <?php endforeach ?>
    </tbody>
</table>
</body>
</html>
<?php $this->layout('main', ['argomento' => 'Prenotazioni giornaliere']); ?>

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
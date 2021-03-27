<?php $this->layout('main', ['argomento' => 'Lista delle Prenotazioni']); ?>

<table class="striped">
    <caption>Prenotazioni</caption>
    <thead>
        <tr>
            <th>Codice fiscale</th>
            <th>Data</th>
            <th>Codice univoco</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($result as $row): ?>
            <tr>
                <td><?php echo $row['codice_fiscale'] ?></td>
                <td><?php echo $row['giorno'] ?></td>
                <td><?php echo $row['codice'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
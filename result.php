<table border='1'>
    <?php foreach ($array as $key => $row): ?>
        <tr>
            <?php foreach ($row as $item): ?>
                <td>
                    <?= $item; ?>
                </td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>
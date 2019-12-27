<table>
    <tbody>
<?php foreach($calendar->daysInMonth as $d): ?>
<?php echo (0 == date('w', $d) ? "        <tr>\n" : ''); ?>
            <td class="<?php echo $calendar->getClassesForDay($d); ?>"></td>
<?php echo(6 == date('w', $d) ? "        </tr>\n" : ''); ?>
<?php endforeach; ?>
    </tbody>
</table>

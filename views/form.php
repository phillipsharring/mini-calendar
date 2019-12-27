<form method="post">
    <input type="number" name="year" id="year" value="<?php echo htmlentities($calendar->year); ?>">
    <select name="month" id="month">
<?php foreach ($calendar->getMonths() as $number => $name): ?>
        <option<?php echo ($number == $calendar->month) ? ' selected="selected"' : ''; ?> value="<?php echo $number; ?>"><?php
            echo $name;
        ?></option>
<?php endforeach ?>
    </select>
    <select name="day" id="day">
<?php foreach (range(1, 31) as $number): ?>
        <option<?php echo ($number == $calendar->day) ? ' selected="selected"' : ''; ?> value="<?php echo $number; ?>"><?php
            echo $number;
        ?></option>
<?php endforeach ?>
    </select>
    <button type="submit">Look-up</button>
</form>

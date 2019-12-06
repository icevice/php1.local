<?php
include __DIR__ . '/fun/discriminant.php';

$a = 4;
$b = 6;
$c = 1;
$d = discriminant($a, $b, $c);

?>
<table>
    <tr>
        <td>D = b - 4ac = <?php echo $d; ?></td>
    </tr>
    <?php
    if ($d > 0) {
        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);
        ?>
        <tr>
            <td> x1= <?php echo $x1; ?> </td>
        </tr>
        <tr>
            <td> x2= <?php echo $x2; ?> </td>
        </tr>
        <?php
    } else if ($d == 0) {
        $x = -$b / (2 * $a);
        ?>
        <tr>
            <td><?php echo $x; ?></td>
        </tr>
        <?php
    } else {
        ?>
        <tr>
            <td><?php echo 'Нет корней' ?></td>
        </tr>
        <?php
    }
    ?>
</table>


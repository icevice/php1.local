<table border="1">
    <tr>
        <td> a</td>
        <td> b</td>
        <td> &&</td>
        <td> xor</td>
        <td> ||</td>
    </tr>

    <tr>
        <td><?php $a = false;
            echo (int)$a; ?></td>
        <td><?php $b = false;
            echo (int)$b; ?></td>
        <td><?php echo (int)($a && $b); ?></td>
        <td><?php echo (int)($a xor $b) ?></td>
        <td><?php echo (int)($a || $b) ?></td>

    </tr>
    <tr>
        <td><?php $a = true;
            echo (int)$a; ?></td>
        <td><?php $b = false;
            echo (int)$b; ?></td>
        <td><?php echo (int)($a && $b); ?></td>
        <td><?php echo (int)($a xor $b) ?></td>
        <td><?php echo (int)($a || $b) ?></td>

    </tr>
    <tr>
        <td><?php $a = true;
            echo (int)$a; ?></td>
        <td><?php $b = true;
            echo (int)$b; ?></td>
        <td><?php echo (int)($a && $b); ?></td>
        <td><?php echo (int)($a xor $b) ?></td>
        <td><?php echo (int)($a || $b) ?></td>

    </tr>
    <tr>
        <td><?php $a = false;
            echo (int)$a; ?></td>
        <td><?php $b = true;
            echo (int)$b; ?></td>
        <td><?php echo (int)($a && $b); ?></td>
        <td><?php echo (int)($a xor $b) ?></td>
        <td><?php echo (int)($a || $b) ?></td>

    </tr>
</table>
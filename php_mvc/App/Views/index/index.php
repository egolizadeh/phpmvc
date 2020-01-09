<?php
$StudentInfo = $data['StudentInfo'];
?>

<div style="background-color: darkcyan">
    <p style="text-align: center;font-size: 36px;">
        صفحه index.php
    </p>

    <div>
        <p style="font-size: 36px;">student info:</p>
        <?php foreach ($StudentInfo as $row) { ?>

            Name: <?= $row['name']; ?>

            Family: <?= $row['family']; ?>
            <br/>
        <?php } ?>
    </div>
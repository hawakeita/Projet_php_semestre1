<?php
$ouvrages=find_all_ouvrages();
?>
<div class="auteur">
    <div class="conteneur">
    <table>
        <tr>
            <th>CODE</th>
            <th>TITRE</th>
            <th>DATE D'EDITION</th>
            <th>RAYON</th>
        </tr>
        <?php foreach ($ouvrages as $value):?>
        <tr>
            <td><?php echo($value['code'])?></td>
            <td><?=$value['titre']?></td>
            <td><?=$value['date_edition']?></td>
            <td><?=$value['rayon']?></td>
        </tr>
        <?php endforeach?>
    </table>
</div>

<?php
$prets=find_all_prets();
?>
<div class="auteur">
    <div class="conteneur">
    <table>
        <tr>
            <th>DATE</th>
            <th>DATE DE RETOUR PREVU</th>
            <th>DATE DE RETOUR REEL</th>
            <th>EXEMPLAIRE OUVRAGE</th>
        </tr>
        <?php foreach ($prets as $value):?>
        <tr>
            <td><?php echo($value['date'])?></td>
            <td><?=$value['date de retour prévu']?></td>
            <td><?=$value['date de retour reel']?></td>
            <td><?=$value['exemplaire ouvrage']?></td>
        </tr>
        <?php endforeach?>
    </table>
</div>
 
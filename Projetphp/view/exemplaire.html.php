<?php
$exemplaires=find_all_exemplaires();
?>
<div class="auteur">
    <div class="conteneur">
    <table>
        <tr>
            <th>CODE</th>
            <th>DATE D'ENREGISTREMENT</th>
        </tr>
        <?php foreach ($exemplaires as $value):?>
        <tr>
            <td><?php echo($value['code'])?></td>
            <td><?=$value['date enregistrement']?></td>
        </tr>
        <?php endforeach?>
    </table>

</div>
 
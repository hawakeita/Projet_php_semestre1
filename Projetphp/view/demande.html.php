<?php
$demandes=find_all_demandes();
?>
<div class="auteur">
    <div class="conteneur">
    <table>
        <tr>
        <th>ID ADHERENT</th>
        <th>CODE OUVRAGE</th>
        <th>DATE DE DEMANDE</th>
        <th>STATUT</th>
            </tr>
            <?php foreach ($demandes as $demande):?>
                <tr>
                    <td><?= $demande['id adherent'] ?></td>
                    <td><?= $demande['code ouvrage'] ?></td>  
                    <td><?= $demande['date de demande'] ?></td> 
                    <td><?= $demande['statut'] ?></td>
                </tr>
            <?php endforeach ?>
    </table>

</div>


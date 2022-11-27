<?php
$adherents=find_all_adherents();
?>
<div class="auteur">
    <div class="conteneur">

    <table>

        <tr>
        <th>ID</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>SEXE</th>
        <th>DATE DE NAISSANCE</th>
            </tr>
            <?php foreach ($adherents as $adherent):?>
                <tr>
                    <td><?= $adherent['id'] ?></td>
                    <td><?= $adherent['nom'] ?></td>  
                    <td><?= $adherent['prenom'] ?></td> 
                    <td><?= $adherent['sexe'] ?></td>
                    <td><?= $adherent['date de naissance'] ?></td>
                </tr>
            <?php endforeach ?>
    </table>

</div>

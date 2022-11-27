<?php

    $auteurs=[
        ['id'=>1,'nom'=>'FALL','prenom'=>'ISSA','profession'=>'Enseignant'],
        ['id'=>2,'nom'=>'SY','prenom'=>'Ousmane','profession'=>'Romancier'],
        ['id'=>3,'nom'=>'Sall','prenom'=>'MOHAMED','profession'=>'Prof'],
        ['id'=>4,'nom'=>'KEITA','prenom'=>'FANTA','profession'=>'Etudiante'],
        ['id'=>5,'nom'=>'SISSOKO','prenom'=>'SABA','profession'=>'Enseignante'],
    ];

    $ouvrages=[
        ['code'=>01 ,'titre'=>'Fontaine' ,'date_edition'=>06/12/2019,'rayon'=>'Litterature'],
        ['code'=>01 ,'titre'=>'Une_si_longue_lettre' ,'date_edition'=>12/03/2020,'rayon'=>'Litterature'],
        ['code'=>01 ,'titre'=>'Les_bouts_de_bois_de_Dieu' ,'date_edition'=>23/11/2021,'rayon'=>'Litterature' ],
        ['code'=>01 ,'titre'=>'Un_negre_a_paris' ,'date_edition'=>01/01/2022,'rayon'=>'Litterature' ],
        ['code'=>01 ,'titre'=>'Vol_de_nuit','date_edition'=>04/04/2022,'rayon'=>'Litterature'],
    ];
    function find_auteur_by_ouvrage():array{
        $auteurs=find_all_auteur();
        foreach ($auteurs as $auteur) {
            if($auteurs['code']==$ouvrages){
                return $auteurs;
            }
            
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="auteur">
    <div class="conteneur">

    <table>

        <tr>
            <th>AUTEUR</th>
            <th>OUVRAGE</th>
        </tr>
        <?php foreach ($auteurs as $value):?>
        <tr>
            <td><?php echo($value['nom'])?></td>
            
         
        </tr>
        
        <?php endforeach?>
    </table>

</div>
</body>
</html> 

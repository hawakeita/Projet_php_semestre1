<?php
function find_all_ouvrages():array{
    $ouvrages=[
        ['code'=>01 ,'titre'=>'Fontaine' ,'date_edition'=>'06/12/2019','rayon'=>'Litterature'],
        ['code'=>01 ,'titre'=>'Ame_noir' ,'date_edition'=>'12/03/2020','rayon'=>'Litterature'],
        ['code'=>01 ,'titre'=>'Life_story' ,'date_edition'=>'23/11/2021','rayon'=>'Litterature' ],
        ['code'=>01 ,'titre'=>'Un_negre_a_paris' ,'date_edition'=>'01/01/2022','rayon'=>'Litterature' ],
        ['code'=>01 ,'titre'=>'Vol_de_nuit','date_edition'=>'04/04/2022','rayon'=>'Litterature']
    ];
    return $ouvrages;
}
function find_all_demandes():array{
    $demandes=[
        ['id adherent'=>1,'code ouvrage'=>'123','date de demande'=>'20/02/2001','statut'=>'Accepté'],
        ['id adherent'=>2,'code ouvrage'=>'456','date de demande'=>'20/02/2001','statut'=>'Encours'],
        ['id adherent'=>3,'code ouvrage'=>'789','date de demande'=>'20/02/2001','statut'=>'Accepté'],
        ['id adherent'=>4,'code ouvrage'=>'101','date de demande'=>'20/02/2001','statut'=>'Refusé'],
        ['id adherent'=>5,'code ouvrage'=>'121','date de demande'=>'20/02/2001','statut'=>'Accepté']
    ];
    return $demandes;

}


function find_all_auteurs():array{
    $auteurs=[
        ['id'=>1,'nom'=>'FALL','prenom'=>'ISSA','profession'=>'Enseignant'],
        ['id'=>2,'nom'=>'SY','prenom'=>'Ousmane','profession'=>'Romancier'],
        ['id'=>3,'nom'=>'Sall','prenom'=>'MOHAMED','profession'=>'Prof'],
        ['id'=>4,'nom'=>'KEITA','prenom'=>'FANTA','profession'=>'Etudiante'],
        ['id'=>5,'nom'=>'SISSOKO','prenom'=>'SABA','profession'=>'Enseignante']
    ];
    return $auteurs;
}
function find_all_adherents():array{
    $adherents=[
        ['id'=>1,'nom'=>'FALL','prenom'=>'ISSA','sexe'=>'M','date de naissance'=>'20/02/2001'],
        ['id'=>2,'nom'=>'SY','prenom'=>'Ousmane','sexe'=>'M','date de naissance'=>'10/03/2004'],
        ['id'=>3,'nom'=>'Sall','prenom'=>'MOHAMED','sexe'=>'M','date de naissance'=>'14/04/2006'],
        ['id'=>4,'nom'=>'KEITA','prenom'=>'FANTA','sexe'=>'F','date de naissance'=>'26/10/2002'],
        ['id'=>5,'nom'=>'SISSOKO','prenom'=>'SABA','sexe'=>'F','date de naissance'=>'30/12/2003']
    ];
    return $adherents;
}

function find_all_exemplaires():array{
    $exemplaires=[
        ['code'=>10,'code_ouvrage'=>1234,'date enregistrement'=>'20/09/21'],
        ['code'=>134,'code_ouvrage'=>5678,'date enregistrement'=>'23/12/2021'],
        ['code'=>45,'code_ouvrage'=>9101,'date enregistrement'=>'03/06/2022'],
        ['code'=>234,'code_ouvrage'=>1213,'date enregistrement'=>'04/03/2022']
    ];
    return $exemplaires;
}

function find_all_prets():array{
    $prets=[
        ['date'=>'20/09/21','date de retour reel'=>'30/09/21','date de retour prévu'=>'04/10/21','exemplaire ouvrage'=>'Une_si_longue_lettre','adhérent_id'=> 1],
        ['date'=>'23/12/2021','date de retour reel'=>'30/12/2021','date de retour prévu'=>'06/01/21','exemplaire ouvrage'=>'Ame_noir' ,'adhérent_id'=>2],
        ['date'=>'03/06/2022','date de retour reel'=>'10/06/2022','date de retour prévu'=>'20/06/22','exemplaire ouvrage'=>'Un_negre_a_paris','adhérent_id'=>3],
        ['date'=>'06/10/22','date de retour reel'=>'12/10/22','date de retour prévu'=>'20/10/22','exemplaire ouvrage'=>'Vol_de_nuit','adhérent_id'=>4],
        ['date'=>'04/03/2022','date de retour reel'=>'10/03/2022','date de retour prévu'=>'20/03/22','exemplaire ouvrage'=>'Fontaine' ,'adhérent_id'=>5]
    ];
    return $prets;
}

function find_ouvrage_by_code():array{
    $ouvrages=find_all_ouvrage();
    foreach ($ouvrages as $ouvrage) {
        if($ouvrages['code']==$code){
            return $ouvrages;
        }
        
    }
}

function find_exemplaire_by_rayon():array{
    $exemplaires=find_all_exemplaire();
    foreach ($exemplaires as $exemplaire) {
        if($exemplaires['rayon']==$rayon){
            return $exemplaires;
        }
        
    }
}



function find_adherent_by_id(int $id):array{
    $adherents=find_all_adherents();
    foreach ($adherents as $adherent) {
        if($adherent['id']==$id){
            return $adherent;
        }
    }
    return null ;
}

?>
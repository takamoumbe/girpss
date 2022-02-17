SELECT planification.nom_jour FROM enseignant_jour,enseignant,planification
WHERE  enseignant.id_enseignant = 9 AND enseignant_jour.id_jour = planification.id_jour 
AND enseignant.id_enseignant = enseignant_jour.id_enseignant;



SELECT DISTINCT enseignant.nom_enseignant,matiere_enseignant FROM enseignant_jour,enseignant,planification
WHERE enseignant_jour.id_jour = planification.id_jour 
AND enseignant.id_enseignant = enseignant_jour.id_enseignant	
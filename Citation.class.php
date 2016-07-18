<?php
	class citations {
		var $auteur;
		var $datecration;
		var $categorie;
		var $mediacitation;
		var $contenucitation;
	}
$citation_01 = new citations ();
$citation_01->auteur = "Ken Follett";
$citation_01->datecration = "1989";
$citation_01->categorie = "philosophie";
$citation_01->mediacitation = "livres";
$citation_01->contenucitation = "Un roi est une créature de l'instant, dit-il. Il vit constamment sous la menace, menaces des rebelles au sein de son propre royaume, menace des monarques voisins. Il lui faut des alliés. Le roi n'est pas parfait. Le seul vrai juge, c'est Dieu.";

echo $citation_01->contenucitation."<br/>";
echo $citation_01->auteur."<br/>";
echo $citation_01->datecration."<br/>";
?>
<?php
include_once("dijkstra.php");
$n = array();
$i = 0; $n[$i] = new Noeud($i, 'Combs'); 
$i = 1; $n[$i] = new Noeud($i, 'Veneux'); 
$i = 2; $n[$i] = new Noeud($i, 'Melun'); 
$i = 3; $n[$i] = new Noeud($i, 'Fontainebleau'); 
$i = 4; $n[$i] = new Noeud($i, 'Montereau'); 
$i = 5; $n[$i] = new Noeud($i, 'Sens'); 
$i = 6; $n[$i] = new Noeud($i, 'Souppes'); 
$i = 7; $n[$i] = new Noeud($i, 'Corbeil'); 
$i = 8; $n[$i] = new Noeud($i, 'Marles'); 
$i = 9; $n[$i] = new Noeud($i, 'Crécy'); 
$i = 10; $n[$i] = new Noeud($i, 'Meaux'); 
$i = 11; $n[$i] = new Noeud($i, 'La Ferté-Sous-Jouarre'); 
$i = 12; $n[$i] = new Noeud($i, 'Saâcy'); 
$i = 13; $n[$i] = new Noeud($i, 'Provins');
$i = 14; $n[$i] = new Noeud($i, 'La Ferté Gaucher'); 
$i = 15; $n[$i] = new Noeud($i, 'Crégy'); 
$i = 16; $n[$i] = new Noeud($i, 'Crouy'); 
$i = 17; $n[$i] = new Noeud($i, 'Lizy'); 
$i = 18; $n[$i] = new Noeud($i, 'Coulommiers'); 
$i = 19; $n[$i] = new Noeud($i, 'Nangis'); 
$i = 20; $n[$i] = new Noeud($i, 'Fontaine-le-Port'); 
$i = 21; $n[$i] = new Noeud($i, 'St Mard'); 
$i = 22; $n[$i] = new Noeud($i, 'Pommeuse'); 
$i = 23; $n[$i] = new Noeud($i, 'Fosses'); 
$i = 24; $n[$i] = new Noeud($i, 'Viarmes'); 
$i = 25; $n[$i] = new Noeud($i, 'Auvers-sur-Oise'); 
$i = 26; $n[$i] = new Noeud($i, 'Chars'); 
$i = 27; $n[$i] = new Noeud($i, 'Persan'); 
$i = 28; $n[$i] = new Noeud($i, 'Bonnières'); 
$i = 29; $n[$i] = new Noeud($i, 'Houdan'); 
$i = 30; $n[$i] = new Noeud($i, 'Rambouillet'); 
$i = 31; $n[$i] = new Noeud($i, 'St Arnoult'); 
$i = 32; $n[$i] = new Noeud($i, 'Angerville'); 
$i = 33; $n[$i] = new Noeud($i, 'Malesherbes'); 
$i = 34; $n[$i] = new Noeud($i, 'Etampes'); 
$i = 35; $n[$i] = new Noeud($i, 'Le Perray'); 
$i = 36; $n[$i] = new Noeud($i, 'Les Essarts-le-Roi'); 
$i = 37; $n[$i] = new Noeud($i, 'St Rémy lès Chevreuse'); 
$i = 38; $n[$i] = new Noeud($i, 'Massy'); 
$i = 39; $n[$i] = new Noeud($i, 'Châtenay-Malabry'); 
$i = 40; $n[$i] = new Noeud($i, 'Paris 15'); 
$i = 41; $n[$i] = new Noeud($i, 'Villeneuve St G.'); 
$i = 42; $n[$i] = new Noeud($i, 'Rungis'); 
$i = 43; $n[$i] = new Noeud($i, 'Jouy-en-Josas'); 
$i = 44; $n[$i] = new Noeud($i, 'Fontenay-le-Fleury'); 
$i = 45; $n[$i] = new Noeud($i, 'St Nom la B.'); 
$i = 46; $n[$i] = new Noeud($i, 'St Germain en Laye'); 
$i = 47; $n[$i] = new Noeud($i, 'Conflans Ste H.'); 
$i = 48; $n[$i] = new Noeud($i, 'Pontoise'); 
$i = 49; $n[$i] = new Noeud($i, 'La Défense'); 
$i = 50; $n[$i] = new Noeud($i, 'Rueil-Malmaison'); 
$i = 51; $n[$i] = new Noeud($i, 'St Cloud'); 
$i = 52; $n[$i] = new Noeud($i, 'Boulogne-Billancourt'); 
$i = 53; $n[$i] = new Noeud($i, 'Alfortville'); 
$i = 53; $n[$i] = new Noeud($i, 'Montgeron'); 
$i = 54; $n[$i] = new Noeud($i, 'Ballancourt'); 
$i = 55; $n[$i] = new Noeud($i, 'Paris Gare de Lyon'); 
$i = 56; $n[$i] = new Noeud($i, 'Paris République'); 
$i = 57; $n[$i] = new Noeud($i, 'Paris Etoile'); 
$i = 58; $n[$i] = new Noeud($i, 'Fontenay-sous-Bois'); 
$i = 59; $n[$i] = new Noeud($i, 'Maisons-Alfort'); 
$i = 60; $n[$i] = new Noeud($i, 'Chelles'); 
$i = 61; $n[$i] = new Noeud($i, 'Esbly'); 
$i = 62; $n[$i] = new Noeud($i, 'Pontault-Combault'); 
$i = 63; $n[$i] = new Noeud($i, 'Tournan'); 
$tab_arc = array(
			new Arc($n[0], $n[1], 42), 
			new Arc($n[0], $n[2], 26), 
			new Arc($n[0], $n[8], 46), 
			new Arc($n[1], $n[0], 42), 
			new Arc($n[1], $n[3], 8), 
			new Arc($n[1], $n[4], 20), 
			new Arc($n[1], $n[6], 40), 
			new Arc($n[1], $n[20], 24),
			new Arc($n[2], $n[1], 25), 
			new Arc($n[2], $n[3], 17), 
			new Arc($n[3], $n[1], 8), 
			new Arc($n[4], $n[1], 18), 
			new Arc($n[4], $n[13], 40),
			new Arc($n[5], $n[4], 43), 
			new Arc($n[6], $n[1], 41), 
			new Arc($n[6], $n[4], 46), 
			new Arc($n[7], $n[0], 11), 
			new Arc($n[7], $n[3], 40),
			new Arc($n[8], $n[9], 21),
			new Arc($n[8], $n[22], 18),
			new Arc($n[9], $n[10], 15),
			new Arc($n[9], $n[22], 20),
			new Arc($n[10], $n[11], 15),
			new Arc($n[10], $n[15], 2),
			new Arc($n[11], $n[12], 7),
			new Arc($n[11], $n[18], 25),
			new Arc($n[12], $n[16], 27),
			new Arc($n[13], $n[14], 40),
			new Arc($n[14], $n[12], 40),
			new Arc($n[15], $n[16], 21),
			new Arc($n[16], $n[17], 13),
			new Arc($n[17], $n[11], 15),
			new Arc($n[18], $n[19], 40),
			new Arc($n[19], $n[20], 40),
			new Arc($n[20], $n[1], 16),
			new Arc($n[15], $n[21], 18),
			new Arc($n[16], $n[21], 36),
			new Arc($n[21], $n[23], 15),
			new Arc($n[22], $n[18], 19),
			
			new Arc($n[21], $n[23], 19),
			new Arc($n[23], $n[24], 15),
			new Arc($n[24], $n[25], 27),
			new Arc($n[25], $n[26], 26),
			new Arc($n[26], $n[27], 42),
			new Arc($n[26], $n[28], 41),
			new Arc($n[27], $n[29], 40),
			new Arc($n[28], $n[30], 35),
			new Arc($n[30], $n[31], 14),
			new Arc($n[31], $n[32], 41),
			new Arc($n[32], $n[33], 38),
			new Arc($n[32], $n[34], 26),
			new Arc($n[34], $n[33], 40),
			new Arc($n[33], $n[1], 38),
			new Arc($n[33], $n[6], 43),
			new Arc($n[33], $n[54], 42),
			new Arc($n[54], $n[7], 16),
			new Arc($n[30], $n[35], 10),
			new Arc($n[35], $n[36], 5),
			new Arc($n[36], $n[37], 15),
			new Arc($n[37], $n[38], 19),
			new Arc($n[38], $n[39], 7),
			new Arc($n[39], $n[40], 12),
			new Arc($n[40], $n[55], 7),
			new Arc($n[55], $n[56], 4),
			new Arc($n[56], $n[57], 5),
			new Arc($n[57], $n[49], 5),
			new Arc($n[49], $n[50], 6),
			new Arc($n[50], $n[51], 3),
			new Arc($n[51], $n[52], 2),
			new Arc($n[52], $n[40], 4),
			new Arc($n[50], $n[46], 8),
			new Arc($n[46], $n[47], 12),
			new Arc($n[47], $n[48], 8),
			new Arc($n[48], $n[26], 18),
			new Arc($n[38], $n[43], 10),
			new Arc($n[43], $n[44], 13),
			new Arc($n[44], $n[45], 7),
			new Arc($n[45], $n[46], 8),
			new Arc($n[0], $n[41], 12),
			new Arc($n[41], $n[42], 10),
			new Arc($n[42], $n[38], 8),
			new Arc($n[55], $n[53], 7),
			new Arc($n[53], $n[41], 8),
			new Arc($n[41], $n[53], 5),
			new Arc($n[53], $n[0], 12),
			
			new Arc($n[55], $n[58], 12),
			new Arc($n[58], $n[60], 7),
			new Arc($n[60], $n[61], 18),
			new Arc($n[61], $n[10], 9),
			new Arc($n[61], $n[9], 10),
			new Arc($n[58], $n[62], 12),
			new Arc($n[62], $n[63], 18),
			new Arc($n[63], $n[8], 10)
		);
$graphe = new Graphe($n, $tab_arc);
$dij = new Dijkstra($graphe);
// echoln("Liste des arcs du graphe :");
// $graphe->print_arcs();
echoln("exemple 1 : distance minimale entre deux villes pour lesquelles il y a au moins un chemin");
$rc = $dij->setDepart($n[34]);
$rc = $dij->setArrivee($n[56]);
if ($rc === true) {
	if ($dij->recherche()) {
		$chemin_str = $dij->get_string_chemin();
		echoln("chemin : $chemin_str");
		echoln("la distance la plus courte entre le noeud " . $dij->getDepart() . " et le noeud " . $dij->getArrivee() . " est " . $dij->getDistance_minimale());
	}
	else echoln("Il n'y a pas de chemin entre " . $dij->getDepart() . " et " . $dij->getArrivee());
}
else {
	echoln("Erreur d'initialisation");
}
echoln("");
echoln("exemple 2 : distance minimale entre deux villes pour lesquelles il n'y a pas de chemin");
$rc = $dij->setDepart($n[18]);
$rc = $dij->setArrivee($n[5]);
if ($rc === true) {
	if ($dij->recherche()) {
		$chemin_str = $dij->get_string_chemin();
		echoln("chemin : $chemin_str");
		echoln("la distance la plus courte entre le noeud " . $dij->getDepart() . " et le noeud " . $dij->getArrivee() . " est " . $dij->getDistance_minimale());
	}
	else echoln("Il n'y a pas de chemin entre " . $dij->getDepart() . " et " . $dij->getArrivee());
}
else {
	echoln("Erreur d'initialisation");
}
/
# pour calculer tous le chemin le plus court pour toute les paires de noeuds du graphe
# prévoir d'allonger la durée maximale d'exécution du script php à 5 minutes en modifiant le fichier php.ini : 
# max_execution_time = 300
foreach($graphe->getTab_noeud() as $noeud_depart) {
	foreach($graphe->getTab_noeud() as $noeud_arrivee) {
		$rc = $dij->setDepart($noeud_depart);
		$rc = $dij->setArrivee($noeud_arrivee);
		
		if ($dij->recherche()) {
			$chemin_str = $dij->get_string_chemin();
			echoln("chemin : $chemin_str");
			echoln("la distance la plus courte entre le noeud " . $dij->getDepart() . " et le noeud " . $dij->getArrivee() . " est " . $dij->getDistance_minimale());
		}
		else echoln("Il n'y a pas de chemin entre " . $dij->getDepart() . " et " . $dij->getArrivee());
	}	
}
?>

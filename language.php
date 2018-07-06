<?php
$language = [
	"Arabic" => "Native Language",
	"English" => "Bilingual proficiency",
	"Franch" => "Native Language",
	"German" => "Bilingual proficiency"
];

?>
<div class="container" >
		<div class="skills-side-bar">
				<h2 class="h2-align"><u>Languages & IT skills</u></h2>
				<h3><u>Languages</u></h3>
				
				
					<?php $reponse = $bdd->query('SELECT * FROM skills');
 while ($donnees = $reponse->fetch())
{?>
				
<?php echo $donnees['languages'] ?><br />
	
				<h3><u>IT skills</u></h3>
				<b>Programming :</b><br>
				<?php echo $donnees['itskills'] ?> 
				<h2><u>Hobbies</u></h2>
				<?php echo $donnees['hobbies'] ?>
				<?php
}
$reponse->closeCursor();

?>	
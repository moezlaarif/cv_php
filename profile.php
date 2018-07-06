<?php
$education = [
	"2017-2018" => "Sesame",
	"  " => "Computer Science Engineering",
	"2017" => "California State University Long Beach",
	" " =>"Electrical Engineering",
	"2014-2017" => "Technical University of Cologne",
		"   " =>"Electrical Engineering",
	"2013-2014" => "Technical University of Munich",
		"     " =>"Electrical Engineering"
];
$academic= [
    "02/2018-05/2018"=>["titre"=>"Mini Projet",
						"description"=>"Simulation of Sort Algorithms",
						"tool"=> "Tool : Java"]
	];	
$education = [
	"2017-2018" => [
			"university"=>"Sesame",
	        "degree" => "Computer Science Engineering"
			],
	"2017" => ["university"=>"California State University Long Beach",
	           "degree" =>"Electrical Engineering"],
	"2014-2017" => ["university"=>"Technical University of Cologne",
		            "degree" =>"Electrical Engineering"],
	"2013-2014" => ["university"=>"Technical University of Munich",
		            "degree" =>"Electrical Engineering"]
];

$professional = ["06/2018" => [ "local"=>"Internship at DREAM TEK Consulting",
								"tools"=>"Tool : HTML5,CSS3,JavaScript,PHP"]];

								?>
		</div>						
<div class="profile-side-bar">
				<h2><u>Profile and Personality</u></h2>
				<?php $reponse = $bdd->query('SELECT * FROM profil');
 while ($donnees = $reponse->fetch())
{?>
				<?php echo $donnees['description'] ?>
			
			<?php
}
$reponse->closeCursor();

?>
				<br>
				<h2><u>Education</u></h2>
				<?php $reponse = $bdd->query('SELECT * FROM education');
 while ($donnees = $reponse->fetch())
{?>
				
<?php echo $donnees['année_edu'] ?> <?php echo $donnees['school'] ?><br/>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $donnees['edu_description'] ?><br />
<?php
}
$reponse->closeCursor();

?>			
			
					<h2><u>Academic Experience</u></h2>
									<?php $reponse = $bdd->query('SELECT * FROM experiences WHERE type_ =\'academic\'');
 while ($donnees = $reponse->fetch())
{?>
				
<?php echo $donnees['année_exp'] ?> <b><?php echo $donnees['exp_place'] ?></b><br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $donnees['exp_description'] ?><br /><p id="tool">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $donnees['exp_tools'] ?></p><br />
<?php
}
$reponse->closeCursor();

?>			
				
					
					<h2><u>Professional Experience</u></h2>
					 
					<?php $reponse = $bdd->query('SELECT * FROM experiences WHERE type_ =\'professional\'');
 while ($donnees = $reponse->fetch())
{?>
				
<?php echo $donnees['année_exp'] ?> <b><?php echo $donnees['exp_place'] ?></b><br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $donnees['exp_description'] ?><br /><p id="tool">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $donnees['exp_tools'] ?></p><br />
<?php
}
$reponse->closeCursor();

?>			
				
			</div>
		
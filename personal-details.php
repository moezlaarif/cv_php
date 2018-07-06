<?php
$personalDetail = [
	"Name" => "Moez Laarif",
	"Date of Birth" => "18/06/1994",
	"Place of Birth" => "Tunis,Tunisia",
	"Address" => "Mutuelleville,Tunis",
	"Phone" => "(+216)52 434 852",
	"Email" => "moez.laarif@hotmail.fr",
	"GitHub Profile" => "https://github.com/moezlaarif"
];

?>
<header>
	<div id="haut">
		<div id="personal">
			<h2>Personal Details</h2>
			
<?php
	$reponse = $bdd->query('SELECT * FROM profil');
	while ($donnees = $reponse->fetch())
	{
?>
				
	Name <?php echo $donnees['name'] ?><br />
	Dates of Birth <?php echo $donnees['date_of_birth'] ?><br />
	Place of Birth <?php echo $donnees['place_of_birth'] ?><br />
	Address <?php echo $donnees['adress'] ?><br />
	Phone <?php echo $donnees['phone'] ?><br />
	E-mail <?php echo $donnees['e_mail'] ?><br />
	GitHub Profile <?php echo $donnees['github_profile'] ?><br />
	<?php
}
$reponse->closeCursor();

?>			
		</div>
	
		<div class="divphoto">
			<img src="images/moez_laarif_avatar.jpg" class="photo" />
		</div>
	</div>
</header>
<HR SIZE="3" WIDTH="90%" ALIGN="CENTER">
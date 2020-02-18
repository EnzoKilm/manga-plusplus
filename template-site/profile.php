<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
    <section>
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Manga++</a></li>
				  <li class="active">Profil</li>
				</ol>
			</div>
		</div>
    </section>
    
	<!-- <section id="profile_content">
		<div class="container">
		<section>
      <div align="center">
         <h2>Mon profil</h2>
         <div align="left">
            <form method="POST" action="" enctype="multipart/form-data">
               <label>Nom :</label>
			   <input type="" name="Nom" placeholder="Nom" value="<?php echo $users['firstname']; ?>" /><br /><br />
               <label>Prénom :</label>
               <input type="text" name="prenom" placeholder="Prenom" value="<?php echo $users['lastname']; ?>" /><br /><br />
               <label>Mail :</label>
			   <input type="text" name="mail" placeholder="Mail" value="<?php echo $users['email']; ?>" /><br /><br />
			   <label>Adresse :</label>
               <input type="text" name="Adresse" placeholder="adresse" value="<?php echo $users['adresse']; ?>" /><br /><br />
            </form>
         </div>
	  </div> -->
	  <!-- <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Profil</title>
    </head>
    <body>
        <div class="content">
	<?php
		//On verifie que lidentifiant de lutilisateur est defini
		if(isset($_GET['id']))
		{
       		 $id = intval($_GET['id']);
        //On verifie que lutilisateur existe
        	$users = mysql_query('select firstname, lastname, email, avatar, timestamps from users where id="'.$id.'"');
        if(mysql_num_rows($users)>0)
        {
                $users = mysql_fetch_array($users);
        //On affiche les donnees de lutilisateur
	?>
		Voici le profil de "<?php echo htmlentities($users['firstname'], $users['lastname']); ?>" :
		<table style="width:500px;">
        <tr>
        <td><?php
			if($users['avatar']!='')
			{
       			echo '<img src="'.htmlentities($users['avatar'], ENT_QUOTES, 'UTF-8').'" alt="Image Perso" style="max-width:100px;max-height:100px;" />';
			}
			else
			{
        		echo '<img src="'.htmlentities($users['avatar'], ENT_QUOTES, 'UTF-8').'" alt="profil_anime" style="max-width:100px;max-height:100px;" />';
			}
		?></td>
		<td class="left"><h1><?php echo htmlentities($users['firstname'], ENT_QUOTES, 'UTF-8'); ?></h1>
			Prénom: <?php echo htmlentities($users['lastname'], ENT_QUOTES, 'UTF-8'); ?>
			Email: <?php echo htmlentities($users['email'], ENT_QUOTES, 'UTF-8'); ?><br />
			Abonnement: <?php echo htmlentities($users['subscription'], ENT_QUOTES, 'UTF-8'); ?>
        Cet utilisateur s'est inscrit le <?php echo date('d/m/Y',$users['timestamps']); ?></td>
    	</tr>
		</table>
   </body>
		</section>
            
		</div> -->
	</section> <!--/#profile_content-->

	<?php include 'footer.php'; ?>
</html>
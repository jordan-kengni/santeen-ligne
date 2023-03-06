<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="acss/all.css">
	<link rel="stylesheet" href="acss/nav.css">
    <link rel="stylesheet" href="acss/allform.css">
    <link rel="stylesheet" href="acss/background.css">

<title>inscription</title>
</head>

<body>
	<div class="page">
	  <header id="image">
	            <div class="logo">
			       <img src="image/coeur.jpg" alt="logo site" class="logo1">
                    <h1>la croix du coeur</h1>
			    
	            </div>
            <div class="date">
            <?php 
			setlocale(LC_TIME,"fra_fra");
			echo strftime("%A %d %B %Y, %H:%M"); 
			?>
            </div>
           
		     <nav class="droite">
				 <ul class=nav> 
			         <li><a href="acceuil.php">ACCUEIL</a></li>
				     <li><a href="generaliste.php">CONSULTE GENERALISTE</a></li>
				     <li><a href="specialiste.php">CONSULTE SPECIALISTE</a></li>
				     <li><a href="connexion.php">se connecte</a></li>
				     <li><a href="inscription.php">INSCRIPTION</a></li>
                     <li><a href="#">ABOUT US </a></li>
				 </ul>
			 </nav>
			
		</header>
		
		<form method="POST" action="" id="content">
		
			<fieldset class="formulaire">
                				<table>
                <h1 align="center"><i><strong>inscription</strong></i></h1>
					<tr>
			<div>
			<td align="">
			   <label for="nom">NOM</label>
			   </td>
			   <td >
					<input type="text" size="25" name="nom" required>
</td>
			</div><br>
</tr>          
<tr>
			     <div>
				 <td align="">
				<label for="prenom">PRENOM</label>
              </td>           
			  <td>
				 <input type="text" size="25" name="prenom" required>
				 </td>
				</div><br>
							
</tr>  
<tr>
				<div>
				<td align="center">
				     <label for="date de naissance">date de naissance </label>
</td>
<td >
					<input type="date" name="date_de_naissance" required>
</td>
				</div><br>
				<tr>
				<div><td align="center">
				<label for="lieu de naissance">lieu de naissance</label>
</td>
<td >		
            <input type="text" name="lieu de naissance" required>
</td>
				</div><br>
</tr><tr>
			<div >
			<td align="">
				<label for="email">adresse email</label>
</td>
<td >
				<input type="email" name="email" value="exemple@gmail.com">	
</td>
			</div><br>
</tr>
<tr>
			    <div>
				<td align="">
				  <label for="sexe">SEXE</label>
</td>
<td >
					<input type="radio" name="sexe" value="M">Masculin

					<input type="radio" name="sexe" value="F">Feminin
</td>
				</div><br>
</tr>
<tr>
				<div>
				<td align="center">
				<label for="mot de passe">MOT DE PASSE</label>
</td>
<td>
					<input type="password" name="mot de passe" required>
</td>
				</div><br>
</tr>
<tr>
				<div>
				<td align="">
				    <label for="pays">PAYS</label>
</td>
<td>
					<select id="pays" name="pays" required>
					         <option>ANGLETERRE</option>
						     <OPTION>CAMEROUN</OPTION>
						     <option>FRANCE</option>
						     <option>USA</option>
						     <option>CANADA</option>
						     <option>AUTRE</option>
					</select>
</td>
				</div><br>
</tr>
<tr>
			            <div>
						<td align="">
				            <label for="telephone">TELEPHONE</label>
</td><td >
							<input type="text" name="telephone" required>
</td>
				       </div><br>
</tr>
<tr>
				   <div>
				   <td align="">
				       <label for="numero cni">numero_CNI</label>
</td>
<td >
					   <input type="text" name="numero cni" required>
</td>
				  </div><br>
</tr>
<tr>
				<div><td align="">
				<input type="reset" value="effacer">
</td>
<td align="right">
				<input type="submit" value="enregistre">
</td>
				</div>  <br>
</tr>    
  
			
                    </table>
			</fieldset>
		</form>
		<hr>
    <footer>
         <table border="0px" rows="2" cols="4" height="70%" width="115%">
             <tr>
                 <td>
                      <img src="#" alt="logo">
                 </td>
                 <td>
                      <h3><b>contact detailles</b></h3>
                 </td>
                 <td>
                     <h3><b>LIENS</b></h3>
                 </td>
                 <td>
                     <h3>s'inscrire pour les notifications</h3>
                 </td>
             
             </tr>
             <tr>
                 <td>
                         <div>
							 <p>Experience Beyond medical</p>
							 <p> une nouvelle image de la medecine digital. la sante  en un seul clic</p>
						 </div>
                 </td>
                 <td>
						 <div>
						      <h4><b>Email:</b></h4>
							  <a href="mailto">kengniyvanjordan@gmail.com</a>
							 <h4><b>PHONE</b></h4>
							 <P>+237699125932/+237620357859</P>
						 </div>
                </td>
                 <td>
						 <div id="pied">
							        <a href="acceuil.php">ACCUEIL</a>
				                    <a href="generaliste.php">CONSULTE UN GENERALISTE</a>
				                    <a href="specialiste.php">CONSULTE SPECIALISTE</a>
				                    <a href="connexion.php">se connecte</a>
				                    <a href="inscription.php">INSCRIPTION</a>
                                    <a href="#">ABOUT US </a>
						 </div>
                 </td>
                 <td>
				         <div>
								 <form action="" method="post">
								 <input type="text" value="entrez votre email" required>
									 <input type="submit" value="s'inscrire">
								 </form>
								 <p>Follow us on </p>
								  <a href="#" class="fa fa-facebook"></a>
			                      <a href="#" class="fa fa-twitter"></a>
			                      <a href="#" class="fa fa-google"></a>
								 
       
			  </div>
                     </td>
                 </tr>
             </table>
		</footer>
    </div>
        </body>
</html>
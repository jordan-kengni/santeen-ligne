<!DOCTYPE html>
<html>
    <head>
        <title>gestion des absences</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="acss/allform.css">
        <link rel="stylesheet" href="acss/all.css">
        <link rel="stylesheet" href="acss/nav.css">
        <link rel="stylesheet" href="acss/background.css">
    
    </head>
    <body>
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
        <hr>
        <section class="page">
          
    <table border="0px" rows="6" cols="1" id="content" >
        
        <form method="post" action="#" >
           <tr><td>
               <strong> IDENTIFIANT</strong><br>
               </td>
            </tr>
              <tr>
                <td>
                  <input type="text" name="id" value="user">
               </td> 
            </tr>
            <tr><td>
                <strong> mot de passe</strong><br>
                </td>
            </tr>
            <tr>
              <td>
                  <input type="password" name="pws" value="password">
               </td> 
            </tr>
            <tr>
              <td>
                  <input type="reset" name="effacer" value="effaces">
                  <input type="submit" name="enregistrer" value="enregistrer">
               </td> 
            </tr>
            <tr>
            <td>
                  <p><b><a href="inscription.php">jai pas de compte</a></b></p>
           </td>
            </tr>
        </form>
        
      
        </table>
              
    </section>
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
    
    </body>

           

</html>
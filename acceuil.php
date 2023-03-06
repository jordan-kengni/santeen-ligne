<!DOCTYPE HTML>
<html>
     <head>
            <meta chaset="utf-8">
            <link rel="stylesheet" href="acss/all.css">
         <link rel="stylesheet" href="acss/nav.css">
         <link rel="stylesheet" href="acss/background.css">
         <title> acceuil </title>
    
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
    <section>
              
                  
              <div class="service">
                  <table border="0px" rows="2" cols="3" align="center">
                      <tr>
                          <td colspan="3">
                              <h1 align="center" class="th1"><b>NOS SERVICES</b></h1>
                          </td>
                      </tr>
                      <tr>
                          <td align="center">
                  <div id=item>
                      <a href="#"><img src="../absence/image/ser.jpg" alt="items"></a>
                      <h3><b>consultation medicale</b></h3>
                      <p>ici vous avez la possibilite entre en contact avec des medecins </p>
                  </div>
                              
                        </td><br>
                          <td align="center">
                  <div id=item>
                      <a href="#"><img src="../absence/image/cons.jpg" alt="items"></a>
                      <h3><b>conseils sante</b></h3>
                      <p>ici vous avez la possibilite de lire des articles,conseils et bonne pratique sante </p>
                  </div>
                         </td><br>
                          
                          <td align="center">
        
                  <div id=item>
                      <a href="#"><img src="../absence/image/ser1.jpg" alt="items"></a>
                      <h3><b>article</b></h3>
                      <p>ici vous avez la possibilite entre en contact avec des medecins </p>
                  </div>
                         </td>      
                </tr>
                 </table>
              </div>
        
        
      <div class="medecins">
          
        <table border="0px" rows="2" cols="3" align="left"  height="50%" width="96%" >
            <tr>
                <td colspan="3">
                    <h1 align="center" class="th1" ><b>NOS MEDECINS</b></h1>
                </td>
            </tr>
            
            <tr>
                <td align="center">
        <div>
          <a href="#"><img src="../absence/image/docta.jpg" alt="docteur"></a>
            <h3><b>docteur x</b></h3>
            <P>docteur x specialiste en x du centre medicale x</P>
          
          </div>
               </td>
                <td align="center">
           <div>
          <a href="#"><img src="../absence/image/docta2.jpg" alt="docteur"></a>
            <h3><b>docteur x</b></h3>
            <P>docteur x specialiste en x du centre medicale x</P>
          
          </div>
                </td>
                <td align="center">
           <div>
          <a href="#"><img src="../absence/image/docta1.jpg" alt="docteur"></a>
            <h3><b>docteur x</b></h3>
            <P>docteur x specialiste en x du centre medicale x</P>
          
          </div>
                </td>
               </tr>
         </table>
        </div>
               
        <div class="actualite">
            
           <table border="0px" rows="4" cols="3"  height="70%" width="423%">
               <tr>
                   <td colspan="3">
                        <h1 align="center" class="th1"><b>ACTUALITES</b></h1>
                   </td>
               
               </tr>
               <tr>
                   <td align="center">
            <div>
              <a href="#"><img src="#" alt="actu"></a>
                <p>exemple article</p>
                <p>boutton read</p>
            </div>
                    </td>
                   <td align="center">
            
             <div>
              <a href="#"><img src="#" alt="actu"></a>
                <p>exemple article</p>
                <p>boutton read</p>
            </div>
                    </td>
            
          <!--  <div id="column">-->
                    <td align="center">
                    <div>
                        <p>exemple article</p>
                        <p>boutton read</p>
                    </div>
                    </td>
              </tr>
               <tr>
                   <td></td>
                   <td></td>
                   <td align="center">
                    <div>
                        <p>exemple article</p>
                        <p>boutton read</p>
                    </div>
                       </td>
                </tr>
               <tr>
                   <td></td>
                   <td></td>
                   <td align="center">
                    <div>
                        <p>exemple article</p>
                        <p>boutton read</p>
                    </div>
                       </td>
              </tr>
            
             <!--  </div>-->
        </table>
        </div>
        
         
    </section>
    
    <footer>
         <table border="0px" rows="2" cols="4" height="70%" width="115%">
             <tr>
                 <td>
                      <img src= alt="logo">
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
<!DOCTYPE html>
<html>
    <head>
		<title> LEAVES OF LIFE </title>
		<link rel="icon" type="images/x-icon" href="assets/icon.png">
        <link rel="stylesheet" href="/New/plantprofile.css?v=<?php echo time(); ?>" type="text/css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
		<style>
			body{
  font-family: 'Roboto', sans-serif;

}
			
			/* The Modal (background) */
			.modal {
			  display: none; /* Hidden by default */
			  position: fixed; /* Stay in place */
			  z-index: 1; /* Sit on top */
			  padding-top: 10px; /* Location of the box */
			  left: 0;
			  top: 0;
			  width: 100%; /* Full width */
			  height: 100%; /* Full height */
			  overflow: auto; /* Enable scroll if needed */
			  background-color: rgb(0,0,0); /* Fallback color */
			  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			}
			
			/* Modal Content */
			.modal-content {
			  position: relative;
			  background-color: #fefefe;
			  margin: auto;
			  padding: 0;
			  border: 1px solid #888;
			  width: 70%;
			  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
			  -webkit-animation-name: animatetop;
			  -webkit-animation-duration: 0.4s;
			  animation-name: animatetop;
			  animation-duration: 0.4s
			}
			
			/* Add Animation */
			@-webkit-keyframes animatetop {
			  from {top:-300px; opacity:0} 
			  to {top:0; opacity:1}
			}
			
			@keyframes animatetop {
			  from {top:-300px; opacity:0}
			  to {top:0; opacity:1}
			}
			
			/* The Close Button */
			.close {
			  color: white;
			  float: right;
			  font-size: 28px;
			  font-weight: bold;
			}
			
			.close:hover,
			.close:focus {
			  color: #000;
			  text-decoration: none;
			  cursor: pointer;
			}
			
			.modal-header {
			  padding: 2px 16px 12px 2px;
			  background-color: #154619;
			  color: white;
			}
			
			.modal-body {
				padding: 2px 16px;
				background-color: #48881F;
			}
			
			.modal-footer {
				
			  padding: 12px 16px;
			  background-color: #48881F;
			  color: white;
			}
			.btn{
				padding: 10px 60px;
				background: #48881F;
				border: 0;
				outline: none;
				cursor: pointer;
				font-size: 22px;
				font-weight: 500;
				border-radius: 30px;
			
			}
			
			.btn2{
				padding: 10px 50px;
				margin-top: 10px;
				margin-bottom: 10px;
				margin-left: 45%;
				margin-right: 45%;
				border: 0;
				outline: none;
				cursor: pointer;
				font-size: 12px;
				border-radius: 10px;
			
			}
			.modal-body img{
				z-index: 1; /* Sit on top */
				width: 100px;
				margin-top:-20px;
				margin-left: 45%;
				margin-right: 45%;
				border-radius: 10%;
				box-shadow: 0 2px 5px rgba(0, 0, 0,0);
				height: 160px;
				width: 160px;
			}
			.title{
				margin-top: 20px;
				margin-left: 50px;
				text-align: left;
				color: white;
			}
			
			.bodytext{
				color: white;
				text-align: justify;
			}
			
.container1 {
    margin-top: auto;
    margin-left: auto;
    margin-right: auto;
}

.tbl1 {
    margin-top: 10px;
    margin-left: 20px;
    margin-right: 20px;
}

.Htitle {
    font-size: 50px;
    font-weight: bold;
    color: darkgreen;
	font-family: "'Roboto', sans-serif";
} 

.space_search {
    padding-left: 300px;
}

.search {
    border-radius: 10px;
    border-color: darkgreen;
    background-color: #D3D3D3;
    border-width: 2px;
    height: 30px;
    width: 300px;
    padding-left: 15px;
    font-size: 20px;
}

.space_button{
    padding-left: 140px;
}

.button {
    background-color: darkgreen;
    border: 2px solid white;
    width: 100px;
    height: 40px;
    color: white;
    border-radius: 10px;
    font-weight: bold;
}

.tbl2 {
    margin-top: 10px;
    margin-left: 20px;
    margin-right: 20px;
}


.spacing {
    padding-left: 30px;
    padding-right: 30px;
}

.button1 {
    font-size: 15px;
    background-color: white;
    color: darkgreen;
    border-color: white;
    border-radius: 10px;
    height: 40px;
    width: 220px;
    font-weight: bold;
}

.button1:hover {
    background-color: rgb(11, 102, 35);
    color: white;
}
.button1.active {
    background-color: #155B1C;
    color: white;
}


.tbl3 {
    width: 100%;
    height: 8%;
    background-color: darkgreen;
}

.header {
    color: white;
    text-align: center;
    font-size: 30px;
    font-weight: bold;
}
#about {
    background-color: rgb(11, 102, 35);
    color: white;
}
			</style>
	</head>
		<body bgcolor="#FDFFEF">
		<div class = "container1">
            <center><table class = "tbl1">
                <tr>
                    <td> <img class="img-icon" src="assets/icon.png"> </td>
                    <td class="Htitle"> LEAVES OF LIFE </td>
                    <td class="space_search"> <input type="text" placeholder="🔍 search..." class="search"> </td>
                    <td class="space_button"> 
                        <form action="quiz.php" method="post">
                            <input class="button" type="submit" value="Match Quiz"> 
                        </form>
                    </td>
                </tr> 
            </table></center>
            <center><table class="tbl2">
                <tr>
                    <td class="spacing">
                        <form action="about.php" method="post">
                            <button class = "button1" type = "submit"> ABOUT US </button>
                        </form>
                    </td>
                    <td class="spacing">
                        <form action="plantprofile.php" method="post">
                            <button class = "button1" id="about" type = "submit"> PLANT PROFILE </button>
                        </form>
                    </td>
                    <td class="spacing">
                        <form action="tutorial.php" method="post">
                            <button class = "button1" type = "submit"> TUTORIAL </button>
                        </form>
                    </td>
                    <td class="spacing">
                        <form action="prescriptionvsherbal.php" method="post">
                            <button class = "button1" type = "submit"> PRESCRIPTION VS HERBAL </button>
                        </form>
                    </td>
                    <td class="spacing">
                        <form action="profile.php" method="post">
                            <button class = "button1" type = "submit"> PROFILE </button>
                        </form>
                    </td>
                </tr>
            </table></center>

				<div class="navbar2">
					<h2 class="pagetitle"> PLANT PROFILES</h2>
					
				</div>
			
			<div class="maincontent">
				

				<div class="container2">
					<h2 align="center"><font face="helvetica"><b> TREES HERBAL AREA </b></h2>
				</div>
				<!--TREE HERBAL-->
				<table class="herbal" align="center">
					<tr>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbalt1.png">
								<h3 align="center"> Birch Tree </h3>
								<center><button class="button" type="button" id="myBtn"> Details </button></center>
									<div id="myModal" class="modal">

										  <div class="modal-content">
												<div class="modal-header">
													<span class="close">&times;</span><br>
													<h2 align="center">TREES HERBAL AREA</h2>
												</div>
												<div class="modal-body">
													<h1 class="title"> BIRCH TREE <img src="assets/Herbal/herbalt1.png"></h1>
													<p class="bodytext"> <b> DESCRIPTION </b></p>
													<p class="bodytext"> A birch has smooth, resinous, varicoloured or white bark, marked by horizontal pores (lenticels), which usually peels horizontally in thin sheets, especially on young trees. On older trunks the thick, deeply furrowed bark breaks into irregular plates. Short, slender branches rise to a narrow pyramidal crown on a young tree; they become horizontal, often pendulous, on an older tree. The egg-shaped or triangular, usually pointed leaves have toothed margins; they are alternately arranged on the branchlets. </p>
													<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
													<p class="bodytext"> •	Joint pain <br>
														•	Kidney stones <br>
														•	Bladder stones <br>
														•	Urinary Tract Infections (UTIs) </p>
													<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
													<p class="bodytext"> It is native to Europe and parts of Asia </p>
												  </div>
												  <div class="modal-footer">
													<form method="get">
														<br>
														Comment:<br> <span id="result"></span> <br> <br>
														Write a Comment:    <input type="text" name="comment" id="comment"><br/>
														<input type="button" class="btn2" value="Submit" onClick="pr()">
													  </form>
											  
													  <script>
														function pr() {
														  document.getElementById("result").innerHTML = document.getElementById('comment').value;
														}
													  </script>
												
												</div>
											</div>
									</div>
							</div>
					
						</td>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbalt2.png">
								<h3 align="center"> Oak Tree </h3>
								<center><button class="button" type="button" id="myBtn1"> Details </button></center>
									<div id="myModal1" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
												<span class="close1">&times;</span><br>
												<h2 align="center">TREES HERBAL AREA</h2>
											</div>
											<div class="modal-body">
											<h1 class="title"> OAK TREE <img src="assets/Herbal/herbalt2.png"></h1>
											<p class="bodytext"> <b> DESCRIPTION </b></p>
											<p class="bodytext">Oak trees are one of the most robust and large trees in the world, and they’ve been around for millions of years. Oaks are trees and shrubs of the beech family. There are about 450 species, or types, of oak. They are common in places with mild weather. Oaks can take 100 years to develop fully and can then live another 900 years. Oak trees can grow to 150 feet (45 meters) high. They have thick trunks and large branches that spread wide. The leaves can have rounded, rough, or smooth edges. Oaks bear male flowers and female flowers on the same tree. The fruit is the acorn—a round nut in a woody cup. New oaks can grow easily from acorns. </p>
											<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
											<p class="bodytext"> •	Bleeding <br>
												•	Tumors <br>
												•	Swelling <br>
												•	Dysentery </p>
											<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
											<p class="bodytext"> Oak Trees are native to North America, South American, Asia, Europe, and North Africa. </p>
										  </div>
										  <div class="modal-footer">
											<form method="get">
												<br>
												Comment:<br> <span id="result"></span> <br> <br>
												Write a Comment:    <input type="text" name="comment" id="comment"><br/>
												<input type="button" class="btn2" value="Submit" onClick="pr()">
											  </form>
									  
											  <script>
												function pr() {
												  document.getElementById("result").innerHTML = document.getElementById('comment').value;
												}
											  </script>
										
										</div>
									</div>
							</div>
						</div>
						</td>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbalt3.png">
								<h3 align="center"> Kamala Tree </h3>
								<center><button class="button" type="button" id="myBtn2"> Details </button></center>
									<div id="myModal2" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
											<span class="close2">&times;</span><br>
											<h2 align="center"> TREES HERBAL AREA </h2>
											</div>
											<div class="modal-body">
												<h1 class="title">KAMALA TREE <img src="assets/Herbal/herbalt3.png"></h1>
											 <p class="bodytext"> <b> DESCRIPTION </b></p>
											 <p class="bodytext">The kamala tree (Mallotus philippensis) is a tropical tree most notable for its bright orange-red seed pods that are valued for their dye-producing abilities. The tree is also grown for its wood. This tree is also grown ornamentally, largely because of its brightly colored fruit. Very common perennial shrub or small tree found in outer Himalayas ascending to 1500 meters.</p>
											 <p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
											 <p class="bodytext"> •	Ulcer <br>
												•	Wounds </p>
											 <p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
											 <p class="bodytext"> Philippines</p>
											 <div class="modal-footer">
												<form method="get">
													<br>
													Comment:<br> <span id="result"></span> <br> <br>
													Write a Comment:    <input type="text" name="comment" id="comment"><br/>
													<input type="button" class="btn2" value="Submit" onClick="pr()">
												  </form>
										  
												  <script>
													function pr() {
													  document.getElementById("result").innerHTML = document.getElementById('comment').value;
													}
												  </script>
											
											</div>
											</div>
			
										
											
											</div>
										  </div>
										</div>
						</td>
						</td>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbalt4.png">
								<h3 align="center"> Acacia Tree </h3>
								<center><button class="button" type="button" id="myBtn3"> Details </button></center>
									<div id="myModal3" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
											<span class="close3">&times;</span><br>
											<h2 align="center">TREES HERBAL AREA</h2>
											</div>
											<div class="modal-body">
											<h1 class="title"> ACACIA TREE <img src="assets/Herbal/herbalt4.png"> </h1>
											<p class="bodytext"> <b> DESCRIPTION </b></p>
											<p class="bodytext"> Acacias are very grateful trees, The foliage is typically bright green or bluish green and the small blooms may be creamy white, pale yellow, or bright yellow. Acacia may be evergreen or deciduous.<br><br> Most acacia tree types are fast growers, but they usually live only 20 to 30 years. Many varieties are valued for their long roots which help stabilize the soil in areas threatened by erosion. The sturdy roots reach deep for underground water, which explains why the tree tolerates extreme drought conditions.</p>
											<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
											<p class="bodytext"> •	Ulcer <br>
												•	Wounds </p>
											<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
											<p class="bodytext"> Africa and Australia, Mediterranean climates, and the grasslands of North America, South America, Europe, and Asia.</p>
										</div>
										<div class="modal-footer">
											<form method="get">
												<br>
												Comment:<br> <span id="result"></span> <br> <br>
												Write a Comment:    <input type="text" name="comment" id="comment"><br/>
												<input type="button" class="btn2" value="Submit" onClick="pr()">
											  </form>
									  
											  <script>
												function pr() {
												  document.getElementById("result").innerHTML = document.getElementById('comment').value;
												}
											  </script>
											</div>
										</div>
									</div>
							</div>
						</td>
						</td>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbalt5.png">
								<h3 align="center"> Tulip Tree </h3>
								<center><button class="button" type="button" id="myBtn4"> Details </button></center>
									<div id="myModal4" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
												<span class="close4">&times;</span><br>
												<h1 align="center"> TREES HERBAL AREA </h1>
											</div>
											<div class="modal-body">
												<h1 class="title">TULIP TREE<img src="assets/Herbal/herbalt5.png"> </h1>
												<p class="bodytext"> <b> DESCRIPTION </b></p>
											<p p class="bodytext">One of the tallest and most beautiful eastern hardwoods, with a long, straight trunk, a narrow crown that spreads with age, and large showy flowers resembling tulips or lilies. A tall, straight, deciduous tree, up to150 ft. tall (sometimes taller), tulip tree has a medium to narrow crown and distinctive, star-shaped foliage. The leaves are waxy and smooth, and dependably turn bright gold in fall. Showy, yellow-orange, tulip-like flowers are often missed because they are up 50 ft. or higher in the tops of trees. Cone-shaped seedheads remain after leaves have fallen.</p>
											<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
											<p class="bodytext"> •	Insect bites <br>
												•	Bee Stings <br>
												•	Scratches <br>
												•	Itches  <br>
												•	Skin Irritations </p>
											<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
											<p class="bodytext"> Philippines </p>
										</div>
										<div class="modal-footer">
											<form method="get">
												<br>
												Comment:<br> <span id="result"></span> <br> <br>
												Write a Comment:    <input type="text" name="comment" id="comment"><br/>
												<input type="button" class="btn2" value="Submit" onClick="pr()">
											  </form>
									  
											  <script>
												function pr() {
												  document.getElementById("result").innerHTML = document.getElementById('comment').value;
												}
											  </script>
											</div>
										</div>
									</div>
							</div>
						</td>
					</tr>
				</table>
				<br>
				<div class="container2">
					<h2 align="center"><font face="helvetica"><b> PLANTS HERBAL AREA </b></h2>
				</div>
				<!--PLANT HERBAL-->
				<table class="herbal" align="center">
					<tr>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbalp1.png">
								<h3 align="center"> Aloe Vera Plant </h3>
								<center><button class="button" type="button" id="myBtn5"> Details </button></center>
									<div id="myModal5" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
												<span class="close5">&times;</span><br>
											<h1 align="center"> PLANTS HERBAL AREA </h1>
											</div>
											<div class="modal-body">
												<h1 class="title">ALOE VERA PLANT <img class="dphoto" src="assets/Herbal/herbalp1.png"> </h1>
												<p class="bodytext"> <b> DESCRIPTION </b></p>
												<p class="bodytext">Aloe is a cactus-like plant that grows in hot, dry climates. It is cultivated in subtropical regions around the world, including the southern border areas of Texas, New Mexico, Arizona, and California. Historically, aloe has been used for skin conditions and was thought to improve baldness and promote wound healing. Aloe is used topically (applied to the skin) and orally. Topical use of aloe is promoted for acne, lichen planus (a very itchy rash on the skin or in the mouth), oral submucous fibrosis, burning mouth syndrome, burns, and radiation-induced skin toxicity. Oral use of aloe is promoted for weight loss, diabetes, hepatitis, and inflammatory bowel disease (a group of conditions caused by gut inflammation that includes Crohn’s disease and ulcerative colitis).</p>
											<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
											<p class="bodytext"> •	Burns <br>
												•	Wounds <br>
												•	Skin Irritations <br>
												•	Constipation </p>
											<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
											<p class="bodytext"> Australia, Cuba, the Dominican Republic, China, Mexico, India, Jamaica, Kenya, Tanzania, South Africa, Spain, and the United States
											</p>
											</div>
											<div class="modal-footer">
												<form method="get">
													<br>
													Comment:<br> <span id="result"></span> <br> <br>
													Write a Comment:    <input type="text" name="comment" id="comment"><br/>
													<input type="button" class="btn2" value="Submit" onClick="pr()">
												  </form>
										  
												  <script>
													function pr() {
													  document.getElementById("result").innerHTML = document.getElementById('comment').value;
													}
												  </script>
												</div>
											</div>
									</div>
							</div>
						</td>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbalp2.png">
								<h3 align="center"> Peppermint Plant </h3>
								<center><button class="button" type="button" id="myBtn6"> Details </button></center>
									<div id="myModal6" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
												<span class="close6">&times;</span><br>
												<h1 align="center"> PLANTS HERBAL AREA </h1>
											</div>
											<div class="modal-body">
												<h1 class="title">PEPPERMINT PLANT <img class="dphoto" src="assets/Herbal/herbalp2.png"> </h1>
												<p class="bodytext"> <b> DESCRIPTION </b></p>
												<p class="bodytext">Peppermint is a common flavoring agent in foods and beverages, and peppermint oil is used as a fragrance in soaps and cosmetics. Peppermint has been used for health purposes for several thousand years. Records from ancient Greece, Rome, and Egypt mention that it was used for digestive disorders and other conditions. Peppermint has a strong sweetish odour and a warm pungent taste with a cooling aftertaste. The leaves are typically used fresh as a culinary herb, and the flowers are dried and used to flavour candy, desserts, beverages, salads, and other foods. Its essential oil is also widely used as a flavouring.</p>
												<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
												<p class="bodytext"> •	Irritable Bowel Syndrome (IBS) <br>
													•	Indigestion and Dyspepsia <br>
													•	Headaches <br>
													•	Nausea</p>
												<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
												<p class="bodytext"> North America and Europe</p>
											</div>
											<div class="modal-footer">
												<form method="get">
													<br>
													Comment:<br> <span id="result"></span> <br> <br>
													Write a Comment:    <input type="text" name="comment" id="comment"><br/>
													<input type="button" class="btn2" value="Submit" onClick="pr()">
												  </form>
										  
												  <script>
													function pr() {
													  document.getElementById("result").innerHTML = document.getElementById('comment').value;
													}
												  </script>
												</div>
											</div>
									</div>
							</div>
						</td>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbalp3.png">
								<h3 align="center"> Gotu Kola Plant </h3>
								<center><button class="button" type="button" id="myBtn7"> Details </button></center>
									<div id="myModal7" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
											<span class="close7">&times;</span><br>
											<h1 align="center">PLANTS HERBAL AREA</h1>
											</div>
											<div class="modal-body">
												<h1 class="title"> GOTU KOLA PLANT <img class="dphoto" src="assets/Herbal/herbalp3.png"> </h1>
												<p class="bodytext"> <b> DESCRIPTION </b></p>
												<p class="bodytext">Gotu kola, or Centella asiatica, is a plant traditionally used in Chinese and Indonesian medicine. Known as the “herb of longevity,” this plant is indigenous to the wetlands of Southeast Asia, where it’s consumed as a juice, tea, or supplement. Practitioners of alternative medicine use gotu kola for its anti-inflammatory benefits, as well as to promote overall mental health. While some benefits of the herb may need further study, gotu kola may help improve your health and well-being.</p>
												<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
												<p class="bodytext"> •	Varicose Veins <br> 
													•	Chronic Venous Insufficiency </p>
												<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
												<p class="bodytext"> Asia </p>
											</div>
											<div class="modal-footer">
												<form method="get">
													<br>
													Comment:<br> <span id="result"></span> <br> <br>
													Write a Comment:    <input type="text" name="comment" id="comment"><br/>
													<input type="button" class="btn2" value="Submit" onClick="pr()">
												  </form>
										  
												  <script>
													function pr() {
													  document.getElementById("result").innerHTML = document.getElementById('comment').value;
													}
												  </script>
											
											</div>
											
												
										  </div>
									</div>
							</div>
						</td>
						</td>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbalp4.png">
								<h3 align="center"> Lemon Balm Plant </h3>
								<center><button class="button" type="button" id="myBtn8"> Details </button></center>
									<div id="myModal8" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
												<span class="close8">&times;</span><br>
												<h1 align="center"> PLANTS HERBAL AREA</h1>
											</div>
											<div class="modal-body">
												<h1 class="title">LEMON BALM PLANT<img class="dphoto" src="assets/Herbal/herbalp4.png"> </h1>
												<p class="bodytext"> <b> DESCRIPTION </b></p>
												<p class="bodytext">Lemon balm (Melissa officinalis) is an herb from the mint family. The leaves, which have a mild lemon aroma, are used to make medicine and flavor foods. Lemon balm contains chemicals that seem to have a sedative and calming effect. It might also reduce the growth of some viruses and bacteria.</p>
												<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
												<p class="bodytext"> •	Cold Sores <br>
													•	Insomnia <br>
													•	Bloating </p>
												<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
												<p class="bodytext"> South-central Europe, the Mediterranean Basin, Iran, and Central Asia
												</p>
											</div>
											<div class="modal-footer">
												<form method="get">
													<br>
													Comment:<br> <span id="result"></span> <br> <br>
													Write a Comment:    <input type="text" name="comment" id="comment"><br/>
													<input type="button" class="btn2" value="Submit" onClick="pr()">
												  </form>
										  
												  <script>
													function pr() {
													  document.getElementById("result").innerHTML = document.getElementById('comment').value;
													}
												  </script>
												</div>
											</div>
									</div>
							</div>
						</td>
						</td>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbalp5.png">
								<h3 align="center"> Lagundi Plant </h3>
								<center><button class="button" type="button" id="myBtn9"> Details </button></center>
									<div id="myModal9" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
											<span class="close9">&times;</span><br>
											<h1 align="center"> PLANTS HERBAL AREA </h1>
											</div>
											<div class="modal-body">
												<h1 class="title">LAGUNDI PLANT<img class="dphoto" src="assets/Herbal/herbalp5.png"> </h1>
												<p class="bodytext"> <b> DESCRIPTION </b></p>
												<p class="bodytext">Lagundi (scientific name: Vitex negundo) is a large native shrub that grows in Asia and Southeast Asia such as the Philippines and India and has been traditionally used as herbal medicine and is an important medicinal plant in Ayurvedic and Unani systems of medicine. The extracts from its leaves and roots are mostly considered to provide the most health benefits. The Philippine Department of Health has conducted research and study for Lagundi and has suggested that the lagundi plant has a number of verifiable therapeutic value and health benefits to man.</p>
												<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
												<p class="bodytext"> •	Fever <br>
													•	Cough <br>
													•	Asthma <br>
													•	Bronchitis </p>
												<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
												<p class="bodytext"> Philippines and India </p>
											</div>
											<div class="modal-footer">
												<form method="get">
													<br>
													Comment:<br> <span id="result"></span> <br> <br>
													Write a Comment:    <input type="text" name="comment" id="comment"><br/>
													<input type="button" class="btn2" value="Submit" onClick="pr()">
												  </form>
										  
												  <script>
													function pr() {
													  document.getElementById("result").innerHTML = document.getElementById('comment').value;
													}
												  </script>
											
											</div>
										</div>
												
										  </div>
									</div>
							</div>
						</td>
					</tr>
				</table>
				<br>
				<div class="container2">
					<h2 align="center"><font face="helvetica"><b> FLOWERS HERBAL AREA </b></h2>
				</div>
				<!--FLOWERS HERBAL-->
				<table class="herbal" align="center">
					<tr>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbalf1.png">
								<h3 align="center"> Thyme Flower </h3>
								<center><button class="button" type="button" id="myBtn10"> Details </button></center>
									<div id="myModal10" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
												<span class="close10">&times;</span><br>
											<h1 align="center"> FLOWERS HERBAL AREA </h1>
			
											</div>
											<div class="modal-body">
												<h1 class="title">THYME FLOWER <img class="dphoto" src="assets/Herbal/herbalf1.png"></h1>
												<p class="bodytext"> <b> DESCRIPTION </b></p>
												<p  class="bodytext">Thyme (Thymus vulgaris) is an herb with a distinct smell. The flowers, leaves, and oil are commonly used to flavor foods and are also used as medicine. Thyme contains chemicals that might help bacterial and fungal infections. It also might help relieve coughing and have antioxidant effects. Common thyme is a dwarf, woody, evergreen perennial in the Lamiaceae (mint) family. Common thyme originated in southern Europe and northern Africa. It prefers the dry, rocky soils of the Mediterranean. Thyme has been used for centuries as a culinary herb or herbal medicine.</p>
												<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
												<p class="bodytext"> •	Bronchitis <br>
													•	Cough <br>
													•	Sore throat  <br>
													•	Arthritis <br>
													•	Diarrhea
													 </p>
												<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
												<p class="bodytext"> Mediterranean Region </p>
											</div>
											 
											<div class="modal-footer">
					<form method="get">
						<br>
						Comment:<br> <span id="result"></span> <br> <br>
						Write a Comment:    <input type="text" name="comment" id="comment"><br/>
						<input type="button" class="btn2" value="Submit" onClick="pr()">
					  </form>
			  
					  <script>
						function pr() {
						  document.getElementById("result").innerHTML = document.getElementById('comment').value;
						}
					  </script>
				
				</div>
												
										  </div>
									</div>
							</div>
						</td>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbalf2.png">
								<h3 align="center"> Lavender Flower </h3>
								<center><button class="button" type="button" id="myBtn11"> Details </button></center>
									<div id="myModal11" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
												<span class="close11">&times;</span><br>
											<h1 align="center"> FLOWERS HERBAL AREA </h1>
											</div>
											<div class="modal-body">
												<h1 class="title"> LAVENDER FLOWER <img class="dphoto" src="assets/Herbal/herbalf2.png"></h1>
												<p class="bodytext"> <b> DESCRIPTION </b></p>
												<p class="bodytext">Lavender is native to the mountainous zones of the Mediterranean where it grows in sunny, stony habitats. Lavender is a heavily branched short shrub that grows to a height of roughly 60 centimeters (about 24 inches). Its broad rootstock bears woody branches with upright, rod like, leafy, green shoots. A silvery down covers the gray green narrow leaves, which are oblong and tapered, attached directly at the base, and curled spirally. The oil in lavender's small, blue violet flowers gives the herb its fragrant scent. The flowers are arranged in spirals of 6 to 10 blossoms, forming interrupted spikes above the foliage</p>
												<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
												<p class="bodytext"> •	Headaches <br>
													•	Nervous Disorders <br>
													•	Exhaustion </p>
												<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
												<p class="bodytext"> Cape Verde and the Canary Islands, and from Europe across to northern and eastern Africa, the Mediterranean, southwest Asia to India </p>
											</div>
											
											<div class="modal-footer">
												<form method="get">
													<br>
													Comment:<br> <span id="result"></span> <br> <br>
													Write a Comment:    <input type="text" name="comment" id="comment"><br/>
													<input type="button" class="btn2" value="Submit" onClick="pr()">
												  </form>
										  
												  <script>
													function pr() {
													  document.getElementById("result").innerHTML = document.getElementById('comment').value;
													}
												  </script>
												</div>
											</div>
												
										  </div>
									</div>
				
						</td>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbalf3.png">
								<h3 align="center"> Calendula Flower </h3>
								<center><button class="button" type="button" id="myBtn12"> Details </button></center>
									<div id="myModal12" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
												<span class="close12">&times;</span><br>
											<h1 align="center"> FLOWERS HERBAL AREA </h1>
											</div>
											<div class="modal-body">
												<h1 class="title"> CALENDULA FLOWER <img class="dphoto" src="assets/Herbal/herbalf3.png"> </h1>
												<p class="bodytext"> <b> DESCRIPTION </b></p>
												<p class="bodytext">The flower petals of the calendula plant (Calendula officinalis), or pot marigold, have been used for medicinal purposes since at least the 12th century. Calendula is native to Mediterranean countries but is now grown as an ornamental plant throughout the world. However, it is not the same as the annual marigold plant that is often grown in gardens. Calendula is an annual plant that thrives in almost any soil but can typically be found in Europe, Western Asia, and the United States. It belongs to the same family as daisies, chrysanthemums, and ragweed. Its branching stems grow to a height of 30 to 60 cm, and it blooms from early spring until frost. The orange-yellow petals of the flowers are used for medicine.</p>
												<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
												<p class="bodytext"> •	Nephrotoxicity <br>
													•	Jaundice <br>
													•	Wounds <br>
													•	It can potentially cure cancer </p>
												<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
												<p class="bodytext"> Southwestern Asia, western Europe, Macaronesia, and the Mediterranean</p>
											</div>
											<div class="modal-footer">
												<form method="get">
													<br>
													Comment:<br> <span id="result"></span> <br> <br>
													Write a Comment:    <input type="text" name="comment" id="comment"><br/>
													<input type="button" class="btn2" value="Submit" onClick="pr()">
												  </form>
										  
												  <script>
													function pr() {
													  document.getElementById("result").innerHTML = document.getElementById('comment').value;
													}
												  </script>
												</div>
											</div>
									</div>
							</div>
						</td>
						</td>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbalf4.png">
								<h3 align="center"> Rose Flower </h3>
								<center><button class="button" type="button" id="myBtn13"> Details </button></center>
									<div id="myModal13" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
												<span class="close13">&times;</span><br>
												<h1 align="center"> FLOWERS HERBAL AREA</h1>
											</div>
											<div class="modal-body">
												<h1 class="title"> ROSE FLOWER <img class="dphoto" src="assets/Herbal/herbalf4.png"></h1>
												<p class="bodytext"> <b> DESCRIPTION </b></p>
												<p class="bodytext">Roses are one of the most loved flowers in the world. These stunning and fragrant symbols of love have been in cultivation for thousands of years. They come in all sorts of fantastical forms and exquisite colours that are enjoyed in ornamental displays throughout the world. Their stems are usually prickly and their glossy, green leaves have toothed edges. Rose flowers vary in size and shape. They burst with colours ranging from pastel pink, peach, and cream, to vibrant yellow, orange, and red. Many roses are fragrant, and some produce berry-like fruits called hips.</p>
												<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
												<p class="bodytext"> •	Heart Disease <br>
													•	Anxiety </p>
												<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
												<p class="bodytext"> Asia, Europe, North America, and northwestern Africa </p>
											</div>
											<div class="modal-footer">
												<form method="get">
													<br>
													Comment:<br> <span id="result"></span> <br> <br>
													Write a Comment:    <input type="text" name="comment" id="comment"><br/>
													<input type="button" class="btn2" value="Submit" onClick="pr()">
												  </form>
										  
												  <script>
													function pr() {
													  document.getElementById("result").innerHTML = document.getElementById('comment').value;
													}
												  </script>
												</div>
											</div>
									</div>
							</div>
						</td>
						</td>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbalf5.png">
								<h3 align="center"> Chamomile Flower </h3>
								<center><button class="button" type="button" id="myBtn14"> Details </button></center>
									<div id="myModal14" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
												<span class="close14">&times;</span><br>
												<h1 align="center"> FLOWERS HERBAL AREA </h1>
											</div>
											<div class="modal-body">
												<h1 class="title">CHAMOMILE FLOWER<img class="dphoto" src="assets/Herbal/herbalf5.png"> </h1>
												<p class="bodytext"> <b> DESCRIPTION </b></p>
												<p class="bodytext">The tiny daisy-like flowers of German chamomile have white collars circling raised, cone-shaped, yellow centers and are less than an inch wide, growing on long, thin, light green stems. Sometimes chamomile grows wild and close to the ground, but you can also find it bordering herb gardens. It can reach up to 3 feet high. German chamomile is native to Europe, north Africa, and some parts of Asia. It is closely related to Roman chamomile (Chamaemelum nobile), which, although less commonly used, has many of the same medicina</p>
												<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
												<p class="bodytext"> •	Stomach Problems <br>
													•	Cramps <br>
													•	Dermatitis <br>
													•	Minor Infections </p>
												<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
												<p class="bodytext"> Greece, Rome and ancient Egypt </p>
											</div>
											<div class="modal-footer">
												<form method="get">
													<br>
													Comment:<br> <span id="result"></span> <br> <br>
													Write a Comment:    <input type="text" name="comment" id="comment"><br/>
													<input type="button" class="btn2" value="Submit" onClick="pr()">
												  </form>
										  
												  <script>
													function pr() {
													  document.getElementById("result").innerHTML = document.getElementById('comment').value;
													}
												  </script>
												</div>
									</div>
								</div>
							</div>
						</td>
					</tr>
				</table>
				<br>
				<div class="container2">
					<h2 align="center"><font face="helvetica"><b> NUTS HERBAL AREA </b></h2>
				</div>
				<!--NUTS HERBAL-->
				<table class="herbal" align="center">
					<tr>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbal1.png">
								<h3 align="center"> Kola Nuts </h3>
								<center><button class="button" type="button" id="myBtn15"> Details </button></center>
									<div id="myModal15" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
												<span class="close15">&times;</span><br>
												<h1 align="center"> NUTS HERBAL AREA </h1>
											</div>
											<div class="modal-body">
												<h1 class="title">KOLA NUTS<img class="dphoto" src="assets/Herbal/herbal1.png"></h1>
												<p class="bodytext"> <b> DESCRIPTION </b></p>
												<p class="bodytext">Kola nitida is a tall tree, native to tropical Africa, with yellow flowers that ripen into walnut-sized, reddish-brown seeds. The seeds are referred to as kola nuts, which are bitter tasting, contain caffeine, and symbolize peace and friendship for many cultures. Cola nut is used for short-term relief of fatigue, depression, chronic fatigue syndrome (CFS), melancholy, lack of normal muscle tone (atony), exhaustion, dysentery, a type of diarrhea called atonic diarrhea, weight loss, and migraine headaches. In foods and beverages, cola nut is used as a flavoring ingredient.</p>
												<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
												<p class="bodytext"> •	Chronic Fatigue Syndrome (CFS) <br>
													•	Atonic Diarrhea <br>
													•	Migraine
													</p>
												<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
												<p class="bodytext"> West Africa </p>
											  </div>
											  <div class="modal-footer">
												<form method="get">
													<br>
													Comment:<br> <span id="result"></span> <br> <br>
													Write a Comment:    <input type="text" name="comment" id="comment"><br/>
													<input type="button" class="btn2" value="Submit" onClick="pr()">
												  </form>
										  
												  <script>
													function pr() {
													  document.getElementById("result").innerHTML = document.getElementById('comment').value;
													}
												  </script>
												</div>
										  </div>
									</div>
							</div>
						</td>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbal2.png">
								<h3 align="center"> Gall Nuts </h3>
								<center><button class="button" type="button" id="myBtn16"> Details </button></center>
									<div id="myModal16" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
											<span class="close16">&times;</span><br>
											<h1 align="center">NUTS HERBAL AREA </h1>
											</div>
											<div class="modal-body">
												<h1 class="title"> GALL NUTS <img class="dphoto" src="assets/Herbal/herbal2.png"></h1>
												<p class="bodytext"> <b> DESCRIPTION </b></p>
												<p class="bodytext">quercusfolii gall nuts are an alternative tannin source with potential use in herbal medicine and the pharmaceutical industry. ethnopharmacology; pharmacopoeias; antimicrobial; herbal drugs; polyphenols. Gallnuts are used in traditional medicine for the treatment of inflammatory diseases, dental caries, and wound healing. As they have strong astringent effects, they are also used for the treatment of hemorrhage, and intestinal disorders such as diarrhea, dysentery, and cholera.</p>
												<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
												<p class="bodytext"> •	Hemorrhoids <br>
													•	Diarrhea <br>
													•	Toothache </p>
												<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
												<p class="bodytext"> Southeast Asia </p>
											</div>
											<div class="modal-footer">
												<form method="get">
													<br>
													Comment:<br> <span id="result"></span> <br> <br>
													Write a Comment:    <input type="text" name="comment" id="comment"><br/>
													<input type="button" class="btn2" value="Submit" onClick="pr()">
												  </form>
										  
												  <script>
													function pr() {
													  document.getElementById("result").innerHTML = document.getElementById('comment').value;
													}
												  </script>
												</div>
											</div>
									</div>
							</div>
						</td>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbal3.png">
								<h3 align="center"> Black Walnuts </h3>
								<center><button class="button" type="button" id="myBtn17"> Details </button></center>
									<div id="myModal17" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
												<span class="close17">&times;</span><br>
												<h1 align="center"> NUTS HERBAL AREA</h1>
			
											</div>
											<div class="modal-body">
											<h1 class="title"> BLACK WALNUTS <img class="dphoto" src="assets/Herbal/herbal3.png"> </h1>
											<p class="bodytext"> <b> DESCRIPTION </b></p>
												<p class="bodytext">Black walnuts are high in omega-3 fatty acids and many vitamins and minerals. They may reduce heart disease risk and possess anticancer and antibacterial properties. Antioxidants and other plant compounds in black walnut hulls make them a popular herbal supplement — though research is still limited. Studies show that your body converts walnut oil's fatty acids into compounds that make up your skin. Scientists believe that getting enough omega-3s and omega-6s in your diet — like those in walnut oil — may promote better skin health, heal wounds faster, and treat eczema, acne, and even some skin cancers.</p>
												<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
												<p class="bodytext"> •	Heart Disease </p>
												<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
												<p class="bodytext"> Midwest and East-Central United States as well as in parts of Southern Canada </p>
											</div>
											<div class="modal-footer">
												<form method="get">
													<br>
													Comment:<br> <span id="result"></span> <br> <br>
													Write a Comment:    <input type="text" name="comment" id="comment"><br/>
													<input type="button" class="btn2" value="Submit" onClick="pr()">
												  </form>
										  
												  <script>
													function pr() {
													  document.getElementById("result").innerHTML = document.getElementById('comment').value;
													}
												  </script>
												</div>
											</div>
									</div>
							</div>
						</td>
						</td>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbal4.png">
								<h3 align="center"> Triphala Amalaki </h3>
								<center><button class="button" type="button" id="myBtn18"> Details </button></center>
									<div id="myModal18" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
											<span class="close18">&times;</span><br>
											<h1 align="center"> NUTS HERBAL AREA </h1>
											</div>
											<div class="modal-body">
												<h1 class="title">TRIPHALA AMALAKI <img class="dphoto" src="assets/Herbal/herbal4.png"></h1>
												<p class="bodytext"> <b> DESCRIPTION </b></p>
												<p class="bodytext">Triphala is not a single fruit, plant, or herb, but rather an herbal formulation—one of the most popular and commonly used formulas in Ayurveda! Literally meaning “three fruits,” triphala (also known as "triphala churna") is a traditional Ayurvedic blend consisting of three simple ingredients, each one a beneficial fruit native to the Indian subcontinent: amalaki (Emblica officinalis), bibhitaki (Terminalia bellirica), and haritaki (Terminalia chebula).Triphala is one of the most well-known and commonly used formulas in Ayurveda. With a unique ability to detoxify and rejuvenate the body, along with a host of other benefits, this traditional herbal formula is one of the true staples of an Ayurvedic lifestyle.</p>
												<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
												<p class="bodytext"> •	Reduce Inflammation <br>
													•	Protect against some cancer <br>
													•	Dental Disease <br>
													•	Cavities <br>
													 </p>
												<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
												<p class="bodytext"> India </p>
											</div>
											<div class="modal-footer">
												<form method="get">
													<br>
													Comment:<br> <span id="result"></span> <br> <br>
													Write a Comment:    <input type="text" name="comment" id="comment"><br/>
													<input type="button" class="btn2" value="Submit" onClick="pr()">
												  </form>
										  
												  <script>
													function pr() {
													  document.getElementById("result").innerHTML = document.getElementById('comment').value;
													}
												  </script>
											
											</div>
											
										</div>
												
										  </div>
									</div>
							</div>
						</td>
						</td>
						<td class="space">
							<div class="card">
								<img class="imgherb" src="assets/Herbal/herbal5.png">
								<h3 align="center"> Guilandina bonduc </h3>
								<center><button class="button" type="button" id="myBtn19"> Details </button></center>
									<div id="myModal19" class="modal">
										  <div class="modal-content">
											<div class="modal-header">
												<span class="close19">&times;</span><br>
											<h1 align="center"> NUTS HERBAL AREA </h1>
											</div>
											<div class="modal-body">
												<h1 class="title"> GUILANDINA BONDUC <img class="dphoto" src="assets/Herbal/herbal5.png"></h1>
												<p class="bodytext"> <b> DESCRIPTION </b></p>
												<p class="bodytext">Guilandina bonduc Linn. (Fabaceae), a prickly shrub that grows abundantly in tropical and subtropical regions of Southeast Asia, possesses an extensive medicinal value. A decoction of the leaves is prescribed as an antidepressant for mentally disturbed persons. In large doses the plant is believed to be poisonous. A decoction of the leaves is used to treat sinusitis, and of the roots for fatigue. Its leaves and bark are considered emmenagogue, febrifuge and anthelmintic.</p>
												<p class="bodytext"> <b> TREATMENT TO WHAT ILLNESS</b></p>
												<p class="bodytext"> •	Sinusitis <br>
													•	Fatigue </p>
												<p class="bodytext"> <b> LOCATION TO BE FOUND</b></p>
												<p class="bodytext"> Africa </p>
											</div>
											<div class="modal-footer">
												<form method="get">
													<br>
													Comment:<br> <span id="result"></span> <br> <br>
													Write a Comment:    <input type="text" name="comment" id="comment"><br/>
													<input type="button" class="btn2" value="Submit" onClick="pr()">
												  </form>
										  
												  <script>
													function pr() {
													  document.getElementById("result").innerHTML = document.getElementById('comment').value;
													}
												  </script>
												</div>
											</div>
									</div>
							</div>
						</td>
					</tr>
				</table>
			
				<footer>
					<h5>© 2023 Leaves of life</h5>
				</footer>
		
			
					
				<script>
					/*TREE JS*/
					/* Birch Tree */
					var modal = document.getElementById("myModal");
					var btn = document.getElementById("myBtn");
					var span = document.getElementsByClassName("close")[0];
					btn.onclick = function() {
						modal.style.display = "block";
					}
					span.onclick = function() {
						modal.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal) {
						modal.style.display = "none";
						}
					}
					/* Oak Tree */
					var modal1 = document.getElementById("myModal1");
					var btn1 = document.getElementById("myBtn1");
					var span = document.getElementsByClassName("close1")[0];
					btn1.onclick = function() {
						modal1.style.display = "block";
					}
					span.onclick = function() {
						modal1.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal1) {
						modal1.style.display = "none";
						}
					}
					/* Kamala Tree */
					var modal2 = document.getElementById("myModal2");
					var btn2 = document.getElementById("myBtn2");
					var span = document.getElementsByClassName("close2")[0];
					btn2.onclick = function() {
						modal2.style.display = "block";
					}
					span.onclick = function() {
						modal2.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal2) {
						modal2.style.display = "none";
						}
					}
					/* Acacia Tree */
					var modal3 = document.getElementById("myModal3");
					var btn3 = document.getElementById("myBtn3");
					var span = document.getElementsByClassName("close3")[0];
					btn3.onclick = function() {
						modal3.style.display = "block";
					}
					span.onclick = function() {
						modal3.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal3) {
						modal3.style.display = "none";
						}
					}
					/* Tulip Tree */
					var modal4 = document.getElementById("myModal4");
					var btn4 = document.getElementById("myBtn4");
					var span = document.getElementsByClassName("close4")[0];
					btn4.onclick = function() {
						modal4.style.display = "block";
					}
					span.onclick = function() {
						modal4.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal4) {
						modal4.style.display = "none";
						}
					}
					/*PLANT JS*/
					/* Aloe Vera Plant */
					var modal5 = document.getElementById("myModal5");
					var btn5 = document.getElementById("myBtn5");
					var span = document.getElementsByClassName("close5")[0];
					btn5.onclick = function() {
						modal5.style.display = "block";
					}
					span.onclick = function() {
						modal5.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal5) {
						modal5.style.display = "none";
						}
					}
					/* Peppermint Plant */
					var modal6 = document.getElementById("myModal6");
					var btn6 = document.getElementById("myBtn6");
					var span = document.getElementsByClassName("close6")[0];
					btn6.onclick = function() {
						modal6.style.display = "block";
					}
					span.onclick = function() {
						modal6.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal6) {
						modal6.style.display = "none";
						}
					}
					/* Gotu Kola Plant */
					var modal7 = document.getElementById("myModal7");
					var btn7 = document.getElementById("myBtn7");
					var span = document.getElementsByClassName("close7")[0];
					btn7.onclick = function() {
						modal7.style.display = "block";
					}
					span.onclick = function() {
						modal7.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal7) {
						modal7.style.display = "none";
						}
					}
					/* Lemon Balm Plant */
					var modal8 = document.getElementById("myModal8");
					var btn8 = document.getElementById("myBtn8");
					var span = document.getElementsByClassName("close8")[0];
					btn8.onclick = function() {
						modal8.style.display = "block";
					}
					span.onclick = function() {
						modal8.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal8) {
						modal8.style.display = "none";
						}
					}
					/* Lagundi Plant */
					var modal9 = document.getElementById("myModal9");
					var btn9 = document.getElementById("myBtn9");
					var span = document.getElementsByClassName("close9")[0];
					btn9.onclick = function() {
						modal9.style.display = "block";
					}
					span.onclick = function() {
						modal9.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal9) {
						modal9.style.display = "none";
						}
					}
					/*FLOWER JS*/
					/* Thyme Flower */
					var modal10 = document.getElementById("myModal10");
					var btn10 = document.getElementById("myBtn10");
					var span = document.getElementsByClassName("close10")[0];
					btn10.onclick = function() {
						modal10.style.display = "block";
					}
					span.onclick = function() {
						modal10.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal10) {
						modal10.style.display = "none";
						}
					}
					/* Lavender Flower */
					var modal11 = document.getElementById("myModal11");
					var btn11 = document.getElementById("myBtn11");
					var span = document.getElementsByClassName("close11")[0];
					btn11.onclick = function() {
						modal11.style.display = "block";
					}
					span.onclick = function() {
						modal11.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal11) {
						modal11.style.display = "none";
						}
					}
					/* Calendula Flower */
					var modal12 = document.getElementById("myModal12");
					var btn12 = document.getElementById("myBtn12");
					var span = document.getElementsByClassName("close12")[0];
					btn12.onclick = function() {
						modal12.style.display = "block";
					}
					span.onclick = function() {
						modal12.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal12) {
						modal12.style.display = "none";
						}
					}
					/* Rose Flower */
					var modal13 = document.getElementById("myModal13");
					var btn13 = document.getElementById("myBtn13");
					var span = document.getElementsByClassName("close13")[0];
					btn13.onclick = function() {
						modal13.style.display = "block";
					}
					span.onclick = function() {
						modal13.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal13) {
						modal13.style.display = "none";
						}
					}
					/* Chamomile Flower */
					var modal14 = document.getElementById("myModal14");
					var btn14 = document.getElementById("myBtn14");
					var span = document.getElementsByClassName("close14")[0];
					btn14.onclick = function() {
						modal14.style.display = "block";
					}
					span.onclick = function() {
						modal14.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal14) {
						modal14.style.display = "none";
						}
					}
					
					/*NUTS JS*/
					/* Kola Nuts */
					var modal15 = document.getElementById("myModal15");
					var btn15 = document.getElementById("myBtn15");
					var span = document.getElementsByClassName("close15")[0];
					btn15.onclick = function() {
						modal15.style.display = "block";
					}
					span.onclick = function() {
						modal15.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal15) {
						modal15.style.display = "none";
						}
					}
					/* Gall Nuts */
					var modal16 = document.getElementById("myModal16");
					var btn16 = document.getElementById("myBtn16");
					var span = document.getElementsByClassName("close16")[0];
					btn16.onclick = function() {
						modal16.style.display = "block";
					}
					span.onclick = function() {
						modal16.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal16) {
						modal16.style.display = "none";
						}
					}
					/* Black Walnuts */
					var modal17 = document.getElementById("myModal17");
					var btn17 = document.getElementById("myBtn17");
					var span = document.getElementsByClassName("close17")[0];
					btn17.onclick = function() {
						modal17.style.display = "block";
					}
					span.onclick = function() {
						modal17.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal17) {
						modal17.style.display = "none";
						}
					}
					/* Triphala Amalaki */
					var modal18 = document.getElementById("myModal18");
					var btn18 = document.getElementById("myBtn18");
					var span = document.getElementsByClassName("close18")[0];
					btn18.onclick = function() {
						modal18.style.display = "block";
					}
					span.onclick = function() {
						modal18.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal18) {
						modal18.style.display = "none";
						}
					}
					/* Guilandina bonduc */
					var modal19 = document.getElementById("myModal19");
					var btn19 = document.getElementById("myBtn19");
					var span = document.getElementsByClassName("close19")[0];
					btn19.onclick = function() {
						modal19.style.display = "block";
					}
					span.onclick = function() {
						modal19.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal19) {
						modal19.style.display = "none";
						}
					}
				</script>
				
			</div>

		
			
		</body>
</html>
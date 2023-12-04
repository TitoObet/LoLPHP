<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="assets/x-icon" href="assets/icon.png">
    <link rel="stylesheet" href="/New/life.css?v=<?php echo time(); ?>">
    <title> Match Quiz </title>
        <style>
            footer {
                text-align: left;
                padding: 3px;
                background-color: #393A3A;
                color: white;
            }

        </style>
</head>
    <body>
        <div class = "container1">
            <center><table class = "tbl1">
                <tr>
                    <td> <img class="img-icon" src="assets/icon.png"> </td>
                    <td class="title"> LEAVES OF LIFE </td>
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
                            <button class = "button1" type = "submit"> PLANT PROFILE </button>
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
            <br>
            <center><table class = "tbl3">
                <tr>
                    <td class = "header"> MATCH QUIZ </td>
                </tr>
            </table></center>
        </div>
        <br><br>
        <div class="Qcontainer1">
        <br><br>
        <center><table class="Qtbl1">
          <?php 
            $preference = $_POST['preference'];
            $plant = $_POST['plant'];
            $illness = $_POST['illness'];

            if ($preference == "Sweet" and $plant == "Flower" and $illness == "Mental Disorder") 
            {
               echo 
               "<div class = 'container2'>
                    <center><img class='picture' width='600px' height='250px' src='assets/Herbal/herbalf2.png'></center>
                    <center><h1><font color='white'> LAVENDER FLOWER </h1></center>
                    <p> Lavender is native to the mountainous zones of the Mediterranean where it grows in sunny, stony habitats. Lavender is a heavily branched short shrub that grows to a height of roughly 60 centimeters (about 24 inches). Its broad rootstock bears woody branches with upright, rod like, leafy, green shoots. A silvery down covers the gray green narrow leaves, which are oblong and tapered, attached directly at the base, and curled spirally. The oil in lavender's small, blue violet flowers gives the herb its fragrant scent. The flowers are arranged in spirals of 6 to 10 blossoms, forming interrupted spikes above the foliage. </font></p>
                </div>";
            }
            else if ($preference == "Sour" and $plant == "Tree" and $illness == "Microbial") 
            {
               echo 
               "<div class = 'container2'>
                    <center><img class='picture' width='600px' height='250px' src='assets/Herbal/herbalt5.png'></center>
                    <center><h1><font color='white'> TULIP TREE </h1></center>
                    <p> One of the tallest and most beautiful eastern hardwoods, with a long, straight trunk, a narrow crown that spreads with age, and large showy flowers resembling tulips or lilies. A tall, straight, deciduous tree, up to150 ft. tall (sometimes taller), tulip tree has a medium to narrow crown and distinctive, star-shaped foliage. The leaves are waxy and smooth, and dependably turn bright gold in fall. Showy, yellow-orange, tulip-like flowers are often missed because they are up 50 ft. or higher in the tops of trees. Cone-shaped seedheads remain after leaves have fallen.
                    </p>
                </div>";
            }
            else if ($preference == "Bitter" and $plant == "Plant" and $illness == "Viral Infection") 
            {
               echo 
               "<div class = 'container2'>
                    <center><img class='picture' width='600px' height='250px' src='assets/Herbal/herbalp3.png'></center>
                    <center><h1><font color='white'> GOTU KOLA PLANT </h1></center>
                    <p> Gotu kola, or Centella asiatica, is a plant traditionally used in Chinese and Indonesian medicine. Known as the “herb of longevity,” this plant is indigenous to the wetlands of Southeast Asia, where it’s consumed as a juice, tea, or supplement. Practitioners of alternative medicine use gotu kola for its anti-inflammatory benefits, as well as to promote overall mental health. While some benefits of the herb may need further study, gotu kola may help improve your health and well-being.
                    </p>
                </div>";
            }
            else if ($preference == "Salty" and $plant == "Plant" and $illness == "Health Difficulties") 
            {
               echo 
               "<div class = 'container2'>
                    <center><img class='picture' width='600px' height='250px' src='assets/Herbal/herbalp2.png'></center>
                    <center><h1><font color='white'> PEPPERMINT PLANT </h1></center>
                    <p> Peppermint is a common flavoring agent in foods and beverages, and peppermint oil is used as a fragrance in soaps and cosmetics. Peppermint has been used for health purposes for several thousand years. Records from ancient Greece, Rome, and Egypt mention that it was used for digestive disorders and other conditions. Peppermint has a strong sweetish odour and a warm pungent taste with a cooling aftertaste. The leaves are typically used fresh as a culinary herb, and the flowers are dried and used to flavour candy, desserts, beverages, salads, and other foods. Its essential oil is also widely used as a flavouring. </p>
                </div>";
            }
            else if ($preference == "Pungent" and $plant == "Nuts" and $illness == "Noncommunicable Diseases") 
            {
               echo 
               "<div class = 'container2'>
                    <center><img class='picture' width='600px' height='250px' src='assets/Herbal/herbal4.png'></center>
                    <center><h1><font color='white'> TRIPHALA AMALAKI NUTS </h1></center>
                    <p> Black walnuts are high in omega-3 fatty acids and many vitamins and minerals. They may reduce heart disease risk and possess anticancer and antibacterial properties. Antioxidants and other plant compounds in black walnut hulls make them a popular herbal supplement — though research is still limited. Studies show that your body converts walnut oil's fatty acids into compounds that make up your skin. Scientists believe that getting enough omega-3s and omega-6s in your diet — like those in walnut oil — may promote better skin health, heal wounds faster, and treat eczema, acne, and even some skin cancers. </p>
                </div>";
            }
            else {
                echo
                "<div class = 'container2'>
                <center><img class='picture' width='600px' height='250px' src='assets/Herbal/herbal4.png'></center>
                <center><h1><font color='white'> TRIPHALA AMALAKI NUTS </h1></center>
                <p> Black walnuts are high in omega-3 fatty acids and many vitamins and minerals. They may reduce heart disease risk and possess anticancer and antibacterial properties. Antioxidants and other plant compounds in black walnut hulls make them a popular herbal supplement — though research is still limited. Studies show that your body converts walnut oil's fatty acids into compounds that make up your skin. Scientists believe that getting enough omega-3s and omega-6s in your diet — like those in walnut oil — may promote better skin health, heal wounds faster, and treat eczema, acne, and even some skin cancers. </p>
                </div>";
            }
          ?>
            


            </table></center>
            <br><br>
        </div>
        <br><br>
        <footer>
			<h5>© 2023 Leaves of life</h5>
		</footer>
    </body>
</html>
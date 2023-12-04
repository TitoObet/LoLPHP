<html>
<head>
		<title> LEAVES OF LIFE </title>
		<link rel="icon" type="assets/x-icon" href="assets/icon.png">
        <link rel="stylesheet" href="/New/life.css?v=<?php echo time(); ?>" type="text/css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			.Htitle {
				font-weight: bold;
				font-family: 'Times New Roman', Times, serif;
				color: darkgreen;
				margin-right: 20px;
				font-size: 50px;
			}
		</style>
		
    </head>
<body>

	<div class = "container1">
            <center><table class = "tbl1">
                <tr>
                    <td> <img class="img-icon" src="assets/icon.png"> </td>
                    <td class="Htitle"><font face="'Times New Roman', Times, serif"> LEAVES OF LIFE </font></td>
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
                            <button class = "button1" id="about" type = "submit"> PROFILE </button>
                        </form>
                    </td>
                </tr>
            </table></center>
            <br>
            <center><table class = "tbl3">
                <tr>
                    <td class = "header"> USER PROFILE </td>
                </tr>
            </table></center>
        </div>
        <br>
        <div class="Pcontainer2">
            <center><table>
                <tr>
                    <td > <img src="assets/prof.png" width="100px" height="100px"> </td>
                    <td colspan="7" class="Pspacing"> Jaysonnie <i class="fa fa-edit"></i></td>
                    <td class="spacelogout"colspan="2"> 
                        <a class="logout" href="index.php"> <i class="fa fa-sign-out"></i> </a>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" class="fav"> FAVORITES </td>
                </tr>

                <tr>
                    <td></td>
                    <td> <img src="assets/Herbal/f1.png" width="125px" height="125px"> </td>
                    <td> <img src="assets/Herbal/p1.png" width="125px" height="125px"> </td>
                    <td> <img src="assets/Herbal/n1.png" width="125px" height="125px"> </td>
                    <td> <img src="assets/Herbal/p3.png" width="125px" height="125px"> </td>
                    <td> <img src="assets/Herbal/t1.png" width="125px" height="125px"> </td>
                    <td> <img src="assets/Herbal/n4.png" width="125px" height="125px"> </td>
                    <td> <img src="assets/Herbal/p5.png" width="125px" height="125px"> </td>
                    <td> <img src="assets/Herbal/t2.png" width="125px" height="125px"> </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2" class="fav"> RECENTLY VIEW </td>
                </tr>

                <tr>
                    <td></td>
                    <td> <img src="assets/Herbal/t5.png" width="125px" height="125px"> </td>
                    <td> <img src="assets/Herbal/f5.png" width="125px" height="125px"> </td>
                    <td> <img src="assets/Herbal/f3.png" width="125px" height="125px"> </td>
                    <td> <img src="assets/Herbal/n2.png" width="125px" height="125px"> </td>
                    <td> <img src="assets/Herbal/p2.png" width="125px" height="125px"> </td>
                </tr>
            </table></center>
        </div>
</body>
</html>
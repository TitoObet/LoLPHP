<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="assets/x-icon" href="assets/icon.png">
    <link rel="stylesheet" href="/New/life.css?v=<?php echo time(); ?>">
    <title> Match Quiz </title>
        <style>
            footer {
                text-align: left;
                background-color: #393A3A;
                color: white;
                bottom: 0;
                left: 0;
                position: absolute;
                width: 100%;
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
            <form action="search.php" method="post">
                <tr>
                    <td class="name"> PREFERENCE: </td>
                    <td>&nbsp; &nbsp; &nbsp;</td>
                    <td>
                        <select class="selection" name="preference" placeholder = "preference">
                            <option>Sweet</option>
                            <option>Salty</option>
                            <option>Bitter</option>
                            <option>Sour</option>
                            <option>Pungent</option>
                        </select>
                    </td>
                </tr>
                <tr><td>&nbsp;<td></tr>
                <tr>
                    <td class="name"> TYPE OF PLANT: </td>
                    <td>&nbsp; &nbsp; &nbsp;</td>
                    <td>
                        <select class="selection" name="plant" placeholder = "plant">
                            <option> Plant </option>
                            <option> Tree </option>
                            <option> Nuts </option>
                            <option> Flower </option>
                        </select>
                    </td>
                </tr>
                <tr><td>&nbsp;<td></tr>
                <tr>
                    <td class="name"> ILLNES YOU HAVE: </td>
                    <td>&nbsp; &nbsp; &nbsp;</td>
                    <td>
                        <select class="selection" name="illness">
                            <option> Microbial </option>
                            <option> Viral Infection </option>
                            <option> Health Difficulties </option>
                            <option> Mental Disorder </option>
                            <option> Noncommunicable Diseases </option>
                        </select>
                    </td>
                </tr>
                <tr><td>&nbsp;<td></tr>
                <tr>
                    <td colspan="3" align="center"> <input class="Qbutton" type="submit" ="Search">  </td>
                </tr>
        </form>
            </table></center>
            <br><br>
        </div>

        <footer>
			<h5>© 2023 Leaves of life</h5>
		</footer>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

    <title>EncryptPic</title>

<link rel="stylesheet" href="stylesheetIndex.css">
</head>
 
<body>
<header>
    <div class="row">
        <div class="logo">
            <a href="index.php">
            <img src="bilder/logo.png" alt="EncryptPic logo">
        </div>

        <div class="nav">
        	<ul class="navbaren">
            	<li><a href="index.php#problem">The Security Issue</a></li>
            	<li><a href="index.php#us">About Us</a></li>
        	</ul>
        </div>
    </div>

    <div class="hehe">
        <h1>EncryptPic</h1>
        <p>Have you ever been worried that your newly taken photographs gets stored some place you feel like you have no control over?
        <br><br>With EncryptPic you'll be given a complete oversight over your files' security and location, so you wont have to worry about unwanted eyes taking a peek at your most sensitive material.
        </p>

        <div class="store">
            <a href="https://itunes.apple.com/no/genre/ios/id36?mt=8"><img src="bilder/as.png"></a>
            <a href="https://play.google.com/store"><img src="bilder/ps.png"></a>
        </div>
    </div>
</header>

    
<div class="tab" id="problem">
    <button class="tablinks" onclick="openTab(event, 'theProblem')" >The Problem</button>
    <button class="tablinks" onclick="openTab(event, 'theSolution')"<a href="#solution">The Solution</a></button>
    <button class="tablinks" onclick="openTab(event, 'Conclusion')">Conclusion</button>
</div>

<div id="theProblem" class="contentTab">
    <h3> The Problem</h3>

    <div id="boxIntro">
        <p>In today's society there is a lot of talk about files and sensitive material being hacked, but not enough on how to prevent it. 
        This has caused a technological ignorance in the average person on how filestoring and security works. 
        The average person uses a fair amount of technology in their daily lives, and they put their trust in their products' basic security measures.</p>
    </div>

    <div class="bilderTab">
        <img src="bilder/leak.jpg">
    </div>  
</div>

<div id="theSolution" class="contentTab">
    <h3>The Solution</h3>

    <div id="boxIntro">
        <p id="solution">Our solution provides a safeguard for your files by encrypting them instantly. By encrypting your files, we make it so that they'll only be available to your eyes only, through a password of your choice.</p> 
    </div>

    <div class="bilderTab"> 
    	<img src="bilder/bilde.png">
    </div>
</div>

<div id="Conclusion" class="contentTab">
    <h3>Conclusion</h3>
    
    <div id="boxIntro">
        <p>Conclusion...</p>
    </div>
</div> 

<footer>
<div class="footer-main" id="us">
    <div class="fot">
        <h2>About us</h2>
        <p>Made by s326293, s326279 and s326302.</p>
    </div>  
</div></div>
</footer>

<script> 
    function openTab(evt, navn) {
    // variabler
    var i, contentTab, tablinks;

    // henter alle elementer med #contentTab
    contentTab = document.getElementsByClassName("contentTab");
    for (i = 0; i < contentTab.length; i++) {
        contentTab[i].style.display = "none";
    }

    // henter alle elementer med clas tablinks og fjerner active
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // viser tabben man er på, og legger active class på tabben man er på
    document.getElementById(navn).style.display = "block";
    evt.currentTarget.className += " active";
    scrollTo(0,500);
    } 
</script>        
</div>  
</body>
</html>
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
        The average person uses a fair amount of technology in their daily lives, and they put their trust in their products' basic security measures.
        With the increased amount we rely and depend on technology devices, we have made ourselves more vulnerable to attacks.
        Many people leaves the security issue solely with their devices' security, but in most cases that wont be enough. A lack of actively being aware of your cyber-security is a common theme among most people, because they believe they are safe.
        <br><br>
        The average person and how they dealt with this security-issue was our main focus regarding this problem. Over the years we've seen countless young people (15-30) getting their personal photos and files leaked by hackers.
        We believe this is simply due to a lack of awareness regarding your security. People store their photos in the cloud without a second thought and believe they are safely stored. 
        
        </p>
    </div>

    <div class="bilderTab">
        <img src="bilder/leak.jpg">
    </div>  
</div>

<div id="theSolution" class="contentTab">
    <h3>The Solution</h3>

    <div id="boxIntro">
        <p id="solution">Our goal is through our app to slowly but surely introduce people to the idea of securing and encrypting your files. By inserting an option to encrypt photos on the spot in the camera app, users will gain a familiarity to the process of encryption.
        We believe that the majority of people choose to live in a technological ignorance, rather than try to learn about encryption, a concept they believe is far too advanced and technological.</p> 
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
    scrollTo(0,880);
    } 
</script>        
</div>  
</body>
</html>
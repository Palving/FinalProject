<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

	<title>[EncryptPic]</title>

<link rel="stylesheet" href="stylesheetIndex.css">
</head>
 
<body>

    <ul class="meny">
        <li><a href="side">Using the app</a></li>
        <li><a href="index.php"> <img src="bilder/lock.png" width="80px" height="80px" alt="An image of the logo of EncryptPic."/></a></li>
        <li><a href="side">Download</a></li>  
    </ul>
        
    <div class="tittel">
        <h1><a id="intro"> EncryptPic</a></h1>
        
    </div>
             
    <div id="boxIntro">
        <p> Have you ever been worried that your newly taken photographs gets stored some place you feel like you have no control over?
        <br><br>With EncryptPic you'll be given a complete oversight over your files' security and location, so you wont have to worry about unwanted eyes taking a peek at your most sensitive material.
        </p>
    </div>
     <div id="boxIntroBilde">
        <img src="bilder/bilde.png" id="bilde" width="540px" height="392px" alt="An image of EncryptPic integrated into the camera app."/> 
   	</div>
    
    
    
    
<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'theProblem')" >The Problem</button>
  <button class="tablinks"  onclick="openTab(event, 'theSolution')">The Solution</a></button>
  <button class="tablinks"  onclick="openTab(event, 'Conclusion')">Conclusion</button>
</div>

<div id="theProblem" class="contentTab">
  <h3> The Problem</h3>
  <div id="boxIntro">
  <p>In today's society there is a lot of talk about files and sensitive material being hacked, but not enough on how to prevent it. 
            This has caused a technological ignorance in the average person on how filestoring and security works. 
            The average person uses a fair amount of technology in their daily lives, and they put their trust in their products' basic security measures.</p>
  </div>
</div>

<div id="theSolution" class="contentTab">
  <h3>The Solution</h3>
  <div id="boxIntro">
  <p id="solution">Our solution provides a safeguard for your files by encrypting them instantly. By encrypting your files, we make it so that they'll only be available to your eyes only, through a password of your choice.</p>
</div>
</div>

<div id="Conclusion" class="contentTab">
  <h3>Conclusion</h3>
  <div id="boxIntro">
  <p>Conclusion...</p>
</div> 
    
  <?php
  
  
  ?>
  
  
  
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
    
    // scroller til posisjonen
    scrollTo(0,1970);
    
} 
    </script>
        
   
   
</body>
</html>
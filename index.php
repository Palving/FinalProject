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
    <button class="tablinks" onclick="openTab(event, 'theProblem')" >The Security Issue</button>
    <button class="tablinks" onclick="openTab(event, 'theSolution')"<a href="#solution"></a>Our Approach to the Issue</button>
   
</div>

<div id="theProblem" class="contentTab">
    <h3> The Problem</h3>

    <div id="boxIntro">
        <p>With the increase of technology in our lives, the challenges increases as well.  
            In today's society there is a lot of talk about files being hacked and leaked, yet there is not enough talk about how to prevent it. 
            Most people dont ever think they'll be a victim of being hacked, yet these people get their devices compromised every day.
            With the lack of indepth coverage and educating on securing your personal and sensitive files, there has been created a technological ignorance among the majority of people.
            These people who does not take that extra step for security,  rely solely on their devices' default security measure, and believe thats enough. And it is, in most cases.  
            <br><br>
            Though there are cases it is not enough. Over the years, the amount of leaked photographs and files have grown heavily, and most of these could have been prevented with the correct know-how.
            Basically the problem boils down to a lack of information spread on security. 
            <br><br>
        There exists simple methods to ensure your files' security, though there is a lot of people with a preconceived notion that the process is far too advanced and complicated. 
        Since most devices doesn't have easily accessible functions for providing additional security, most people go on without them. The lack of these easily accessible security functions is where we provide our solution, through encryption.

        
        </p>
        <a class="toTop" onclick="toTop()" href="javascript:void(null);"><br>To the top</a>
    </div>

    <div class="bilderTab">
        <img src="bilder/leak.jpg">
        
    </div>  
</div>

<div id="theSolution" class="contentTab">
    <h3>The Solution</h3>

    <div id="boxIntro">
        <p id="solution"> Our goal is through our app to slowly but surely introduce people to the idea of securing and encrypting your files.
            By inserting an option to encrypt photos on the spot in the camera app, users will gain a familiarity to the process of encryption.
            We believe the demand for additional security will keep on growing along technological develepment, and by teaching people about encryption and other  security options, hopefully it'll prevent attacks. 
            <br><br>
What our app does is it gives the user more security-options when dealing with files and photographs.  We aim to make it as easily accessible as possible, by using the devices' interface and inserting options to encrypt wherever needed.
Although our app is mainly focused on providing security to photograps, we aim to cover all aspects of cyber-security. With everything from intrusive pop-ups, unsafe links and general malware. 
When installed you'll be given a list of options which you can choose for security. For example, upon installation, you can go with the default option which is to encrypt every photograph and saved files instantly. You'll chose the encryption-type and password, and chose where to store them.
Examples of additional options within the app would be to encrypt every file you upload to the cloud or things like ad/pop-up blockers. 
<br><br>
People should not fear for their security on their devices, though a healthy skepticism when dealing with technology is always good.
Our goal is not to limit your user experience, but rather make your user experience safer. By using our app we hope most people will start thinking about general security regarding their choices on the internet, and become more aware of possible threats roaming the internet. 


        <br>
        
       </p> 
       <a class="toTop" onclick="toTop()" href="javascript:void(null);"><br>To the top</a>
    </div>

    <div class="bilderTab"> 
    	<img src="bilder/bilde.png">
       <img id="encrypt" width="540px" height="392px" src="bilder/encrypt.png" alt=""/>
    </div>
     
</div>


    
   
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
   function toTop()
   {
      window.scroll({ top: 800, left: 0, behavior: 'smooth' }); 
   }
</script>


<script> 
    // tabs
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
    
    window.scroll({ top: 800, left: 0, behavior: 'smooth' });

   
    } 
</script>        
</div>  
</body>
</html>
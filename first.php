<?php require_once 'connection.php' ?>

<html lang="en">
  <head>
    <title>ctf website</title>
    <link rel="stylesheet" href="css/first.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
     <body>
      
    <nav class="navbar">
      <div class="navbar-container container">
              <ul class="menu-items">
            <li class="dropdown">
              <a href="#">Learn</a>
              <div class="dropdown-content">
                <a href="try.html">Course</a>
                <a href="course.php">Challenges</a>
                <a href="scoreboard.php">Scoreboard</a>
                <a href="chlg.php">ADD challenges</a>
            </div>
        </li> 
        <li class="dropdown">
          <a href="#">Team</a>
          <div class="dropdown-content">
              <a href="#">Create Team</a>
              <a href="#">Get Team Members</a>
          </div>
      </li>
      <li class="dropdown">
        <a href="#">Register</a>
        <div class="dropdown-content">
          <a href="#">live Event</a>
            <a href="#">Hackathons</a>
        </div>
    </li>
              <li><a href="contactus.php">Contact</a></li>
              <?php
              if(!isset($_SESSION['username'])){ ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Signup</a></li>
              <?php } else { ?>
                <li><a href="logout.php">logout</a></li>
                <?php } ?>
                <a href="chatbot.html" style="font-size:20px";>Chatbot</a>
          </ul> 
         
          <h1 class="logo"><a href="first.html">CTF</a></h1>
      
      
  </nav>
    <section class="showcase-area" id="showcase">
      <div class="container">
        <div class="content">
          <div class="text">
            <h1>A Fun Way to learn cybersecurity</h1>
            <p>Capture The Flag (CTF) websites host cybersecurity competitions where participants solve challenges to find hidden "flags" within computer systems. These challenges range from cryptography and forensics to web exploitation and reverse engineering, helping users enhance their security skills in a gamified environment.</p>
            <div class="buttons">
            <!-- <button class="btn1" onclick="location.href='login.php'">Start Now</button> -->
            <a class="btn anch234" href="login.php">Start Now</a>
            <a class="btn anch234" href="contactus.php">Contact Us</a>
            <!-- <button class="btn" onclick="location.href='contactus.html'">Contact Us</button> -->
            </div>
          </div>
          <div class="image">
            <img src="images/ll.png" alt="CTF Image">
          </div>
        </div>
      </div>
     </section>   
    <section class="next-page">
      <div class="learncontainer">
        <div class="head">
        <h1>Learn and practice</h1>
      </div>
        <div class="learn">
      <p class="para">Delve into the realms of cybersecurity through carefully structured pathways, where you'll immerse yourself in real-world environments to fortify your skills. Navigate through guided, objective-based tasks and challenges to solidify your understanding and expertise, making learning both enjoyable and effective.</p>
      </div>
    </div>
    <!-- <div class="catcontainer"> 
    </div> -->
    <br>
    <div class="istcat">
     <img src="images/0e0780cec5095b930a6e5043d683ec03.jpg" alt="" class="leftimg">
     <div class="lefth1">
     <h1>Web Exploitation</h1>
     <p>Web exploitation involves maliciously exploiting vulnerabilities in web applications or servers. Common tactics include injection attacks like SQL injection and Cross-Site Scripting (XSS), exploiting misconfigurations in server software, and session hijacking. Attackers aim to steal data, gain unauthorized access, or disrupt services. Mitigation involves employing security measures such as regular assessments, secure coding practices, software updates, intrusion detection, and user education. Web application firewalls and penetration testing are also crucial for identifying and addressing vulnerabilities.                                                                                                                                                                                     </p>
    </div>
    </div><br>
    <div class="secondcat">
      <img src="images/4bedb1a7e0ddf9c5e27435b5fe165307.jpg" alt="" class="rightimg">
      <div class="righth1">
      <h1>Cryptography</h1>
      <p>Cryptography is the science of secure communication, encompassing<br> techniques to encode  and decode information to protect <br>its confidentiality, integrity, and authenticity. It plays <br>a crucial role in modern society, underpinning secure communication<br> channels, digital transactions, and data protection. Through <br>algorithms and protocols, cryptography ensures that sensitive information <br>remains unreadable to unauthorized parties, safeguarding privacy<br> and preventing unauthorized access. </p>
    </div> 
    </div><br>
     <div class="thridcat">
      <img src="images/8a2159bd54f127bfa929ebfcd3cae44c.jpg" alt="" class="leftimg">
      <div class="lefth1">
      <h1>Binary Exploitation </h1>
      <p>Binary exploitation is a branch of cybersecurity focused on exploiting<br> vulnerabilities in compiled software binaries. These <br>vulnerabilities can range from buffer overflows to format<br> string vulnerabilities, allowing attackers to gain unauthorized access,<br> execute arbitrary code, or manipulate the program's behavior. <br>This field requires a deep understanding of computer architecture, assembly<br> language, and binary analysis techniques. </p>
    </div> 
    </div><br>

     <div class="fourthcat">
      <img src="images/def55af21e80987d7474dfd367d31e7c.jpg" alt="" class="rightimg">
      <div class="righth1">
      <h1>  Forensic </h1>
      <p>Forensic science, in the realm of digital investigation, <br>involves the meticulous examination and analysis of digital<br> evidence to uncover clues, reconstruct events, and provide insights <br>into cybercrimes or incidents. It encompasses a broad range of techniques <br>and tools for gathering, preserving, analyzing, and presenting <br>digital evidence in legal proceedings</p>
    </div> 
    </div>
      

    </section>
       
       <section class="third-page">
        <br>
        <br>
        <div class="container-above">
          <h1>Why choose <a href="">CTF?</a></h1>
          <p>"Elevating cybersecurity talents" </p>
        </div>
        
       <div class="thridpagecontent">
        <div class="gamecontainer">
          <img src="images/bb.png" alt="">
         <a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Top Quality Content</b></a>
         <h3>Create you own team</h3>
        </div>
        <div class="maincontainer">
          <img src="images/g.png" alt="">
          <a href="course.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Learn With Games</b></a>
          <h3>Create you own team</h3>  
        </div>
         
        <div class="quality">
          <img src="images/team.png" alt="">
          <a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Create Teams</b></a>
          <h3>Create you own team</h3>
        </div>
        </div>
        <div class=" thrdpagefooter">
          <h1>10k <span class="auto-type"></span> </h1>          
          <p>Join the <a href="login.html">CTF  </a> Community</p>
        </div>
        
        <!--  type effect -->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script>
          var typed = new Typed(".auto-type",{
            strings : ["Hackers", "Learner", "Members"],
            typeSpeed :100,
            backSpeed :150,
            loop: false,
      onComplete: function(self) {
        self.cursor.remove(); 
        setTimeout(function() {
          self.reset(); 
        }, 1000); 
       }
          })
        </script>
        
      </section>     
       <section class="fourthpage">
        <br>
             <div class="profilecontiner">
              <h1>OUR TEAM</h1>
              <p class="expert">MEET EXPERT TEAM.</p>
              <h3>"Welcome to our exceptional team! United by passion and expertise, <br>we redefine the future through innovation and excellence."</h3>
              <div class="profilesection">
              <div class="istprofile">
                <img src="images/hh.png" id="img" alt="pic">
                <h2>Himanshu kashyap</h2>
                <p class="task">Frontend/backend</p>
                <p>Lorem ipsum dolor sit amet consectetur<br><br>
                  <a href=""><i class="fa-brands fa-facebook"></i></a>
                  <a href=""></a><i class="fa-brands fa-x-twitter"></i></a>
                  <a href=""></a><i class="fa-brands fa-instagram"></i></a>
  </p>
               
              </div>
              <div class="secondprofile">
                <img src="images/iiii.png" id="img" alt="pic">
                <h2>Abhishek</h2>
                <p class="task">AI/ml</p>
                <p>Lorem ipsum dolor sit amet consectetur
                  <br><br>
                  <a href=""><i class="fa-brands fa-facebook"></i></a>
                  <a href=""></a><i class="fa-brands fa-x-twitter"></i></a>
                  <a href=""></a><i class="fa-brands fa-instagram"></i></a>
                </p>
                
             </div>
             <div class="thirdprofile">
              <img src="images/nihar.png" id="img" alt="pic">
              <h2>Nihar</h2>
              <p class="task">Desginer</p>
              <p>Lorem ipsum dolor sit amet consectetur
                <br><br>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""></a><i class="fa-brands fa-x-twitter"></i></a>
                <a href=""></a><i class="fa-brands fa-instagram"></i></a>
              </p>
              
           </div>
           <div class="fourthprofile">
            <img src="images/beta.png" id="img" alt="pic">
            <h2>Himanshu </h2>
            <p class="task">Researcher</p>
            <p>Lorem ipsum dolor sit amet consectetur
              <br><br>
                  <a href=""><i class="fa-brands fa-facebook"></i></a>
                  <a href=""></a><i class="fa-brands fa-x-twitter"></i></a>
                  <a href=""></a><i class="fa-brands fa-instagram"></i></a>
            </p>
                 
          </div>
        </div>
            </div> 
       </section>
       <section class="feedback-page">
      <ul class="icon_feedback">

        <li ><img src="images/8-Award-Winning.png" alt="" class="icon">
          <p><b>120</b><span><sub>+</sub></span></p>
          <h1>Award winning</h1>
        </li>
        <li ><img src="images/7-Happy-Costumer.png" alt="" class="icon">
          <p><b>120</b><span><sub>+</sub></span></p>
          <h1>Happy costumer</h1>
        </li>
        <li ><img src="images/9-Team-Crew.png" alt="" class="icon">
          <p><b>120</b><span><sub>+</sub></span></p>
          <h1>Team Members</h1></li>
        <li ><img src="images/10-Project-Done.png" alt="" class="icon">
          <p><b>120</b><span><sub>+</sub></span></p>
          <h1>Project Done</h1>  </li>
      </ul>
       </section>
       <!-- <section class="fifthpage"> -->
      <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla rem corporis ab a voluptates voluptatem quibusdam quam dolores reprehenderit enim. Ratione repellendus, reprehenderit rem ducimus corporis porro. Eos, sed exercitationem?</p> -->
      <!-- <img src="imp3.png" alt=""> -->
       <!-- </section> -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>company</h4>
          <ul>
            <li><a href="#fourthpage">about us</a></li>
            <li><a href="contactus.html">contact us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">Event</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="contactus.html">FAQ</a></li>
            <li><a href="chatbot.html">chatbot</a></li>
            
          </ul>
        </div>
        <div class="footer-col">
          <h4>features</h4>
          <ul>
            <li><a href="course.html">course</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Create Team</a></li>
            <li><a href="#">Live Event</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
 </footer>

    
  </body>  
</html>
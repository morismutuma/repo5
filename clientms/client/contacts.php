<html>
<head>
    <link rel="icon" a href="image/images/likee.jpg" type="image">
    <title>One Roxa Website</title>
 
    <link rel="stylesheet" href="h3.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        *{
    box-sizing: border-box;
}
html,body{
    background-image: url("image/images/background.jpg"); 
     background-size: cover;
    background-color:   white;
    background-repeat: repeat-x;
    background-size: auto;
    margin: 0;
    padding: 0;
}
.nav-bar{
    z-index:  23;
    position: absolute ;
    top: 0;
    right:  0;
    width: 100%;
}
.content{
    margin-top: 50px;
}
.content >div{
    padding: 15px;
}
.visit{
    position:   absolute    ;
    bottom:     30%;
    right:  50%;
    text-decoration: none;
    color: white;
    display: block;
    height: 50px;
    line-height: 50px;
    border: 2px solid white;
}
.nav-bar a{
    text-decoration: none;
    color: white;
    display: block;
    height: 50px;
    line-height: 50px;
}
.nav-bar >ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
}
/* .nav-bar >ul >li > a{
  
} */
.nav-bar >ul >li > a:hover{
    background-color: blueviolet;
    border-bottom : 1px solid white;
    color: white;
    transition:     .2s;
}
.nav-bar .active{
     border-bottom : 1px solid white;
    color: white;
}
.nav-bar li{
    float: right;
    width: 16%;
    text-align: center;
    border-left: 1px solid #333;
}
.nav-bar li:last-child{
    border: none;
}

.products{
position: relative;
top:    350px;
}

.featured {
  display: flex;
  z-index:  2;

  background-color:     white;
}

.featured > div {
  background-color: white;
  margin: 10px;
  font-size: 30px;
  height:   450;
  width:    800;
}

.social {
  display: flex;
  z-index:  2;

  background-color:     white;
}

.social > div {
  background-color: white;
  margin: 10px;
  font-size: 30px;
}


#subset{
    background-color: #fff3f3;
    font-size:  20px;
    padding:0;
}
p{
    color: #777;
    font-size: 14px;
    font-weight: 300;
    line-height: 22px;
    padding: 10px;
}
h5{
    font-size: 20px;
    margin-bottom: 5px;
    color: #555;
    font-weight: 400;
}

.location{
background-color: white 

    }
.location   iframe{
    width: 800;
    height: 600;

}


@media (max-width:700px){
    .sub-header h1{
        font-size: 24px;
    }
}
    .form-submit-button {
    background: #B9DFFF;
    color: #fff;
    border: 1px solid #eee;
    border-radius: 20px;
    box-shadow: 5px 5px 5px #eee;
    text-shadow: none;
}

.form-submit-button:hover {
    background: #016ABC;
    color: #fff;
    border: 1px solid #eee;
    border-radius: 20px;
    box-shadow: 5px 5px 5px #eee;
    text-shadow: none;
}


    </style>
</head>
<body>
    <br>
    <br>
 <br> <br>   <img src="image/images/logo.png" alt="image" width="135" >
<h1 style="color:white;" align="center">Home investment</h1>
    <h3 align = "right"><div class="nav-bar">
        <ul>
        <li><a href="Contacts.html">Contacts</a></li>
        
    </ul>
    </div>
</h3>
   <br>
   <br>
   <section class="location">
      <iframe src="https://maps.google.com/maps?q=-1.2647861,36.7958501&amp;t=&amp;z=19&amp;ie=UTF8&amp;iwloc=&amp;output=embed"  frameborder="0" style="border: 0" allowfullscreen=""></iframe>
    </section>

   <br>
   <br>

   <div class="featured">
    <div class="image" style="   padding: 2%;align-items: left;">


        <div><rowspan="2"><img src="image/images/housei.png"width="40" height="30">
       <h5> David Osieli</h5>
        <p>207 off RhaptaÂ Road, Nairobi</p>
        </div>
        <div>   
        <rowspan="2"><img src="image/images/call.jpg"width="40" height="30">
       <h5> Mobile: +254 (0) 765 618 551</h5>
        <p>Monday to Saturday 8 Am to 5 Pm
        </p>
        </div>
        <div>
        <rowspan="2"><img src="image/images/email.jpg" width="40" height="30">
       <h5> info@oneroxasinternational.com </h5>
        <p>Email us your query

        </p>

           </div> 
        
            

    </div>

<div class="form">
<form height="600">

        <input type="text" id="name" name="name" placeholder="Enter your name" required><br>
        <br>
        <input type="text" id="email" name="email" placeholder="Enter email address" required><br>
        <br>
        <input type="text" id="subject" name="subject" placeholder="Enter your subject" required><br>
        <br>
        <form action="Home.html" method="POST" align="center">

            <textarea name="message" cols="50" rows="5" required> Message </textarea>
            <br>
            <br>
            <br>
          <div class="hero-btn.red-btn"> <input type="submit" value="Send Message"></div>
        </form>

      </form> 
</div>
</div>
<br>
<br>

        <div class="social">
        <div>
        <a href="Contacts.php">
        <rowspan="2"><img src="image/images/facebook-fb.gif"width="80" height="60">
        </a>
        </div>
        <div>
        <a href="Contacts.php">
        <rowspan="2"><img src="image/images/twitter.png"width="80" height="60">
        </div><div>

        <a href="Contacts.php">
        <rowspan="2"><img src="image/images/instagram.png" width="80" height="60">
    </a>

</div><div>
            <a href="Contacts.php">
        <rowspan="2"><img src="image/images/linklin.png"wwidth="80" height="60">
            </a>
</div>

        </div>

            <p>Made with<img src="image/images/likee.jpg"  height="10">
                Email us at: info@oneroxasinternational.com by Mambo Software </p>


        <form action="contacts.php" method="POST" align="center">
            <textarea name="comments" cols="50" rows="5"> Please leave a comment about the site experience...</textarea>
            <div class="form-submit-button">  <input type="submit" value="submit"></div>
        </form>
        <hr width="100%" align="left">
        <a href="#top">back to top</a>
        <p> Contact us at<a href="mailto:info@oneroxasinternational.com">
            info@oneroxasinternational.com</a><p>
                <div-class="footer-copyright">
                    © copyright <br> 
                </div-class>
</body>   
</html>
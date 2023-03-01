<?php
  include"Navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="jquery.js"></script> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
  background: url("Images/About_us.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.row{
  margin-top: 40px;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 10);
  margin: 8px;
}

img
{
  margin-top: 25px;
  width: 200px;
  height: 200px;
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%);
  border-radius: 50%;
}

.about-section {
  padding: 20px;
  text-align: center;
  color:black;
}

.container
{
  padding-left: 20px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: crimson;
  font-weight: bolder;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
    </style>
</head>
<body>
  <div id="includedContent"></div>
    <div class="about-section">
        <h1>About Us</h1>
        <p>At E-COLLEGE-INFO we believe everyone deserves to have a purity in life.Transformation and integrity makes us happy. We're exiceted to help you on your journey!</p>
        <p>A journey to simplicity.</p>
        <h2>|| VISION ||</h2>
        <P>To Make ENLIGHTENED way of working</P>
        <h2>|| MISSION ||</h2>
        <p>To make DIGITAL COMMUNICATION truly limitless.</p>
        <h2>|| VALUES ||</h2>
        <P>INNOVATION | QUALITY | SIMPLICITY</P>
        <h2>Credit and Special Thanks to</h2>
        <h1 style="color: #7f4145;"><b><u>NARESH PATEL</u></b></h1>
        <p>We will always be grateful to you for your support and cooperation. it would be impossible to count all the ways that you have helped us in our project.</p>
        <p>Thanks for being a good mentor and guiding us.</p>
      </div>
      
      <h1 style="text-align:center">Our Team</h1>
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="Images\ridham.jpg" alt="Ridham Patel">
            <div class="container">
              <h2 style="color: #001f3f;">Ridham Patel</h2>
              <p class="title">Web Developer, Content Stategist</p>
              <p>
                  <ul>
                      <li>Database</li>
                      <li>Server and Security</li>
                      <li>Structrual design</li>
                      <li>Analysis of content</li>
                  </ul>
              </p>
              <p>ridhampatel410@gmail.com</p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="Images\riya.jpg" alt="Riya Patel">
            <div class="container">
              <h2 style="color: #001f3f;">Riya Patel</h2>
              <p class="title">Researcher, UI Designer, UX Designer</p>
              <p>
                <ul>
                    <li>Designing web</li>
                    <li>Studing and researching web</li>
                    <li>user experience</li>
                </ul>
              </p>
              <p>riyapatel26599@gmail.com</p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="Images\manav.jpg" alt="Manav Patel">
            <div class="container">
              <h2 style="color: #001f3f;">Manav Patel</h2>
              <p class="title">Art Director, UI Developer, Interaction Designer,Content Writer</p>
              <p>
                <ul>
                    <li>Quality control</li>
                    <li>Developing design of web</li>
                </ul>
              </p>
              <p>manavpatel1472@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
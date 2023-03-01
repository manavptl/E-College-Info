<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="file:///E:"></script>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  user-select: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  background: url("Images/Home\ Page.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
}

nav{
  background: rgb(0, 0, 0,0.7);
  padding-right: 50px;
}
nav:after{
  content: '';
  clear: both;
  display: table;
}
nav .logo{
  float: left;
  color: white;
  font-size: 27px;
  font-weight: 600;
  line-height: 70px;
  padding-left: 60px;
}
nav ul{
  float: right;
  margin-right: 40px;
  list-style: none;
  position: relative;
}
nav ul li{
  display: inline-block;
  
  margin: 0 5px;
}
nav ul li a{
  color:darkorange;
  line-height: 70px;
  text-decoration: none;
  font-size: 18px;
  padding: 8px 15px;
}
nav ul li a:hover{
  color: cyan;
  border-radius: 5px;
  box-shadow:  0 0 5px #33ffff,
               0 0 10px #66ffff;
}
nav ul ul li a:hover{
  box-shadow: none;
}
nav ul ul {
  position: absolute;
  top: 90px;
  margin-left: 5px;
  background: rgb(0, 0, 0,0.7);
  border-top: 3px solid cyan;
  opacity: 0;
  visibility: hidden;
  transition: top .3s;
}
nav ul ul ul{
  border-top: none;
}
nav ul li:hover > ul{
  top: 70px;
  opacity: 1;
  visibility: visible;
}
nav ul ul li{
  position: relative;
  margin: 0px;
  margin-left: 7px;
  width: 140px;
  float: none;
  display: list-item;
  border-bottom: 1px solid rgb(0, 0, 0,0.7);
}
nav ul .rare li
{
  width: 175px;
}
nav ul ul li a{
  line-height: 50px;
  color: darkorange;
}
nav ul ul ul li{
  position: relative;
  top: -60px;
  left: 150px;
  background: rgb(0, 0, 0,0.7);
}
.show,.icon,input{
  display: none;
}
.fa-plus{
  font-size: 15px;
  margin-left: 40px;
}
.fa-user-circle-o
{
  position: relative;
  top: 10%;
  color: #fff;
  padding-top: 1rem;
  
}

@media all and (max-width: 968px) {
  nav
  {
    width: 100%;
  }
  nav ul{
    margin-right: 0px;
    float: left;
  }
  nav .logo{
    padding-left: 30px;
    width: 100%;
  }
  .show + a, ul{
    display: none;
  }
  nav ul li,nav ul ul li{
    display: block;
    width: 100%;
  }
  nav ul li a:hover{
    box-shadow: none;
  }
  .show{
    display: block;
    color: white;
    font-size: 18px;
    padding: 0 20px;
    line-height: 70px;
    cursor: pointer;
  }
  .show:hover{
    color: cyan;
  }
  .icon{
    display: block;
    color: white;
    position: absolute;
    top: 0;
    right: 40px;
    line-height: 70px;
    cursor: pointer;
    font-size: 25px;
  }
  nav ul ul{
    top: 70px;
    border-top: 0px;
    float: none;
    position: static;
    display: none;
    opacity: 1;
    visibility: visible;
  }
  nav ul ul a{
    padding-left: 40px;
  }
  nav ul ul ul a{
    padding-left: 80px;
  }
  nav ul ul ul li{
    position: static;
  }
  [id^=btn]:checked + ul{
    display: block;
  }
  nav ul ul li{
    border-bottom: 0px;
  }
  span.cancel:before{
    content: '\f00d';
  }
}
.content{
  z-index: -1;
  position: relative;
  top: 40px;
  text-align: center;
}
header{
  font-size: 100px;
  font-weight: 600;
  padding: 10px;
}
p{
  font-size: 30px;
  font-weight: 500;
}
@media all and (max-width: 320px) 
{
  nav ul .rare li
  {
    width: 190px;
  }
  .content
  {
  z-index: -1;
  position: relative;
  top: 60px;
  text-align: center;
  }
  header
  {
  font-size: 50px;
  font-weight: 600;
  }
}
    </style>
  </head>
  <body>
    <nav>
      <div class="logo">E COLLEGE INFO</div>
      <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <input type="checkbox" id="btn">
      <ul>
        <li><a href="Student Home.php">Home</a></li>
        <li>
          <label for="btn-2" class="show">May I Help ? +</label>
          <a href="#">May I Help ?</a>
          <input type="checkbox" id="btn-2">
          <ul class="rare">
            <li><a href="I'D Card.php">I'D card</a></li>
            <li><a href="Buss Pass.php">Buss Pass</a></li>
            <li><a href="Library Card.php">Library Card</a></li>
            <li><a href="">Detain</a></li>
            <li><a href="">GTU Re-Exams</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-4" class="show">Materials +</label>
          <a href="#">Materials & Papers</a>
          <input type="checkbox" id="btn-4">
          <ul>
          <li><a href="Sem-1.php">Semester 1</a></li>
            <li><a href="Sem-2.php">Semester 2</a></li>
            <li><a href="Sem-3.php">Semester 3</a></li>
            <li><a href="Sem-4.php">Semester 4</a></li>
            <li><a href="Sem-5.php">Semester 5</a></li>
            <li><a href="Sem-6.php">Semester 6</a></li>
          </ul>
        <li>
          <label for="btn-1" class="show">Downloads +</label>
          <a href="#">Downloads</a>
          <input type="checkbox" id="btn-1">
          <ul>
          <li><a href="Show Notice.php">Notice</a></li>
            <li><a href="Show Assignment.php">Assignment</a></li>
            <li><a href="Show Attendance.php">Attendance</a></li>
            <li><a href="Show TimeTable.php">Time Table</a></li>
            <li><a href="Show Result.php">Result</a></li>
          </ul>
        </li>
        <li><a href="About us.php">About Us</a></li>
        <li>
        <label for="btn-3" class="show"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i></label>
        <a href="#"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i></a>
          <input type="checkbox" id="btn-3">
          <ul>
            <li><a href="Current_student_details.php">Edit Profile</a></li>
            <li><a href="Show My Logiactivity.php">My Activity</a></li>
            <li><a href="Logout.php">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="content">
      <header style="color: #162447;">Welcome </header>
    </div>
    <script>
      $('.icon').click(function(){
        $('span').toggleClass("cancel");
      });
    </script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sem-5</title>
    <style>
        
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body
        {
            background-color: #264e36;
        }

        main
        {
            margin: 2rem;
        }

        h1
        {
            text-align: center;
            color: #88b04b;
        }

        .wrapper
        {
            counter-reset: number;   
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 4rem 0;
        }

        .container
        {
            background-color: #A0DAA9;
            padding: 2rem;
            width: 300px;
            margin: 1rem 2rem 4rem;
            text-align: center;
            position: relative;
        }

        .tape::before
        {
            content: '';
            width: 8rem;
            height: 2rem;
            top: -0rem;
            left: -1.7rem;
            transform: rotate(-30deg);
            background-color:gold;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
            position: absolute;
            display: block;
        }

        .container::before
        {
            counter-increment: number;
            content: counter(number);
            width: 4rem;
            height: 4rem;
            position: absolute;
            display: block;
            border-radius: 50%;
            background-color: #12e7c0;
            top: -2rem;
            left: 7.4rem;
            font-size: 3rem;
            font-weight: bold;
            line-height: 3rem;
        }

        .title
        {
            margin: 2rem 0 1rem 0;
            color: #001f3f;
        }

        .description
        {
            color:darkblue;
            font-weight: bold;
            font-size: 1rem;
            font-family: Comic Sans MS;
        }

    </style>
</head>
<body>
    <main>
        <h1>Sem-5 Material</h1>
    </main>
    
    <div class="wrapper">

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Computer Maintenance And Trouble Shooting (3350701)</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 5\cmnt\Unit 1.pdf" download> Inside the PC: Core Components</a></li><br>
                <li><a href="Material\sem 5\cmnt\Unit 2.pdf" download> Hard Disk Drive and Controller, DVD Drives</a></li><br>
                <li><a href="Material\sem 5\cmnt\Unit 3.pdf" download> Input Devices and Printers</a></li><br>
                <li><a href="Material\sem 5\cmnt\Unit 4.pdf" download>Monitor and Display Adapters</a></li><br>
                <li><a href="Material\sem 5\cmnt\Unit 5.pdf" download>Trouble Shooting and Preventive Maintenance</a></li><br>              
            </ol>    
            <br><br><br>
            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 5\paper\cmnt\winter-27-11-2018.pdf" download>winter-27-11-2018</a></li><br>
                <li><a href="Material\sem 5\paper\cmnt\winter-02-11-2017.pdf" download>winter-02-11-2017</a></li><br>
                <li><a href="Material\sem 5\paper\cmnt\winter-26-11-2019.pdf" download>winter-26-11-2019</a></li><br>
                <li><a href="Material\sem 5\paper\cmnt\summer-22-05-2017.pdf" download>summer-22-05-2017</a></li><br>
                
            </ol>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Dynamic Web Page Development (3350702)</h2>
            <ol type="I"><br><br><br>
                <li><a href="Material\sem 5\dwpd\UNIT-1.pdf" download>Introduction to html & CSS</a></li><br>
                <li><a href="Material\sem 5\dwpd\UNIT-2.pdf" download> Working with Basic Building Blocks of PHP</a></li><br>
                <li><a href="Material\sem 5\dwpd\UNIT-3.pdf" download>Workingwith PHP Arrays and functions</a></li><br>
                <li><a href="Material\sem 5\dwpd\UNIT-4.pdf" download> User data input through Forms</a></li><br>
                <li><a href="Material\sem 5\dwpd\UNIT-5.pdf" download> Establishing a Connection, Working With Database</a></li><br>
            </ol>    
            <br><br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 5\paper\dwpd\summer-11-05-2016.pdf" download>summer-11-05-2016</a></li><br>
                <li><a href="Material\sem 5\paper\dwpd\winter-21-11-2016.pdf" download>winter-21-11-2016</a></li><br>
                <li><a href="Material\sem 5\paper\dwpd\winter-29-11-2018.pdf" download>winter-29-11-2018</a></li><br>
                <li><a href="Material\sem 5\paper\dwpd\winter-28-11-2019.pdf" download>winter-28-11-2019</a></li><br>
                
            </ol>

        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Java Programming (3350703)</h2>
            <ol type="I"><br><br><br><br>
                <li><a href="Material\sem 5\java\UNIT-1.pdf" download>  Introduction to Java</a></li><br>
                <li><a href="Material\sem 5\java\UNIT-2.pdf" download> Introduction to language basics in java</a></li><br>
                <li><a href="Material\sem 5\java\UNIT-3.pdf" download> Object Oriented Programming Concept</a></li><br>
                <li><a href="Material\sem 5\java\UNIT-4.pdf" download> Inheritance</a></li><br>
                <li><a href="Material\sem 5\java\UNIT-5.pdf" download> Exception Handling & Multithreaded Programming</a></li><br>
                <li><a href="Material\sem 5\java\UNIT-6.pdf" download> Handling Strings</a></li><br>
            </ol>  
            <br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 5\paper\java\winter-23-11-2016.pdf" download>winter-23-11-2016</a></li><br>
                <li><a href="Material\sem 5\paper\java\winter-01-12-2018.pdf" download>winter-01-12-2018</a></li><br>
                <li><a href="Material\sem 5\paper\java\summer-03-05-2018.pdf" download>summer-03-05-2018</a></li><br>
                <li><a href="Material\sem 5\paper\java\winter-15-11-2019.pdf" download>winter-15-11-2019</a></li><br>
                
            </ol>

        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Computer Network And Security (3350704)</h2>
            <ol type="I"><br><br>
                <li><a href="Material\sem 5\cns\CNS1.pdf" download>Introduction and Security Threats</a></li><br>
                <li><a href="Material\sem 5\cns\CNS2.pdf" download>Organizational Security</a></li><br>
                <li><a href="Material\sem 5\cns\CNS3.pdf" download>Cryptography and Public key Infrastructure</a></li><br>
                <li><a href="Material\sem 5\cns\CNS4.pdf" download>Network security</a></li><br>
                <li><a href="Material\sem 5\cns\CNS5.pdf" download>Web Security</a></li><br>
            </ol> 
            <br><br><br><br><br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 5\paper\cns\winter-18-11-2019.pdf" download>winter-18-11-2019</a></li><br>
                <li><a href="Material\sem 5\paper\cns\summer-16-05-2019.pdf" download>summer-16-05-2019</a></li><br>
                <li><a href="Material\sem 5\paper\cns\winter-04-12-2018.pdf" download>winter-04-12-2018</a></li><br>
                <li><a href="Material\sem 5\paper\cns\summer-05-05-2018.pdf" download>summer-05-05-2018</a></li><br>
                
            </ol>
               
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Project-2</h2>
            <ol type="I"><br><br>
                <li><a href="" >Project Report(.PDF)</a></li><br><br>
                <li><a href="" >Project presentation(.PPT)</a></li><br><br>
               
            </ol>    
        </div>

    </div>
</body>
</html>
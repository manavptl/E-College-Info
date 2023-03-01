<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sem-6</title>
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
        <h1>Sem-6 Material</h1>
    </main>
    
    <div class="wrapper">

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Advance Java Programming (3360701)</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 6\AJP\AJAVA unit-1.pdf" download> Java Applets</a></li><br>
                <li><a href="Material\sem 6\AJP\AJAVA unit-2.pdf" download> Introduction of Abstract Window Toolkit: (AWT)</a></li><br>
                <li><a href="Material\sem 6\AJP\AJAVA unit-3.pdf" download>Data Base Client/ Server</a></li><br>
                <li><a href="Material\sem 6\AJP\AJAVA unit-4.pdf" download>Servlets</a></li><br>
                <li><a href="Material\sem 6\AJP\AJAVA unit-5.pdf" download>Java Server Pages: (JSP)</a></li><br>              
            </ol>   
            <br><br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 6\Paper\AJP\winter-22-11-2018.pdf" download>winter-22-11-2018</a></li><br>
                <li><a href="Material\sem 6\Paper\AJP\summer-21-05-2019.pdf" download>summer-21-05-2019</a></li><br>
                <li><a href="Material\sem 6\Paper\AJP\winter-02-11-2017.pdf" download>winter-02-11-2017</a></li><br>
                <li><a href="Material\sem 6\Paper\AJP\winter-26-11-2019.pdf" download>winter-26-11-2019</a></li><br>
                
            </ol>

        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>MCAD (3360704)</h2>
            <ol type="I"><br><br><br><br>
                <li><a href="Material\sem 6\MCAD\unit-1.pdf" download>Introduction to Mobile Computing</a></li><br>
                <li><a href="Material\sem 6\MCAD\unit-2.pdf" download>Introduction to Android</a></li><br>
                <li><a href="Material\sem 6\MCAD\unit-3.pdf" download>Android Activities and GUI Design concepts</a></li><br>
                <li><a href="Material\sem 6\MCAD\unit-4.pdf" download>Advanced UI Programming</a></li><br>
                <li><a href="Material\sem 6\MCAD\unit-5.pdf" download>Toast, Menu, Dialog, List and Adapters</a></li><br>
            </ol>    
            <br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 6\Paper\MCAD\winter-15-11-2019.pdf" download>winter-15-11-2019</a></li><br>
                <li><a href="Material\sem 6\Paper\MCAD\winter-27-10-2020.pdf" download>winter-27-10-2020</a></li><br>
                <li><a href="Material\sem 6\Paper\MCAD\winter-01-12-2018.pdf" download>winter-01-12-2018</a></li><br>
                <li><a href="Material\sem 6\Paper\MCAD\summer-03-05-2018.pdf" download>summer-03-05-2018</a></li><br>
                
            </ol>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Network Management And Administration (3360703)</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 6\NMA\UNIT-1_NMA.pdf" download>Exploring Directory Services and Remote Access</a></li><br>
                <li><a href="Material\sem 6\NMA\UNIT-2_NMA.pdf" download>Network Protocols and Services</a></li><br>
                <li><a href="Material\sem 6\NMA\UNIT-3_NMA.pdf" download>Network Planning and Implementation</a></li><br>
                <li><a href="Material\sem 6\NMA\UNIT-4_NMA.pdf" download>Network Configuration</a></li><br>
                <li><a href="Material\sem 6\NMA\UNIT-5_NMA.pdf" download>Troubleshooting of Networking</a></li><br>
            </ol>    
            <br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 6\Paper\NMA\winter-28-11-2019.pdf" download>winter-28-11-2019</a></li><br>
                <li><a href="Material\sem 6\Paper\NMA\winter-26-11-2020.pdf" download>winter-26-11-2020</a></li><br>
                <li><a href="Material\sem 6\Paper\NMA\winter-29-11-2018.pdf" download>winter-29-11-2018</a></li><br>
                <li><a href="Material\sem 6\Paper\NMA\summer-01-05-2018.pdf" download>summer-01-05-2018</a></li><br>
                
            </ol>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Project-2</h2>
            <ol type="I"><br><br><br><br>
                <li><a href="" >Project Report</a></li><br>
                <li><a href="" >Poster</a></li><br>
                <li><a href="" >unit-1</a></li><br>
               
            </ol>    
        </div>

    </div>
</body>
</html>
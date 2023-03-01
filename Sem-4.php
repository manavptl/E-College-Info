<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sem-4</title>
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
        <h1>Sem-4 Material</h1>
    </main>
    
    <div class="wrapper">

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Advanced Database Management System (3340701)</h2>
            <ol type="I"><br>
                <li><a href="" >Advanced SQL</a></li><br>
                <li><a href="Material\sem 4\ADBMS\ADBMS_Unit-2.pdf" download>PL / SQL and Trigge</a></li><br>
                <li><a href="Material\sem 4\ADBMS\ADBMS_Unit-3.pdf" download>  Functional Dependency and Decomposition</a></li><br>
                <li><a href="Material\sem 4\ADBMS\ADBMS_Unit-4.pdf" download>Normalization</a></li><br>
                <li><a href="Material\sem 4\ADBMS\ADBMS_Unit-5.pdf" download>Transaction Processing</a></li><br>    
            </ol>    
            <br><br><br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 4\paper\ADBMS\winter-17-11-2016.pdf" download>winter-17-11-2016</a></li><br>
                <li><a href="Material\sem 4\paper\ADBMS\summer-28-04-2018.pdf" download>summer-28-04-2018</a></li><br>
                <li><a href="Material\sem 4\paper\ADBMS\winter-26-11-2014.pdf" download>winter-26-11-2014</a></li><br>
                <li><a href="Material\sem 4\paper\ADBMS\winter-12-12-2015.pdf" download>winter-12-12-2015</a></li><br>
                
            </ol>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Computer Networks (3340702)</h2>
            <ol type="I"><br><br>
                <li><a href="" > Basics of Computer Network</a></li><br>
                <li><a href="" >The Reference Model for network communication</a></li><br>
                <li><a href="" >Transmission Media</a></li><br>
                <li><a href="" >Network devices</a></li><br>
                <li><a href="" > IP Protocol and Network Applications</a></li><br>
            </ol>    
            <br><br><br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 4\paper\CN\summer-30-04-2018.pdf" download>summer-30-04-2018</a></li><br>
                <li><a href="Material\sem 4\paper\CN\winter-28-11-2014.pdf" download>winter-28-11-2014</a></li><br>
                <li><a href="Material\sem 4\paper\CN\winter-17-12-2015.pdf" download>winter-17-12-2015</a></li><br>
                <li><a href="Material\sem 4\paper\CN\winter-19-11-2016.pdf" download>winter-19-11-2016</a></li><br>
                
            </ol>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>.Net Programming (3340704)</h2>
            <ol type="I"><br><br>
                <li><a href="Material\sem 4\NET\NET_Unit-1.pdf" download>Introduction to Microsoft .NET framework and VB.Net</a></li><br>
                <li><a href="Material\sem 4\NET\NET_Unit-2.pdf" download>Introduction to Windows Common Controls</a></li><br>
                <li><a href="Material\sem 4\NET\NET_Unit-3.pdf" download>Additional controls and Menus of Windows</a></li><br>
                <li><a href="Material\sem 4\NET\NET_Unit-4.pdf" download>Advanced Features of VB.Net</a></li><br>
                <li><a href="Material\sem 4\NET\NET_Unit-5.pdf" download>Inbuilt Functions and Database access using ADO.NET</a></li><br>
            </ol>  
            <br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 4\paper\[.NET]\winter-24-11-2018.pdf" download>winter-24-11-2018</a></li><br>
                <li><a href="Material\sem 4\paper\[.NET]\summer-04-05-2018.pdf" download>summer-04-05-2018</a></li><br>
                <li><a href="Material\sem 4\paper\[.NET]\winter-14-12-2014.pdf" download>winter-14-12-2014</a></li><br>
                <li><a href="Material\sem 4\paper\[.NET]\winter-07-12-2015.pdf" download>winter-07-12-2015</a></li><br>
                
            </ol>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Computer Organization And Architecture (3340705)</h2>
            <ol type="I"><br>
                <li><a href="" > Computer Architecture & Register-Transfer and Micro-operations</a></li><br>
                <li><a href="" >Basic Computer Organization</a></li><br>
                <li><a href="" > Central processor organization& Pipeline processing</a></li><br>
                <li><a href="" >Memory Organization</a></li><br>
                <li><a href="" > Input/output OrganizationInput-Output Interface</a></li><br>
            </ol>    
            <br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 4\paper\COA\summer-05-05-2017.pdf" download>summer-05-05-2017</a></li><br>
                <li><a href="Material\sem 4\paper\COA\summer-07-05-2018.pdf" download>summer-07-05-2018</a></li><br>
                <li><a href="Material\sem 4\paper\COA\winter-04-12-2015.pdf" download>winter-04-12-2015</a></li><br>
                <li><a href="Material\sem 4\paper\COA\winter-28-11-2016.pdf" download>winter-28-11-2016</a></li><br>
                
            </ol>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Fundamentals Of Software Development (3341603)</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 4\FOSD\UNIT1.pdf" download>Software Development Process</a></li><br>
                <li><a href="Material\sem 4\FOSD\UNIT2.pdf" download>Software Analysis and Design</a></li><br>
                <li><a href="Material\sem 4\FOSD\UNIT3.pdf" download>Software Project Management</a></li><br>
                <li><a href="Material\sem 4\FOSD\UNIT4.pdf" download>Software Coding and testing</a></li><br>
            </ol>  
            <br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 4\paper\FOSD\winter-22-11-2016.pdf" download>winter-22-11-2016</a></li><br>
                <li><a href="Material\sem 4\paper\FOSD\summer-01-05-2017.pdf" download>summer-01-05-2017</a></li><br>
                <li><a href="Material\sem 4\paper\FOSD\winter-09-12-2015.pdf" download>winter-09-12-2015</a></li><br>
                <li><a href="Material\sem 4\paper\FOSD\winter-09-12-2015.pdf" download>winter-09-12-2015</a></li><br>
                
            </ol>  
        </div>

    </div>
</body>
</html>
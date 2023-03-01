<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sem-2</title>
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
        <h1>Sem-2 Material</h1>
    </main>
    
    <div class="wrapper">

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Advanced Computer Programming (3320702)</h2>
            <ol type="I"><br>
                <li><a href="" >Array</a></li><br>
                <li><a href="" >Pointer</a></li><br>
                <li><a href="" >Functions</a></li><br>
                <li><a href="" >Preprocessor directives</a></li><br>
                <li><a href="" >Structure & Union</a></li><br>
                <li><a href="" >Files</a></li>
            </ol>    
            <br><br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 2\Acp\paper\summer-21-05-2018.pdf" download>summer-21-05-2018</a></li><br>
                <li><a href="Material\sem 2\Acp\paper\winter-07-01-2019.pdf" download>winter-07-01-2019</a></li><br>
                <li><a href="Material\sem 2\Acp\paper\winter-01-01-2020.pdf" download>winter-01-01-2020</a></li><br>
                <li><a href="Material\sem 2\Acp\paper\summer-01-06-2019.pdf" download>summer-01-06-2019</a></li><br>
                
            </ol>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Adv. MATHS (3320002)</h2>
            <ol type="I"><br><br>
                <li><a href="" >Complex Number</a></li><br>
                <li><a href="" >Function & Limit</a></li><br>
                <li><a href="" >Differentiation & its Application</a></li><br>
                <li><a href="" >Integration & its Application</a></li><br>
                <li><a href="" >Differential Equations</a></li><br>
            </ol>   
            <br><br><br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 2\Maths-2\paper\winter-24-01-2019.pdf" download>winter-24-01-2019</a></li><br>
                <li><a href="Material\sem 2\Maths-2\paper\winter-12-01-2018.pdf" download>winter-12-01-2018</a></li><br>
                <li><a href="Material\sem 2\Maths-2\paper\summer-30-06-2019.pdf" download>summer-30-06-2019</a></li><br>
                <li><a href="Material\sem 2\Maths-2\paper\summer-23-06-2018.pdf" download>summer-23-06-2018</a></li><br>
                
            </ol>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>BE (3320701)</h2>
            <ol type="I"><br><br><br>
                <li><a href="" >Electronic Components and Signals</a></li><br>
                <li><a href="" >Diodes and Applications</a></li><br>
                <li><a href="" >Transistors</a></li><br>
                <li><a href="" >Oscillators</a></li><br>
                <li><a href="" >Cable, Connectors and Measuring Instruments</a></li><br>
            </ol>    
            <br><br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 2\BE\paper\summer-08-06-2016.pdf" download>summer-08-06-2016</a></li><br>
                <li><a href="Material\sem 2\BE\paper\summer-13-06-2017.pdf" download>summer-13-06-2017</a></li><br>
                <li><a href="Material\sem 2\BE\paper\winter-30-12-2015.pdf" download>winter-30-12-2015</a></li><br>
                <li><a href="Material\sem 2\BE\paper\summer-25-05-2018.pdf" download>summer-25-05-2018</a></li><br>
                
            </ol>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>BASIC PHYSICS (3300005)</h2>
            <ol type="I"><br><br>
                <li><a href="" >SI Units & Measurements</a></li><br>
                <li><a href="" >Static & Current Electricity</a></li><br>
                <li><a href="" >Electromagnetism & AC Current</a></li><br>
                <li><a href="" >Semiconductors & Nanotechnology</a></li><br>
                <li><a href="" >Sound, Laser & Optical Fiber</a></li><br>
            </ol> 
            <br><br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 2\Physic\paper\summer-05-06-2017.pdf" download>summer-05-06-2017</a></li><br>
                <li><a href="Material\sem 2\Physic\paper\summer-01-06-2016.pdf" download>summer-01-06-2016</a></li><br>
                <li><a href="Material\sem 2\Physic\paper\winter-04-01-2019.pdf" download>winter-04-01-2019</a></li><br>
                <li><a href="Material\sem 2\Physic\paper\winter-30-12-2016.pdf" download>winter-30-12-2016</a></li><br>
                
            </ol>
        </div>

    </div>
</body>
</html>
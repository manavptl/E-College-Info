<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sem-1</title>
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
        <h1>Sem-1 Material</h1>
    </main>
    
    <div class="wrapper">

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Computer Programming (3310701)</h2>
            <ol type="I"><br>
                <li><a href="" >Flowchart and Algoritham</a></li><br>
                <li><a href="" >Basics of c</a></li><br>
                <li><a href="" >Operator and Expression</a></li><br>
                <li><a href="" >Decision Statements</a></li><br>
                <li><a href="" >Loop Control</a></li><br>
                <li><a href="" >Introduction of Array[1-D]</a></li><br>
            </ol>   
            <br> 

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 1\cp\paper\winter-06-06-2016.pdf" download>winter-06-06-2016</a></li><br>
                <li><a href="Material\sem 1\cp\paper\summer-9-7-2017.pdf" download>summer-09-07-2017</a></li><br>
                <li><a href="Material\sem 1\cp\paper\summer-23-05-2018.pdf" download>summer-23-05-2018</a></li><br>
                <li><a href="Material\sem 1\cp\paper\winter-05-01-2017.pdf" download>winter-05-01-2017</a></li><br>
                
            </ol>    
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Fundamental of Digital Electronics (3310702)</h2>
            <ol type="I"><br>
                <li><a href="" >Binary Systems</a></li><br>
                <li><a href="" >Binary Logic And Boolean Algebra</a></li><br>
                <li><a href="" >Boolean Function Implementation</a></li><br>
                <li><a href="" >Basic Combinational Logic</a></li><br>
                <li><a href="" >Combinational Logic MST and LST</a></li><br>
            </ol>   
            <br><br><br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 1\fode\paper\summer-10-06-2016.pdf" download>summer-10-06-2016</a></li><br>
                <li><a href="Material\sem 1\fode\paper\summer-15-06-2017.pdf" download>summer-15-06-2017</a></li><br>
                <li><a href="Material\sem 1\fode\paper\winter-31-12-2016.pdf" download>winter-31-12-2016</a></li><br>
                <li><a href="Material\sem 1\fode\paper\summer-10-06-2018.pdf" download>summer-10-06-2018</a></li><br>
                
            </ol>    
 
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Maths – 1 (3300001)</h2>
            <ol type="I"><br><br><br><br>
                <li><a href="" >Logarithm</a></li><br> 
                <li><a href="" >Determinants and Matrices</a></li><br>
                <li><a href="" >Trigonometry</a></li><br>
                <li><a href="" >Vectors</a></li><br>
                <li><a href="" >Menstruation</a></li><br>
            </ol>    
            <br><br><br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 1\maths-1\paper\summer-07-06-2016.pdf" download>summer-07-06-2016</a></li><br>
                <li><a href="Material\sem 1\maths-1\paper\winter-06-01-2017.pdf" download>winter-06-01-2017</a></li><br>
                <li><a href="Material\sem 1\maths-1\paper\summer-25-05-2018.pdf" download>summer-25-05-2018</a></li><br>
                <li><a href="Material\sem 1\maths-1\paper\summer-12-06-2017.pdf" download>summer-12-06-2017</a></li><br>
                
            </ol>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>ECHM (3300003)</h2>
            <ol type="I"><br><br><br><br>
                <li><a href="" >Ecology and Environment</a></li><br>
                <li><a href="" >Sustainable Development</a></li><br>
                <li><a href="" >Wind Power1</a></li><br>
                <li><a href="" >Solar Power</a></li><br>
                <li><a href="" >Biomass Energy</a></li><br>
                <li><a href="" >Seismic Engineering and disaster management</a> </li><br>
            </ol>    

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 1\echm\paper\summer-13-06-2016.pdf" download>summer-13-06-2016</a></li><br>
                <li><a href="Material\sem 1\echm\paper\winter-02-01-2017.pdf" download>winter-02-01-2017</a></li><br>
                <li><a href="Material\sem 1\echm\paper\winter-04-01-2016.pdf" download>winter-04-01-2016</a></li><br>
                <li><a href="Material\sem 1\echm\paper\winter-30-05-2018.pdf" download>winter-30-05-2018</a></li><br>
                
            </ol>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>English (3300002)</h2>
            <ol type="I"><br>
                <li><a href="" >unit-1</a></li><br>
                <li><a href="" >unit-2</a></li><br>
                <li><a href="" >unit-3</a></li><br>
                <li><a href="" >unit-4</a></li><br>
                <li><a href="" >unit-5</a></li><br>
            </ol>    


            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 1\english\paper\summer-30-06-2016.pdf" download>summer-30-06-2016</a></li><br>
                <li><a href="Material\sem 1\english\paper\winter-04-01-2017.pdf" download>winter-04-01-2017</a></li><br>
                <li><a href="Material\sem 1\english\paper\summer-21-05-2018.pdf" download>summer-21-05-2018</a></li><br>
                <li><a href="Material\sem 1\english\paper\summer-07-06-2017.pdf" download>summer-07-06-2017</a></li><br>
                
            </ol>
        </div>

    </div>
</body>
</html>
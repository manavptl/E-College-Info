<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sem-3</title>
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
        <h1>Sem-3 Material</h1>
    </main>
    
    <div class="wrapper">

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Operating Systems (3330701)</h2>
            <ol type="I"><br>
                <li><a href="" >Operating System Concepts</a></li><br>
                <li><a href="" >Processor and Process Management</a></li><br>
                <li><a href="" >Memory Management</a></li><br>
                <li><a href="" >File and Disk Management</a></li><br>
                <li><a href="" >Linux and Shell Programming</a></li><br>
            </ol>   
            <br><br><br><br><br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 3\Papers\os\summer-13-05-2018.pdf" download>summer-13-05-2018</a></li><br>
                <li><a href="Material\sem 3\Papers\os\summer-13-05-2019.pdf" download>summer-13-05-2019</a></li><br>
                <li><a href="Material\sem 3\Papers\os\summer-30-04-2017.pdf" download>summer-30-04-2017</a></li><br>
                <li><a href="Material\sem 3\Papers\os\winter-22-11-2018.pdf" download>winter-22-11-2018</a></li><br>
                
            </ol> 
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Programming In C++ (3330702)</h2>
            <ol type="I"><br>
                <li><a href="" >Principles of Oriented Programming</a></li><br>
                <li><a href="" >Functions in C++ and Working with objects</a></li><br>
                <li><a href="" >Constructor and Destructor</a></li><br>
                <li><a href="" >Inheritance</a></li><br>
                <li><a href="" >Pointers,Virtual function and Polymorphism</a></li><br>
                <li><a href="" >Managing console I/O operations</a></li><br>
            </ol>   
            <br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 3\Papers\c++\summer-09-05-2019.pdf" download>summer-09-05-2019</a></li><br>
                <li><a href="Material\sem 3\Papers\c++\summer-27-04-2017.pdf" download>summer-27-04-2017</a></li><br>
                <li><a href="Material\sem 3\Papers\c++\summer-28-04-2018.pdf" download>summer-28-04-2018</a></li><br>
                <li><a href="Material\sem 3\Papers\c++\winter-20-11-2019.pdf" download>winter-20-11-2019</a></li><br>
               
            </ol>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Database Management System (3330703)</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 3\dbms\CH-1 dbms.pdf" download>Introduction to Database System</a></li><br>
                <li><a href="Material\sem 3\dbms\CH-2 dbms.pdf" download>Database System Architecture</a></li><br>
                <li><a href="Material\sem 3\dbms\CH-3 dbms.pdf" download>Introduction to SQL</a></li><br>
                <li><a href="Material\sem 3\dbms\CH-4 dbms.pdf" download>Relational Algebra and Implementation using SQL</a></li><br>
                <li><a href="Material\sem 3\dbms\CH-5 dbms.pdf" download>Database Integrity Constraints</a></li><br>
                <li><a href="Material\sem 3\dbms\CH-6 dbms.pdf" download>Entity Relational Model</a></li><br>
            </ol>    
            <br><br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 3\Papers\dbms\summer-02-05-2018.pdf" download>summer-02-05-2018</a></li><br>
                <li><a href="Material\sem 3\Papers\dbms\winter-22-11-2016.pdf" download>winter-22-11-2016</a></li><br>
                <li><a href="Material\sem 3\Papers\dbms\summer-15-05-2019.pdf" download>summer-15-05-2019</a></li><br>
                <li><a href="Material\sem 3\Papers\dbms\winter-26-11-2019.pdf" download>winter-26-11-2019</a></li><br>
                
            </ol>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Data Structures (3330704)</h2>
            <ol type="I"><br>
                <li><a href="" > Basic Concepts of Data Structures</a></li><br>
                <li><a href="" >Strings</a></li><br>
                <li><a href="" > Stack and Queues</a></li><br>
                <li><a href="" >Linked List</a></li><br>
                <li><a href="" >Sorting and Hashing</a></li><br>
                <li><a href="" >Trees</a></li><br>
            </ol>  
            <br><br> <br>

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 3\Papers\ds\summer-03-05-2017.pdf" download>summer-03-05-2017</a></li><br>
                <li><a href="Material\sem 3\Papers\ds\summer-17-05-2019.pdf" download>summer-17-05-2019</a></li><br>
                <li><a href="Material\sem 3\Papers\ds\winter-28-11-2018.pdf" download>winter-28-11-2018</a></li><br>
                <li><a href="Material\sem 3\Papers\ds\winter-28-11-2018.pdf" download>winter-28-11-2018</a></li><br>
                
            </ol>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <h2>Microprocessor And Assembly Language Programming (3330705)</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 3\MALP\MALP_Unit_1.pdf" download> Introduction of Microprocessor</a></li><br>
                <li><a href="Material\sem 3\MALP\MALP_Unit_2.pdf" download> Instruction Cycle and Timing Diagram</a></li><br>
                <li><a href="Material\sem 3\MALP\MALP_Unit_3.pdf" download> 8085 Instruction set</a></li><br>
                <li><a href="Material\sem 3\MALP\MALP_Unit_4.pdf" download>Programming Techniques of 8085</a></li><br>
                <li><a href="Material\sem 3\MALP\MALP_Unit_5.pdf" download>8085 Interrupts</a></li><br>
                <li><a href="Material\sem 3\MALP\MALP_Unit_6.pdf" download>Introduction to Advanced Microprocessor</a></li><br>
            </ol>   
            <br> 

            <h2>Papers</h2>
            <ol type="I"><br>
                <li><a href="Material\sem 3\Papers\MALP\winter-09-12-2015.pdf" download>winter-09-12-2015</a></li><br>
                <li><a href="Material\sem 3\Papers\MALP\summer-20-05-2019.pdf" download>summer-20-05-2019</a></li><br>
                <li><a href="Material\sem 3\Papers\MALP\winter-30-11-2018.pdf" download>winter-30-11-2018</a></li><br>
                <li><a href="Material\sem 3\Papers\MALP\summer-07-05-2018.pdf" download>summer-07-05-2018</a></li><br>
                
            </ol>
        </div>

    </div>
</body>
</html>
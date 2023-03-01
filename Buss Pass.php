
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Pass</title>
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
        <h1>Bus Pass Process</h1>
    </main>
    <div class="wrapper">

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <p class="description">Go to any stationary near your home or bus depo and collect bus pass form.</p>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <p class="description">Now fill all the details in the form and attach your 2 passport size photos in it.</p>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <p class="description">Now attach documents such as APL card(Ration card), I'D card, Fee receipt.</p>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <p class="description">Now give that form to class co-ordinator to get stamp and sign.</p>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <p class="description">Later after 1 or 2 days collet the form from class co-ordinator and submit it to your bus depo.</p>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <p class="description">Now your buss pass will ready for use. Have a safe and long Journey!</p>
        </div>

        <div class="container">
            <div class="tape"></div>
            <h2 class="title"></h2>
            <p class="description">THANK YOU!</p>
        </div>

    </div>
</body>
</html>
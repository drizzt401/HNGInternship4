<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>HNG TASK 1</title>
        <link href="https://fonts.googleapis.com/css?family=Princess+Sofia&amp;subset=latin-ext" rel="stylesheet"> 
        <style>
            body {
                background-image: url('background.png');
                background-size:cover;
                background-repeat: no-repeat;
            }
                        
            h1 {
                position: absolute;
                width: 604px;
                height: 117px;
                left: 352px;
                top: 52px;
                font-family: Princess Sofia;
                font-style: normal;
                font-weight: normal;
                line-height: normal;
                font-size: 72px;
                text-align: center;
                color: #F2F2F2;
                text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25);
            }
        
            p {
                position: absolute;
                width: 718px;
                height: 124px;
                left: 285px;
                top: 167px;
                font-family: Poppins;
                font-style: normal;
                font-weight: normal;
                line-height: normal;
                font-size: 48px;
                text-align: center;
                color: #F2F2F2;
                text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.25);
            }

            div{
                position: absolute;
                width: 880px;
                height: 122px;
                left: 224px;
                top: 356px;
                background: #F2994A;
                box-sizing: border-box;
                box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.25);
                border-radius: 50px;
            }

            h2{
                text-shadow: 3px 3px 3px rgba(0, 0, 0, 0.25);
                color:black;
                font-family: Poppins;
                font-style: solid;
                font-weight: normal;
                line-height: normal;
                font-size: 48px;
                text-align: center;
                margin:25px 190px 75px 100px;
            }

            h3{ 
            
                text-shadow: 3px 3px 3px rgba(0, 0, 0, 0.25);
                color:black;
                font-family: Poppins;
                font-style: solid;
                font-weight: normal;
                line-height: normal;
                font-size: 25px;
                text-align: right;
                margin: -120px 200px 75px 100px;
            }
        </style>
    </head>
    <body>
        <h1>Welcome User!!!</h1>
        <p> Today is: </p>
        <div>
            <h2>
                <?php 
                    echo date("F jS, Y"). " "
                ?>
            </h2>

            <h3> 
                <?php
                    echo date("h:i A"); 
                ?>
            </h3>
        </div>
    </body> 
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        *{
            margin:0;
            padding:0;
        }
        body{overflow: hidden;}

        #body{
            transition: background ease .5s;
            position: absolute;
            width:300vw;
            height: 300vh;
            top:0;
            left:0;
            background-color:rgb(97, 218, 157);
        }
        input{
            display:none;
        }
        label.icons{
            transition: transform ease .5s,color  ease .5s;
            font-size:25px;
            position: absolute;
            z-index: 3;
            color:rgb(155, 143, 143);
            left:50%;
            top:50%;
            transform: translate(-50%,-50%);
        }
        label.home{
            transform: translate(-135px,-20px);
        }
        label.search{
            transform: translate(-50px,-20px);
        }
        label.heart{
            transform: translate(30px,-20px);
        }
        label.bell{
            transform: translate(120px,-20px);
        }
        div#box{
            z-index: 1;
            width:350px;
            height:100px;
            background-color: white;
            box-shadow:0px 2px 3px grey;
            position: absolute;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            border:1px solid white;
        }

        span.title{
            transition: color.5s,transform .5s,opacity .5s;
            font-size:13px;
            position: absolute;
            z-index: 2;
            color:rgb(155, 143, 143);
            left:50%;
            top:50%;
            transform: translate(-50%,-50%);
            opacity: 0;
        }
        span.home{
            transform: translate(-135px,28px);
        }
        span.search{
            transform:translate(-50px,28px);
        }
        span.heart{
            transform:translate(33px,28px);
        }
        span.bell{
            transform:translate(98px,28px);
        }
        #one:checked~label.home{
            transform: translate(-135px,-68px);
            color:rgb(97, 218, 157);
        }
        #two:checked~label.search{
            transform: translate(-48px,-64px);
            color:rgb(236, 202, 47);
        }
        #three:checked~label.heart{
            transform: translate(30px,-68px);
            color:rgb(240, 78, 105);
        }
        #four:checked~label.bell{
            transform: translate(120px,-68px);
            color:rgb(58, 83, 224);
        }
        #one:checked~div#body{
            background-color:rgb(97, 218, 157);
        }
        #two:checked~div#body{
            background-color:rgb(236, 202, 47);
        }
        #three:checked~div#body{
            background-color:rgb(240, 78, 105);
        }
        #four:checked~div#body{
            background-color: rgb(58, 83, 224);
        }
        #one:checked~span.home{
            color:rgb(97, 218, 157);
            opacity:1;
            transform: translate(-135px,0px);
        }
        #two:checked~span.search{
            color:rgb(236, 202, 47);
            opacity:1;
            transform:translate(-50px,0px);
        }
        #three:checked~span.heart{
            color:rgb(240, 78, 105);
            opacity:1;
            transform:translate(33px,0px);
        }
        #four:checked~span.bell{
            color: rgb(58, 83, 224);
            transform:translate(98px,0px);
            opacity:1;
        }
        div.border{
            position: absolute;

            z-index: 2;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            border:6px solid rgb(97, 218, 157);
            width:45px;
            height: 45px;
            background-color: white;
            transition: border .5s,transform .5s,border-radius .3s;
        }
        div.fst{
            transform:translate(-144px,-75px);
        }
        #one:checked~div.border{
            border:6px solid rgb(97, 218, 157);
            transform:translate(-144px,-75px);
            border-radius: 0%;
        }
        #two:checked~div.border{
            border:6px solid rgb(236, 202, 47);
            transform:translate(-60px,-75px);
            border-radius: 50%;
            width:50px;
            height: 50px;
        }
        #three:checked~div.border{
            border:6px solid rgb(240, 78, 105);
            transform:translate(22px,-75px) ;
            transform-origin: center center;
            outline-color: rgb(240, 78, 105);
            border-radius: 0px 0px 50px 50px;
        }

        #four:checked~div.border{
            border:6px solid rgb(58, 83, 224);
            transform:translate(110px,-75px) ;
            border-top-left-radius: 50%;
            border-top-right-radius: 50%;

        }
        div.effect{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);

        }
    </style>
</head>


<body>
<input type="radio" id="one" name="buttons" checked>
<label for="one" class="icons home"><span class="glyphicon glyphicon-home"></span></label>
<input type="radio" id="two" name="buttons">
<label for="two" class="icons search"><span class="glyphicon glyphicon-search"></span></label>
<input type="radio" id="three" name="buttons">
<label for="three" class="icons heart"><span class="glyphicon glyphicon-heart"></span></label>
<input type="radio" id="four" name="buttons">
<label for="four" class="icons bell"><span class="glyphicon glyphicon-bell"></span></label>
<div id="box">
</div>
<div id="body"></div>
<span  class="title home">Home</span>
<span class="title search">Search</span>
<span class="title heart">Likes</span>
<span class="title bell">Notifications</span>
<div class="border"></div>
<div class="effect"></div>
</body>

<!-- inspired by dribble -->
</html>
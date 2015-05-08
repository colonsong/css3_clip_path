
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>

  </head>

  <body>


    <div class="box c"></div>
    <div class="box o"></div>
    <div class="box l"></div>
    <div class="box o2"></div>
    <div class="box n"></div>
    <style>
    .box{
  position:relative;


}

.box:before{
  content:'';
  position:absolute;
  z-index:2;

 top:50px;
  width:50px;
  height:50px;
  background:#113557;
  border-radius:2px;
  transform: rotate(15deg);
  -webkit-animation:box .8s infinite ;
}
.c:before
{

  -webkit-clip-path: polygon(94% 31%, 97% 18%, 78% 7%, 56% 3%, 35% 4%, 16% 23%, 7% 45%, 7% 69%, 17% 87%, 36% 98%, 54% 99%, 79% 98%, 90% 89%, 97% 80%, 82% 78%, 72% 89%, 58% 89%, 41% 87%, 28% 77%, 20% 56%, 24% 42%, 34% 26%, 47% 22%, 65% 21%, 82% 23%, 84% 32%);
  clip-path: polygon(94% 31%, 97% 18%, 78% 7%, 56% 3%, 35% 4%, 16% 23%, 7% 45%, 7% 69%, 17% 87%, 36% 98%, 54% 99%, 79% 98%, 90% 89%, 97% 80%, 82% 78%, 72% 89%, 58% 89%, 41% 87%, 28% 77%, 20% 56%, 24% 42%, 34% 26%, 47% 22%, 65% 21%, 82% 23%, 84% 32%);
left:50px;
top:0px;
width:100px;
height:100px;

-webkit-animation:boxc .8s infinite ;
}
.o:before
{
  -webkit-clip-path: polygon(25% 31%, 14% 89%, 33% 85%, 37% 43%, 71% 46%, 75% 75%, 29% 73%, 26% 88%, 88% 88%, 82% 32%);
clip-path: polygon(25% 31%, 14% 89%, 33% 85%, 37% 43%, 71% 46%, 75% 75%, 29% 73%, 26% 88%, 88% 88%, 82% 32%);
 left:120px;
}
.l:before
{
  -webkit-clip-path: polygon(40% 3%, 48% 3%, 57% 91%, 42% 92%);
clip-path: polygon(40% 3%, 48% 3%, 57% 91%, 42% 92%);
  left:150px;
}
.o2:before
{
  -webkit-clip-path: polygon(25% 31%, 14% 89%, 33% 85%, 37% 43%, 71% 46%, 75% 75%, 29% 73%, 26% 88%, 88% 88%, 82% 32%);
clip-path: polygon(25% 31%, 14% 89%, 33% 85%, 37% 43%, 71% 46%, 75% 75%, 29% 73%, 26% 88%, 88% 88%, 82% 32%);
 left:180px;
}
.n:before
{
  -webkit-clip-path: polygon(39% 7%, 27% 6%, 7% 95%, 21% 95%, 36% 28%, 71% 87%, 80% 92%, 92% 18%, 81% 14%, 73% 67%);
clip-path: polygon(39% 7%, 27% 6%, 7% 95%, 21% 95%, 36% 28%, 71% 87%, 80% 92%, 92% 18%, 81% 14%, 73% 67%);
  left:225px;
}
@-webkit-keyframes box{
  0%{


  }
  20%{
    border-radius:5px;  /*從 20% 的地方才開始變形*/

  }
  50%{
    top:80px;

    background: #f0fa7a;
    border-bottom-right-radius:20px;


  }
  80%{
    transform: rotate(5deg);


  }
  100%{
    top:50px;
    border-radius:2px;

  }
}
@-webkit-keyframes boxc{
  0%{


  }
  20%{
    border-radius:5px;  /*從 20% 的地方才開始變形*/
    background: #f0fa7a;
  }
  50%{
    top:50px;


    border-bottom-right-radius:20px;


  }
  80%{
    transform: rotate(5deg);


  }
  100%{
    top:0px;
    border-radius:2px;

  }
}
.box:after{


}
.c:after
{
  content:'';
  position:absolute;
  z-index:1;
  top:128px;

  width:44px;
  height:3px;
  background:#eaeaea;
  border-radius:100%;
  left:52px;
  -webkit-animation:slidein .8s infinite ;
}
.o:after
{
  left:104px;
}
.l:after
{
  left:156px;
}
.o:after
{
  left:208px;
}
.n:after
{
  left:260px;
}
@-webkit-keyframes slidein{
  from{
    left:54px;
    width:40px;
    background:#eaeaea;
  }
  to{

    left:250px;   /*讓陰影保持在原位*/

    background:#eee;
  }
}
    </style>






    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

  </body>
</html>

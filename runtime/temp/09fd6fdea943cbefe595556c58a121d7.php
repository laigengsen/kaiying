<?php /*a:1:{s:67:"D:\phpstudy_pro\WWW\qiyezhan\application\user\view\index\index.html";i:1564028724;}*/ ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="Generator" content="EditPlus®">
		<meta name="Author" content="">
		<meta name="Keywords" content=""><!--关键词-->
		<meta name="Description" content=""><!--描述-->
		<title>Document</title>
		<style type="text/css">
			body,p,ul,li,h1,h2,h3,h4,h5,h6,dl,dd,dt,a,img,span{line-height:normal;}/*避免行高被继承*/
			h1,h2,h3,h4,h5,h6{font-size: 16px;font-weight: normal;}
			body,p,ul,h1,dl,dd,input{margin: 0;}
			ul,ol,td,th,input{padding: 0;list-style: none;}
			a{text-decoration: none;}
			img{display: block; border: 0;}
			
			.nav{
				position: relative;
				margin: 300px;
				transform-style: preserve-3d;
            animation: rotate 10s linear infinite;
			}
         .nav:hover{
            cursor: pointer;
            /* animation-play-state: paused; */
         }
         @keyframes rotate{
            from{
               transform: rotateX(0deg) rotateY(0deg);
            }to{
               transform: rotateX(360deg) rotateY(360deg);
            }
         }
			.nav>li{
				position: absolute;
				top: 0;
				left: 0;
				bottom: 0;
				right: 0;
				margin: auto;
				width: 200px;
				height: 200px;
				box-shadow: 0 0 10px #999 inset;
            background-color: #ffcc33;
            opacity: 0.6;
            border-radius: 20px;
            perspective: 1000px;
			}
         .one /*前 3*/
            transform: rotateX(0deg) translateZ(100px);
            background: radial-gradient(circle at 25% 25%,#000 10%,#000 13%,transparent 13%),
            radial-gradient(circle at 75% 75%,#000 10%,#000 13%,transparent 13%),
            radial-gradient(circle at 50% 50%, #000 10%,#000 15%,transparent 15%);
           
         .two/*后 4*/
            transform: rotateX(180deg) translateZ(100px);
            background: radial-gradient(circle at 25% 25%,#cc3300 10%,#cc3300 13%,transparent 13%),
            radial-gradient(circle at 75% 75%,#cc3300 10%,#cc3300 13%,transparent 13%),
            radial-gradient(circle at 25% 75%,#cc3300 10%,#cc3300 13%,transparent 13%),
            radial-gradient(circle at 75% 25%,#cc3300 10%,#cc3300 13%,transparent 13%);
         
         .three/*左 5*/
            transform: rotateY(-90deg) translateZ(100px);
            background: radial-gradient(circle at 25% 25%,#000 10%,#000 13%,transparent 13%),
            radial-gradient(circle at 75% 25%,#000 10%,#000 13%,transparent 13%),
            radial-gradient(circle at 50% 50%,#000 10%,#000 13%,transparent 13%),
            radial-gradient(circle at 25% 75%,#000 10%,#000 13%,transparent 13%),
            radial-gradient(circle at 75% 75%,#000 10%,#000 13%,transparent 13%);
         
         .four{ /*右 2*/
            transform: rotateY(90deg) translateZ(100px);
            background: radial-gradient(circle at 30% 50%,#000 10%,#000 15%,transparent 15%),
            radial-gradient(circle at 60% 50%,#000 10%,#000 15%,transparent 15%);
         }
         .five{ /*上 1*/
            transform: rotateX(90deg) translateZ(100px);
            background-image: radial-gradient(circle at 50% 50%, #cc3300 10%,#cc3300 15%,transparent 15%);
         }
         .six/*下 6*/
            transform: rotateX(90deg) translateZ(-100px);
            background: radial-gradient(circle at 25% 30%,#cc3300 10%,#cc3300 13%,transparent 13%),
            radial-gradient(circle at 50% 30%,#cc3300 10%,#cc3300 13%,transparent 15%),
            radial-gradient(circle at 75% 30%,#cc3300 10%,#cc3300 13%,transparent 13%),
            radial-gradient(circle at 25% 65%,#cc3300 10%,#cc3300 13%,transparent 13%),
            radial-gradient(circle at 50% 65%,#cc3300 10%,#cc3300 13%,transparent 13%),
            radial-gradient(circle at 75% 65%,#cc3300 10%,#cc3300 13%,transparent 13%);
         
			.nav:hover .one{
            background-color: skyblue;
            opacity: 0.6;
            animation: run1 .3s linear forwards;
         }
         @keyframes run1{
            from{
               transform: rotateX(0deg) translateZ(100px);
            }to{
               transform: rotateX(0deg) translateZ(200px);
            }
         }
         .nav:hover .two{
            background-color: skyblue;
            opacity: 0.6;
            animation: run2 .3s linear forwards;
         }
         @keyframes run2{
            from{
               transform: rotateX(180deg) translateZ(100px);
            }to{
               transform: rotateX(180deg) translateZ(200px);
            }
         }
         .nav:hover .three{
            background-color: skyblue;
            opacity: 0.6;
            animation: run3 .3s linear forwards;
         }
         @keyframes run3{
            from{
               transform: rotateY(-90deg) translateZ(100px);
            }to{
               transform: rotateY(-90deg) translateZ(200px);
            }
         }
         .nav:hover .four{
            background-color: skyblue;
            opacity: 0.6;
            animation: run4 .3s linear forwards;
         }
         @keyframes run4{
            from{
               transform: rotateY(90deg) translateZ(100px);
            }to{
               transform: rotateY(90deg) translateZ(200px);
            }
         }
         .nav:hover .five{
            background-color: skyblue;
            opacity: 0.6;
            animation: run5 .3s linear forwards;
         }
         @keyframes run5{
            from{
               transform: rotateX(90deg) translateZ(100px);
            }to{
               transform: rotateX(90deg) translateZ(200px);
            }
         }
         .nav:hover .six{
            background-color: skyblue;
            opacity: 0.6;
            animation: run6 .3s linear forwards;
         }
         @keyframes run6{
            from{
               transform: rotateX(90deg) translateZ(-100px);
            }to{
               transform: rotateX(90deg) translateZ(-200px);
            }
         }
         

		</style>
	</head>
	<body>
		<ul class="nav">
			<li class="one"></li>
			<li class="two"></li>
			<li class="three"></li>
			<li class="four"></li>
			<li class="five"></li>
			<li class="six"></li>
		</ul>
	</body>
</html>

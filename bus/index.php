
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
      <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Josefin Sans", sans-serif;
}

header {
  width: 100%;
  height: 100vh;
  background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.15)),
    url("ST-Bus.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  image:url("buss3.jpg");
}

nav {
  width: 100%;
  height: 15vh;
  background: rgba(0, 0, 0, 0.2);
  color: white;
  display: flex;
  justify-content: space-between;
  align-items: center;
  text-transform: uppercase;
}

nav .logo {
  width: 25%;
  text-align: center;
  /*background: red;*/
}

nav .menu {
  width: 40%;
  display: flex;
  justify-content: space-around;
}

nav .menu a {
  width: 40%;
  text-decoration: none;
  color: white;
  font-weight: bold;
}

nav .menu a:first-child {
  color: #00b894;
}

main {
  width: 100%;
  height: 85vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  color: white;
}

section h3 {
  font-size: 35px;
  font-weight: 200;
  letter-spacing: 3px;
  text-shadow: 1px 1px 2px black;
}

section h1 {
  margin: 30px 0 20px 0;
  font-size: 55px;
  font-weight: 700;
  text-shadow: 2px 1px 5px black;
  text-transform: uppercase;
}

section p {
  font-size: 25px;
  word-spacing: 2px;
  margin-bottom: 25px;
  text-shadow: 1px 1px 1px black;
}

section a {
  padding: 12px 30px;
  border-radius: 4px;
  outline: none;
  text-transform: uppercase;
  font-size: 13px;
  font-weight: 500;
  text-decoration: none;
  letter-spacing: 1px;
  transition: all 0.5s ease;
}

section .btnone {
  /*background: #00b894;*/
  background: #fff;
  color: #000;
}

.btnone:hover {
  background: #00b894;
  color: white;
}

section .btntwo {
  background: #00b894;
  color: white;
}

.btntwo:hover {
  background: #fff;
  color: #000;
}

.change_content:after {
  content: "";
  animation: changetext 10s infinite linear;
  color: #00b894;
}

@keyframes changetext {
  0% {
    content: "Pandharpur";
  }
  20% {
    content: "solapur";
  }
  35% {
    content: "Satara";
  }
  60% {
    content: "pune";
  }
  80% {
    content: "dhondewadi";
  }
  100% {
    content: "Mumbai";
  }
}
      </style>
</head>
<body>

<header>
	
<nav>
	<div class="logo"> <h1 style="font-size: 20px;"><img src="msrtc.png" width="100" height="100"> Bus Status </h1> </div>
	<div class="menu">
		<a href="#" style="font-size: ">Home</a>
		<a href="info1.php">Information</a>
		<a href="login.php" >login</a>
		<a href="chat.php">Chatting</a>
	</div>
</nav>

	<main>
		<section>
			<h3>Welcome To Bus updation web page</h3>
			<h1>Check updations <span class="change_content"> </span> <span style="margin-top: -10px;"> | </span> </h1>
	
			
		</section>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dolphin's Portal</title>
    <style>
        *{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
}
main{
  height: 100vh;
  background: url('https://images.unsplash.com/photo-1607153333879-c174d265f1d2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80') fixed no-repeat;
  background-size: cover;
}
#container{
  width: 350px;
  height: 500px;
  background: inherit;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  margin-left: -175px;
  margin-top: -250px;
  border-radius: 8px;
}
#container:before{
  width: 400px;
  height: 550px;
  content: "";
  position: absolute;
  top: -25px;
  left: -25px;
  bottom: 0;
  right: 0;
  background: inherit;
  box-shadow: inset 0 0 0 200px rgba(255,255,255,0.2);
  filter: blur(10px);
}
form img{
  width: 120px;
  height: 120px;
  border-radius: 100%;
}
form{
  text-align: center;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
}
input{
  background: 0;
  width: 200px;
  outline: 0;
  border: 0;
  border-bottom: 2px solid rgba(255,255,255, 0.3);
  margin: 20px 0;
  padding-bottom: 10px;
  font-size: 18px;
  font-weight: bold;
  color: rgba(255,255,255, 0.8);
}
input[type="submit"]{
  border: 0;
  border-radius: 8px;
  padding-bottom: 0;
  height: 60px;
  background: #df2359;
  color: white;
  cursor: pointer;
  transition: all 600ms ease-in-out;
}
input[type="submit"]:hover{
  background: #C0392B;
}
span a{
  color: rgba(255,255,255, 0.8);
}
    </style>
</head>
<body>
    <main>
        <div id="container">
          <form action="">
            <img src="https://scontent.fktp2-1.fna.fbcdn.net/v/t1.6435-9/138282373_1310206406021293_669057774720678789_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=174925&_nc_ohc=OVomVy0fs3kAX8E-CNW&_nc_ht=scontent.fktp2-1.fna&oh=e88d83367b958708d2ea5438ba5ed6d3&oe=616691FC"><br>
            <input type="text" value="USER NAME"><br>
            <input type="password"><br>
            <input type="submit" value="SIGN IN"><br>
          </form>
        </div>
        </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

    .container{
      background-color: blue;
      margin: 10px auto;
      width: 90%;
      border: 3px solid black;
      flex: auto;
    }
    .kotak{
      text-align: center;
      width: 60px;
      height: 60px;
      background-color: aqua;
      transition: 3s;        
    }
    .container:hover .kotak{
      transform: rotate(720deg);
      background-color: yellow;
      margin-left: 100%;
    }


    .kotak1{
      border: 1px solid white;
      height: 30px;
      width: 70px;
      background-color: black;
      color: aliceblue;
      text-align: center;
      line-height: 30px;
      transition: .1s;
    }
    .kotak1:hover {
      color: grey
    }
 
    .kotak2{
      border: 1px solid white;
      height: 30px;
      width: 70px;
      background-color: black;
      color: aliceblue;
      text-align: center;
      line-height: 30px;
      transition: .1s;      
    }
    .kotak2:hover{
      animation: ronal 2s alternate;
    }

    @keyframes ronal {
      from{
        width: 100px;
      }
      to{
        width: 10px;
      }
    }

  </style>
</head>
<body>
  
  <h1>Belajar animasi</h1><hr>

  <div class="container">
    <div class="kotak">Hallo</div>
  </div>

  <div class="container">
    <div class="kotak1">Home</div>
    <div class="kotak1">About</div>
    <div class="kotak1">Database</div>
    <div class="kotak1">This</div>
    <div class="kotak1">Setting</div>
  </div>

    <div class="kotak2"></div>
  
</body>
</html>
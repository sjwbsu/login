<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logIn for my program</title>
    <style>
      body{
        background-color:steelblue;
      }
      .form a{
        display: flex;
        margin-left: 20%;
        margin-bottom: 20px;

      }
        h2{
            text-align: center;
            font-family: 'Courier New', Courier, monospace;
            border-bottom: 2px solid black;
        }
        .form input{
            text-align: center;
        }
       .form{
        background-color:lightgrey;
        border: 1px solid black;
        width: 30%;
        text-align: center;
        margin-top: 10%;
        margin-left: 30%;
        border-radius:10px;
        box-shadow: 8px 8px 9px black ;
       }
       /*bg*/

        .buttons {
          display: flex;
          justify-content: space-around;
          top: 20px;
          left: 20px;
          border-radius: 10px;
        }

        .buttons button {
          width: 100px;
          height: 30px;
          background-color: white;
          margin: 20px;
          color: #568fa6;
          position: relative;
          overflow: hidden;
          font-size: 14px;
          letter-spacing: 1px;
          font-weight: 500;
          text-transform: uppercase;
          transition: all 0.3s ease;
          cursor: pointer;
          border: 0;
          display: flex;
          align-items: center;
          justify-content: center;
          border-radius: 3px;
        }

        .buttons button:before, .buttons button:after {
          content: "";
          position: absolute;
          width: 0;
          height: 2px;
          background-color:black;
          transition: all 0.3s cubic-bezier(0.35, 0.1, 0.25, 1);
        }

        .buttons button:before {
          right: 0;
          top: 0;
          transition: all 0.5s cubic-bezier(0.35, 0.1, 0.25, 1);
        }

        .buttons button:after {
          left: 0;
          bottom: 0;
        }

        .buttons button span {
          width: 100%;
          height: 100%;
          position: absolute;
          left: 0;
          top: 0;
          margin: 0;
          padding: 0;
          z-index: 1;
        }

        .buttons button span:before, .buttons button span:after {
          content: "";
          position: absolute;
          width: 2px;
          height: 0;
          background-color:black;
          transition: all 0.3s cubic-bezier(0.35, 0.1, 0.25, 1);
        }

        .buttons button span:before {
          right: 0;
          top: 0;
          transition: all 0.5s cubic-bezier(0.35, 0.1, 0.25, 1);
        }

        .buttons button span:after {
          left: 0;
          bottom: 0;
        }

        .buttons button p {
          padding: 0;
          margin: 0;
          transition: all 0.4s cubic-bezier(0.35, 0.1, 0.25, 1);
          position: absolute;
          width: 100%;
          height: 100%;
        }

        .buttons button p:before, .buttons button p:after {
          position: absolute;
          width: 100%;
          transition: all 0.4s cubic-bezier(0.35, 0.1, 0.25, 1);
          z-index: 1;
          left: 0;
        }

        .buttons button p:before {
          content: attr(data-title);
          top: 50%;
          transform: translateY(-50%);
        }

        .buttons button p:after {
          content: attr(data-text);
          top: 150%;
          color:black;
        }

        .buttons button:hover:before, .buttons button:hover:after {
          width: 100%;
        }

        .buttons button:hover span {
          z-index: 1;
        }

        .buttons button:hover span:before, .buttons button:hover span:after {
          height: 100%;
        }

        .buttons button:hover p:before {
          top: -50%;
          transform: rotate(5deg);
        }

        .buttons button:hover p:after {
          top: 50%;
          transform: translateY(-50%);
        }

        .buttons button.start {
          background-color: #44d8a4;
          box-shadow: 0px 5px 10px -10px rgba(0, 0, 0, 0.2);
          transition: all 0.2s ease;
        }

        .buttons button.start p:before {
          top: -50%;
          transform: rotate(5deg);
        }

        .buttons button.start p:after {
          color: white;
          transition: all 0s ease;
          content: attr(data-start);
          top: 50%;
          transform: translateY(-50%);
          animation: start 0.3s ease;
          animation-fill-mode: forwards;
        }

        @keyframes start {
          from {
            top: -50%;
          }
        }

        .buttons button.start:hover:before, .buttons button.start:hover:after {
          display: none;
        }

        .buttons button.start:hover span {
          display: none;
        }

        .buttons button:active {
          outline: none;
          border: none;
        }

        .buttons button:focus {
          outline: 0;
        }

    </style>
</head>
<body>
 
    <form action="" method="post" class="form">
           <h2>LOG IN</h2>
       <label for="name">Enter your name :</label><br>
       <input type="text" name="name" id="name" placeholder="your name "> <br>
       <label for="pass"> Enter your password :</label><br>
       <input type="password" name="pass" id="pass" placeholder="your password"><br>
       <div class="buttons">
            <button class="btn"><span></span><p data-start="good luck!" data-text="submit" data-title="confirm"></p></button>
        </div>
         <a href="register.php" class="link">Register</a>
    </form>
   
</body>
</html>
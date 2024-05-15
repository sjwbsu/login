<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body{
        background-image: url('Hi.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
       }
        .form{
          border: 1px solid black;
          width: 40%;
          margin-left: 30%;
          margin-right: 30%;
          margin-top:5% ;
          border-radius: 10px;
          box-shadow: 2px 1px 2px white;
          padding:5%;
          
        }
        .form input{
            margin: 8px;
            border: none;
            border-bottom: 2px solid black;
            background-color:unset;
            color: white;
        }
        label{
            color: black;
        }
        ::placeholder{
            color:black;
            opacity: 0.8;
        }
   
        #sub{
            background-color:black;
            border-radius:10px ;
            transition: 0.5s ease;
            cursor: pointer;
            margin-left: 30%;
            margin-top: 10%;
            width: 30%;
            padding: 3%;
            font-size: 100%;
                }
        #sub:hover{
            transform: scale(1.1);
            
        }
     
       
    </style>
</head>
<body>
    <form action="" method="post" class="form">
        <label for="Name"> First Name :</label>
        <input type="text" name="name" id="Name" placeholder="First Name"><br>
        <label for="last">Last Name :</label>
        <input type="text" name="last" id="last" placeholder="Last Name"><br>
        <label for="user">User Name :</label>
        <input type="text" name="user" id="user" placeholder="User Name"><br>
        <label for="pass">Password :</label>
        <input type="password" name="pass" id="pass" placeholder="Password"><br>
        <label for="select"> Country :</label>
        <select name="arr" id="select">
            <option value="SY">SY</option>
            <option value="FR">FR</option>
            <option value="QA">QA</option>
            <option value="UK">UK</option>
            <option value="LB">LB</option>
        </select><br>
        <label for="email">E_mail:</label>
        <input type="email" name="" id="email" placeholder="Email"><br>
        <label for="date">Birth Date : </label>
        <input type="text" name="date" id="date" placeholder="Birth Date">
        <input type="date" name="" id="" style="border: none;"><br>
        <label for="pic"> profile picture :</label>
        <input type="text" name="pic" id="pic" placeholder="profile picture">
        <input type="file" value="Browse"name="pic" id="pic" ><br>
        <input type="submit" name="submit" value="Register" id="sub" >




    </form>
    
</body>
</html>
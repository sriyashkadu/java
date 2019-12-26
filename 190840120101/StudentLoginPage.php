<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Login</title>

 <style>  
    #form1{ 
        background-color:gainsboro
        position: absolute;  
        margin-left: 48vh;
        margin-right: 45vh;
    }
    #submit
    {
    text-align: center;
    }
    table,tr,td{
        border: 2px solid slategray;
        border-collapse: collapse;
    }

    body{
        background-color:bisque
    }

 </style>
</head>

    <body>
        <div style="position: relative; margin: 30vh;">
            
            <form id="form1" action="validate.php" method="POST">
                <h2 style="black;text-align: center; ">Student Login </h2>    
                <table >
                           
               <tr>
                   <td> Email:</td><td><input type="text" required placeholder="Email" name="email"  style="padding:1vh;" required></td>
               </tr>
            
                 <td>Password</td><td><input type="password" placeholder="Enter Password" name="pass" style="padding:1vh;" required></td>
             </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" aria-colspan="2" id="submit"  value="Login   " style="padding-left:41%;padding-right: 40%;"></td>
            </tr>     
            </table>
            </form>
        </div>
    </body>
</html>
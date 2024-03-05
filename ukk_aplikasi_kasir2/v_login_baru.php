<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form action="m_login.php" method="post">
            <div class="field">
               <input type="text" name="username_login" required>
               <label>Username</label>
            </div>
            <div class="field">
               <input type="password" name="password_login" required>
               <label>Password</label>
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
         </form>
      </div>
   </body>
</html>
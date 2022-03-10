<head>
      <meta charset="utf-8">
      <title>Login Aja</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="center">
         <input type="checkbox" id="show">
         <label for="show" class="show-btn">Login Here</label>
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
               Login Form
            </div>
            <form action="#">
               <div class="data">
                  <label>Email</label>
                  <input type="email" required>
               </div>
               <div class="data">
                  <label>Password</label>
                  <input type="password" required>
               </div>
               <div class="forgot-pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">login</button>
               </div>
               <div class="signup-link">
                  Not a member? <a href="#">Signup now</a>
               </div>
            </form>
         </div>
      </div>
   </body>
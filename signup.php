<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Sign in page</title>
</head>
<body>
    <div class="container-fluid g-0">
        <header>
        <a href="/index.php"><button class="btn-header" id="btn-home" type="button">
        <svg width="45" height="45" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="62" height="62" rx="8" fill="#143C66"/>
        <path d="M23.25 54.25V38.75C23.25 37.3797 23.7943 36.0656 24.7633 35.0966C25.7322 34.1277 27.0464 33.5833 28.4167 33.5833H33.5833C34.9536 33.5833 36.2678 34.1277 37.2367 35.0966C38.2057 36.0656 38.75 37.3797 38.75 38.75V54.25M12.9167 31H7.75L31 7.75L54.25 31H49.0833V49.0833C49.0833 50.4536 48.539 51.7678 47.57 52.7367C46.6011 53.7057 45.287 54.25 43.9167 54.25H18.0833C16.713 54.25 15.3989 53.7057 14.4299 52.7367C13.461 51.7678 12.9167 50.4536 12.9167 49.0833V31Z" stroke="#EEECA1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>  
        </button></a>
        </header>
  <div class="right-sidebar" id="right-sidebar-form">
  <div class="form-frame">
    <h3>Signup for news</h3>      
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <!-- <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group">
      <label for="pwd_conf">Confirm Password:</label>
      <input type="password" class="form-control" id="pwd_conf" placeholder="Confirm password" name="pswdconf">
    </div> -->

    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="agree"> Piekrītu noteikumiem
      </label>
    </div>
    <button type="submit" class="btn-left-menu">Submit</button>
</form>
        </div>
        
        </div> 
   
  <footer class="container-fluid"><p>© 2022 Footer</p></footer>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>
</html>
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.min.css" />
    <link rel="stylesheet" href="style3.css" />
    <link rel="stylesheet" href="header-1.css" />
    <title>Movie App</title>
</head>
<style>
a:link, a:visited {
  background-color: #373b69;
  color: white;
  border: 2px solid yellow;
  margin-top:15px;
  margin-left:10px;
  margin-right:10px;
  padding: 7px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #22254b;
  color: white;
}
</style>
<body>
    
    <header>
    <div class="wrapper site-header__wrapper">
        <a href="#" class="brand">MovieProbe</a>
        <nav class="nav">
          <button class="nav__toggle" aria-expanded="false" type="button">
            menu
          </button>
          <ul class="nav__wrapper">
            <li class="nav__item"><a href="#">Home</a></li>
            <li class="nav__item"><a href="#">About</a></li>
            <li class="nav__item"><a href="#">Contact</a></li>
            <li class="nav_item"><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
      </div>
      <h1 style="text-align:center; color:white;font-size:20px">Hello, <?php echo $_SESSION['name']; ?></h1>
      <div class="header-left">
        
        <form id="form">
            <input type="text" placeholder="Search" id="search" class="search">
        </form>
      </div>
    </header>
    <div id="tags"></div>
    <div id="myNav" class="overlay">

        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      
        <!-- Overlay content -->
        <div class="overlay-content" id="overlay-content"></div>
        
        <a href="javascript:void(0)" class="arrow left-arrow" id="left-arrow">&#8656;</a> 
        
        <a href="javascript:void(0)" class="arrow right-arrow" id="right-arrow" >&#8658;</a>

      </div>
    <main id="main"></main>
    <div class="pagination">
        <div class="page" id="prev">Previous Page</div>
        <div class="current" id="current">1</div>
        <div class="page" id="next">Next Page</div>

    </div>
    
    <script src="header-1.js"></script>

    <script src="script.js"></script>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
<nav id="navbar">
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <!-- <a href="signup.php">Sign up</a> -->
    <?php if(isset($_SESSION['email']) && $_SESSION['email'] != null) { ?>
        <a href="logout.php">Sign out</a>
        <a href="prfile.php"> <?php echo $_SESSION['username']; ?> </a>
    <?php } else { ?>    
        <a href="login.php">Sign in</a>
    <?php } ?> 
    
   
</nav>
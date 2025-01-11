<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="./"><img src="./public/logo2.png" alt="logo" height="70px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        </li>

        <?php
        // Check if the session user exists and has a username
        if (isset($_SESSION['user']['username'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="./server/request.php?logout=true">Logout (<?php echo ucfirst($_SESSION['user']['username']) ?>)</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?ask=true">Ask A Question</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id'] ?>">My Questions</a>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="?login=true">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?signup=true">SignUp</a>
          </li>
        <?php } ?>
        


        
        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Question</a>
        </li>
        
      </ul>
    </div>
    <form class="d-flex" action="">
      <input class="form-control me-2" name="search" type="search" placeholder="Search questions">
      <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>
  </div>
</nav>

<nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content -->
</nav>
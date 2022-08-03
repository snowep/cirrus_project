<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == 'index') ? 'active' : ''; ?>" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Menu 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Menu 2</a>
        </li>
      </ul>
      <form action="/cirrus_project/controller/logout.php" class="d-flex">
        <button class="btn btn-danger my-2 my-sm-0" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>
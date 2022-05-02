   <div class="navigation-header">
        <div class="navigation-menu">
            <nav class="navbar  navbar-expand-sm navbar-light" id="admin-nav">
                <a class="navbar-brand" href="../../index.php"><img src="../../img/expressLogo.png" /></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#admin-name" aria-controls="admin-name" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="admin-name">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="dropdownId"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                ><?php echo $_SESSION['username'] ?></a
              >
            </li>
          </ul>
          <div class="logout"><a href="../../logout.php">Log-Out</a></div>
    </div>
            </nav>
        </div>

    </div>
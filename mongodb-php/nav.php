<?php $page_name = basename($_SERVER['PHP_SELF']); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP MONGODB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link <?php echo ($page_name == "index.php") ? 'active' : ''; ?>" aria-current="page" href="index.php">Read Me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($page_name == "post_list.php") ? 'active' : ''; ?>" aria-current="page" href="post_list.php">Post List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($page_name == "post_create.php") ? 'active' : ''; ?>" href="post_create.php">Create Post</a>
            </li>

            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> -->

        </ul>
        <form class="d-flex" action="post_search.php" method="get">
            <input type="search" name="key" id="key" class="form-control me-2" placeholder="Post Title" aria-label="Search" />
            <button class="btn btn-outline-danger text-white" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
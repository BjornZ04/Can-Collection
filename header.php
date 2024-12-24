<header class="header_container">
    <div class="logo_box">
        <a href="index.php">
            <img src="img/logo.png">
        </a>
    </div>

    <div class="links_box">
        <nav class="navbar">
            <a href="index.php"><span>Home</span></a>
            <a href="collection.php"><span>The Collection</span></a>
            <a href="stats.php"><span>Statistics</span></a>
            <a href="addCan.php"><span>Add a can</span></a>
        </nav>
    </div>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>

        <div class="fas fa-bars" id="menu-btn"> </div>
    </div>

    <div class="search-form">
        <form action="collection.php?">
            <div class="search-box">
                <input type="text" id="search-box" name="name" required>
                <label>Search for a can...</label>
            </div>
            <button type="submit" class="buttonNoStyle"><label for="search-box" class="fas fa-search"></label></button>
        </form>
    </div>

</header>
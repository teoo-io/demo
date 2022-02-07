<div class="nav" id="left-div">
    <ul>
        <a href="index.php" class="nav-anchor">
            <li <?php if ($current == 'index') { echo "id='current_page'"; } ?>>
                <i class="fas fa-gamepad"></i>
            </li>
        </a>
        <a href="drive.php" class="nav-anchor">
            <li <?php if ($current == 'drive') { echo "id='current_page'"; } ?>>
                <i class="fas fa-truck-pickup"></i>
            </li>
        </a>
        <a href="i-o-map.php" class="nav-anchor">
            <li <?php if ($current == 'i-o-map') { echo "id='current_page'"; } ?>>
                <i class="fas fa-project-diagram"></i>
            </li>
        </a>
        <a href="scripts.php" class="nav-anchor">
            <li <?php if ($current == 'scripts') { echo "id='current_page'"; } ?>>
                <i class="fas fa-code"></i>
            </li>
        </a>
    </ul>
</div>

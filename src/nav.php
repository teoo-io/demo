<div class="nav" id="left-div">
    <ul>
        <a href="index.php" class="nav-anchor">
            <li >
                <i class="fas fa-truck-pickup"<?php if ($current == 'index') { echo "id='current_page'"; } ?>></i>
            </li>
        </a>
        <a href="clinometer.php" class="nav-anchor">
            <li >
                <i class="fas fa-mountain"<?php if ($current == 'clinometer') { echo "id='current_page'"; } ?>></i>            </li>
        </a>
        <a href="cam-view.php" class="nav-anchor">
            <li >
                <i class="fas fa-video"<?php if ($current == 'cam-view') { echo "id='current_page'"; } ?>></i>
            </li>
        </a>
        <a href="lights.php" class="nav-anchor">
            <li >
                <i class="fas fa-lightbulb"<?php if ($current == 'lights') { echo "id='current_page'"; } ?>></i>
            </li>
        </a>
        <a href="settings.php" class="nav-anchor">
            <li >
                <i class="fas fa-wrench"<?php if ($current == 'settings') { echo "id='current_page'"; } ?>></i>
            </li>
        </a>
    </ul>
</div>

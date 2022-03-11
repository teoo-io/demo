
<div class="nav" id="left-div">
    <ul>
        <a href="index.php" class="nav-anchor">
            <li >
                <i class="fas fa-truck-pickup"<?php if ($current == 'index') { echo "id='current_page'"; } else { echo "id='nav'"; }?>></i>
            </li>
        </a>

        <?php
        require_once 'dao.php';
        $dao = new DAO();
        $applications = $dao->getApplications();
        foreach ($applications as $application){
            if($application['app_enabled']){
                echo "<a href='{$application['app_directory']}' class='nav-anchor'><li> <i class='{$application['app_logo']}'";
                if ($current == $application['app_name']) { echo "id='current_page'"; } else { echo "id='nav'"; }
                echo "></i></li> </a>";
            }
        }
        ?>

        <a href="settings.php" class="nav-anchor">
            <li >
                <i class="fas fa-wrench"<?php if ($current == 'settings') { echo "id='current_page'"; } else { echo "id='nav'"; }?>></i>
            </li>
        </a>
    </ul>
</div>

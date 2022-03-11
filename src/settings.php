<?php
$current = 'settings';
require_once 'header.php';
?>
    <div class ="content" id="settings">
        <ul>
            <?php
            require_once 'dao.php';
            $dao = new DAO();
            echo "<h2> Apps Available:</h2>";
            $applications = $dao->getApplicationsAvailable();
            foreach ($applications as $application){
                echo "<a href='{$application['app_directory']}' class='nav-anchor'><li> <i class='{$application['app_logo']}'";
                if ($current == $application['app_name']) { echo "id='current_page'"; };
                echo "></i></li> </a>";
            }
            ?>
        </ul>
        <ul>
            <?php
            echo "<h2> Apps Installed:</h2>";
            $applications = $dao->getApplicationsInstalled();
            foreach ($applications as $application){
                echo "<a href='{$application['app_directory']}' class='nav-anchor'><li> <i class='{$application['app_logo']}'";
                if ($current == $application['app_name']) { echo "id='current_page'"; };
                echo "></i></li> </a>";
            }
            ?>
        </ul>

        <form action="app_handler.php" name="appName">
            <label for="appName">Enable App:</label>
            <select name="appName" id="app_Name">
                <?php
                require_once 'dao.php';
                $dao = new DAO();
                $applications = $dao->getApplicationsAvailable();
                foreach ($applications as $application){
                    echo "<option value='{$application['app_name']}'>{$application['app_title']}</option>";
                }
                ?>
            </select>
            <input type="submit" value="Enable">
        </form>
    </div>
<?php
require_once 'footer.php'
?>
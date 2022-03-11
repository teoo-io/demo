<?php
class DAO {
    private $user = "USER";
    private $password = "PASSWORD";
    private $dsn = "DSN";

    private function getConnection(){
        try{
            return new PDO($this->dsn, $this->user, $this->password);
        } catch(PDOException $e){
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function getApplicationsAvailable(){
        $connection = $this->getConnection();
        try{
            return $connection->query("SELECT * FROM application_available",PDO::FETCH_ASSOC);
        }catch (Exception $e){
            echo print_r($e,1);
            exit;
        }
    }

    public function getApplicationsInstalled(){
        $connection = $this->getConnection();
        try{
            return $connection->query("SELECT * FROM application_installed",PDO::FETCH_ASSOC);
        }catch (Exception $e){
            echo "AAAA shit...";
            echo print_r($e,1);
            exit;
        }
    }

    public function installApplication($appName){
        $connection = $this->getConnection();
        echo "installing {$appName}";

        $appPDO = $connection->query("SELECT * FROM application_available WHERE app_name = '{$appName}'",PDO::FETCH_ASSOC);

        $app = $appPDO->fetchAll()[0];

        $appName = $app['app_name'];
        $appTitle = $app['app_title'];
        $appLogo = $app['app_logo'];
        $appDir = $app['app_directory'];

        $statement = "INSERT INTO application_installed (app_name,app_title,app_logo,app_directory) values(:app_name,:app_title,:app_logo,:app_directory)";
        $preparedStatement = $connection->prepare($statement);
        $preparedStatement->bindParam(":app_name",$appName);
        $preparedStatement->bindParam(":app_title",$appTitle);
        $preparedStatement->bindParam(":app_logo", $appLogo);
        $preparedStatement->bindParam(":app_directory",$appDir);
        $preparedStatement->execute();
    }

    public function uninstallApplication($appName){
        $connection = $this->getConnection();
        $statement = "DELETE FROM application_installed  WHERE app_name = :app_name";
        $preparedStatement = $connection->prepare($statement);
        $preparedStatement->bindParam(":app_name",$appName);
        $preparedStatement->execute();
    }
}
?>

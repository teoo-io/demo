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

    public function getApplications(){
        $connection = $this->getConnection();
        try{
            return $connection->query("SELECT * FROM application",PDO::FETCH_ASSOC);
        }catch (Exception $e){
            echo print_r($e,1);
            exit;
        }
    }

    public function enableApplication($appName){
        $connection = $this->getConnection();
        $statement = "UPDATE application SET app_enabled = TRUE WHERE app_name=:app_name";
        $preparedStatement = $connection->prepare($statement);
        $preparedStatement->bindParam(":app_name",$appName);
        $preparedStatement->execute();
    }

    public function disableApplication($appName) {
        $connection = $this->getConnection();
        $statement = "UPDATE application SET app_enabled = FALSE WHERE app_name=:app_name";
        $preparedStatement = $connection->prepare($statement);
        $preparedStatement->bindParam(":app_name",$appName);
        $preparedStatement->execute();
    }
}
?>

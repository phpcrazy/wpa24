<?php 
namespace Thiha\App;

class LogFactory
{
	// File
	// Redis
    public function getLog($type = 'file', array $options) {
    	// chage to lower case
        $type = strtolower($type);
        // file
        $class = "Log_".ucfirst($type);
        // Log_File
        // Log_Mysql
        // Log/Mysql
        $file = DD . "/wpa24/" . str_replace("_", DIRECTORY_SEPARATOR, $class) . ".php";

        require_once $file;

        $log = new $class();

        switch($type) {
            case 'file':
                $log->setPath($options[0]);
                break;
            case 'mysql':
                // $log->setUser($options[0]);
                // $log->setPassword($options[1]);
                // $log->setDBName($options[2]);
                break;
            case 'sqlite':
                $log->setDBPath($options[0]);
                break;
            case 'redis':
                $log->setPath($options[0]);
        }
        return $log;
    }
}
 ?>
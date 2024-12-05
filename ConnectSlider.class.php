<?php
class ConnectSlider
{
    private $_dbHost = "localhost:3306";
    private $_dbUser = "mirnesgl_certifications";
    private $_dbPassword = "a}!s#,iu0eKL";
    private $_dbName = "mirnesgl_korea";

    protected function __connect()
    {
        $__dsn = "mysql:host=" . $this->_dbHost . ";dbName=" . $this->_dbName;
        $__pdo = new PDO($__dsn, $this->_dbUser, $this->_dbPassword);
        $__pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $__pdo->exec('set names utf8');
        return $__pdo;
    }
}
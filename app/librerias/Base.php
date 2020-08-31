<?php
//clase para conectarse ala  base de Datos y hacer consultas PDO
class Base
{
    private $host        = DB_HOST;
    private $usuario     = DB_USUARIO;
    private $password    = DB_PASSWORD;
    private $nombre_base = DB_NOMBRE;

    private $dbh; //data base halgler
    private $stmt; //statemen sirve para consultas sql
    private $error;

    public function __construct()
    {
        //configurar la conexion
        $dsn      = 'mysql:host=' . $this->host . ';dbname=' . $this->nombre_base;
        $opciones = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION,

        );
        //crear instacia del PDO
        try {
            $this->dbh = new PDO($dsn, $this->usuario, $this->password, $opciones);
            //arregla caracteres especiales
            $this->dbh->exec('set names utf8');

        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
    //se prepara  la consulta
    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    //vinculamos la consulta con  bin
    public function bind($parametro, $valor, $tipo = null)
    {
        if (is_null($tipo)) {
            switch (true) {
                case is_int($valor):
                    $tipo = PDO::PARAM_INT;
                    break;
                case is_bool($valor);
                    $tipo = PDO::PARAM_BOOL;
                    break;
                case is_null($valor);
                    $tipo = PDO::PARAM_NULL;
                    break;
                default:
                    $tipo = PDO::PARAM_STR;
                    break;
            }
        }
        $this->stmt->bindValue($parametro, $valor, $tipo);
    }

    //ejecuta la consulta
    public function execute()
    {
        return $this->stmt->execute();

    }

    //obtiene los registros de las consulta
    public function registros()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    //obtine solo un registro
    public function registro()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    //obtener cantidad de filas con el metdo rowCount
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}

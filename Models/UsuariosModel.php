<?php
class UsuariosModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getUsuario(string $usuario, string $passwrd)
    {
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and clave='$passwrd'";
        $data = $this->select($sql);
        return $data;
    }
    public function getUsuarios()
    {
        $sql = "SELECT u.*, c.id, c.caja FROM usuarios u INNER JOIN caja c WHERE u.id_caja=c.id;";
        $data = $this->selectAll($sql);
        return $data;
    }
}

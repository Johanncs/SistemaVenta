<?php
class Usuarios extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }
    public function index()
    {
        $this->views->getView($this, "index");
    }

    public function listar()
    {
        $data = $this->model->getUsuarios();

        for($i=0; $i<count($data); $i++){
            if($data[$i]['estado']==1){
                $data[$i]['estado'] = '<span class="badge badge-success">Activo</span>';
            }else{
                $data[$i]['estado'] = '<span class="badge badge-danger">Inactivo</span>';
            }
            $data[$i]['acciones'] = '<div>
            <button class="btn btn-primary" type="button">Editar</button>
            <button class="btn btn-danger" type="button">Eliminar</button>
            </div>';
        }

        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function validar()
    {
        if (empty($_POST['txtUsuario']) || empty($_POST['txtPasswrd'])) {
            $msg = "Los campos estan vacios";
        } else {
            $usuario = $_POST['txtUsuario'];
            $password = $_POST['txtPasswrd'];
            $data = $this->model->getUsuario($usuario, $password);
            if ($data) {
                $_SESSION['id_usuario'] = $data['id'];
                $_SESSION['usuario'] = $data['usuario'];
                $_SESSION['nombre'] = $data['nombre'];
                $msg = "ok";
            } else {
                $msg = "usuario o contraseña incorrecta";
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
}



<?php

    session_start();

    $email = $_POST['email']??"";
    $senha = $_POST['senha']??"";           
    $acesso = false;
    $id_usuario = null;
    $usuario_perfil_id = null;

    $usuarios_app = array(
        array(
            'id' => 1,
            'email' => 'adm@teste.com',
            'senha' => '123456',
            'perfil_id' => 1
        ),
        array(
            'id' => 2,
            'email' => 'user@teste',
            'senha' => '123456',
            'perfil_id' => 1
        ),
        array(
            'id' => 3,
            'email' => 'joao@teste',
            'senha' => '1232',
            'perfil_id' => 2
        ),
        array(
            'id' => 4,
            'email' => 'fred@teste',
            'senha' => '1324',
            'perfil_id' => 2
        )
    );

    $perfis = array(
        1 => 'Administrativo',
        2 => 'Usuário'
    );

    foreach($usuarios_app as $user)
    {
        $user['email'];
        $user['senha'];

        if($email == $user['email'])
        {   
            if($senha == $user['senha'])
            {
                $acesso = true;
                $id_usuario = $user['id'];
                $usuario_perfil_id = $user['perfil_id'];
            }           
        }       
    }  

    if($acesso)
    {           
        $_SESSION['id'] = $id_usuario;
        $_SESSION['perfil_id'] = $usuario_perfil_id;  
        $_SESSION['auth'] = true;          
        header('location:home.php');       
    }
    else
    {        
        $_SESSION['auth'] = false;
        header('location:index.php?acao=erro');
    }    

?>
<?php 

$usuario_autenticado = false;

$usuarios = array(
    array('email' => 'adm@teste.com.br', 'senha' => '111111'),
    array('email' => 'teste@teste.com.br', 'senha' => '222222'),
);

foreach ($usuarios as $usuario) {
    if ($usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }
}


if ($usuario_autenticado) {
    echo "usuario autenticado";
} else {
    header('Location: index.php?login=erro');
}
?>
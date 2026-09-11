<?php
$usuarios=[
["correo"=>"admin@gmail.com","clave"=>"123456","nombre"=>"Administrador"],
["correo"=>"juan@gmail.com","clave"=>"abc123","nombre"=>"Juan Pérez"],
["correo"=>"maria@gmail.com","clave"=>"maria123","nombre"=>"María López"]
];

function buscarUsuario($usuarios,$correo,$clave){
foreach($usuarios as $u){
if($u["correo"]==$correo && $u["clave"]==$clave)
return $u["nombre"];
}
return false;
}

$resultado=buscarUsuario($usuarios,$_POST["correo"],$_POST["clave"]);

if($resultado){
header("Location: bienvenida.php?nombre=".urlencode($resultado));
exit;
}else{
header("Location: login.php?error=1");
exit;
}
?>
<?php 

echo '<div id="conteudo">';
echo '<div id="conteudo_curso">';

$nome = "$_POST[nome]"; 
$retorno = "";
$email = "$_POST[email]"; 
$receptor = "incendiobrasilia@yahoo.com.br,incendiobrasilia@gmail.com"; 
$mensagem = "$_POST[mensagem]"; 
$assunto = "$_POST[assunto]"; 
$telefone = "$_POST[telefone]";

#Pega o nome e o email e mostra no cabeÃ§alho do email receptor
$header = "From: ". $nome . " <" . $email . ">"; 

if (($nome == "") || ($email == "") || ($assunto == "") || ($telefone == "")  || ($mensagem == "")) 
{
  $retorno = "Atencao! Todos os campos do formulario devem ser preenchidos.";
}
else #caso todos os campos sejam preenchido, o envio sera realizado.
{
  if(mail($receptor, $assunto." - ".$telefone, $mensagem, $header))
    $retorno = "$nome, seu emai foi enviado com sucesso!";
  else
    $retorno = "O email falhou ao enviar";
}
?>

<br />
<?php
$redirect = "index.php?mensagem=".$retorno."#CONTATO";
header("location:$redirect");
?>

</div>
</div>
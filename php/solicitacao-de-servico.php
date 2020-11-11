<?php

# alterar a variavel abaixo colocando o seu email
if (!empty($_POST['email']))
{
$to = "alexongomes@gmail.com";
$nome = $_POST['nomesobrenome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$empresa = $_POST['empresa'];
$telefonecelular = $_POST['telefonecelular'];
$telefoneresidencial = $_POST['telefoneresidencial'];
$telefonecomercial = $_POST['telefonecomercial'];
$endereco = $_POST['endereco'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$modelo = $_POST['modelo'];
$subject = "Agendamento Técnico";

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "   ======= AGENDAMENTO TÉCNICO ========" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "Empresa: " . $empresa . "\n";
$body = $body . "Telefone Celular: " . $telefonecelular . "\n";
$body = $body . "Telefone Residencial: " . $telefoneresidencial . "\n\n";
$body = $body . "Telefone Comercial: " . $telefonecomercial . "\n\n";
$body = $body . "endereco: " . $endereco . "\n\n";
$body = $body . "Marca: " . $marca . "\n\n";
$body = $body . "Tipo: " . $tipo . "\n\n";
$body = $body . "Modelo: " . $modelo . "\n\n";
$body = $body . "===================================" . "\n";

$header = "From:falecom@notetechbelem.com"."\r\n"."Reply-To:alexongomes@gmail.com \e\n"."X=Mailer:PHP".phpversion();


// envia o email
if (mail($to, $subject , $body, $header)){
	echo"Email enviado com sucesso!";
	echo '<script>';
	echo "alert('Sua mensagem foi enviada e logo entraremos em contato.');";  //* chama a função 
	echo "window.open('index.html');";  //* chama a função 
	echo '</script>';
	}else{

	echo"O Email não pode ser enviado!";
}
// redireciona para a página de obrigado

}
else{
	echo $_POST['email']." -> esse é o email.";


}
?>
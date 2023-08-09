<?php

    require "./bibliotecas/PHPMailer/Exception.php";
    require "./bibliotecas/PHPMailer/OAuth.php";
    require "./bibliotecas/PHPMailer/PHPMailer.php";
    require "./bibliotecas/PHPMailer/POP3.php";
    require "./bibliotecas/PHPMailer/SMTP.php";
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    //print_r($_POST);
    

	class Mensagem {
		private $para = null;
		private $assunto = null;
		private $mensagem = null;
        private $rating_value = null;
        private $rating_value1 = null;
        private $rating_value2 = null;
        private $rate = null;
        public $status = array( 'codigo_status' => null, 'descricao_status' => '');

		public function __get($atributo) {
			return $this->$atributo;
		}

		public function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

        public function mensagemValida() {
            if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
                return false;
            }

            return true;
        }
    }

    $mensagem = new Mensagem();

    

    $mensagem->__set('para', 'yulbrynner73@gmail.com');
    $mensagem->__set('assunto', 'CSAT');
    $mensagem->__set('mensagem', $_POST['mensagem']);
    $mensagem->__set('rating_value', $_POST['rating']);
    $mensagem->__set('rating_value1', $_POST['rating1']);
    $mensagem->__set('rating_value2', $_POST['rating2']);
    $mensagem->__set('rating_value3', $_POST['rate']);
    //$mensagem->__set('assunto', $_POST['assunto']);
    //$mensagem->__set('rating_value', $_POST['rating']);
    //$mensagem->__set('nota1', $_POST['nota1']);

    //print_r($mensagem);
    
    

    if(!$mensagem->mensagemValida()) {
		echo 'Por favor preencha todos os campos';
		die();
	}

    
    $mail = new PHPMailer(true);
	try {
        //Server settings
        $mail->SMTPDebug = false;                      //Enable verbose debug output (para ativar só digitar 2 e desativar = false)
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '';                     //SMTP username (inserir e-mail)
        $mail->Password   = '';                               //SMTP password (inserir senha do e-mail)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('xxyulxx@outlook.com', 'CSAT');         //remetente
        $mail->addAddress('yul.paiva@getrak.com.br', 'Yul Paiva');     //Add a recipient
        $mail->addAddress('xxyulxx@outlook.com', 'Resolucao');
        //$mail->addAddress('matheus.bersan@getrak.com.br', 'Matheus');
        //$mail->addAddress('fagner.gurge@getrak.com.br', 'Matheus');
        $mail->addAddress($mensagem->__get('para'));               //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = utf8_decode($mensagem->__get('assunto'));
        $mail->Body    = utf8_decode($mensagem->__get('rating_value3'). ',' .$mensagem->__get('rating_value'). ',' .  $mensagem->__get('rating_value1'). ',' .  $mensagem->__get('rating_value2'). ',' .  $mensagem->__get('mensagem'));

       
        
        $mail->AltBody = 'É necessário utilizar um cilent que suporte HTML para ter acesso total a este conteúdo desta mensagem';

        $mail->send();

        $mensagem->status['codigo_status'] = 1;
        $mensagem->status['descricao_status'] = 'E-mail enviado com sucesso';
        

    } catch (Exception $e) {

        $mensagem->status['codigo_status'] = 2;
        $mensagem->status['descricao_status'] = 'Não foi possivel enviar este e-mail! Por favor tente novamente mais tarde.';
    }

    
?>

<!DOCTYPE html>
<html>
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    	<title>App Mail Send</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>

    <header>
        <div class="py-3 text-center">
                    <img class="d-block mx-auto mb-2" src="logo.png" alt="" >				
                    <p class="lead">Obrigado pela sua contribuição.</p>
        </div>
    </header>

    <body>

    
    <main>
        <div class="container">

                <div class="row">
                    <div class="col-md-12">

                        <?php if($mensagem->status['codigo_status'] == 1) { ?>

                            <div class="container">
                                <h1 class="display-4 text-success">Sucesso</h1>
                                <p><?= $mensagem->status['descricao_status'] ?></p>
                                <a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
                            </div>

                        <?php } ?>

                        <?php if($mensagem->status['codigo_status'] == 2) { ?>

                            <div class="container">
                                <h1 class="display-4 text-danger">Ops!</h1>
                                <p><?= $mensagem->status['descricao_status'] ?></p>
                                <a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
                            </div>

                        <?php } ?>

                    </div>
                </div>
        </div>

        
    </main>
    
    
</html>

<!-- @format -->
<?php 
require_once('conn.php');

if(isset($_POST['enviar'])){
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  $query = mysqli_query($conn,"INSERT INTO prosp (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')");
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prosp Cyn</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="./imgs/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./imgs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./imgs/favicon-16x16.png">
  </head>
  <body>
    <div id="contact">
      <div class="formulario">
        <section class="section-1">
          <h2>Fale com a gente:</h2>
        </section>
        <section class="section-2">
          <form method="post">
            <label for="name">Nome:</label>
            <input type="text" id="nome" name="nome" required />
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />
            <label for="mensagem">Mensagem:</label>
            <input type="text" id="mensagem" name="mensagem"/>
            <input type="submit" id="enviar" name="enviar" value="Enviar" />
          </form>
        </section>
      </div>
      <div class="informacoes">
        <div class="caixa">
          <section class="section-1">
            <h1>
              Prosp Cyn
              <svg
                width="60"
                height="60"
                viewBox="0 0 222 99"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M3.1875 50.375L42.875 23.125L50.1875 33.1875L15.625 56.5L50.1875 78.5L42.625 89.125L0.625 61.125L3.1875 50.375ZM120.375 0.9375L134.062 4.6875L101.312 98.875L89.375 96.4375L120.375 0.9375ZM206.5 56.375L171.938 34.375L179.5 23.75L221.5 51.75L218.938 62.5L179.25 89.75L171.938 79.6875L206.5 56.375Z"
                  fill="#006C1F"
                />
              </svg>
            </h1>
          </section>

          <section class="section-2">
            <span>prospcyn@gmail.com</span>
            <a href="#">
              <button>
                <section>
                  <img src="./img/whatsapp.svg" alt="ícone do whatsapp" />
                  <span>ENTRE EM CONTATO</span>
                </section>
              </button>
            </a>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

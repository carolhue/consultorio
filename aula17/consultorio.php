<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Consultório da Carolina Oliveira</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    text-align: center;
    background-color: white;
  }
  .background-container {
    background: url('https://static8.depositphotos.com/1146092/920/i/450/depositphotos_9202352-stock-photo-dog-as-nurse.jpg') no-repeat center center;
    background-size: contain;
    border: 40px solid white; 
    width: 100%;
    height: 100vh; /* Altura total da viewport */
    box-sizing: border-box;
  }
  .overlay {
    background-color: rgba(0, 0, 0, 0.5);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
  .container {
    position: relative;
    z-index: 2;
    width: 100%;
    padding: 20px;
  }
  .header {
    background-color: rgba(0, 0, 0, 0.7);
    padding: 20px 0;
  }
  .header h1 {
    margin: 0;
    color: #ff69b4; /* Cor rosa */
  }
  .buttons {
    margin: 20px 0;
  }
  .buttons a {
    text-decoration: none;
    color: #fff;
    padding: 10px 20px;
    margin: 5px;
    border-radius: 5px;
    display: inline-block;
  }
  .buttons a.cadastro {
    background-color: #28a745; /* Verde */
  }
  .buttons a.cadastro:hover {
    background-color: #218838; /* Verde mais escuro */
  }
  .buttons a.contato {
    background-color: #ffc107; /* Amarelo */
  }
  .buttons a.contato:hover {
    background-color: #e0a800; /* Amarelo mais escuro */
  }
  .buttons a.sobre {
    background-color: #007bff; /* Azul */
  }
  .buttons a.sobre:hover {
    background-color: #0056b3; /* Azul mais escuro */
  }
</style>
</head>
<body>
  <div class="background-container">
    <div class="overlay"></div>
    <div class="container">
      <div class="header">
        <h1>Consultório da Carolina Oliveira</h1>
      </div>
      <div class="buttons">
        <a href="cadastro.php" class="cadastro">Cadastro</a>
        <a href="contato.php" class="contato">Contato</a>
        <a href="sobre.php" class="sobre">Sobre</a>
      </div>
    </div>
  </div>
</body>
</html>







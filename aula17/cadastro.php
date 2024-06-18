<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro de Paciente</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    text-align: center;
    background-color: cadetblue;
  }
  .container {
    padding: 50px;
  }
  .header {
    background-color: aquamarine;
    padding: 20px 0;
    margin-bottom: 20px;
  }
  .header h1 {
    margin: 0;
    color: black;
  }
  .form-group {
    margin-bottom: 30px;
    text-align: center;
  }
  .form-group label {
    display: block;
    margin-bottom: 5px;
  }
  .form-group input {
    width: 50%;
    padding: 12px;
    box-sizing: border-box;
    margin-bottom: 10px;
  }
  .form-group button {
    background-color: blue;
    color: aqua;
    border: none;
    padding: 20px 30px;
    cursor: pointer;
    border-radius: 500px;
  }
  .message {
    margin: 10px 50;
    padding: 10px;
    border-radius: 500px;
  }
  .success {
    background-color: blue;
    color: aqua;
  }
  .error {
    background-color: #f8d7da;
    color: brown;
  }
  .back-button {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color:black;
    color: aqua;
    text-decoration: none;
    border-radius: 500px;
  }
  .back-button:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Cadastro do Paciente</h1>
    </div>
    <?php
    class Consultorio {
        private $nome;
        private $anoNasc;
        private $peso;
        private $altura;

        public function __construct() {
            $this->nome = "";
            $this->anoNasc = 0;
            $this->peso = 0.0;
            $this->altura = 0.0;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setAnoNasc($anoNasc) {
            $this->anoNasc = $anoNasc;
        }

        public function setPeso($peso) {
            $this->peso = $peso;
        }

        public function setAltura($altura) {
            $this->altura = $altura;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getAnoNasc() {
            return $this->anoNasc;
        }

        public function getPeso() {
            return $this->peso;
        }

        public function getAltura() {
            return $this->altura;
        }

        public function calcularIdade() {
            return (2024 - $this->anoNasc);
        }

        public function calcularIMC() {
            return $this->peso / pow($this->altura, 2);
        }

        public function imprimirResultado() {
            echo "<h2>Ficha Técnica de {$this->nome}</h2>";
            echo "Altura: {$this->altura} m<br>";
            echo "Peso: {$this->peso} kg<br>";
            echo "Idade: " . $this->calcularIdade() . " anos<br>";
            echo "IMC: " . number_format($this->calcularIMC(), 2) . "<br>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $anoNasc = $_POST['anoNasc'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        if (!empty($nome) && !empty($anoNasc) && !empty($peso) && !empty($altura)) {
            $paciente = new Consultorio();
            $paciente->setNome($nome);
            $paciente->setAnoNasc($anoNasc);
            $paciente->setPeso($peso);
            $paciente->setAltura($altura);

            echo "<div class='message success'>Paciente cadastrado com sucesso!</div>";
            $paciente->imprimirResultado();
        } else {
            echo "<div class='message error'>Por favor, preencha todos os campos.</div>";
        }
    }
    ?>
    <form method="post" action="cadastro.php">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
      </div>
      <div class="form-group">
        <label for="anoNasc">Ano de Nascimento:</label>
        <input type="number" id="anoNasc" name="anoNasc" required>
      </div>
      <div class="form-group">
        <label for="peso">Peso (kg):</label>
        <input type="number" id="peso" name="peso" step="0.1" required>
      </div>
      <div class="form-group">
        <label for="altura">Altura (m):</label>
        <input type="number" id="altura" name="altura" step="0.01" required>
      </div>
      <div class="form-group">
        <button type="submit">Cadastrar</button>
      </div>
    </form>
    <a href="consultorio.php" class="back-button">Voltar</a>
  </div>
</body>
</html>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Formulário de Cadastro</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('background.jpg');
      background-size: 100% 100% 100%;
      margin: 0;
      padding: 20px;
      background-repeat: no-repeat;
      background-attachment: fixed;

    }
    .container {
      max-width: 600px;
      margin: auto;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="number"],
    select {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    /* Estilo para a ficha de cadastro */
    .ficha {
      margin-top: 30px;
    }
    .ficha label {
      font-weight: bold;
    }
    .ficha p {
      margin-bottom: 10px;
    }
    a {
    color: white;
    text-decoration: none;
    transition: color 0.3s ease-in-out;
    font-size: 25px;
  }
 a:hover {
    color: #ffcc00;
 }
  </style>
</head>
<body>
<a href="index.html">Página Inicial</a>
  <div class="container">
    <h2>Formulário de Cadastro</h2>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
      <div class="ficha">
        <h3>Ficha de Cadastro</h3>
        <p><label>Nome:</label> <?php echo $_POST["nome"]; ?></p>
        <p><label>E-mail:</label> <?php echo $_POST["email"]; ?></p>
        <p><label>E-mail:</label> <?php echo $_POST["cpf"]; ?></p>
        <p><label>E-mail:</label> <?php echo $_POST["endereço"]; ?></p>
        <p><label>Idade:</label> <?php echo $_POST["idade"]; ?></p>
        <p><label>Curso:</label> <?php echo $_POST["curso"]; ?></p>
        <p><label>Nacionalidade:</label> <?php echo $_POST["nacional"]; ?></p>
        <p><label>Universidade:</label> <?php echo $_POST["uni"]; ?></p>
        <p><label>Como ficou sabendo: </label> <?php echo $_POST["pag"]; ?></p>
        <p><label>Experiência </label> <?php echo $_POST["exp"]; ?></p>
        <p><label>Tempo </label> <?php echo $_POST["exps"]; ?></p>
      </div>
    <?php else: ?>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required>

        <label for="endereço">Endereço:</label>
        <input type="text" id="endereço" name="endereço" required>

        <label for="nacional">Nacionalidade (Exemplo: brasileiro)</label>
        <input type="text" id="nacional" name="nacional" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <label for="rsenha">Repita a Senha:</label>
        <input type="password" id="rsenha" name="rsenha" required>

        <label for="idade">Data de Nascimento:</label>
        <input type="date" id="idade" name="idade" required>

        <br>
        <br>

        <label for="curso">Curso:</label>
        <select id="curso" name="curso" required>
          <option value="">Selecione o curso</option>
          <option value="Programação Web">Programação Web</option>
          <option value="Desenvolvimento de Jogos">Desenvolvimento de Jogos</option>
          <option value="Data Science">Data Science</option>
          <option value="Inteligência Artificial">Inteligência Artificial</option>
          </select>
        <label for="uni">Em qual instituição:</label>
        <input type="text" id="uni" name="uni" required>

        <label for="pag">Como ficou sabendo da nossa página?</label>
        <select id="pag" name="pag" required>
          <option value="">Selecione</option>
          <option value="google">Google</option>
          <option value="faculdade">Faculdade</option>
          <option value="amigos">Amigos</option>
          <option value="redes sociais">Redes sociais</option>
    </select>

    <label for="exp">Tem experiência com programação e afins?</label>
        <select id="exp" name="exp" required>
          <option value="">Selecione</option>
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
          </select>

          <label for="exps">Se sim, quantos anos?</label>
        <select id="exps" name="exps" required>
          <option value="">Selecione</option>
          <option value="1 Ano">1 a 2 anos</option>
          <option value="2 Anos">2 a 5 anos</option>
          <option value="5 Anos">5+ anos</option>
          </select>


        <input type="submit" value="Enviar">
      </form>
    <?php endif; ?>
  </div>
</body>
</html>
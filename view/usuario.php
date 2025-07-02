<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login do Aluno</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 350px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .login-btn {
      width: 100%;
      padding: 10px;
      background-color: #0066cc;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    .login-btn:hover {
      background-color: #005bb5;
    }

    .error {
      color: red;
      font-size: 14px;
      margin-top: 10px;
      display: none;
    }
  </style>
</head>
<body>

<div class="login-container">
  <h2>Login do Aluno</h2>
  <form id="loginForm">
    <div class="form-group">
      <label for="matricula">Matrícula:</label>
      <input type="text" id="matricula" name="matricula" required>
    </div>
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>
    </div>
    <button type="submit" class="login-btn">Entrar</button>
    <div class="error" id="errorMessage">Matrícula ou senha incorretos.</div>
  </form>
</div>

<script>
  document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const matricula = document.getElementById('matricula').value;
    const senha = document.getElementById('senha').value;
    const error = document.getElementById('errorMessage');

    // Simulação de login (troque por verificação real em backend)
    if (matricula === "123456" && senha === "senha123") {
      alert("Login bem-sucedido!");
      // Redirecionamento ou outras ações aqui
    } else {
      error.style.display = 'block';
    }
  });
</script>

</body>
</html>

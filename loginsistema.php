<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="pag.css" />

  </head>
  <body>
    <section class="form-section"><br><br>
      <h1>Preencha seus dados:</h1>

      <div class="form-wrapper">
        <form method="POST" action="home.php">
          <div class="input-block">
            <label for="login-email">Usuário</label>
            <input type="text" name="usuario" required id="login-email" />
          </div>
          <div class="input-block">
            <label for="login-password">Senha</label>
            <input type="password" name="senha" required id="login-password" />
          </div>
          <button type="submit" class="btn-login" >Login</button>
        </form>
      </div>
    </section>

    <ul class="squares"></ul>

    <!--script src="script.js"></script-->
  </body>
</html>
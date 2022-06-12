<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Entrar</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5"></div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-5">
            <div class="login-wrap p-4 p-md-5">
              <div
                class="icon d-flex align-items-center justify-content-center"
              >
                <span class="fa fa-user-o"></span>
              </div>
              <h3 class="text-center mb-4">Entrar</h3>
              <form class="login-form">
                <div class="form-group">
                  <input
                    name="email_user"
                    id="email_user"
                    type="text"
                    class="form-control rounded-left"
                    placeholder="Usuário"
                    required
                  />
                </div>
                <div class="form-group d-flex">
                  <input
                    name="senha_user"
                    id="senha_user"
                    type="password"
                    class="form-control rounded-left"
                    placeholder="Senha"
                    required
                  />
                </div>
                <div class="form-group">
                  <button
                    action= php_action/login.php
                    value="entrar"
                    id="entrar"
                    name="entrar"
                    type="submit"
                    class="btn btn-primary rounded submit p-3 px-5"
                  >
                    Entrar
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

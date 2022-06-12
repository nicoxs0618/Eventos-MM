<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Realizar Compra</title>
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

    <?php include('db_connect.php') ?>

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
              <h3 class="text-center mb-4">Realizar compra</h3>
              <form method="POST" action="../../php_action/insert_prod.php" class="login-form">
                <div class="form-group">
                  <input
                  name="nome_compra"
                    type="text"
                    class="form-control rounded-left"
                    placeholder="Nome"
                    required
                  />
                  <div>
                    <input
                    name="cpf_compra"
                    type="text"
                    class="form-control rounded-left"
                    placeholder="CPF"
                    required
                  />
                  </div>
                  <div>
                    <select class="form-control rounded-left" name="produto_compra" value="produto_compra">
                      <option value="cddo1">Camisa Dança do Oscar TIPO 1</option>
                      <option value="cddo2">Camisa Dança do Oscar TIPO 2</option>
                      <option value="cddo3">Camisa Dança do Oscar TIPO 3</option>
                      <option value="cddo4">Camisa Dança do Oscar TIPO 4</option>
                      <option value="csde1">Camisa Semana da Enfermagem TIPO 1</option>
                      <option value="csde2">Camisa Semana da Enfermagem TIPO 2</option>
                      <option value="csde3">Camisa Semana da Enfermagem TIPO 3</option>
                      <option value="csde4">Camisa Semana da Enfermagem TIPO 4</option>
                      <option value="cfde1">Camisa Feira do Empreendedor TIPO 1</option>
                      <option value="cfde2">Camisa Feira do Empreendedor TIPO 2</option>
                      <option value="cfde3">Camisa Feira do Empreendedor TIPO 3</option>
                      <option value="cfde4">Camisa Feira do Empreendedor TIPO 4</option>
                      <option value="cnam1">Camisa Noite de Artes Modernas TIPO 1</option>
                      <option value="cnam2">Camisa Noite de Artes Modernas TIPO 2</option>
                      <option value="cnam3">Camisa Noite de Artes Modernas TIPO 3</option>
                      <option value="cnam4">Camisa Noite de Artes Modernas TIPO 4</option>
                      <option value="csega1">Camisa SEGA TIPO 1</option>
                      <option value="csega2">Camisa SEGA TIPO 2</option>
                      <option value="csega3">Camisa SEGA TIPO 3</option>
                      <option value="csega4">Camisa SEGA TIPO 4</option>
                      <option value="iddo">Ingresso Dança do Oscar</option>
                      <option value="isde">Ingresso Semana da Enfermagem</option>
                      <option value="ifde">Ingresso Feira do Empreendedor</option>
                      <option value="inam">Ingresso Noite de Artes Modernas</option>
                      <option value="isega">Ingresso SEGA</option>

                    </select>
                  </div>
                  <div>
                    <input
                    name="quantidade_compra"
                    type="number"
                    class="form-control rounded-left"
                    placeholder="Quantidade"
                    required
                  />
                  </div>
                  <div>
                    <input
                    name="endereco_compra"
                    type="text"
                    class="form-control rounded-left"
                    placeholder="Endereço"
                    required
                  />
                  </div>
                  <div>
                    <input
                    value="Forma de pagamento : Dinheiro físico"
                    name="fdp_compra"
                    type="text"
                    class="form-control rounded-left"
                    placeholder="Forma de pagamento"
                    readonly
                  />
                  </div>
                  
                <div class="form-group">
                  <button

                    type="submit"
                    class="btn btn-primary rounded submit p-3 px-5"
                  >
                    Comprar
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

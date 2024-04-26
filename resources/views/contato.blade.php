<style>

h2 {
  text-align: center;
}   

  body {
    background-color: #f8f9fa;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }

  h1 {
    font-size: 36px;
    color: grey;
    margin-top: 50px;
    text-align: center;
    font-family: 'Caveat', cursive;
    
  }

  p {
    color: black;
    text-align: center;
  }

  nav {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
  }

  nav a {
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    margin-right: 10px;
    border-radius: 5px;
  }

  nav a:last-child {
    margin-right: 0;
  }

  nav a:hover {
    background-color: #555;
  }

  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: grey;
    border-radius: 50px;

  }

  .form-group {
    margin-bottom: 20px;
  }

  label {
    color: black;
    font-weight: bold;
  }

  input[type="text"],
  input[type="tel"],
  input[type="email"],
  textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }

  .custom-button {
    background-color: grey;
    color: #fff;
    border: none;
    border-radius: 20px;
    padding: 12px 24px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .custom-button:hover {
    background-color: black;
    color: white;
  }
</style>

</head>
<body>

<nav>
  <a href="/">Voltar para home</a>
  <a href="/paginainicial">Página Inicial</a>
  <a href="/quemsomos">Quem Somos</a>
  <a href="/noticias">Notícias</a>
  <a href="/contato">Contato</a>
</nav>

<h1>Contato</h1>
    <h2>Endereço:</h2>
    <p>Av. Águia de Haia, 2633 - Cidade Antônio Estêvão de Carvalho, São Paulo - SP, 03694-000</p>
    <h2>Redes sociais:</h2>
    <p>Youtube: ETEC DA ZONA LESTE.</p>
    <p>Facebook: Etec da Zona Leste.</p>
    <p>Instagram: eteczonalesteoficial</p>
    <h2>Telefone:</h2>
    <p>(11) 2045-4016.</p>
    <p>(11) 20454017.</p>

<h1>Formulário de Contato</h1>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card" style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
          <form id="form-contato">
            <div class="form-group">
              <label for="nome" style="font-weight: bold;">Nome</label>
              <input id="nome" type="text" class="form-control" style="border-radius: 5px;" required>
            </div>

            <div class="form-group">
              <label for="telefone" style="font-weight: bold;">Telefone</label>
              <input id="telefone" type="tel" class="form-control" style="border-radius: 5px;" required>
            </div>

            <div class="form-group">
              <label for="email" style="font-weight: bold;">E-mail</label>
              <input id="email" type="email" class="form-control" style="border-radius: 5px;" required>
            </div>

            <div class="form-group">
              <label for="mensagem" style="font-weight: bold;">Mensagem</label>
              <textarea id="mensagem" class="form-control" style="border-radius: 5px;" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block custom-button"  >Enviar Mensagem</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<script>
  document.getElementById('form-contato').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita o envio do formulário

    // Validar campos aqui
    var nome = document.getElementById('nome').value.trim();
    var telefone = document.getElementById('telefone').value.trim();
    var email = document.getElementById('email').value.trim();
    var mensagem = document.getElementById('mensagem').value.trim();

    // Exemplo de validação simples de campo vazio
    if (nome === '' || telefone === '' || email === '' || mensagem === '') {
      alert('Por favor, preencha todos os campos.');
      return; // Impede o envio do formulário se houver campos vazios
    }

    // Validar formato de e-mail
    if (!isValidEmail(email)) {
      alert('Por favor, insira um e-mail válido.');
      return; // Impede o envio do formulário se o e-mail for inválido
    }

    // Envio do formulário
    // Aqui você pode enviar os dados do formulário para o backend usando Ajax ou outra técnica de sua preferência
    // Por exemplo: fetch('URL_DO_BACKEND', { method: 'POST', body: new FormData(this) })
  });

  // Função para validar o formato de e-mail
  function isValidEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
  }
</script>
</body>
</html>

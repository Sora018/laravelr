<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato</title>
  <style>
    /* Estilizando o título h1 */
    h1 {
      color: blue;
      margin-top: 50px; /* Espaçamento para evitar sobreposição com o topo da página */
      text-align: center;
    }

    h2 {
      margin-top: 50px;
      text-align: center;
    }

    li {
      text-align: center;
    }

    p {
      margin-top: 50px; /* Espaçamento para evitar sobreposição com o topo da página */
      text-align: center;
    }
    nav {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px; /* Adicionando um pequeno preenchimento para melhor aparência */
    }

    nav a {
      color: #fff;
      text-decoration: none;
      padding: 14px 20px;
      margin-right: 5cm; /* Espaçamento de 5cm entre cada botão */
    }

    nav a:last-child {
      margin-right: 0; /* Remover a margem do último botão para evitar espaço extra */
    }

    nav a:hover {
      background-color: #555;
    }

    /* Estilizando a largura máxima do nav */
    @media (max-width: 600px) {
      nav {
        max-width: 300px; /* Defina uma largura máxima para o nav para evitar que se estenda demais em telas pequenas */
        margin: 0 auto; /* Centralize o nav horizontalmente */
      }
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

  <h1>Bem Vindo a Etec</h1>
  <h2>Cursos Oferecidos</h2>
            <li>Informática</li>
            <li>Administração</li>
            <li>Mecânica</li>
            <li>Eletrônica</li>
            <li>E muitos outros!</li>
        <h2>Por que Escolher a ETEC?</h2>
            <li>Educação de qualidade reconhecida no mercado de trabalho.</li>
            <li>Professores experientes e comprometidos com o sucesso dos alunos.</li>
            <li>Infraestrutura moderna e laboratórios bem equipados para uma aprendizagem prática.</li>
</body>
</html>

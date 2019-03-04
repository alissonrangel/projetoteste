<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Santa Teresinha</title>
        <link rel="stylesheet" type="text/css" href="assets/css/estilo2.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <script type="text/javascript"></script>
    </head>
    <body>

        <header>
            <div class="topo">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="">Login</a></li>
                            <li><a href="">Quem somos</a></li>
                            <li><a href="">Contato</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="topo2">
                <div class="container">
                    <div class="topo2b">
                        <div class="logo">
                            <img src="assets/images/logo2.png" height="120">
                        </div>
                        <div class="nome">
                            Comunidade Católica Santa Teresinha
                        </div>
                    </div>
                </div>

            </div>
        </header>
        <div class="banner">
            <div class="container">
                <div class="banner2">

                </div>
            </div>
        </div>
        <section class="principal">
            <div class="container">
                <article class="artigo">


                    <form method="POST">
                        <div class="titulo">Pedido de orações</div>
                        <div class="name">
                            Nome do pedinte:
                            <br>
                            <input type="text"  name="nome_pedinte">
                            <br>
                            Nome do favorecido:
                            <br>
                            <input type="text"  name="nome_favorecido">
                            <br>
                        </div>
                        <textarea placeholder="Digite sua oração"  name="pedido" maxlength="300"></textarea> 
                        <br>
                        <input type="submit" value="Enviar pedido">
                        <br>
                    </form>
                    <hr>
                    <br><br>
                    <h2 style="text-align: center">Pedidos:</h2>
                    

                </article>
                <aside>

                </aside>
            </div>
        </section>
        <footer style="display: none">
            <div class="container2">
                <div class="um">
                    <div class="titulo">Empresa</div>
                    <div class="conteudo">
                        <ul>
                            <li><a href="">Quem somos</a></li>
                            <li><a href="">Contato</a></li>
                            <li><a href="">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="dois">
                    <div class="titulo">Pedido de oração</div>
                    <div class="conteudo">
                        <ul>
                            <li><a href="">Preços</a></li>
                            <li><a href="">Termos e condições</a></li>
                            <li><a href="">Guia online</a></li>
                        </ul>
                    </div>
                </div>
                <div class="tres">
                    <div class="titulo">Estudar</div>
                    <div class="conteudo">
                        <ul>
                            <li><a href="">Estudo grátis</a></li>
                            <li><a href="">Criar usuário</a></li>
                            <li><a href="">Entrar numa turma</a></li>
                        </ul>
                    </div>
                </div>
                <div class="quatro">
                    <div class="titulo">Siga-nos</div>
                    <div class="conteudo">
                        <ul>
                            <li><a href=""><i class="fab fa-twitter-square fa-lg"></i>&nbsp;Twitter</a></li>
                            <li><a href=""><i class="fab fa-facebook fa-lg"></i>&nbsp;Facebook</a></li>
                            <li><a href=""><i class="fab fa-instagram fa-lg"></i>&nbsp;Instagram</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </footer>


    </body>
</html>
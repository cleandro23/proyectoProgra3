<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Munich Lion</title>
        <link rel="stylesheet" href="assets/css/styles.css"/>
    </head>
    <body>
        <div id="container">
        <!-- CABECERA-->
        <header id="header">
            <div id="logo">
                <img src="assets/img/deutsche lion.png" alt="Logo tienda"/>
                <a href="index.php">
                    Munich Lion
                </a>
            </div>
        </header>
        <!--MENU-->
        
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Categoria 1</a>
                </li>
                <li>
                    <a href="#">Categoria 2</a>
                </li>
                <li>
                    <a href="#">Categoria 3</a>
                </li>
                <li>
                    <a href="#">Categoria 4</a>
                </li>
                <li>
                    <a href="#">Categoria 5</a>
                </li>
            </ul>
        </nav>
        <!--BARRA LATERAL-->
        <div id="content">
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <form action="#" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email"/>
                        <label for="password">Contraseña</label>
                        <input type="password" name="password"/>
                        <input type="submit" value="Enviar"/>
                    </form>
                    <a href="#">Mis pedidos</a>
                    <a href="#">Gestionar pedidos</a>
                    <a href="#">Gestionar categorias</a>
                </div>
            </aside>
        </div>
        <!--CONTENIDO CENTRAL--> 
        <div id="centro">
            <div class="product">
                <img src="assets/img/bayernpoloazul.png"/>
                <h2>Camiseta Polo Oficial Bayern Munich 2021/2022</h2>
                <p>$60 USD</p>
                <a href="">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/img/bayernpoloazul.png"/>
                <h2>Camiseta Polo Oficial Bayern Munich 2021/2022</h2>
                <p>$60 USD</p>
                <a href="">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/img/bayernpoloazul.png"/>
                <h2>Camiseta Polo Oficial Bayern Munich 2021/2022</h2>
                <p>$60 USD</p>
                <a href="">Comprar</a>
            </div>
        </div>

        <!--Pie de pagina-->
        <footer id="footer">
            <p>Desarrollado por Carlos Navarro &copy; <?=date('Y')?></p>
        </footer>
        </div>
    </body>
</html>
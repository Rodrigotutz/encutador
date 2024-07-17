<!doctype html>
<html lang="pt-br">
    <head>
        <title>Página não encontrada</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body class="bg-dark text-white">
        <main class="d-flex justify-content-center align-items-center flex-column" style="min-height: 100vh;">
            <h1 class="display-5">Página Não encontrada</h1>
            <a href="<?= $router->route('web.index') ?>" class="text-white mt-3">Voltar</a>
        </main>

        <footer class="text-center d-flex flex-column" style="margin-top: -10vh;">
            <span>Desenvolvido por <a href="https://anterior.rodrigotutz.com/" class="text-white">Rodrigo Tutz</a></span>
            <span>
                <a href="" class="text-white small">Acesse meu github para ver o fonte desse app</a>
            </span>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

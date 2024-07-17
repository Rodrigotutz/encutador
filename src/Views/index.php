<!doctype html>
<html lang="pt-br">

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
</head>

<body class="bg-dark text-white">
    <main class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div>
            <div class="text-center">
                <h2>Encurte a sua url</h2>
                <p>Insira abaixo a sua URL para que seja encurtada</p>
            </div>
            <form action="<?= $router->route("web.send") ?>" method="post">
                <input type="text" name="url" class="form-control text-center" placeholder="Insira seu link aqui...">
                <div class="mt-3 text-center">
                    <button type="submit" button class="btn btn-success" id="send" style="width: 130px;">Encurtar</button>
                </div>
            </form>
        </div>
    </main>

    <footer class="text-center d-flex flex-column" style="margin-top: -10vh;">
        <span>Desenvolvido por <a href="https://anterior.rodrigotutz.com/" class="text-white">Rodrigo Tutz</a></span>
        <span>
            <a href="" class="text-white small">Acesse meu github para ver o fonte desse app</a>
        </span>
    </footer>

    <div class="message-component alert alert-<?= $class ?> fw-bold">
        <span class="text-<?= $class ?>"><?= $message ?></span>
    </div>

    
    <?php if (isset($_GET['short'])): ?>
        <div class="message-success" id="message-success">
            <div class="message-content">
                <h4 class="text-success">Url Encurtada!</h4>
                <p class="mt-4 fs-1 text-dark"><?= $short?></p>
                <button id="close-message-success" class="btn btn-secondary mt-3">Fechar</button>
            </div>
        </div>
    <?php endif; ?>
    
    <div id="containerLoading" class="d-none">
        <h2 class="fw-bold">Encurtando sua url aguarde...</h2>
        <img style="width: 50px;" src="<?=asset("img/loading.gif")?>" alt="Carregando">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="<?= asset('js/app.js')?>"></script>
</body>

</html>
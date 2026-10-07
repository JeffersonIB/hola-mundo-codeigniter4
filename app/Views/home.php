<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= esc($titulo) ?></title>
    <style>
        body { font-family: sans-serif; background: #f4f4f4; display: flex; justify-content: center; padding-top: 60px; }
        .card { background: #fff; padding: 30px 50px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,.15); }
        h1 { color: #dd4814; }
    </style>
</head>
<body>
    <div class="card">
        <h1><?= esc($mensaje) ?></h1>
        <p><strong>Autor:</strong> <?= esc($autor) ?></p>
        <p><strong>CodeIgniter versión:</strong> <?= esc($version) ?></p>
        <p><strong>Fecha y hora del servidor:</strong> <?= esc($fecha) ?></p>

        <h3>Tecnologías utilizadas:</h3>
        <ul>
            <?php foreach ($tecnologias as $tec): ?>
                <li><?= esc($tec) ?></li>
            <?php endforeach ?>
        </ul>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Texto - Exercício 3</title>
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos-exercicios.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="ex-header">
        <h1>Conversor de Texto</h1>
        <p>Exercício 3 — Funções PHP</p>
    </header>

    <main class="ex-main">
        <div class="ex-card">
            <h2>Converter Texto</h2>
            <p class="subtitle">Digite um texto e escolha a conversão</p>

            <form method="post" class="ex-form">
                <div class="form-group">
                    <label for="txt">Texto</label>
                    <input type="text" id="txt" name="txt" placeholder="Digite seu texto aqui" required>
                </div>

                <div class="form-group">
                    <label for="lista_convert">Tipo de conversão</label>
                    <select id="lista_convert" name="lista_convert" class="ex-select">
                        <option value="mai">Maiúscula</option>
                        <option value="min">Minúscula</option>
                    </select>
                </div>

                <div class="form-actions">
                    <input type="submit" value="CONVERTER" class="btn btn-primary">
                </div>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['txt'], $_POST['lista_convert'])) {
                $vlr = $_POST['lista_convert'];
                $texto = $_POST['txt'];

                function converter($valor, $txt) {
                    if ($valor == 'mai') {
                        return strtoupper($txt);
                    }
                    if ($valor == 'min') {
                        return strtolower($txt);
                    }
                    return $txt;
                }

                $resultado = converter($vlr, $texto);
                $tipo = ($vlr == 'mai') ? 'MAIÚSCULA' : 'minúscula';
                echo "<div class='result-box'>
                        <strong>Resultado em {$tipo}:</strong><br>
                        <span style='font-size:18px;word-break:break-word;'>{$resultado}</span>
                      </div>";
            }
            ?>
        </div>
    </main>

    <footer class="ex-footer">
        <p>Desenvolvido por <strong>Renan Longo de Menezes</strong> — Nº24 — 2EMCC</p>
    </footer>
</body>
</html>

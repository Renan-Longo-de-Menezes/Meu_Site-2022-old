<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidades do ABC</title>
    <link rel="shortcut icon" href="img/estrela.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos-exercicios.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="ex-header">
        <h1>Cidades do ABC</h1>
        <p>Exercício de formulário com select</p>
    </header>

    <main class="ex-main">
        <div class="ex-card">
            <h2>🗺️ Visite uma cidade</h2>
            <p class="subtitle">Escolha uma cidade do Grande ABC Paulista</p>

            <form name="form_cidades" method="post" action="cidades.php" class="ex-form">
                <div class="form-group">
                    <label for="lista_cidades">Escolha uma cidade para visitar</label>
                    <select id="lista_cidades" name="lista_cidades[]" class="ex-select" required>
                        <option value="">Selecione...</option>
                        <option value="Santo André">Santo André</option>
                        <option value="São Bernardo do Campo">São Bernardo do Campo</option>
                        <option value="São Caetano do Sul">São Caetano do Sul</option>
                        <option value="Ribeirão Pires">Ribeirão Pires</option>
                        <option value="Mauá">Mauá</option>
                        <option value="Diadema">Diadema</option>
                    </select>
                </div>

                <div class="form-actions">
                    <input type="submit" value="VISITAR" class="btn btn-primary">
                    <input type="reset" value="APAGAR" class="btn btn-secondary">
                </div>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lista_cidades'])) {
                $cidade_vis = $_POST['lista_cidades'];
                echo "<div class='result-box'>";
                foreach ($cidade_vis as $vl_cidade) {
                    if (!empty($vl_cidade)) {
                        echo "✅ Obrigado por visitar <strong>{$vl_cidade}</strong>!<br>";
                    }
                }
                echo "</div>";
            }
            ?>
        </div>
    </main>

    <footer class="ex-footer">
        <p>Desenvolvido por <strong>Renan Longo de Menezes</strong> — Nº24 — 2EMCC</p>
    </footer>
</body>
</html>

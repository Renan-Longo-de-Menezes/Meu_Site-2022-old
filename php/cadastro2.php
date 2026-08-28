<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="shortcut icon" href="../img/estrela.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilos-exercicios.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        .cadastro-card { max-width: 640px; }

        .form-section {
            margin-bottom: 24px;
            padding-bottom: 20px;
            border-bottom: 1px dashed #e0e0e0;
        }
        .form-section:last-of-type { border-bottom: none; }

        .form-section-title {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #00004d;
            font-size: 15px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 16px;
        }
        .form-section-title::before {
            content: '';
            width: 4px;
            height: 18px;
            background: #48d1cc;
            border-radius: 2px;
        }

        .date-group {
            display: grid;
            grid-template-columns: 1fr 1.2fr 1fr;
            gap: 10px;
        }
        .date-group label {
            font-size: 11px !important;
            color: #666;
        }

        .radio-group-inline {
            display: flex;
            gap: 20px;
            padding: 12px 16px;
            background: #f8fffe;
            border-radius: 8px;
            border: 2px solid #e8f8f7;
        }
        .radio-group-inline .radio-item {
            padding: 4px 8px;
        }

        .required-hint {
            font-size: 12px;
            color: #666;
            font-style: italic;
            margin-bottom: 20px;
        }
        .required-hint span { color: #DC143C; font-weight: 700; }

        .secret-hint {
            background: #fff8e1;
            border-left: 3px solid #ffc107;
            padding: 10px 14px;
            border-radius: 6px;
            font-size: 12px;
            color: #6d5a00;
            margin-bottom: 16px;
        }

        .ex-select {
            padding: 12px 16px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 15px;
            font-family: inherit;
            background-color: #fafafa;
            transition: all 0.3s ease;
            cursor: pointer;
            width: 100%;
        }
        .ex-select:focus {
            outline: none;
            border-color: #48d1cc;
            background-color: #ffffff;
            box-shadow: 0 0 0 3px rgba(72, 209, 204, 0.15);
        }
    </style>
</head>
<body>

    <header class="ex-header">
        <h1>Cadastro de Usuário</h1>
        <p>Cadastro em Banco de Dados</p>
    </header>

    <main class="ex-main">
        <div class="ex-card cadastro-card">
            <h2>📝 Novo Cadastro</h2>
            <p class="subtitle">Preencha seus dados para criar uma conta</p>

            <p class="required-hint">
                Os campos marcados com <span>*</span> são obrigatórios.
            </p>

            <form action="cadastra_usuario.php" method="post" enctype="multipart/form-data" name="formcadastro" class="ex-form">

                <!-- SEÇÃO: Acesso -->
                <div class="form-section">
                    <div class="form-section-title">Dados de Acesso</div>

                    <div class="form-group">
                        <label for="login">Login *</label>
                        <input type="text" id="login" name="login" maxlength="200" placeholder="Escolha um nome de usuário" required>
                    </div>

                    <div class="form-group">
                        <label for="senha">Senha * <small style="color:#666;font-weight:400;">(máx. 15 caracteres)</small></label>
                        <input type="password" id="senha" name="senha" maxlength="15" placeholder="Crie uma senha" required>
                    </div>

                    <div class="form-group">
                        <label for="rep_senha">Repetir senha *</label>
                        <input type="password" id="rep_senha" name="rep_senha" maxlength="15" placeholder="Confirme sua senha" required>
                    </div>
                </div>

                <!-- SEÇÃO: Dados Pessoais -->
                <div class="form-section">
                    <div class="form-section-title">Dados Pessoais</div>

                    <div class="form-group">
                        <label for="nome">Nome completo *</label>
                        <input type="text" id="nome" name="nome" maxlength="200" placeholder="Seu nome completo" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail *</label>
                        <input type="email" id="email" name="email" maxlength="200" placeholder="seu@email.com" required>
                    </div>

                    <div class="form-group">
                        <label>Sexo *</label>
                        <div class="radio-group-inline">
                            <div class="radio-item">
                                <input type="radio" id="sexo_m" name="sexo" value="Masculino" required>
                                <label for="sexo_m">Masculino</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="sexo_f" name="sexo" value="Feminino" required>
                                <label for="sexo_f">Feminino</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Data de nascimento *</label>
                        <div class="date-group">
                            <div>
                                <label for="dia">Dia</label>
                                <select id="dia" name="dia" class="ex-select" required>
                                    <option value="">--</option>
                                    <?php for ($i = 1; $i <= 31; $i++): ?>
                                        <option value="<?= str_pad($i, 2, '0', STR_PAD_LEFT) ?>"><?= str_pad($i, 2, '0', STR_PAD_LEFT) ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div>
                                <label for="mes">Mês</label>
                                <select id="mes" name="mes" class="ex-select" required>
                                    <option value="">--</option>
                                    <option value="01">Janeiro</option>
                                    <option value="02">Fevereiro</option>
                                    <option value="03">Março</option>
                                    <option value="04">Abril</option>
                                    <option value="05">Maio</option>
                                    <option value="06">Junho</option>
                                    <option value="07">Julho</option>
                                    <option value="08">Agosto</option>
                                    <option value="09">Setembro</option>
                                    <option value="10">Outubro</option>
                                    <option value="11">Novembro</option>
                                    <option value="12">Dezembro</option>
                                </select>
                            </div>
                            <div>
                                <label for="ano">Ano</label>
                                <select id="ano" name="ano" class="ex-select" required>
                                    <option value="">--</option>
                                    <?php for ($y = 1900; $y <= 2007; $y++): ?>
                                        <option value="<?= $y ?>"><?= $y ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEÇÃO: Endereço -->
                <div class="form-section">
                    <div class="form-section-title">Endereço</div>

                    <div class="form-group">
                        <label for="pais">País *</label>
                        <input type="text" id="pais" name="pais" maxlength="150" placeholder="Ex: Brasil" required>
                    </div>

                    <div class="form-group">
                        <label for="estado">Estado *</label>
                        <input type="text" id="estado" name="estado" maxlength="150" placeholder="Ex: São Paulo" required>
                    </div>

                    <div class="form-group">
                        <label for="cidade">Cidade *</label>
                        <input type="text" id="cidade" name="cidade" maxlength="150" placeholder="Ex: São Bernardo do Campo" required>
                    </div>

                    <div class="form-group">
                        <label for="cep">CEP *</label>
                        <input type="text" id="cep" name="cep" maxlength="50" placeholder="00000-000" required>
                    </div>
                </div>

                <!-- SEÇÃO: Pergunta Secreta -->
                <div class="form-section">
                    <div class="form-section-title">Pergunta Secreta</div>

                    <div class="secret-hint">
                        ⚠️ No campo da pergunta secreta, não coloque o ponto de interrogação (?)!
                    </div>

                    <div class="form-group">
                        <label for="pergunta">Pergunta secreta *</label>
                        <input type="text" id="pergunta" name="pergunta" maxlength="200" placeholder="Ex: Qual o nome do meu primeiro animal?" required>
                    </div>

                    <div class="form-group">
                        <label for="resposta">Resposta secreta *</label>
                        <input type="text" id="resposta" name="resposta" maxlength="200" placeholder="Sua resposta" required>
                    </div>
                </div>

                <div class="form-actions">
                    <input type="submit" name="cadastrar" value="CADASTRAR" class="btn btn-primary">
                    <input type="reset" name="limpar" value="LIMPAR" class="btn btn-secondary">
                </div>

                <div class="login-links" style="margin-top:20px;">
                    <a href="index.php" class="login-link">← Voltar ao início</a>
                </div>
            </form>
        </div>
    </main>

    <footer class="ex-footer">
        <p>Desenvolvido por <strong>Renan Longo de Menezes</strong> — Nº24 — 2EMCC</p>
    </footer>
</body>
</html>

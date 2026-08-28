# 🌐 Site Renan — Versão Revitalizada

> Projeto de revitalização de um site pessoal desenvolvido durante o curso técnico em informática, modernizando a estrutura, o visual e as boas práticas de desenvolvimento web.

## 📖 Sobre o Projeto

Este repositório contém a versão modernizada do meu site pessoal, originalmente criado quando eu estava iniciando meus estudos em desenvolvimento web. O objetivo do projeto foi **revitalizar o site antigo**, mantendo todo o conteúdo original, mas aplicando conhecimentos atuais de HTML5, CSS3, JavaScript e PHP.

O site original foi desenvolvido em 2020/2021 durante o curso técnico de informática (Turma 2EMCC), e esta nova versão representa minha evolução como desenvolvedor.

## 🎯 Objetivos

- ✅ Modernizar o visual mantendo a identidade original
- ✅ Substituir práticas obsoletas por padrões atuais da web
- ✅ Tornar o site totalmente responsivo (mobile-first)
- ✅ Melhorar a acessibilidade e semântica do HTML
- ✅ Organizar o código CSS de forma modular
- ✅ Aplicar boas práticas de segurança no PHP

## 🔄 O que mudou

### ❌ Removido
- Tags obsoletas (`<center>`, tabelas para layout)
- `window.alert()` intrusivo
- jQuery desnecessário em páginas simples
- Tabelas do Dreamweaver com larguras fixas
- Código PHP sem validação
- CSS com seletores pouco organizados

### ✅ Adicionado
- HTML5 semântico (`<header>`, `<nav>`, `<main>`, `<footer>`)
- Menu responsivo com hamburger em mobile
- CSS modular (`estilos.css` + `estilos-exercicios.css`)
- Animações e transições suaves
- Pseudocódigo formatado como em uma IDE
- Validação de formulários no cliente e servidor
- Proteção com `htmlspecialchars()` no PHP
- Proteção contra divisão por zero nas calculadoras

## 📁 Estrutura do Projeto

```
📦 site-renan/
├── 📄 index.html              # Página inicial
├── 📄 atividades.html         # Lista de atividades
├── 📄 maissobremim.html       # Sobre mim
├── 📄 amostras.html           # Amostras de trabalhos
├── 📄 contatos.html           # Contato
├── 📄 opi.html                # Projeto TechMagic-WEB
├── 📄 javascript.html         # Atividades de JS
├── 📄 exercicioslogica.html   # Atividades de lógica
├── 📄 exerciciosweb.html      # Atividades de web
├── 📄 logica1bim.html         # Algoritmos do 1º e 2º bim
├── 📄 sistema.html            # Sistema de login
├── 📄 transform.html          # Demo CSS Transform
├── 📄 ex1.html                # Formulário de cadastro
├── 📄 ex2.html                # Calculadora PHP
├── 📄 ex3.php                 # Conversor de texto
├── 📄 calculadora2.html       # Calculadora avançada
├── 📄 atividade2js.html       # Atividade JS 2
├── 📄 cidades.php             # Select de cidades
├── 📄 cadastro.php            # Processador de cadastro
├── 📄 cadastro2.php           # Cadastro completo
├── 📄 lembrar_senha.php       # Recuperação de senha
│
├── 📂 css/
│   ├── estilos.css            # CSS do site principal
│   ├── estilos-exercicios.css # CSS dos exercícios
│   └── estilos12.css          # CSS legado (backup)
│
├── 📂 img/                    # Imagens do site
├── 📂 js/                     # Scripts JavaScript
└── 📂 php/                    # Scripts PHP (backend)
```

## 🛠️ Tecnologias Utilizadas

| Tecnologia | Uso |
|------------|-----|
| **HTML5** | Estrutura semântica das páginas |
| **CSS3** | Estilização, Grid, Flexbox, animações |
| **JavaScript** | Menu mobile, relógio, interações |
| **PHP** | Formulários, calculadoras, cadastro |
| **Google Fonts** | Tipografia Montserrat |

## 🎨 Design System

- **Paleta de cores:**
  - Azul escuro: `#00004d`
  - Turquesa: `#48d1cc`
  - Cinza claro: `#ddd`
- **Tipografia:** Montserrat (400, 600, 700)
- **Border radius:** 8px a 20px (elementos)
- **Sombras:** suaves com opacidade baixa

## 📱 Responsividade

O site é totalmente responsivo, com breakpoints em:
- **768px** — tablets e telas médias
- **600px** — smartphones
- **480px** — smartphones pequenos

## 🚀 Como Usar

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/site-renan.git
   ```

2. Para páginas HTML estáticas, basta abrir o `index.html` no navegador.

3. Para páginas com PHP, é necessário um servidor local:
   ```bash
   # Usando PHP embutido
   php -S localhost:8000
   ```
   Acesse: `http://localhost:8000`

## 📊 Comparativo Antes × Depois

| Aspecto | Antes | Depois |
|---------|-------|--------|
| Layout | Tabelas e `<center>` | CSS Grid + Flexbox |
| Menu | Links em tabela | `<nav>` com hamburger |
| Formulários | Sem labels, sem validação | Labels, placeholders, validação |
| Código PHP | Sem tratamento de erros | Com `htmlspecialchars()` e validações |
| Mobile | Não responsivo | 100% responsivo |
| CSS | 1 arquivo só | Modular e organizado |
| Acessibilidade | Baixa | `aria-label`, contraste, semântica |

## 📝 Licença

Este projeto foi desenvolvido como parte das atividades do curso técnico em informática e está disponível para fins educacionais.

## 👨‍💻 Autor

**Renan Longo de Menezes** 
📧 renan.lm@outlook.com

---

<div align="center">

**Desenvolvido com 💙 e muito café ☕**

*Projeto de revitalização — 2020 → 2026*

</div>

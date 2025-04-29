# ☕ Serenatto - Sistema de Administração de Produtos

Este é um projeto desenvolvido como parte de um curso de PHP e MySQL. O sistema permite que administradores façam login, cadastrem, editem e visualizem produtos do cardápio da cafeteria fictícia "Serenatto".

## 📁 Estrutura do Projeto

O projeto contém as seguintes páginas principais:

- `index.php`: Página principal com visualização dos produtos.
- `login.html`: Interface de login para administradores.
- `cadastrar-produto.html`: Formulário para cadastro de novos produtos.
- `editar-produto.html`: Formulário para edição de produtos existentes.
- `admin.php`: Lógica de administração.

## 🚀 Funcionalidades

- Autenticação simples por login e senha (não implementada nos HTMLs, mas presumivelmente via `admin.php`).
- Cadastro de novos produtos com nome, tipo (Café ou Almoço), descrição, preço e imagem.
- Edição de produtos já cadastrados.
- Interface responsiva e estilizada com CSS e Google Fonts.
- Upload de imagem de produto (interface pronta).

## 🛠️ Tecnologias Utilizadas

- **HTML5** e **CSS3**
- **PHP**
- **MySQL** (Não incluído nos arquivos)

## 📝 Como Executar

1. Clone o repositório ou copie os arquivos para o seu servidor local (ex: XAMPP).
2. Coloque os arquivos na pasta `htdocs` (caso use XAMPP).
3. Inicie o Apache e MySQL.
4. Acesse `http://localhost/nome-da-pasta/index.php` pelo navegador.
5. Para login, acesse `login.php`.

## 📚 Aprendizados

Durante o desenvolvimento deste projeto, foram trabalhados conceitos fundamentais como:

- Estruturação de formulários HTML.
- Integração com PHP.
- Organização de arquivos front-end e back-end.
- Manipulação de dados de formulário.
- Estilização com CSS modular.

## 📌 Melhorias Futuras

- Implementar autenticação real usando sessões PHP.
- Adicionar feedback visual para cadastro/edição.
- Validar e tratar arquivos de imagem.

## 📄 Licença

Projeto educacional — sem fins comerciais.

---


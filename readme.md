<div align="center">
  <h1>🛍️ CRUD Laravel de Produtos</h1>
  <p><strong>Projeto de estudo com autenticação e cadastro de produtos.</strong></p>
  <p>Uma base para explorar operações de criação, leitura, edição e remoção em Laravel.</p>
</div>

---

## ✨ Funcionalidades

- Autenticação de usuários fornecida pela estrutura Laravel
- CRUD de produtos como exemplo de recurso da aplicação
- Migrations para criar as tabelas
- Assets compilados com Laravel Elixir

## 🧰 Tecnologias

`PHP 5.6.4+` · `Laravel 5.3` · `MySQL` · `Laravel Elixir`

## 🚀 Como executar

> Este projeto usa versões antigas do Laravel e do PHP. Prepare um ambiente compatível com essas dependências.

```bash
composer install
cp .env.example .env
php artisan key:generate
```

Configure o banco no `.env`, crie o banco vazio e execute:

```bash
php artisan migrate
php artisan serve
```

Acesse o endereço local informado pelo servidor Artisan e crie/configure os dados da aplicação conforme necessário.

## 🔒 Configuração

Mantenha credenciais e chaves no `.env` local. Não envie esse arquivo para o repositório.

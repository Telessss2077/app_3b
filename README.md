# 🏥 MediConnect API

A **MediConnect API** é uma solução moderna desenvolvida para facilitar o acesso a serviços médicos, permitindo que usuários localizem **clínicas e consultórios próximos** com base na sua localização e especialidades médicas.

Criada com **Laravel 12**, a aplicação oferece performance robusta, segurança aprimorada e uma base sólida para escalar soluções no setor da saúde.

![Logo](imagem relacionada ao projeto MediConnect API, que conecta pacientes a serviços médicos locais usando geolocalização e agendamento de consultas.png)

---

## 📦 Stack Utilizada

- PHP 8.4+  
- Laravel 12  
- PostgreSQL 17+  
- Docker  
- Eloquent ORM  
- API de Geolocalização  

---

## 🚀 Funcionalidades

- 🧭 Busca por clínicas e médicos próximos via geolocalização  
- 🔐 Autenticação e registro de pacientes com segurança e rate limiting  
- 📅 Agendamento de consultas com confirmação por e-mail  
- 🏥 Filtros por especialidade médica  
- 📍 Cálculo de distância entre usuários e clínicas  

---

## 🧱 Diagrama do Banco de Dados

📥 [Clique aqui para baixar o diagrama](./assets/diagrama-mediconnect-db.png)

> O modelo foi projetado com foco em flexibilidade e integridade, utilizando Eloquent ORM para relacionamentos claros entre usuários, clínicas e agendamentos.

---

## ⚙️ Pré-requisitos

- PHP 8.4 ou superior  
- Composer  
- PostgreSQL 17 ou superior  
- Docker (recomendado)  

---

## 🛠️ Instala
```bash
# Clonar o repositório
git clone https://github.com/seu-usuario/mediconnect-api.git
cd mediconnect-api

# Instalar dependências
composer install

# Configurar ambiente
cp .env.example .env

# Editar variáveis de ambiente (DB, Mail, etc)
nano .env

# Gerar chave da aplicação
php artisan key:generate

# Subir containers com Docker
docker-compose up -d

# Rodar migrations do banco
php artisan migrate

# (Opcional) Popular banco com dados iniciais
php artisan db:seed

# Servir a aplicação
php artisan serv



# Laravel 8 — Sellers App

A practice project built with Laravel 8 and Docker. This is a **sellers app** where each seller manages a client list and can place product orders on behalf of their clients.

## Requirements

- [Docker](https://www.docker.com/) installed and running
- Linux or macOS

---

## Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/martinteppa/LaravelWithDockerSail.git
cd LaravelWithDockerSail
```

### 2. Copy the environment file

```bash
cp .env.example .env
```

### 3. Build and start the containers

```bash
docker compose up -d --build
```

### 4. Install PHP dependencies

```bash
docker compose exec app composer install
```

### 5. Generate the application key

```bash
docker compose exec app php artisan key:generate
```

### 6. Run migrations and seed test data

```bash
docker compose exec app php artisan migrate
docker compose exec app php artisan db:seed
```

### 7. Install Node dependencies and compile assets

```bash
docker compose exec app npm install && npm run dev
```

### 8. Access the app

Open [http://localhost](http://localhost) in your browser.

**Test credentials:**
- Email: `vendedor1@gmail.com`
- Password: `vendedor1`

---

## Stopping the app

```bash
docker compose down
```

---

## Endpoints

### Web routes (browser, requires authentication)

| Method | URL | Description |
|--------|-----|-------------|
| GET | `/` | Welcome / landing page |
| GET | `/inicio` | Seller dashboard (home) |
| GET | `/nuevoPedido` | Start a new order (requires active cart) |
| GET | `/nuevoPedido/articulos` | Browse available products |
| GET | `/detalle_articulo/{id}` | View product detail |
| GET | `/carrito` | View current cart |
| GET | `/pedido` | Order summary before confirming |
| POST | `/pedidosRealizado` | Submit / place an order |
| GET | `/misPedidos` | View seller's order history |

> All routes except `/` require authentication via Sanctum and the `vendedor` role.

### Admin routes

| Method | URL | Description |
|--------|-----|-------------|
| GET | `/admin` | Admin dashboard (requires `administrador` role) |

### API routes

| Method | URL | Description |
|--------|-----|-------------|
| GET | `/api/user` | Returns the authenticated user (Bearer token required) |

**Example API request:**

```bash
curl -X GET http://localhost/api/user \
  -H "Authorization: Bearer YOUR_TOKEN_HERE" \
  -H "Accept: application/json"
```

---

## Stack

- **Backend:** Laravel 8, PHP 8.0
- **Frontend:** Livewire 2, Tailwind CSS
- **Auth:** Laravel Jetstream + Sanctum
- **Database:** MySQL 8.0
- **Cache / Queue:** Redis
- **Mail (dev):** MailHog — dashboard at [http://localhost:8025](http://localhost:8025)
- **Containerization:** Docker + Docker Compose

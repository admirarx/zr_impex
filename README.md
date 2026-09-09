# ZR Impex — Industrial CNC Machinery & Spare Parts Portal

[![Laravel Version](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel)](https://laravel.com)
[![PHP Version](https://img.shields.io/badge/PHP-8.4-777BB4?style=for-the-badge&logo=php)](https://php.net)
[![Filament Version](https://img.shields.io/badge/Filament-3.x-F59E0B?style=for-the-badge)](https://filamentphp.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-v4-38B2AC?style=for-the-badge&logo=tailwind-css)](https://tailwindcss.com)
[![License](https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge)](LICENSE)

A high-performance B2B commercial catalogue and lead-generation portal built for **ZR Impex**, showcasing heavy-duty CNC router machines, fiber laser cutting systems, CO2 engravers, and genuine spare parts. Designed for commercial conversion via dynamic WhatsApp inquiries, quote requests, and an integrated Filament 3 administration suite.

---

## Table of Contents

- [Features](#features)
- [Technology Stack](#technology-stack)
- [System Requirements](#system-requirements)
- [Installation & Local Setup](#installation--local-setup)
- [Admin Panel Access](#admin-panel-access)
- [Application Architecture & Routes](#application-architecture--routes)
- [Production Deployment & Optimization](#production-deployment--optimization)
- [Troubleshooting & FAQs](#troubleshooting--faqs)

---

## Features

- **Industrial CNC Machine Catalogue:** Filterable machinery showcase with category pills, keyword search, detailed specification matrix, gallery lightboxes, and downloadable brochures.
- **Spare Parts & Compatibility Engine:** Component catalog (spindles, VFD inverters, stepper/servo drives, linear guides) cross-referenced with compatible machine models.
- **WhatsApp Conversion Engine:** Generates contextual, pre-filled WhatsApp inquiry links carrying machine model details, specifications, and referral sources.
- **Click & Lead Telemetry:** Background analytics logging for WhatsApp click events with device detection (mobile, tablet, desktop) and inquiry source attribution.
- **Filament 3 Admin Dashboard:**
  - Full CRUD for products, categories, dynamic specifications, and media galleries.
  - Lead inquiry triage pipeline with status workflows (`New`, `Contacted`, `In Discussion`, `Converted`, `Closed`).
  - Real-time conversion metrics and activity widgets.
  - Global site settings editor for contact information, showroom address, and business hours.
- **Security & Anti-Spam:** Honeypot verification and rate-limited form submissions on quote and inquiry forms.
- **SEO & Social Metadata:** Dynamic OpenGraph tags, JSON-LD Schema structured data, and automated XML sitemap generation.

---

## Technology Stack

| Layer | Technology |
|---|---|
| **Backend Framework** | Laravel 12 (PHP 8.4) |
| **Admin Panel** | Filament 3 |
| **Frontend Templates** | Laravel Blade |
| **Styling** | Tailwind CSS v4 (Custom Industrial Machine Palette) |
| **Interactivity** | Alpine.js 3.x |
| **Asset Pipeline** | Vite 6 |
| **Database** | MySQL 8.x / MariaDB (SQLite supported for development) |

---

## System Requirements

Ensure your development environment meets the following requirements:

- **PHP:** `^8.3` or `^8.4`
- **PHP Extensions Required:** `pdo`, `pdo_mysql`, `curl`, `mbstring`, `fileinfo`, `openssl`, `tokenizer`, `xml`, `intl`
- **Composer:** `^2.7` or higher
- **Node.js:** `^20.x` or higher
- **NPM:** `^10.x` or higher
- **Database Server:** MySQL `^8.0` / MariaDB `^10.4` or SQLite

---

## Installation & Local Setup

Follow these steps to set up and run the project locally:

### 1. Clone the Repository

```bash
git clone <repository-url> zrimpex
cd zrimpex
```

### 2. Install PHP Dependencies

Install Composer packages (Filament, Laravel framework, etc.):

```bash
composer install
```

### 3. Install Node.js Dependencies

Install Vite, Tailwind CSS v4, Alpine.js, and related build tools:

```bash
npm install
```

### 4. Configure Environment File

Copy the example environment configuration:

```bash
# On Linux / macOS / Git Bash:
cp .env.example .env

# On Windows PowerShell:
Copy-Item .env.example .env
```

Open `.env` and configure your local application settings and database connection:

```ini
APP_NAME="ZR Impex"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=zrimpex_db
DB_USERNAME=root
DB_PASSWORD=
```

> **Tip:** If using **SQLite** for rapid local evaluation, set:
> ```ini
> DB_CONNECTION=sqlite
> ```
> And create the empty database file: `touch database/database.sqlite` (or `New-Item database/database.sqlite` in PowerShell).

### 5. Generate Application Encryption Key

```bash
php artisan key:generate
```

### 6. Run Database Migrations & Data Seeders

Execute database migrations and populate the database with production-like CNC machines, spare parts, default settings, and the initial administrator account:

```bash
php artisan migrate --seed
```

> **What the seeders create:**
> - Category hierarchy for CNC machines and spare parts
> - 5 fully configured industrial CNC machines with realistic specification tables
> - 6 genuine spare parts with machine compatibility links
> - System settings (showroom address, WhatsApp hotline, sales email, business hours)
> - Default Super Admin user for the Filament dashboard

### 7. Link Public Storage

Create the symbolic link from `public/storage` to `storage/app/public` so uploaded machine brochures and gallery media can be served:

```bash
php artisan storage:link
```

### 8. Run the Development Environment

You can run the application in two ways:

#### Option A: Concurrent Development Server (Recommended)
Run the Vite development server and the Laravel HTTP server concurrently:

```bash
composer run dev
```

#### Option B: Separate Terminal Processes
- **Terminal 1 (Vite Asset Server):**
  ```bash
  npm run dev
  ```
- **Terminal 2 (Laravel Backend Server):**
  ```bash
  php artisan serve
  ```

Visit the website in your browser at: **[http://localhost:8000](http://localhost:8000)** (or `http://zrimpex.test` if running with Laravel Herd).

---

## Admin Panel Access

The administrative dashboard is powered by Filament 3 and accessible at:

> **URL:** `http://localhost:8000/admin`

### Default Administrator Credentials (from Seeders)

| Field | Value |
|---|---|
| **Email** | `admin@zrimpex.com` |
| **Password** | `admin12345` |

### Creating Additional Admin Accounts

You can generate additional administrators using the Filament Artisan CLI:

```bash
php artisan make:filament-user
```

---

## Application Architecture & Routes

| Method | URI | Controller Action | Description |
|---|---|---|---|
| `GET` | `/` | `PageController@home` | Industrial showcase, featured machines & metrics |
| `GET` | `/about` | `PageController@about` | Company background, engineering standards & QC |
| `GET` | `/contact` | `PageController@contact` | Factory showroom details, map & contact form |
| `GET` | `/cnc-machines` | `ProductController@machinesIndex` | Filterable CNC machine catalogue |
| `GET` | `/machines/{slug}` | `ProductController@machineShow` | Machine detail, technical specs, gallery & CTA |
| `GET` | `/spare-parts` | `ProductController@sparePartsIndex` | Spares & components catalogue |
| `GET` | `/spare-parts/{slug}` | `ProductController@sparePartShow` | Spare part detail & compatible machines list |
| `POST` | `/enquiry` | `EnquiryController@store` | Lead submission (honeypot + throttle protected) |
| `ANY` | `/whatsapp-click/{product?}` | `WhatsAppClickController@track` | Telemetry tracker for WhatsApp conversion clicks |
| `GET` | `/sitemap.xml` | `PageController@sitemap` | Automated XML sitemap for search crawlers |
| `ANY` | `/admin` | Filament Admin Panel | Full management suite |

---

## Production Deployment & Optimization

When deploying to production (such as Hostinger, VPS, or cloud hosts):

### 1. Build Static Frontend Assets
Compile optimized production CSS and JavaScript bundles:
```bash
npm run build
```

### 2. Optimize Laravel Caches
Cache framework configurations, routes, Blade views, and Filament components:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan filament:optimize
```

### 3. File Permissions
Ensure the web server user (`www-data`, `nginx`, or shared hosting user) has write permissions to:
```bash
chmod -R 775 storage bootstrap/cache
```

---

## Troubleshooting & FAQs

#### Q: Product images or brochures return a 404 error
**Solution:** Ensure the storage link exists. Run:
```bash
php artisan storage:link
```

#### Q: Vite Exception "Unable to locate file in Vite manifest"
**Solution:** Compile the production assets:
```bash
npm run build
```
Or start the Vite dev server with `npm run dev`.

#### Q: Admin dashboard styling looks broken or unstyled
**Solution:** Re-publish the Filament static assets:
```bash
php artisan filament:upgrade
```

#### Q: SQL Database Connection Refused
**Solution:** Check that your database server is running and matches the credentials configured in `.env` (`DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

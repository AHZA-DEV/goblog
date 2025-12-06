# Blog Laravel

Blog website sederhana yang dibangun dengan Laravel 12, Tailwind CSS, dan Filament Admin Panel.

## Fitur

- Manajemen artikel/post dengan kategori
- Hero image untuk setiap artikel
- SEO-friendly dengan meta title dan description
- Sistem author untuk setiap post
- Dark mode toggle
- Responsive design dengan Tailwind CSS
- Admin panel dengan Filament

## Tech Stack

- **Framework**: Laravel 12
- **PHP**: ^8.2
- **Frontend**: Tailwind CSS 4, Vite
- **Admin Panel**: Filament 3
- **Database**: SQLite (default) / MySQL / PostgreSQL

## Instalasi

### Prerequisites

- PHP >= 8.2
- Composer
- Node.js & NPM

### Langkah-langkah

1. **Clone repository**

   ```bash
   git clone https://github.com/username/blog-laravel.git
   cd blog-laravel
   ```

2. **Install dependencies PHP**

   ```bash
   composer install
   ```

3. **Install dependencies Node.js**

   ```bash
   npm install
   ```

4. **Setup environment**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Setup database**

   Untuk SQLite (default):
   ```bash
   touch database/database.sqlite
   ```

   Atau konfigurasi MySQL/PostgreSQL di file `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=blog_laravel
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Jalankan migrasi database**

   ```bash
   php artisan migrate
   ```

7. **Build assets**

   ```bash
   npm run build
   ```

## Menjalankan Project

### Development

Jalankan Laravel server dan Vite secara bersamaan:

```bash
# Terminal 1 - Laravel Server
php artisan serve

# Terminal 2 - Vite Dev Server
npm run dev
```

Atau gunakan script composer:

```bash
composer dev
```

### Production

```bash
npm run build
php artisan serve
```

Akses aplikasi di: `http://localhost:8000`

## Filament Admin Panel

Project ini menggunakan [Filament](https://filamentphp.com/) sebagai admin panel untuk mengelola konten blog.

### Akses Admin Panel

Admin panel dapat diakses di: `http://localhost:8000/admin`

### Membuat User Admin

Untuk membuat user admin baru, jalankan perintah:

```bash
php artisan make:filament-user
```

Ikuti instruksi untuk memasukkan nama, email, dan password.

### Fitur Admin Panel

- **Dashboard** - Overview statistik blog
- **Manajemen Post** - CRUD artikel dengan rich text editor
- **Manajemen Kategori** - CRUD kategori artikel
- **Manajemen User** - Kelola user dan author

### Membuat Resource Baru

Untuk membuat resource Filament baru:

```bash
php artisan make:filament-resource NamaModel
```

## Struktur Project

```
blog-laravel/
├── app/
│   ├── Http/           # Controllers dan Middleware
│   ├── Models/         # Eloquent Models (Post, Category, User)
│   └── Providers/      # Service Providers
├── database/
│   ├── migrations/     # Database migrations
│   └── seeders/        # Database seeders
├── resources/
│   ├── css/            # Stylesheet
│   ├── js/             # JavaScript
│   └── views/          # Blade templates
├── routes/
│   └── web.php         # Web routes
└── public/             # Public assets
```

## Model

### Post
- `title` - Judul artikel
- `slug` - URL-friendly slug
- `excerpt` - Ringkasan artikel
- `content` - Konten lengkap
- `hero_image` - Gambar utama
- `category_id` - Relasi ke kategori
- `author_id` - Relasi ke user/author
- `is_featured` - Status featured
- `status` - Status publikasi
- `published_at` - Tanggal publikasi
- `seo_title` - Meta title untuk SEO
- `seo_description` - Meta description untuk SEO

### Category
- `name` - Nama kategori
- `slug` - URL-friendly slug

## Lisensi

Project ini menggunakan lisensi [MIT](https://opensource.org/licenses/MIT).

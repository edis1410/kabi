# Kabi – Laravel projekt

Ta projekt prikazuje seznam izdelkov v Laravel aplikaciji z uporabo Tailwind CSS za stilizacijo in responsive dizajn. Uporabnik lahko pregleda seznam izdelkov ter odpre podstran za vsak posamezen izdelek.

---

## 🧰 Tehnologije

- **Laravel**
- **Tailwind CSS**
- **Alpine.js**

---

## 🚀 Zagon projekta

### 1. Kloniraj repozitorij in pojdi v mapo:

```bash
git clone <repo-url>
cd ime-projekta
```

### 2. Namesti PHP odvisnosti:

```bash
composer install
```

### 3. Namesti JS pakete:

```bash
npm install
```

### 4. Nastavi `.env` datoteko in aplikacijski ključ:

```bash
cp .env.example .env
php artisan key:generate
```

### 5. Poženi migracije

```bash
php artisan migrate
```

### 6. Zaženi razvojni strežnik:

```bash
php artisan serve
```

### 7. Prevedi Tailwind in JS datoteke:

```bash
npm run dev
```

---

## 🖼️ Slika in Logotip

Logotip se nahaja v `storage/app/public/logo.png`. Za uporabo povezave:

```bash
php artisan storage:link
```

---

## 📁 Struktura

- `routes/web.php` → definicija poti (`/products`, `/products/{id}`)
- `app/Http/Controllers/ProductController.php` → logika za prikaz izdelkov
- `resources/views/products/index.blade.php` → seznam izdelkov
- `resources/views/products/show.blade.php` → prikaz posameznega izdelka
- `resources/views/components/header.blade.php` → responsive navigacija

---

## 📱 Responsive

Stran je prilagojena za mobilne naprave do 500px širine in deluje tudi na Apache 2.4 s PHP 7 ali PHP 8. Navigacija se samodejno skrije na manjših zaslonih in prikaže hamburger meni.

---

## Prikaz izdelkov

Trenutno so izdelki hardcodeani v controllerju, lahko pa bi jih brez problema dodal dinamično iz baze.

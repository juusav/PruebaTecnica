<h2>Steps:</h2>

1) Clone repo
```
git clone https://github.com/Jusav503/PruebaTecnica.git
```

2) Install composer dependecies

```
composer install
```

3) Install NPM Dependencies
```
npm install
```

4) Create a copy of your .env file
```
cp .env.example .env
```
5) Generate an app encryption key
```
php artisan key:generate
```
7) ⚠IMPORTANT⚠
Create folder called "public" in address "testTechnical/storage/app" then execute:
```
php artisan storage:link
```
8) Run migrations and seeders

✅SOLUTION TO THE PROBLEM UPLOAD IMAGES <br/>
On the project path "pruebaTecnica/storage/app" cut the "categories", "livewire-tmp", "products" folder and paste them inside the public folder


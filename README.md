<h1 align="center">Laravel Blog</h1>

<p align="center">
  <strong>Simple Laravel-based blog application</strong><br>
  A clean starter blog built with Laravel and Blade templates. This README was generated after inspecting the repository structure.
</p>

<hr/>

<h2>Quick Start</h2>

<ol>
  <li><strong>Clone the repo</strong>:
    <pre><code>git clone https://github.com/GhaethMrad/blog.git
cd blog</code></pre>
  </li>

  <li><strong>Install PHP dependencies</strong>:
    <pre><code>composer install</code></pre>
  </li>

  <li><strong>Install Node dependencies & build frontend</strong>:
    <pre><code>npm install
npm run dev     <!-- for development -->
npm run build   <!-- for production build (Vite) --></code></pre>
  </li>

  <li><strong>Environment</strong>:
    <pre><code>cp .env.example .env
# Then edit .env to set DB, APP_KEY, and other credentials
php artisan key:generate</code></pre>
  </li>

  <li><strong>Database</strong>:
    <pre><code>php artisan migrate
# optionally: php artisan db:seed</code></pre>
  </li>

  <li><strong>Run the application</strong>:
    <pre><code>php artisan serve
# app available at http://127.0.0.1:8000</code></pre>
  </li>
</ol>

<hr/>

<hr/>

<p align="center">Made with GhaethMrad❤️</p>

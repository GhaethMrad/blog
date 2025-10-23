<h1 align="center">Laravel Blog</h1>

<p align="center">
  <strong>Simple Laravel-based blog application</strong><br>
  A clean starter blog built with Laravel and Blade templates. This README was generated after inspecting the repository structure.
</p>

<hr/>

<h2>Confirmed (from repository)</h2>
<ul>
  <li><strong>Framework:</strong> Laravel (PHP)</li>
  <li><strong>Templating:</strong> Blade (resources/ contains Blade templates)</li>
  <li><strong>Frontend tooling:</strong> Vite (vite.config.js present)</li>
  <li><strong>Node & npm:</strong> package.json (frontend scripts & dependencies)</li>
  <li><strong>PHP dependencies:</strong> composer.json (server-side dependencies)</li>
  <li><strong>Project structure:</strong> <code>app/</code>, <code>bootstrap/</code>, <code>config/</code>, <code>database/</code>, <code>public/</code>, <code>resources/</code>, <code>routes/</code>, <code>storage/</code>, <code>tests/</code></li>
  <li><strong>Environment template:</strong> <code>.env.example</code></li>
  <li><strong>Artisan CLI:</strong> <code>artisan</code> (Laravel CLI)</li>
  <li><strong>Automated tests:</strong> <code>phpunit.xml</code> present</li>
</ul>

<hr/>

<h2>Features</h2>
<p><em>These features are listed only if they are confirmed in the repository structure and files.</em></p>
<ul>
  <li><strong>Laravel MVC structure</strong> — Application follows Laravel conventions (controllers, models, views under <code>app/</code> and <code>resources/</code>).</li>
  <li><strong>Blade views</strong> — The project uses Blade templating (files under <code>resources/</code> indicate use of Blade).</li>
  <li><strong>Vite frontend build</strong> — Frontend assets are built with Vite (<code>vite.config.js</code> available).</li>
  <li><strong>Composer & npm tooling</strong> — Server dependencies managed via <code>composer.json</code>, frontend via <code>package.json</code>.</li>
  <li><strong>Prepared for environment configuration</strong> — Example environment file (<code>.env.example</code>) included.</li>
  <li><strong>Routes</strong> — Application routing files exist under <code>routes/</code>.</li>
  <li><strong>Database</strong> — Project contains <code>database/</code> (migrations / seeds may be present).</li>
  <li><strong>Test configuration</strong> — <code>phpunit.xml</code> exists indicating test setup.</li>
</ul>

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

<h2>Project Structure (high level)</h2>
<ul>
  <li><code>app/</code> — Controllers, Models, and application logic</li>
  <li><code>bootstrap/</code> — Framework bootstrap</li>
  <li><code>config/</code> — Configuration files</li>
  <li><code>database/</code> — Migrations, seeds, factories</li>
  <li><code>public/</code> — Public assets (entry point)</li>
  <li><code>resources/</code> — Blade views, front-end assets</li>
  <li><code>routes/</code> — Route definitions</li>
  <li><code>storage/</code> — Logs, compiled templates, file uploads</li>
  <li><code>tests/</code> — Automated tests (phpunit)</li>
</ul>

<hr/>

<h2>Environment & Requirements</h2>
<ul>
  <li>PHP 8.1+ recommended</li>
  <li>Composer</li>
  <li>Node.js & npm (for Vite)</li>
  <li>A supported database (MySQL, MariaDB, SQLite, PostgreSQL — configure in <code>.env</code>)</li>
</ul>

<hr/>

<h2>How to Contribute</h2>
<p>If you'd like help improving the README (for example: listing exact packages, controllers, routes, or sample screenshots), I can update it to include:</p>
<ul>
  <li>Exact composer & npm dependencies (from <code>composer.json</code> and <code>package.json</code>).</li>
  <li>List of implemented routes and controllers (from <code>routes/</code> and <code>app/Http/Controllers</code>).</li>
  <li>Database migration & model mapping summary.</li>
  <li>Screenshots and sample content.</li>
</ul>

<hr/>

<p align="center">Made with GhaethMrad❤️</p>

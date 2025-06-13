<div class="container my-5 installation-page">
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-5 fw-bold text-gradient">🔧 Install BugLocks</h1>
            <p class="lead text-muted">Follow these simple steps to set up BugLocks in your Laravel project.</p>
        </div>
    </div>

    <!-- Step 1 -->
    <div class="card mb-4 shadow-sm border-0">
        <div class="card-header bg-gradient-primary text-white fw-semibold">
            <i class="bi bi-box-seam me-2"></i> Step 1: Requirements
        </div>
        <div class="card-body">
            <ul class="list-unstyled mb-0">
                <li>✅ PHP 8.1 or above</li>
                <li>✅ Laravel 10+</li>
                <li>✅ Composer installed globally</li>
                <li>✅ MySQL/PostgreSQL setup</li>
            </ul>
        </div>
    </div>

    <!-- Step 2 -->
    <div class="card mb-4 shadow-sm border-0">
        <div class="card-header bg-gradient-primary text-white fw-semibold">
            <i class="bi bi-terminal me-2"></i> Step 2: Install via Composer
        </div>
        <div class="card-body">
            <p>Run this command in your terminal:</p>
            <pre class="bg-light p-3 rounded border"><code>composer require buglock/rolepermissionmodule</code></pre>
        </div>
    </div>

    <!-- Step 3 -->
    <div class="card mb-4 shadow-sm border-0">
        <div class="card-header bg-gradient-primary text-white fw-semibold">
            <i class="bi bi-wrench-adjustable-circle me-2"></i> Step 3: Publish Config & Model & Views
        </div>
        <div class="card-body">
            <p>Publish the configuration files:</p>
            <pre class="bg-light p-3 rounded border"><code>php artisan vendor:publish --tag=buglocks-config</code></pre>
        </div>
        <div class="card-body">
            <p>Publish the Models:</p>
            <pre class="bg-light p-3 rounded border"><code>php artisan vendor:publish --tag=role-permissions-models</code></pre>
        </div>
        <div class="card-body">
            <p>Publish the views files:</p>
            <pre class="bg-light p-3 rounded border"><code>php artisan vendor:publish --tag=buglocks-error-views</code></pre>
        </div>
    </div>

    <!-- Step 4 -->
    <div class="card mb-4 shadow-sm border-0">
        <div class="card-header bg-gradient-primary text-white fw-semibold">
            <i class="bi bi-database-check me-2"></i> Step 4: Run Migrations
        </div>
        <div class="card-body">
            <p>Execute migrations to set up necessary tables:</p>
            <pre class="bg-light p-3 rounded border"><code>php artisan migrate</code></pre>
        </div>
    </div>

    <!-- Step 5 -->
    <div class="card mb-4 shadow-sm border-0">
        <div class="card-header bg-gradient-primary text-white fw-semibold">
            <i class="bi bi-sliders2-vertical me-2"></i> Step 5: Optional Configuration
        </div>
        <div class="card-body">
            <p>You can configure authentication error messages, primary key settings, and other options by editing the following file::</p>
            <pre class="bg-light p-3 rounded border"><code>config/buglocks.php</code></pre>
        </div>
    </div>

    <!-- Navigation -->
    <div class="text-center mt-5">
        <a href="#" class="btn btn-lg btn-primary px-4 shadow-sm">
            <i class="bi bi-arrow-right-circle me-2"></i> Proceed to Configuration
        </a>
    </div>
</div>

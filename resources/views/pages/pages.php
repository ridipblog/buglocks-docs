<h2 class="mb-4 text-primary">🛠️ Customizable Blade Views</h2>

<p class="lead">The package includes three default Blade view files which are shown under different access control conditions. Developers are free to customize or redesign these views as needed by publishing them to their own project.</p>

<!-- *** Start Title Card *** -->

<?php
$cardData = [
  'auth' => [
    'title' => '🔒 auth.blade.php',
    'body' => 'Displayed when the user is not logged in.'
  ],
  'role' => [
    'title' => '🧑‍💼 role.blade.php',
    'body' => 'Displayed when the user does not have the required role'
  ],
  'permission' => [
    'title' => '🔑 permissions.blade.php',
    'body' => 'Displayed when the user lacks the required permission.'
  ]
];
?>
<div class="row g-3 mb-2">
  <?php
  foreach ($cardData as $key => $value) {
  ?>
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h6 class="card-title"><?= $cardData[$key]['title'] ?></h6>
          <p class="card-text"><?= $cardData[$key]['body'] ?></p>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
</div>

<!-- *** End Title Card *** -->

<!-- *** Start Views Command Card *** -->

<?php
$cardHead = 'Customize Views Command';
$cardText = '<ul>
<li>To customize these views, publish the package views using the following Artisan command</li>
</ul>';
ob_start();
?>
php artisan vendor:publish --tag=buglocks-error-views
<?php

$code = htmlspecialchars(ob_get_clean());

include '../components/smallCard.php';
?>
<!-- *** End Views Command Card *** -->

<p>
<ul>
  <li>Once published, you can edit the views in your application's <code>resources/views/vendor/buglock/</code> directory.</li>
</ul>
</p>
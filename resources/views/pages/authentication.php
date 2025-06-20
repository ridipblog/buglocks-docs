<h2 class="mb-4 text-primary">🔐 Middleware Documentation</h2>

<p class="lead">This example demonstrates how the middleware in the Show <strong>BugLocks</strong> automatically handles role and permission checks when used in a chained manner.
</p>


<!-- *** Start  Check Login *** -->

<?php
$cardHead='1. Check Login';
$cardText='<ul>
<li>This middleware ensures that the user is authenticated before accessing certain routes.</li>
</ul>';
ob_start();
?>

Route::group(['middleware' => ['buglock.auth:web,view,no']], function () { // This code do not check active status
    Route::get('/dash-1', [TestController::class, 'dash_1']);
});

// OR 

Route::group(['middleware' => ['buglock.auth:web,view,yes']], function () { // This code do check active status
    Route::get('/dash-1', [TestController::class, 'dash_1']);
});
<?php

$code = htmlspecialchars(ob_get_clean());

include '../components/smallCard.php';
?>
<!-- *** End Check Login *** -->

<!-- *** Start  Check Role *** -->

<?php
$cardHead='2. Check Role';
$cardText='<ul>
<li>This middleware checks if the logged-in user has a specific role (e.g., admin, employee).</li>
<li>Whether you\'re restricting access to one role or several, this middleware handles both cases seamlessly.</li>
</ul>';
ob_start();
?>

Route::group(['middleware' => ['buglock.auth:web,view,no','buglock.role:web,view,admin,employee']], function () {
    Route::get('/dash', [TestController::class, 'dash']);
});

// OR

Route::group(['middleware' => ['buglock.auth:web,view,no','buglock.role:web,view,manager']], function () {
    Route::get('/dash', [TestController::class, 'dash']);
});
<?php
$code = htmlspecialchars(ob_get_clean());

include '../components/smallCard.php';
?>
<!-- *** End Check Role *** -->

<!-- *** Start Check Permission *** -->

<?php
$cardHead='3. Check Permission';
$cardText='<ul>
<li>This middleware verifies whether the user has permission to access a particular resource or action.</li>
<li>Whether you need to check one permission or several, this middleware provides flexible permission validation.</li>
</ul>';
ob_start();
?>

Route::group(['middleware' => ['buglock.permission:web,view,edit,delete']], function () {
    Route::get('/dash-3', [TestController::class, 'dash_3']);
});

// OR

Route::group(['middleware' => ['buglock.permission:web,view,view']], function () {
    Route::get('/dash-3', [TestController::class, 'dash_3']);
});

<?php
$code = htmlspecialchars(ob_get_clean());

include '../components/smallCard.php';
?>
<!-- *** End Check Permission *** -->
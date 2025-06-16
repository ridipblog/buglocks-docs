<h2 class="section-title">🔐 Role & Permission Management</h2>
<p>This page demonstrates how to add new roles and permissions using the BugLocks package.</p>


<?php

// *** Start Initialized Section ***

$heading="Apply BugLocks & Create Object";
$method="";
$methodHeading="This is how you initialize the <code>BugLock</code> class in your project to start managing roles and permissions:";

ob_start();
?>

use BugLock\rolePermissionModule\Http\Controllers\BugLock;

$bugLock = new BugLock(); // Create an instance of BugLock

<?php

$code = htmlspecialchars(ob_get_clean());

$methodNote="Once you’ve created the object, you can use it to add roles, permissions, assign roles to users, and more.";

include '../components/RPCards.php';
// *** End Initialized Section ***

?>

<?php
// *** Start Role Section ***
$heading="Add Role Method";
$method="createRole()";
$methodHeading="method allows you to add new permissions to your application — like <strong>Edit</strong>, <strong>View</strong>";

ob_start();
?>
use BugLock\rolePermissionModule\Http\Controllers\BugLock;

$bugLock = new BugLock();

// Add a single role
$bugLock->createRole('admin');

// Add multiple roles
$bugLock->createRole('admin', 'editor', 'user');

<?php

$code = htmlspecialchars(ob_get_clean());

$methodNote="You can pass one or more role names as arguments to the method. It automatically creates the roles in your database if they don’t already exist.";

include '../components/RPCards.php';

// *** End Role Section ***

// *** Start Permission Section ***

$heading="Add Permission Method";
$method="createPermission()";
$methodHeading="method allows you to add new permissions to your application — like <strong>Edit</strong>, <strong>View</strong>";

ob_start();
?>
use BugLock\rolePermissionModule\Http\Controllers\BugLock;

$bugLock = new BugLock();

// Add a single permission
$bugLock->createPermission('edit');

// Add multiple permission
$bugLock->createPermission('edit','view');

<?php

$code = htmlspecialchars(ob_get_clean());

$methodNote="You can pass one or more permission names as arguments to the method. It automatically creates the permissions in your database if they don’t already exist.";

include '../components/RPCards.php';
// *** End Permission Section ***

?>
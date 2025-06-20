<h2 class="mb-4 text-primary">🔐 Auto Role & Permission Linking with BugLocks</h2>

<p class="lead">This example demonstrates how <strong>BugLocks</strong> automatically associates roles and permissions if used in a chained way.</p>

<!-- *** Start Auto Linked Role & Permissions *** -->

<?php
ob_start();
?>
use BugLock\rolePermissionModule\Http\Controllers\BugLock;

$bug_lock = new BugLock();

$bug_lock->createRole('admin-1', 'admin-2');

$bug_lock->createPermission('edit-resume-1', 'remove-resume-2');

$bug_lock->assignedLocks(); // Automatically links newly added roles & permissions

dd($bug_lock);

<?php

$code = htmlspecialchars(ob_get_clean());

include '../components/codeCard.php';
?>

<!-- *** End Auto Linked Role & Permissions *** -->

<!-- *** Start Manual Linked Role & Permissions *** -->

<?php
ob_start();
?>
use BugLock\rolePermissionModule\Http\Controllers\BugLock;

$bug_lock = new BugLock();

$bug_lock->createRole('admin-1', 'admin-2');

$bug_lock->createPermission('edit-resume-1', 'remove-resume-2');

$bug_lock->assignedLocks(
['Admin'],
['delete','invite']
); // Manualy links roles & permissions

dd($bug_lock);

<?php
$code = htmlspecialchars(ob_get_clean());

include '../components/codeCard.php';
?>

<!-- *** End Manual Linked Role & Permissions *** -->

<?php
$cardHead = '👤 Configure User Model';
$cardText = '<ul>
<li> Import <strong>assignBugLock</strong> BugLock traits and models in your User class to enable role and permission management features.</li>
</ul>';
ob_start();
?>
namespace App\Models;

use BugLock\rolePermissionModule\Models\UserRoles;
use BugLock\rolePermissionModule\traits\assignBugLock;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use assignBugLock, HasApiTokens, HasFactory, Notifiable;

    // You can define relationships, accessors, or custom logic here
}
<?php

$code = htmlspecialchars(ob_get_clean());

include '../components/smallCard.php';
?>

<?php
$cardHead = '👤 Assign Role To User';
$cardText = '<ul>
<li> Assign Role: Easily assign one or more roles to a user to control access and define responsibilities in your application</li>
</ul>';
ob_start();
?>
$user=User::where('name','coder 1')
->first();
$user->assignRoleToUser('admin');
$user->assignRoleToUser('manager');
if($user->fails){
    dd($user->reason);
}
<?php

$code = htmlspecialchars(ob_get_clean());

include '../components/smallCard.php';
?>

<div class="info-box mb-4">
    <p><strong>🔄 Smart Behavior:</strong> If you run the methods in sequence using the same <code>$bug_lock</code> object, it will automatically track and assign the newly created roles and permissions when calling <code>assignedLocks()</code>.</p>
</div>

<div class="alert alert-warning">
    <strong>📝 Note:</strong> If you call <code>assignedLocks()</code> separately or later, you must pass the roles and permissions manually.
</div>
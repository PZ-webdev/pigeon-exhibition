<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;


//  Home
Breadcrumbs::for('account', function ($trail) {
    $trail->push('Home', route('account'));
});

// Breadcrumbs::for('user', function ($trail, $user) {
//     $trail->parent('account');
//     $trail->push($user->name, route('users.singleUser', $user->id));
// });


?>

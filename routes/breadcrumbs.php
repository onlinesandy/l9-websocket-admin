<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
     $trail->push('Home', url('/'));
});


// Home > Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Dashboard', url('dashboard'));
});

// Home > Role
Breadcrumbs::for('roles.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Role', url('roles'));
});

// Home > Role > Edit
Breadcrumbs::for('roles.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('roles.index');
    $trail->push('Edit', url('roles'));
});


// Home > Role > Create
Breadcrumbs::for('roles.create', function (BreadcrumbTrail $trail) {
    $trail->parent('roles.index');
    $trail->push('Create', url('roles'));
});


// Home > Role > Show
Breadcrumbs::for('roles.show', function (BreadcrumbTrail $trail) {
    $trail->parent('roles.index');
    $trail->push('Show', url('roles'));
});

// Home > Role > Excel
Breadcrumbs::for('roles.file-export-excel', function (BreadcrumbTrail $trail) {
    $trail->parent('roles.index');
    $trail->push('Role Excel Download', url('roles'));
});


// Home > Role > Excel
Breadcrumbs::for('roles.file-export-csv', function (BreadcrumbTrail $trail) {
    $trail->parent('roles.index');
    $trail->push('Role CSV Download', url('roles'));
});



// Home > Profile
Breadcrumbs::for('profile.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Profile', url('profile'));
});

// Home > Chat
Breadcrumbs::for('chat.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Chat', url('chat'));
});


// Home > Friend
Breadcrumbs::for('friends.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Friend', url('friends'));
});

// Home > Command
Breadcrumbs::for('commands.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Command', url('commands'));
});




// Home > Role
Breadcrumbs::for('permissions.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Permission', url('permissions'));
});

// Home > Role > Edit
Breadcrumbs::for('permissions.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('permissions.index');
    $trail->push('Edit', url('permissions'));
});


// Home > Role > Create
Breadcrumbs::for('permissions.create', function (BreadcrumbTrail $trail) {
    $trail->parent('permissions.index');
    $trail->push('Create', url('permissions'));
});


// Home > Role > Show
Breadcrumbs::for('permissions.show', function (BreadcrumbTrail $trail) {
    $trail->parent('permissions.index');
    $trail->push('Show', url('permissions'));
});

// Home > Role > Dropzone
Breadcrumbs::for('dropzone', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Dropzone', url('dropzone'));
});
// Home > Role > Dropzone
Breadcrumbs::for('dropzone.store', function (BreadcrumbTrail $trail) {
    $trail->parent('dropzone');
    $trail->push('Dropzone', url('dropzone'));
});


// Home > User > Dropzone
Breadcrumbs::for('users.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Users', url('users'));
});

Breadcrumbs::for('users.create', function (BreadcrumbTrail $trail) {
    $trail->parent('users.index');
    $trail->push('Users', url('users'));
});
Breadcrumbs::for('users.show', function (BreadcrumbTrail $trail) {
    $trail->parent('users.index');
    $trail->push('Users', url('users'));
});

Breadcrumbs::for('users.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('users.index');
    $trail->push('Users', url('users'));
});

Breadcrumbs::for('users.delete', function (BreadcrumbTrail $trail) {
    $trail->parent('users.index');
    $trail->push('Users', url('users'));
});


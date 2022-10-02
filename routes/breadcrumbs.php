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
Breadcrumbs::for('file-export-excel', function (BreadcrumbTrail $trail) {
    $trail->parent('roles.index');
    $trail->push('Role Excel Download', url('roles'));
});


// Home > Role > Excel
Breadcrumbs::for('file-export-csv', function (BreadcrumbTrail $trail) {
    $trail->parent('roles.index');
    $trail->push('Role CSV Download', url('roles'));
});



// Home > Role
Breadcrumbs::for('profile.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Profile', url('profile'));
});

// Home > Role
Breadcrumbs::for('chat.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Chat', url('chat'));
});

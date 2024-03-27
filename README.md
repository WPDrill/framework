# WPDrill - WordPress Plugin Development Framework

WPDrill is a WordPress Plugin Development Framework for human. It's designed to simplify the process of creating and managing WordPress plugins.

> ⚠️ Caution: This package is in alpha stage. Expect bugs and changes. Test thoroughly before use.

## Features

1. **Menu Management**: WPDrill provides an easy way to add and manage menus in your WordPress plugin. You can easily add a new menu with an icon and position. For example, in `menu.php`, a new menu 'WPDrill' is added with a smiley icon and positioned at 3.

2. **Routing**: WPDrill provides a simple and intuitive way to manage routes in your WordPress plugin. You can define GET routes, apply middleware, and even group routes with a common prefix or middleware. For example, in `api.php`, a GET route '/wpdrill' is defined with a middleware.

3. **Middleware**: WPDrill allows you to add middleware to your routes, providing a way to perform actions before the route handler is executed.

4. **WPDrill CLI Tools**: WPDrill comes with a set of command-line tools that help in automating tasks such as scaffolding, migrations, and testing.

5. **ServiceProvider**: WPDrill uses a service provider pattern for managing class dependencies and performing dependency injection.

6. **Config**: WPDrill provides a central place to manage configuration settings for your plugin.

7. **Migrations**: WPDrill supports database migrations, allowing you to version control your database schema and apply changes incrementally.

8. **View**: WPDrill provides a simple way to manage views in your WordPress plugin. You can easily create, edit, and manage views for your plugin.

9. **Query Builder**: WPDrill provides a simple way to manage database operations in your WordPress plugin. You can easily create, read, update, and delete records in your database.


## Installation

The installation and configuration process of WPDrill can be done in the following steps:

1. **Download WPDrill**: You can download WPDrill from its official GitHub repository into `plugins` directory. Use the following command in your terminal to clone the repository:

```bash
git clone https://github.com/WPDrill/framework.git
```

2. **Navigate to the WPDrill directory**: After cloning the repository, navigate to the WPDrill directory using the following command:

```bash
cd wpdrill
```

3. **Install Dependencies**: WPDrill uses Composer for managing PHP dependencies. Run the following command to install these dependencies:

```bash
composer install
```

## Plugin Initiate

After installing the necessary dependencies, the next step is to initialize the plugin. Execute the following command in your terminal:

bashCopy code

```bash
./wpdrill plugin:init
```

That's all! Now, proceed to your WordPress admin dashboard and activate your freshly created plugin.

## Add Admin Menu

To add a new menu in WPDrill, you need to follow the steps below:
Open the Menu Configuration File: Navigate to the `bootstrap/menu.php` file in your WPDrill plugin directory.
Define the New Menu: In the menu.php file, use the `Menu::add()` method to define a new menu. Here's an example of how you can create a new menu:

```php

use WPDrill\Facades\Menu;
use App\Handlers\ReviewXDashboardMenu;

Menu::add('ReviewX Dashboard', new ReviewXDashboardMenu(), 'manage_options')
        ->icon('dashicons-smiley')
        ->position(3);
```

You can use different types of approach to bind handler, the previous example was an invokable handler instance(That means it should contain `__invoke()` method.

#### Direct invokable class binding

```php
use WPDrill\Facades\Menu;
use App\Handlers\ReviewXDashboardMenu;

Menu::add('ReviewX Dashboard', ReviewXDashboardMenu::class , 'manage_options')
        ->icon('dashicons-smiley')
        ->position(3);
```

#### Class and method mapping

```php
use WPDrill\Facades\Menu;
use App\Handlers\ReviewXDashboardMenu;

Menu::add('ReviewX Dashboard', [ReviewXDashboardMenu::class, 'dashboard'] , 'manage_options')
        ->icon('dashicons-smiley')
        ->position(3);
```

#### Closure

```php
use WPDrill\Facades\Menu;
use App\Handlers\ReviewXDashboardMenu;

Menu::add('ReviewX Dashboard', function() {
    echo "Dashboard";
} , 'manage_options')
        ->icon('dashicons-smiley')
        ->position(3);
```

## REST Routing

To create a route in WPDrill, you need to define it in the `routes/api.php` file. Here is an example of how you can do it:

```php
<?php

use WPDrill\Routing\Router;

Router::get('/wpdrill', [\App\Rest\Controllers\WPDrillController::class, 'show']);
```

In this example, a GET route '/wpdrill' is defined. When this route is accessed, the `show` method of the `WPDrillController` class is executed. Please replace the `WPDrillController` and `show` with the actual controller and method that should handle the request for this route.

The route controller support the following

- Invokable Controller Instance (should contains `__invoke()` method in the class instance)

- Invokable class binding, ex: `\App\Rest\Controllers\WPDrillController::class`) (should contains `__invoke()` method in the class)

- Class and method mapping, ex: `[\App\Rest\Controllers\WPDrillController::class, 'method_name'`]`

- Closure


### Route Group

WPDrill also support route grouping, here is the example

```php
Route::group(['prefix' => '/info'], function() {
    Route::get('/about', function () {
        return [
            'title' => 'About WPDrill',
            'content' => 'A WordPress Plugin development framework for humans',
        ];
    });
});
```

## View

WPDrill helps you to develop high level templating option, it comes with Twig template engine by default. Here is an example

```php
//app/Handlers

use WPDrill\Contracts\InvokableContract;
use WPDrill\Facades\View;

class WPDrillMenuHandler implements InvokableContract {

	public function __invoke()
    {
		 View::output('wpdrill', [
            'title' => 'Welcome to WPDrill',
            'content' => 'A WordPress Plugin development framework for humans',
        ]);
	}
}
```

Here is the view(twig) file

```twig
<!-- resources/views/wpdrill.html -->
<h1>{{ title }}</h1>

<p>
    {{ content }}
</p>
```

## Getting Started

To get started with WPDrill, you need to have a basic understanding of WordPress plugin development as well as familiarity with JavaScript, PHP, Composer, NPM, Vue, and C.

## Documentation

For more detailed information on how to use WPDrill, refer to the individual PHP files in the `wp-content/plugins/reviewx` directory. Each file contains code that demonstrates how to use various features of WPDrill.

## Contributing

Contributions to WPDrill are welcome. Please ensure that you follow the coding standards and guidelines of the project.

## License

WPDrill is open-source software. The exact licensing terms are not specified in the provided context.

Please note that this is a basic documentation based on the provided context. For a more comprehensive documentation, more information about the project would be needed.

# Code generator for laravel projects

## Instructions

* Run command ``Register LucasandreDev\LaravelCodeGenerator\Providers\CodeGeneratorProvider in providers laravel``

> Note:<br>
> In laravel versions <= 10: https://laravel.com/docs/10.x/providers#registering-providers <br>
> In laravel versions >= 11:
> https://laravel.com/docs/11.x/providers#registering-providers

* Run command ``php artisan vendor:publish --tag=templates-code-generator-config``
* Run command ``php artisan vendor:publish --tag=templates-code-generator-mockups``
* add the following configuration in 'config/filesystems.php'

``'templates' => [
'driver' => 'local',
'root' => base_path(),
'throw' => true,
],``
* Configure file in ``config/templates-code-generator.php``
* Run command ``php artisan code:generate``


#### When running the artisan command, you will be prompted for an entity name and a template name.

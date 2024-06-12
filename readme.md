# Code generator for laravel projects

## Instructions

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

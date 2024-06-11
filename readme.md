# Code generator for laravel projects

## Instructions

* Run command ``php artisan vendor:publish --tag=templates-code-generator-config``
* Run command ``php artisan vendor:publish --tag=templates-code-generator-mockups``
* Configure file in ``config/templates-code-generator.php``
* Run command ``php artisan code:generate``


#### When running the artisan command, you will be prompted for an entity name and a template name.

> **Note: The template name is the first level of the array in the 'config/templates-code-generator.php' file** 

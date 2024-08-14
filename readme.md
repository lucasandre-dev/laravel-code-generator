# Laravel Code Generator

A simple code generator for Laravel projects to streamline development.

## 🚀 Installation and Configuration

1. **Install via Composer**
   ```bash
   composer require lucasandre-dev/laravel-code-generator
   ```

2. **Publish the Service Provider**
   Register the service provider in your `config/app.php` file:
   ```php
   'providers' => [
       // Other Service Providers...
       LucasandreDev\LaravelCodeGenerator\Providers\CodeGeneratorProvider::class,
   ],
   ```

   > **Note:**  
   > For Laravel versions <= 10: [Registering Providers in Laravel 10](https://laravel.com/docs/10.x/providers#registering-providers)  
   > For Laravel versions >= 11: [Registering Providers in Laravel 11](https://laravel.com/docs/11.x/providers#registering-providers)

3. **Publish Configuration and Mockups**
    - **Config File:**
      ```bash
      php artisan vendor:publish --tag=templates-code-generator-config
      ```
    - **Mockups:**
      ```bash
      php artisan vendor:publish --tag=templates-code-generator-mockups
      ```

4. **Add Filesystem Configuration**
   Add the following configuration to `config/filesystems.php`:
   ```php
   'templates' => [
       'driver' => 'local',
       'root' => base_path(),
       'throw' => true,
   ],
   ```

5. **Configure Template Generator**
   Modify the configuration in `config/templates-code-generator.php` to suit your needs.

6. **Run Code Generation Command**
   Execute the following command to generate code:
   ```bash
   php artisan code:generate
   ```

   > **Note:**  
   > When running the command, you'll be prompted to provide an entity name and a template name.

## 📚 Documentation

### 🔧 Configuration File (`config/templates-code-generator.php`)

- **disk:** Disk used for storing generated files.
- **base_destination:** Base path for all generated files.
- **template_default:** Default template used by the command to generate code.
- **templates:** List of templates with operations, template locations, and final dynamic destinations.

### 🛠️ Artisan Commands

#### `code:generate`

**Options:**

- `--force`: Force overwrite of existing files (use with caution).

**Prompts:**

- **Entity:** Name of the entity to be created. Allows subpaths (e.g., `Path1/Path2/EntityName`).
- **Template:** Select a template number from the options suggested in the terminal.

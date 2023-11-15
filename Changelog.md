# Changelog

## Added

1. Creating a Basic Project Structure:

    Create a directory for your project.
    Organize it with subdirectories such as src, public, and optionally vendor.

2. Creating a Simple Controller:

    In src/Application/Controllers/HelloController.php, create a HelloController class with a sayHello method returning "Hello, World!".

3. Setting up a Manual Autoloader:

    Create an autoloader.php file at the root of your project.
    Use spl_autoload_register to register an autoloading function.
    The autoloading function loads class files by replacing \ with / and adding the path to the src folder.

4. Using the Controller in the Application:

    In public/index.php, include the autoloader file and use the HelloController class to display "Hello, World!".

5. Running the Application:

    Access public/index.php from your browser to see the result.

6. Implementing a Namespace Management System:

    Creating folders with namespaces.
    Organizing files with namespaces.
    Adapting the autoloader.
    Using classes with namespaces.

7. Implementing a Simple Logger System:

    Creating the Logger class.
    Integrating the Logger into the autoloader.
    Using the Logger in your application.
    Capturing errors with the Logger.
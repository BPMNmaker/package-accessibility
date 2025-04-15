# Processmaker Accessibility
This package provides the necessary base code to start the developing a package in ProcessMaker 4.

## Development
If you need to create a new ProcessMaker package run the following commands:

```
git clone https://github.com/ProcessMaker/accessibility.git
cd accessibility
php rename-project.php accessibility
composer install
npm install
npm run dev
```

## Installation
* Use `composer require BPMNmaker/accessibility` to install the package.
* Use `php artisan accessibility:install` to install generate the dependencies.

## Navigation and testing
* Navigate to administration tab in your ProcessMaker 4
* Select `Skeleton Package` from the administrative sidebar

## Uninstall
* Use `php artisan accessibility:uninstall` to uninstall the package
* Use `composer remove BPMNmaker/accessibility` to remove the package completely

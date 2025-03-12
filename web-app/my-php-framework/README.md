# my-php-framework

This is a simple PHP framework designed to help you build web applications quickly and efficiently.

## Project Structure

```
my-php-framework
├── app
│   ├── Controllers
│   │   └── HomeController.php
│   ├── Models
│   │   └── User.php
│   └── Views
│       └── home.php
├── config
│   └── config.php
├── public
│   └── index.php
├── routes
│   └── web.php
├── src
│   └── Core
│       ├── Database.php
│       └── Router.php
├── tests
│   └── Unit
│       └── ExampleTest.php
├── composer.json
├── .htaccess
└── README.md
```

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/my-php-framework.git
   ```

2. Navigate to the project directory:
   ```bash
   cd my-php-framework
   ```

3. Install dependencies using Composer:
   ```bash
   composer install
   ```

## Usage

1. Configure your database settings in `config/config.php`.
2. Start the built-in PHP server:
   ```bash
   php -S localhost:8000 -t public
   ```
3. Open your browser and navigate to `http://localhost:8000` to see the application in action.

## Contributing

Feel free to submit issues or pull requests to improve the framework.

## License

This project is licensed under the MIT License. See the LICENSE file for details.
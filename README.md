# NimbusMVC

NimbusMVC is a lightweight and simple PHP Model-View-Controller (MVC) framework designed for learning and rapid development of CRUD applications.

## Table of Contents

- [Features](#features)
- [Folder Structure](#folder-structure)
- [Getting Started](#getting-started)
- [Configuration](#configuration)
- [Usage](#usage)
- [License](#license)

## Features

- Simple and easy-to-understand MVC architecture.
- Lightweight core libraries for routing, controllers, and database abstraction.
- Basic environment variable management.
- Organized file structure for scalable application development.

## Folder Structure

```
NimbusMVC
|
└── app
    ├── config
    │   └── config.php      # Application configuration
    ├── controllers
    │   └── Pages.php       # Example controller
    ├── helpers             # Custom helper functions
    ├── libraries
    │   ├── Controller.php  # Base controller class
    │   ├── Core.php        # Core routing class
    │   └── Database.php    # Database wrapper
    ├── models              # Application models
    ├── views
    │   ├── includes
    │   │   ├── header.php  # Header template
    │   │   └── footer.php  # Footer template
    │   └── pages
    │       └── index.php   # Example view
    ├── .htaccess           # Rewrite rules
    └── bootstrap.php       # Bootstrap file
|
└── public
    ├── css                 # Stylesheets
    ├── js                  # JavaScript files
    └── index.php           # Entry point
|
├── .env.example            # Example environment variables
├── .gitignore              # Ignored files for Git
└── .htaccess               # Rewrite rules for public directory
```

## Getting Started

### Prerequisites

- PHP 8 or higher
- A web server

### Installation

1. Clone the repository:

```
git clone https://github.com/IAmWilliamHames/NimbusMVC.git
```

2. Navigate to the project directory:

```
cd NimbusMVC
```

3. Configure environment variables by copying `.env.example` to `.env`:

```
cp .env.example .env
```

4. Set appropriate values in `.env` for your environment.
5. Point your web server to the `public` directory.

## Configuration

The application configuration can be managed through the following files:

- `app/config/config.php`: Define core settings such as base URL.
- `.env`: Store sensitive environment variables.

## Usage

### Routing

By default, the framework supports controller-based routing.

#### Example Route

```
http://example.com/posts/create
```

This route will map tot he `create` method in the `Posts` controller.

### Controllers

Create controllers in the `app/controllers` directory by extending the `Controller` base class.

#### Example Controller

```php
class Posts extends Controller {
  public function index() {
    $this->view('posts/index')
  }
}
```

### Views

Store view templates in the `app/views` directory. Organize templates in subdirectories as needed.

#### Example View

```php
<?php require APPROOT . '/views/includes/header.php'; ?>

<h1>Hello World</h1>

<?php require APPROOT . '/views/includes/footer.php'; ?>
```

### Models

Define application models in the `app/models` directory. Use the `Database` library for database interactions.

#### Example Model

```php
class Post {
  private $db;

  public function __construct() {
    $this->db = new Database
  }

  public function getAllPosts() {
    $this->db->query('SELECT * FROM posts');

    return $this->db->resultSet();
  }
}
```

## License

NimbusMVC is open-source software licensed under the MIT license.

# HTML CSS JS Generator
HTML Generator utilizes the Laravel Blade template engine to help PHP developers quickly generate HTML for web application frontends. It leverages Blade's powerful features to speed up frontend development.

## Installation

### Prerequisites
Clone the repository to your local machine:
```bash
git clone git@github.com:binjuhor/html-generator.git
```

Run the following commands to quick install the dependencies and set up the project:
```bash
yarn setup
```

Put your local domain to the `.env` file:
```env
APP_URL=http://localhost:8000
```

### Compile Assets
```bash
yarn dev
```

### Compile Assets for Production
```bash
yarn build
```

### Compile HTML Generator
You just need to add `&build` to the URL to compile the HTML Generator. And the HTML files will be generated in the `compiles` directory.

### Export the HTML Generator
```bash
yarn export
```

Then in the root directory, you will find the `compiles.zip` file. Extract the file to your server and run the application.

**Note**: Just need to run `yarn export` to compile the HTML Generator and export the `compiles.zip` file, no need to add `&build` to the URL to compile the HTML Generator.

## Usage

Create new templates in the `resources/views/templates` directory. Use the `resources/views/layouts/app.blade.php` layout file to extend the layout for your templates.
Put your HTML content to @section('content') in your template file.

```php
@extends('layouts.app')
@section('content')
    <h1>Hello, world!</h1>
@endsection
```

You can also use the `@include` directive to include partials in your templates.

```php
@extends('layouts.app')
@section('content')
    @include('partials._form')
@endsection
```

### To switch between different views

You can use `f` request parameter to switch between different views. For example, if you have a view called `home.blade.php` and you want to switch to `about.blade.php`, you can do so by adding `?f=about` to the url.

**Note**: You need to change `$domain` in `.env` to your domain localhost or website URL to avoid errors when generate HTML files.

## Goals

- [x] Create a new template like Laravel blade
- [ ] Use components in the template
- [ ] Use slots in the template
- [ ] Use directives in the template
- [ ] Generate HTML from the template

## License
[MIT](https://choosealicense.com/licenses/mit/)

## Author
[Binjuhor](https://binjuhor.com)

Email: [hi@binjuhor.com](mailto:hi@binjuhor.com)


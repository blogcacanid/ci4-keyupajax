# ci4-keyupajax
Menampilkan Data Fields Berdasarkan Input Textbox CodeIgniter 4

> https://blog.cacan.id/menampilkan-data-fields-berdasarkan-input-textbox-codeigniter-4

![000](https://user-images.githubusercontent.com/51890752/86551202-9bd5a880-bf6e-11ea-90dc-3eea62c4cee0.jpg)


# Cara Penggunaan:

## Clone dari GitHub:
Clone program ke DocumentRoot webserver. Untuk XAMPP windows biasanya ada di C:\xampp\htdocs jika mengunakan Linux atau Ubuntu biasanya ada di /var/www/html/

    git clone https://github.com/blogcacanid/ci4-keyupajax.git



## Testing
Jalankan web server kemudian buka browser dan ketikkan URL http://localhost/ci4-keyupajax/

Selanjutnya ketikkan NIP pegawai pada textbox NIP, misalnya 200500010

![001](https://user-images.githubusercontent.com/51890752/86551217-a7c16a80-bf6e-11ea-8859-2809ba77396f.jpg)


# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible, and secure. 
More information can be found at the [official site](http://codeigniter.com).

This repository holds the distributable version of the framework,
including the user guide. It has been built from the 
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [the announcement](http://forum.codeigniter.com/thread-62615.html) on the forums.

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/). 


## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!
The user guide updating and deployment is a bit awkward at the moment, but we are working on it!

## Repository Management

We use Github issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script. 
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/contributing.md) section in the development repository.

## Server Requirements

This is a small and intentionally imperfect PHP app that should never, under any circumstances, be used for anything except to aid one in learning how gettext works. I am sure that there are security flaws galore here in, e.g., the use of `session_start` and the `$_SESSION` variable. Do not, under any circumstances, use the `i18n_setup.php` file as is, unless you know what you're doing (I sure don't!) and are sure the application is not insecure.

To run, clone to the desired directory, and run, from the root directory, the follwoing command:
`php -S localhost:8000 -t src/`


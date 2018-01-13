# AdminLTE

Package to generate adminlte layout views

# Installation

    composer require kmligue/adminlte:dev-master

add to your providers array **(config/app.php)**

    KMLigue\AdminLTE\AdminLTEServiceProvider::class,

to publish the views file

    php artisan vendor:publish
this command will generate assets file in **public/assets** folder and views file in **views/kmligue/adminlte** folder. You can move the generated views file according to your folder structure.
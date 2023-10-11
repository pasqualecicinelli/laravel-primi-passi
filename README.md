# Esercizio di oggi: Laravel primi passi

## nome repo: laravel-primi-passi

Ciao ragazzi,
oggi iniziamo a muovere i primi passi con questo fantastico framework che è Laravel!
Qui c'è il link alle slides per l'installazione di Composer e di PHP da terminale da tutti gli OS.
Per prima cosa, creiamo un nuovo progetto Laravel 9, utilizzando questo comando:
composer create-project laravel/laravel:^9.2 laravel-primi-passi
Al termine dell'installazione, entriamo nella cartella del progetto
cd laravel-primi-passi
e avviamo l'artisan serve con
php artisan serve
A questo punto, iniziamo a prendere confidenza con le rotte e le views:
cancelliamo la view welcome.blade.php
creiamo una nostra homepage.
Facciamo quindi sì che la rotta / visualizzi home.blade.php
Inizialmente stampiamo un "Hello World", poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.

### Bonus:

Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route()

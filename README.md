# 157-sprachpaket-dutch
Sprachpaket NIEDERLÄNDISCH für Zen Cart 1.5.7 deutsch 

Hinweis: 
Freigegebene getestete Versionen für den Einsatz in Livesystemen ausschließlich unter Releases herunterladen:
* https://github.com/zencartpro/157-sprachpaket-dutch/releases

Anpassung des Dutch Language Pack von Zen4All
(https://github.com/Zen4All-nl/Dutch-Language-Pack-for-Zen-Cart) 
für die deutsche Zen Cart Version 1.5.7

* utf-8
* Frontend von native speaker übersetzt 

Dieses Sprachpaket stellt eine komplette niederländische Übersetzung (Übersetzunggrad 100%) für das Frontend der Grundversion bereit. 

Die Sprachdefinitionen sind vollständig für die deutsche Zen Cart Version 1.5.7i angepasst, so dass es auch mit PHP 8.2 oder 8.3 keine Probleme geben sollte. 

Dieses Sprachpaket geht davon aus, dass im Shop CSS Buttons verwendet werden und liefert keine niederländischen Grafikbuttons mit. 

Da es seit Zen Cart 1.5.7 deutsch nicht mehr nötig ist, die Administration auf andere Sprachen umzuschalten (außer zum Bearbeiten von Define Pages unter Tools > Seiteneditor) stellt dieses Sprachpaket keine niederländische Übersetzung für den Adminbereich bereit.

Im Adminbereich gibt es nur wenige Dateien, die niederländische Texte für Kunden enthalten müssen, da sie für die Bestellstatusaktualisierung, Emailversand, usw. an Kunden herangezogen werden, die auf niederländisch bestellt haben:

* DEINADMIN/includes/languages/dutch/extra_definitions/orders_status_updates_admin.php
* DEINADMIN/includes/languages/dutch/email_extras.php
* DEINADMIN/includes/languages/dutch/orders.php 

Die entsprechenden Definitionen dieser Dateien sind auf niederländisch übersetzt, alle andere Definitionen des Adminbereichs sind auf deutsch.

Falls Sie einen komplett niederländischen Adminbereich benötigen, z.B. weil Ihr Shop von einer Person administriert wird, die ausschließlich niederländisch spricht, dann müssen Sie die entsprechenden Admin Definitionen selbst übersetzen.

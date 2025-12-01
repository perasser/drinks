# Drinks

Die Klasse `RandomDrink` verfügt über eine Methode namens `getDrink()`, welche ein zufälliges Getränk zurückliefert.

## Verwendung

```php
<?php
// composer hinzufügen
require 'vendor/autoload.php';

// Objekt erstellen
$drinkMachine = new \Perasser\Drinks\RandomDrink();

// Aufruf der Methode
$drink = $drinkMachine->getDrink();

echo '<p>Sie trinken: ' . $drink . '</p>';
```

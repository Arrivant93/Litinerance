# Litinérance

Contexte du site

# Basique installation

Le projet utilise **php version 8.2** et requière [composer](https://getcomposer.org/) pour installer toutes les différentes dépendances liée à php.

Le projet utilise aussi [**Node.js**](https://nodejs.org/en) pour quelques dépendances.

N'oublier pas qu'après le répositorie clone de faire :

```bash
composer install
```

```bash
npm install
```

# Les différentes branches

**master** est la branche de déploiement.

**dev** est la branche des développement qui servira de _test_ avant de tout mettre sur master.

# Sommaire

1. [Créer une nouvelle page](#créer-une-nouvelle-page)
2. [Créer une nouvelle route](#créer-une-nouvelle-route)
3. [Tailwind CSS](#tailwindcss)

# Créer une nouvelle page

Toutes les pages sont regroupés dans le dossier `src/pages/`.

Attention, chaque page doit être relier à une route. N'oubliez donc pas de [créer la route](#créer-une-nouvelle-route) qui sera associée à cette page.

### Basique

-  Chaque page doit avoir l'extention **.php**.
-  Vous pouvez taper du html directement dessus.

# Créer une nouvelle route

## Introduction

Chaque route est définie dans le fichier **route.php** qui se trouve dans le dossier `src/route`.

**$routes** contient l'instance de **RouteCollection()** de symfony.

## Exemple basique de création d'une route

```php
$routes->add('a-propos', new Route('/a-propos'))
```

**new Route()** correspond à l'objet Route() de symfony.

Pour tout autre cas pratique [documentation du routing en symfony](https://symfony.com/doc/current/create_framework/routing.html).

# Tailwind CSS

## Introduction

Le projet utilise Tailwind.

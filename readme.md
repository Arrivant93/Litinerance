# Documentation du Projet : Litinérance

# Basique installation

Le projet utilise **PHP version 8.2** et requiert [Composer](https://getcomposer.org/) pour installer toutes les différentes dépendances liées à php.

Le projet utilise également [**Node.js**](https://nodejs.org/en) pour certaines dépendances.

Après avoir cloné le dépôt, veuillez exécuter les commandes suivantes dans votre terminal :

```bash
composer install
```

```bash
npm install
```

# Branches disponibles

**master** Branche de déploiement.

**dev** Branche de développement utilisée pour les _tests_ avant la fusion avec la branche master.

# Sommaire

1. [Créer une nouvelle page](#créer-une-nouvelle-page)
2. [Créer une nouvelle route](#créer-une-nouvelle-route)
3. [Tailwind CSS](#tailwind-css)

# Créer une nouvelle page

Toutes les pages sont regroupées dans le dossier `src/pages/`. Chaque page doit être associée à une route. N'oubliez pas de [créer la route](#créer-une-nouvelle-route) correspondante.

**Remarque importante**: Chaque page doit avoir l'extension .php. Vous pouvez y inclure directement du code HTML.

# Créer une nouvelle route

## Introduction

Les routes sont définies dans le fichier route.php, situé dans le dossier `src/route`.

L'objet `$routes` contient une instance de `RouteCollection()` de Symfony.

## Exemple basique de création d'une route :

```php
$routes->add('a-propos', new Route('/a-propos'))
```

L'utilisation de `new Route()` correspond à l'instanciation de l'objet `Route()` de Symfony.

Pour des cas pratiques supplémentaires, consultez la [documentation du routing](https://symfony.com/doc/current/create_framework/routing.html) de Symfony.

# Tailwind CSS

## Introduction

Le projet utilise Tailwind CSS.

## Utilisation

Le fichier `style.css`, situé dans `public/css/`, contient le CSS compilé de Tailwind.

Dans le terminal, exécutez la commande suivante :

```bash
npm run tailwind
```

Cela permet de compiler le CSS.

Pour plus d'informations, veuillez consulter la [documentation de Tailwind CSS](https://tailwindcss.com/).

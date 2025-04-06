<p align="center">
<img src="./public/assets/images/logo.svg" width="200" alt="LinkedResume Logo">
</p>

## À propos de LinkedResume

LinkedResume est une application web moderne développée avec Laravel qui permet de créer automatiquement des CV professionnels à partir de profils LinkedIn. Cette application simplifie le processus de création de CV en extrayant les informations pertinentes de votre profil LinkedIn et en les formatant de manière élégante et professionnelle.

## Fonctionnalités

- Extraction automatique des données depuis les profils LinkedIn
- Génération de CV personnalisés et professionnels
- Interface utilisateur moderne et intuitive
- Support multilingue (français, anglais)
- Export au format PDF

## Prérequis

- PHP 8.1 ou supérieur
- Composer
- Node.js et NPM
- Base de données MySQL ou PostgreSQL

## Installation

1. Clonez le dépôt :
```bash
git clone https://github.com/ananikomlanMH/LinkedResume.git
cd LinkedResume
```

2. Installez les dépendances PHP :
```bash
composer install
```

3. Installez les dépendances JavaScript :
```bash
npm install
```

4. Configurez votre fichier d'environnement :
```bash
cp .env.example .env
php artisan key:generate
```

5. Configurez votre base de données dans le fichier `.env`

6. Lancez les migrations :
```bash
php artisan migrate
```

7. Compilez les assets :
```bash
npm run dev
```

## Utilisation

1. Démarrez le serveur de développement :
```bash
php artisan serve
```

2. Accédez à l'application via `http://localhost:8000`

3. Connectez-vous ou créez un compte

4. Collez l'URL du profil LinkedIn que vous souhaitez convertir en CV

5. Personnalisez et exportez votre CV

## Sécurité

Si vous découvrez une faille de sécurité dans LinkedResume, merci d'envoyer un e-mail à [ananikmh17@gmail.com](mailto:ananikmh17@gmail.com).

## Licence

LinkedResume est un logiciel open-source sous licence [MIT](https://opensource.org/licenses/MIT).

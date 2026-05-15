# Ayiyikoh FabLab — Projet CodeIgniter 4

## Structure du projet

```
ayiyikoh-ci4/
├── app/
│   ├── Config/
│   │   └── Routes.php              ← Routes de l'application
│   ├── Controllers/
│   │   ├── Home.php                ← Page d'accueil
│   │   └── Contact.php             ← Traitement formulaire contact
│   └── Views/
│       ├── layouts/
│       │   └── main.php            ← Layout HTML commun (head, nav, footer)
│       ├── partials/
│       │   ├── _navbar.php         ← Barre de navigation
│       │   └── _footer.php         ← Pied de page
│       └── home/
│           ├── index.php           ← Page principale (assemble les sections)
│           ├── _hero.php           ← Section Hero
│           ├── _formations.php     ← Section Formations & Ateliers
│           ├── _adhesion.php       ← Section Adhésion & Tarifs
│           ├── _projets.php        ← Section Projets & Tutoriels
│           ├── _entreprises.php    ← Section Offre Entreprises
│           ├── _cta_band.php       ← Bandeau appel à l'action
│           └── _contact.php        ← Section Contact
├── public/
│   ├── css/
│   │   └── ayiyikoh.css            ← Feuille de style principale
│   ├── js/
│   │   └── ayiyikoh.js             ← Scripts (AOS, navbar, compteurs)
│   └── img/
│       └── logo.jpeg               ← Logo Ayiyikoh
└── env.example                     ← Exemple de configuration
```

## Installation

### 1. Créer le projet CI4

```bash
composer create-project codeigniter4/appstarter ayiyikoh --stability=stable
cd ayiyikoh
```

### 2. Copier les fichiers de ce ZIP

Copiez le contenu de chaque dossier dans votre projet CI4 :

```
app/Config/Routes.php        → app/Config/Routes.php
app/Controllers/Home.php     → app/Controllers/Home.php
app/Controllers/Contact.php  → app/Controllers/Contact.php
app/Views/                   → app/Views/
public/css/                  → public/css/
public/js/                   → public/js/
public/img/                  → public/img/
```

> ⚠️ Ne remplacez PAS tout le dossier `app/Config/` — copiez seulement `Routes.php`.

### 3. Configurer l'environnement

```bash
cp env.example .env
```

Éditez `.env` et ajustez au minimum :

```env
app.baseURL = 'http://localhost:8080/'
CI_ENVIRONMENT = development
```

### 4. Lancer le serveur de développement

```bash
php spark serve
```

Ouvrez : [http://localhost:8080](http://localhost:8080)

---

## Notes importantes

### Formulaire de contact
Le formulaire envoie vers `POST /contact/send`.
Pour activer l'envoi d'email réel, décommentez et configurez le bloc `$email` dans `app/Controllers/Contact.php` et renseignez les paramètres SMTP dans `.env`.

### Logo
Le logo `public/img/logo.jpeg` est référencé via `base_url('img/logo.jpeg')` dans les vues. Remplacez-le par le fichier officiel en haute résolution si disponible.

### Ajouter des sections dynamiques (prochaine étape)
Pour rendre les formations, projets et ateliers dynamiques :
1. Créer les modèles (`app/Models/FormationModel.php`, etc.)
2. Passer les données depuis les controllers
3. Utiliser `foreach` dans les vues pour afficher les données

---

## Stack technique

| Outil | Version |
|---|---|
| CodeIgniter | 4.x |
| Bootstrap | 5.3.3 |
| AOS.js | 2.3.4 |
| Bootstrap Icons | 1.11.3 |
| Google Fonts | Syne + Plus Jakarta Sans |

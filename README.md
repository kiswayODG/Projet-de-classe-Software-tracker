Cahier de charge – projet laravel

1.	Contexte et définition du problème
La plateforme de gestion de logiciel libre est destinée à faciliter la gestion des logiciels libres en permettant aux utilisateurs de créer, modifier, supprimer et associer des logiciels à leurs catégories respectives. L'authentification des utilisateurs sera également mise en place pour assurer la sécurité et le contrôle d'accès.

2.	Objectif
L'objectif principal de ce projet est de développer une plateforme conviviale et efficace pour la gestion de logiciels libres, permettant aux utilisateurs d'effectuer les opérations suivantes :
a.	Authentification des utilisateurs
Création d'un compte utilisateur avec un nom d'utilisateur unique et un mot de passe sécurisé.
Affichage et modification du profil utilisateur.
Suppression du compte utilisateur si nécessaire.
Gestion des droits d'accès pour les différents rôles (administrateur, éditeur, utilisateur).

b.	Gestion des logiciels :
Liste des logiciels libres disponibles avec leurs informations pertinentes (nom, description, version, etc.).
Création d'un nouveau logiciel avec les détails appropriés.
Modification des informations d'un logiciel existant.
Suppression d'un logiciel de la liste.

c.	Mise en place d’un tableau de bord :
Nous mettrons en place un tableau de bord où l’uitilisateur pourrait avoir une vue globale statistique des différents logiciels.

d.	Association des logiciels à leur catégorie :
Création de catégories pour regrouper les logiciels (par exemple : Environnement d'exécution et de développement, Système de messagerie, etc.).
Attribution d'un logiciel existant à une catégorie pertinente.
Affichage des logiciels appartenant à chaque catégorie.

En plus de la catégorie des logiciel, le type (logiciel libre-gratuit et logiciel-payant).

e.	Gestion des utilisateurs :
Les utilisateurs avec le rôle admin pourront gérer les utilisateurs avec principalement les fonctions de blocage et de déblocage des utilisateurs en cas de besoin.

3.	Technologies utilisées 

Le projet sera développé en utilisant le framework Laravel. La base de données utilisée sera MySQL pour la gestion des données.
Nous utiliserons le framework de style Boostrap, le framework Js Jquery, Datatable pour le formatage des différentes tables et Chart.js pour la prise en compte de certaines statisques que seront prises en compte dans le tableau de bors.

4.	Implémentation du projet
f.	Interface utilisateur :
L'interface utilisateur sera conçue de manière ergonomique et intuitive, facilitant la navigation et l'utilisation du système. Les pages clés incluront :

Page d'accueil avec une vue d'ensemble des logiciels disponibles et des catégories.
Page de connexion et d'inscription pour les nouveaux utilisateurs.
Page de profil utilisateur pour gérer les informations personnelles.
Page de gestion des logiciels avec des fonctionnalités d'ajout, de modification et de suppression.
Page de gestion des catégories pour créer de nouvelles catégories et associer des logiciels existants.

g.	Sécurité :
La sécurité sera une priorité et sera mise en œuvre par :

Cryptage des mots de passe des utilisateurs.
Validation des données d'entrée pour éviter les failles XSS et les injections SQL.
Gestion des droits d'accès en fonction des rôles des utilisateurs.


h.	Tests :
Le système sera rigoureusement testé pour s'assurer de son bon fonctionnement et de sa stabilité. Des tests unitaires et des tests d'intégration seront effectués pour garantir la qualité du code.

5.	Délai
Pour la réalisation de ce projet un temps de 2 semaines nous a été accordé



 

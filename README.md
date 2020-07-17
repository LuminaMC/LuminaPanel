
# LuminaPanel

  

## Description du projet

Il s’agit d’un projet de serveur « Skyblock » innovant et complètement rafraîchissant.

A l’aide d'une  équipe de développeurs, nous avons retravaillé en profondeur ce mode de jeu pour lequel nous apportons beaucoup d’affections, afin d’y donner une toute nouvelle dimension. Nouvelles quêtes, donjons, monde farm et PVP, événements et récompenses mensuels…

Autant de nouveautés qui garantissent une expérience de jeu unique !

  

## Ce que je vais obtenir dans ce repo

Dans ce repo GitHub, vous retrouverez le panel de gestion de Lumina.

****Ce repo peut être sujet à des mises à jour****

  

## Ce dont je dois faire attention

Ce panel est diffusé sous la license ****Creative Commons: Attribution - Utilisation non commerciale - Partage dans les mêmes conditions 4.0 International****.

Cette license donne des libertés, mais aussi des contraintes.

  

Concrètement (****SANS TOUTEFOIS S'Y LIMITER****):

  

- Vous ne pouvez pas utiliser les plugins pour un projet commercial

- Vous devez mettre une référence visible et concrète à Lumina et au Groupe Fyroeo

- Lors d'une re-diffusion, la même license doit être utilisée, avec les mêmes attributions

  

Vous obtiendrez plus d'informations sur cette page: [https://creativecommons.org/licenses/by-nc-sa/4.0/legalcode.fr](https://creativecommons.org/licenses/by-nc-sa/4.0/legalcode.fr)

  

## Instructions

  

LuminaPanel est une interface WEB qui permet la gestion globale de Lumina.
Il est important de prendre en note que LuminaPanel est fait POUR Lumina. Par conséquent vous devrez surement procéder à des modifications pour la faire fonctionner correctement avec votre serveur.
Dans le cadre de Lumina, LuminaPanel se base sur les infos suivantes :

- Plugin de money de Lumina (Développé par ByToByX et disponible en opensource)
- Plugin de permissions LuckPerms
- Plugin de sanctions AdvancedBan
- Système des candidatures de Lumina (Développé par Groupe Fyroeo, pas encore disponible en opensource)
- Différentes API internes (Développé par Groupe Fyroeo, pas encore disponible en opensource)
- API externes publiques.

Bien que LuminaPanel pourrait fonctionner avec d'autres éléments, il reste pensé pour ceux-ci. Le panel risque donc d'être non-fonctionnel sans eux.
Les différents éléments qui ne sont pas encore opensource seront bientôt disponibles.

##Configuration

- Importer la base SQL (fichier panel.sql) dans votre système MySQL
- Procéder aux renseignements des différentes BDD dans _application/config/database.php_
- Il vous sera nécessaire de créer manuellement un utilisateur dans la BDD du panel. Le hash du mot de passe est en BCrypt. Vous pouvez mettre ce que voulez dans rank. Considérez ça comme une épreuve ;)


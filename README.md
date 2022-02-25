# <h1 align="center" >👋 Welcome to  Symfony PHP FrameWork </h1>
##  ⛔Requirements: PHP7
## :wrench: Installation & Usage
1. git clone https://github.com/esprit-upweb/FirstProject.git
2. composer install
3. Add Entity Folder(src/Entity)
4. Start symfony server in background ( symfony serve -d)
5. Create a new Controller (php bin/console make:controller nomController)
6. Create a new Entity (php bin console doctrine:database:create)
7. migration (php bin/console make:migration)
8. Liste de migration (php bin/console doctrine:migrations:list)
9. Mise a jour base de donnee (php bin/console doctrine:migrations:migrate)
10. Creer un formulaire (php bin/console make:form)
11. Clear cache (php bin/console cache:clear --env=dev --no-debug)
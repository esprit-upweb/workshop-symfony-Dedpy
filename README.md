# <h1 align="center" >👋 Welcome to  Symfony PHP FrameWork </h1>
##  ⛔Requirements: PHP7
## :wrench: Installation & Usage
1. git clone https://github.com/esprit-upweb/FirstProject.git
2. composer install
3. Add Entity Folder(src/Entity)
4. Start symfony server in background ( symfony serve -d)
5. Create a new Controller (php bin/console make:controller nomController)
6. Create a new Entity (php bin console make:entity nomEntity)
7. Create a new database (php bin console doctrine:database:create)
8. migration (php bin/console make:migration)
9. Liste de migration (php bin/console doctrine:migrations:list)
10. Mise a jour base de donnee (php bin/console doctrine:migrations:migrate)
11. Creer un formulaire (php bin/console make:form)
12. Clear cache (php bin/console cache:clear --env=dev --no-debug)
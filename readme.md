## About Internal Briefing Tool

This is a internal tool that will be used by clients to fill in form data and convert to pdf for briefs to be viewed and estimated by Briefs@itg.co.uk.
Contains admin panel and relevant forms. Form data is stored in the session until the final form is posted and all form data is saved in the relevant table.

The admin panel allows users (created by the main user) to view briefs/download the pdf version/view all approved and un-approved briefs and also mark briefs as approved/un-approved.

This application has been built on Laravel.

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Installation

This application required at least PHP 7.1

- **Clone repository into relevant place (documents/htdocs etc)**
- **Download and install dependencies - composer install**
- **Install all node modules required - npm install**
- **Copy .env.example and rename to .env**
- **Create new database and user with approprite permissions**
- **Inside .env - fill in appropriate fields eg database information and generate a key - php artisan key:generate**
- **Be sure to change all relevant fields i.e database/mail settings etc**
- **Once database config has been set in .env run migrations - php artisan migrate:install - php artisan migrate**
- **The Admin Panel is Voyager, Voyager should of been installed as part of composer install**
- **Run this command - php artisan voyager:install - to finish installation**
- **Create a new admin user to login to the Admin Panel - php artisan voyager:admin your@email.com --create**
- **Login with the new admin user information and set up the Admin Panel**
- **If your images are not loading in the admin panel - change .env APP_URL - eg http://localhost:8000**
- **Once Voyager and user is set up - change the default user avatar  - site/admin title and description and the loading spinner**
- **These have been supplied in images/admin**

## Voyager setup for this application

Voyager will need to be configured for this application for the first time, then menu items/database and be copied accross instances of the application

- **Add Voyager BREAD to Briefs table - Tools->BREAD->Submit (feel free to add icons or change name)**
- **This will add a Briefs menu item where users can view the table data**
- **Go to Tools->BREAD->Briefs->Edit and untick PPC_ID and SOCIAL_ID**
- **Set up Menu for other functionality - Tools->Menu Builder->admin->Builder->New Menu Item**
- **This is the download all attending function - so name accordingly - URL MUST BE: /download-approved**
- **Add another menu item for download not approved - URL MUST BE /download-not-approved**
- **You can now create dummy brief to see it all working**
- **There are 3 custom actions pre-coded - download PDF, Questions Sent and Mark Approved - EDIT, DELETE and VIEW will not be visible from a normal user**
- **Add a new user with desired user name - email - password - NORMAL USER**
- **Go to Roles and edit the normal user with the following ticked - BROWSE ADMIN - BROWSE AND EDIT BRIEFS**
- **This user will not be able to edit/add/delete or see those actions on the Briefs page now**
- **Application is now set up - If you are moving this application then please just dump the database and import it - ALL VOYAGER CONFIG AND SETTINGS WILL BE REMOVED OTHERWISE**
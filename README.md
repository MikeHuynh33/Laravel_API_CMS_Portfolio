# Project Name
- Laravel API CMS Portfolio is a project developed using the Laravel framework as the backend. This project serves as a content management system (CMS) for building and managing portfolios. The primary purpose of this         project is to communicate with a React frontend project to create an interactive and dynamic portfolio website.
## Table of Contents
- [Features](#features)
- [Getting Started](#getting-started)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features
### Schema Migration:
- The project includes well-structured schema migrations for essential entities like Project, About, Skill, and Experience. These migrations facilitate the creation of corresponding database tables.
### Model Creation: 
- Dedicated models are crafted for each entity, enabling smooth interaction with the database. Models provide an organized way to manipulate and retrieve data.
### Controller Development:
- Purposeful controllers are developed to handle various actions related to the portfolio entities. Controllers facilitate the separation of concerns and help implement the application's logic effectively.
### Database Seeding: 
- Database seeders are provided to populate initial data into the database. This ensures a functional starting point for managing your portfolio content.

## Getting Started
1. Clone
   ```
   git clone https://github.com/your-username/Laravel_API_CMS_Portfolio.git
   cd Laravel_API_CMS_Portfolio
   ```
2. Install Composer dependencies:
   ```
   composer install
   ```
3. Edit .env based on myphpAdmin or Database connection infor.
4. Migrate the database schema:
   ```
   php artisan migrate
   ```
5. Seeder (ExperienceSeeder,AboutSeeder,SkillSeeder,ProjectSeeder)
   ```
   php artisan db:seed --NameOfSeeder
   ```
6. Serve the application:
    ```
   php artisan serve
   ```
   
## Usage
- GET http://laravelreactapi.mikehuynhportfolio.com/public/api/projects Retrieve data from Project Table.
- GET http://laravelreactapi.mikehuynhportfolio.com/public/api/skills Retrieve data from Skill Table.
- GET http://laravelreactapi.mikehuynhportfolio.com/public/api/about Retrieve data from About Table.
- GET http://laravelreactapi.mikehuynhportfolio.com/public/api/experience Retrieve data from Experience Table.

##Deploy
    - I hosted this project in Hostinger , I utilized myphpAdmin database and subdomain.
    
## Contributing
Guidelines for contributing to the project, how to set up a development environment, and submission process.

## License
Specify the project's license.

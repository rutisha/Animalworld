# Animal World

## Introduction

Welcome to the Animal World project, a web application designed to provide users with an engaging experience in exploring various animals and their lifespans. Built using Laravel, this project demonstrates the capabilities of modern web development frameworks in creating dynamic and responsive web applications.

## Features and Database Schema

The Animal World project offers a range of features designed to enhance user interaction and streamline administrative tasks. Users can browse different animals, view detailed information about each animal, and explore their lifespans. The admin dashboard provides management capabilities for adding, editing, deleting, and restoring animal records.

### Features

- **User Interface**: A clean and responsive design with sections for featured animals and detailed lifespan information.
- **Admin Dashboard**: Manage animal records and their lifespans, view trashed items, and restore them if needed.
- **Soft Deletes**: Implemented using Laravel's soft delete functionality, allowing animal records to be moved to trash and restored later.
- **Authentication**: Secure login and logout functionality for administrators.

### Database Schema

The database schema is designed to efficiently store and manage data related to animals and their lifespans. Key tables include:

- **Animals**: Stores information about each animal, including name, height, weight, and soft delete status.
- **Lifespan**: Stores information about the lifespan of each animal, including the number of years and status (e.g., endangered).

The `animals` and `lifespan` tables have a one-to-one relationship, where each animal is associated with a unique lifespan record.


## Thoughts on Laravel 

Working on the Animal World project with Laravel was a amazing experience. I always wanted to learn laravel as I am interested in php. By pratically implementing a project on laravel I was able to learn in more details. 

## Screenshots of the website
User Side Interface
![](/public/img/Screenshot%202024-08-19%20141945.png)
![](/public/img/Screenshot%202024-08-19%20141956.png)
![](/public/img/Screenshot%202024-08-19%20142008.png)

Admin Side Interface
![](/public/img/Screenshot%202024-08-19%20145414.png)
![](/public/img/Screenshot%202024-08-19%20145426.png)
![](/public/img/Screenshot%202024-08-19%20145439.png)




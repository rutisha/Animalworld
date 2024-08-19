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

## Team Members

- Rutisha Patel
- [Team Member 2]
- [Team Member 3]

## Thoughts on Laravel - Rutisha

Working on the Animal World project with Laravel has been a rewarding learning experience. As someone new to PHP and Laravel, it was initially overwhelming due to the numerous files and configurations. However, with practice, I became more comfortable with the framework. I'm grateful for the lectures and support, and I'm excited to continue expanding my knowledge in Laravel.

## Screenshots of the website

### User side

- Screenshot 1: Home page showcasing featured animals.
- Screenshot 2: Detailed view of an animal's information and lifespan.
- Screenshot 3: User-friendly navigation and search functionality.

### Admin side

- Screenshot 1: Admin dashboard with options to manage animals.
- Screenshot 2: Form for adding a new animal.
- Screenshot 3: List of animals with options to edit, delete, or restore records.
- Screenshot 4: Detailed view of trashed animal records with restore options.


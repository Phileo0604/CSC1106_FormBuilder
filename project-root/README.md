# CI4 FormBuilder App

## Prerequisites

- User must have a database schema named ci4formdb.
- The database must be running on port 3306 (MySQL default port).

## Installation

1. Clone the repository.

2. Navigate to the project directory.

3. Run the following commands in the terminal:

```bash
# Rollback previous migrations
php spark migrate:rollback

# Refresh the database
php spark migrate:refresh

# Start the development server
php spark serve
```

Login Credentials
Email: tim@gmail.com
Password: password123
Usage
Open your web browser and navigate to http://localhost:8080

Login using the provided credentials.

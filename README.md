
# Laravel Task Management API

This project is a **Task Management API** built with Laravel. It adheres to the **Repository-Service Pattern** to ensure clean architecture and scalability. The API provides an endpoint to fetch a paginated list of tasks stored in the database.

---

## Features

- Fetch a list of tasks with pagination.
- Implements **Repository-Service Pattern** for separation of concerns.
- Supports database integration.

---

## Architecture

### **Repository-Service Pattern**
The project follows the **Repository-Service Pattern** for better separation of concerns:

- **Repository**: Handles all database interactions.
- **Service**: Contains business logic and orchestrates repository calls.
- **Controller**: Handles HTTP requests and communicates with the service layer.

This ensures a clean and scalable architecture.

---

## Prerequisites

Before running the project, ensure the following are installed:

- PHP (>= 8.0)
- Composer
- MySQL (or any supported database)

---

## Installation

Follow these steps to set up the project locally:

1. **Clone the Repository**:
   ```bash
   git clone <repository-url>
   cd <project-directory>
   ```

2. **Install Dependencies**:
   ```bash
   composer install
   ```

3. **Set Up Environment**:
   Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```
   Update the database credentials in the `.env` file:
   ```dotenv
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=task_db
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```

4. **Generate Application Key**:
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations and Seed the Database**:
   ```bash
   php artisan migrate --seed
   ```

6. **Start the Server**:
   ```bash
   php artisan serve
   ```

   The API will be available at `http://127.0.0.1:8000`.

---

## API Endpoints

### **Base URL**
```
http://127.0.0.1:8000/api
```

### **Endpoint**

| Method | Endpoint    | Description                  |
|--------|-------------|------------------------------|
| GET    | `/tasks`    | Fetch all tasks (paginated). |

### **Example Request**

**Request**:
```http
GET /api/tasks
```

**Response**:
```json
{
  "current_page": 1,
  "data": [
    {
      "id": 1,
      "title": "Task 1",
      "description": "This is the first task.",
      "status": "pending",
      "created_at": "2024-12-14T00:00:00.000000Z",
      "updated_at": "2024-12-14T00:00:00.000000Z"
    },
    {
      "id": 2,
      "title": "Task 2",
      "description": "This is the second task.",
      "status": "completed",
      "created_at": "2024-12-14T00:00:00.000000Z",
      "updated_at": "2024-12-14T00:00:00.000000Z"
    }
  ],
  "total": 50
}
```

---

## Database Seeding

The project uses a factory to generate sample tasks.

Run the following command to seed the database:
```bash
php artisan db:seed
```

This will populate the `tasks` table with 50 sample entries.

---

## Tools & Technologies

- **Framework**: Laravel
- **Database**: MySQL
- **Patterns**: Repository-Service Pattern


---

## License

This project is open-source and available under the [MIT License](LICENSE).

---

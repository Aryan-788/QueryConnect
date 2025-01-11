# QueryConnect - A Q&A Forum Platform

## Overview
**QueryConnect** is a PHP-based web application designed to provide a platform for users to ask questions, provide answers, and engage in discussions across various categories. It supports user authentication, category management, and interaction functionalities, making it ideal for communities looking to share knowledge effectively.

---

## Features
- **User Authentication**: Secure signup and login functionalities.
- **Ask and Answer Questions**: Users can post questions, provide answers, and interact with others.
- **Category Management**: Organize questions into categories for easier navigation.
- **Search and Filtering**: Search for questions or filter them by category, user, or latest additions.
- **Responsive UI**: Designed with a clean interface for better user experience.

---

## Screenshot

### Homepage
![Homepage Screenshot](/home.png)

---

## File Structure
### Root
- `index.php`: Entry point of the application. Dynamically loads the appropriate client page based on user actions or queries.

### Client-Side (`client` Folder)
- `questions.php`: Displays questions based on filters like category, user, or search queries.
- `ask.php`: A form for users to post new questions.
- `category.php`: Provides category options for organizing questions.
- `login.php` and `signup.php`: Handle user authentication.
- `header.php` and `commonFiles.php`: Include shared components for layout and functionality.

### Server-Side (`server` Folder)
- `requests.php`: Handles server-side logic for user actions such as signup, login, posting questions/answers, and deleting questions.

### Common (`common` Folder)
- `db.php`: Database connection configuration.

### Public Assets (`public` Folder)
- `style.css`: Styling for the application.
- `logo.png`: Placeholder for the application logo.

---

## How to Run
1. **Setup Environment**:
   - Install a local server (e.g., XAMPP, WAMP).
   - Configure a database named `queryconnect` and import the necessary schema.

2. **Place Files**:
   - Extract the project folder into the server's `htdocs` directory (for XAMPP).

3. **Database Configuration**:
   - Update database credentials in `common/db.php`.

4. **Start the Server**:
   - Launch your local server and open the project in a browser (e.g., `http://localhost/queryconnect`).

---

## Technologies Used
- **Backend**: PHP, MySQL
- **Frontend**: HTML, CSS
- **Server**: Localhost using XAMPP/WAMP

---

## Future Enhancements
- Implementing user roles and permissions.
- Adding real-time notifications for interactions.
- Enhancing UI/UX for a more modern feel.
- Improving security with password hashing and validation.

# BookBug Website

**BookBug** is an eCommerce website designed for a bookstore franchise. Users can browse, search, and view available books. Registered users can order books for rent or purchase, while admins manage the inventory and sales records.

## Features

### User Features:
- **Homepage Suggestions**: Shows Current Best Seller Books
- **Browse & Search Books**: Explore books by title, author, or genre.
- **User Registration/Login**: New users must register an account, while existing users can log in to access their profiles.
- **Order Books**: Users can order books for either rent or purchase.
- **View Order History**: Customers can view their rent history, sales history, active rents, dues, and any associated fines.
- **Manage Rentals**: Users can check the status of active rentals and track dues or fines.

### Admin Features:
- **View Customer Database**: Access the list of registered customers.
- **Manage Sales & Rental Records**: View records of all book sales, rentals, and active rents.
- **Track Dues & Fines**: Admins can see all outstanding dues and fines for each customer.
- **Update Book Inventory**: Add, remove, or update the details of books in the inventory.

## Tech Stack

### Front-End:
- **HTML**
- **PHP**
- **JavaScript**

### Back-End (Styling):
- **CSS**
- **SCSS**

### Database:
- **phpMyAdmin**
- **XAMPP**
- **SQL**
- **MySQL**

## Installation & Setup

1. **Setup XAMPP**:
   - Download and install [XAMPP](https://www.apachefriends.org/index.html).
   - Start Apache and MySQL services in the XAMPP Control Panel.

2. **Project Files Setup**:
   - Locate the 'xampp' folder within the drive used for XAMPP installation.
   - Next head into the 'xampp' folder and locate the 'htdocs' folder.
   - Download the folder `/trial470` folder from the repository and place it inside the 'htdocs' folder

3. **Configure phpMyAdmin**:
   - Open [phpMyAdmin](http://localhost/phpmyadmin).
   - Create a new database named `library`.
   - Import the provided SQL file from the `/database` folder to set up the necessary tables.

4. **Configure Database Connection**:
   - In the project directory, locate the `db.php` file.
   - Update the database connection settings with your `phpMyAdmin` credentials.

5. **Run the Application**:
   - Open a browser and navigate to `http://localhost/trial470/LMS/indexX.php` to access the user version of the website or `http://localhost/trial470/LMS/indexAX.php` to access the admin version of the website.

## How to Use

### For Users:
1. **Browse Books**: Explore the available collection of books on the homepage.
2. **Register/Login**: Create an account or log in to your existing account.
3. **Order Books**: Choose to either rent or purchase books. Track your rentals and purchases in your account dashboard.
4. **Manage Rentals**: View active rentals, dues, and any applicable fines.

### For Admins:
1. **Manage Customers**: View and manage the list of registered users.
2. **Track Sales & Rentals**: Access comprehensive records of all sales and rentals, including active ones.
3. **Update Book Inventory**: Admins can add, update, or remove books from the system as needed.
4. **Monitor Dues & Fines**: Keep track of outstanding dues and fines for all users.


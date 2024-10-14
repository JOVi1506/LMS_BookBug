# BookBug Website

**BookBug** is an eCommerce website designed for a bookstore franchise. Users can browse, search, and view available books. Registered users can order books for rent or purchase, while admins manage the inventory and sales records.

## Features

### User Features:
- **Homepage Suggestions**: Shows Current Best Seller Books.
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
   - Import the provided SQL file `library.sql` to set up the necessary tables.

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

## Screenshots

### User Version of Website:
![Homepage_U](https://github.com/user-attachments/assets/32e8bc1a-8d4d-4f35-b5ec-e65cceff0890)

![Login Page](https://github.com/user-attachments/assets/de8ef0b4-972c-42ed-933e-7cdbb1ab0b96)

![New User Reg](https://github.com/user-attachments/assets/1d9c12d7-4e70-4927-b7cd-13d82c951c36)

![Browsing 1](https://github.com/user-attachments/assets/b508e29f-8c53-49f5-b319-499b5ea09db9)

![Browsing 2](https://github.com/user-attachments/assets/1d9ebda8-92ae-4448-9e57-50604eeb7ec5)

![Product Page](https://github.com/user-attachments/assets/e2015a09-a5e6-473e-83c4-425c7463e898)

![Product Page 2](https://github.com/user-attachments/assets/2ae16a69-0c56-4993-8fbb-b8afd08c6604)

![Product Page 3](https://github.com/user-attachments/assets/6095c761-338c-461c-900e-c9a2d268a868)

![Purchase Confirmation](https://github.com/user-attachments/assets/a695b07a-07c7-42ce-9b14-36493a41d9dd)

![Rent Confirmation](https://github.com/user-attachments/assets/a54c69ff-270a-4b03-9957-a31558b70729)

![Purchase Hist_U](https://github.com/user-attachments/assets/e67cb966-d60c-4306-a58e-a518497afa30)

![Active Rents_U](https://github.com/user-attachments/assets/6198f91f-960f-4b42-8821-983d583b1f1a)

![Rent Return Req_U](https://github.com/user-attachments/assets/8f93aae7-c63d-4ded-8362-327731fd64dd)

![Rent History_U](https://github.com/user-attachments/assets/b4edc3d0-d87d-4717-8384-b736a4d4b0bd)



### Admin Version of Website:
![Login_Adm](https://github.com/user-attachments/assets/5f1c4788-26e9-442d-bfc4-8e9d10d6a229)

![Homepage_Admin](https://github.com/user-attachments/assets/4870f020-0f37-4fb7-995b-e9f0c6ac04f3)

![User Data_Adm](https://github.com/user-attachments/assets/4800c592-9070-4a62-8735-ff6498bc5cfe)

![Sales_History_Adm](https://github.com/user-attachments/assets/74f6d054-54f8-417e-84b9-8cc4232dec7c)

![Active Rents_Adm](https://github.com/user-attachments/assets/1d2b21d2-b090-4a0f-bc1d-c0e213949ce5)

![Rent History_Adm](https://github.com/user-attachments/assets/448af926-8722-443c-a8f4-558824d3ad0b)



### Database Tables:
![DT1](https://github.com/user-attachments/assets/357b1afe-ed56-4dfa-b34d-b4ddf07502ad)

![DT2](https://github.com/user-attachments/assets/967b2d13-f81c-4205-a9aa-dd504e04c6ca)

![DT3](https://github.com/user-attachments/assets/f559dd99-c336-4b17-9896-cb73ff480797)

![DT4](https://github.com/user-attachments/assets/cdc93f04-3082-46b5-8561-554d0b3d8505)

![DT5](https://github.com/user-attachments/assets/49f12c4f-3526-47af-bec6-62c2edb8a9c8)

![DT6](https://github.com/user-attachments/assets/e08f9d0a-06a2-40c1-b057-22dbec418315)



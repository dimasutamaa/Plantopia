## Installation

**Note**: Make sure you have installed Composer, PHP, XAMPP, and Node.js on your device. If you haven't, follow the instructions below:
- [Composer](https://www.geeksforgeeks.org/how-to-install-php-composer-on-windows/).
- [Node.js](https://nodejs.org/en/download/prebuilt-installer).
- [XAMPP](https://www.apachefriends.org/download.html).
- [PHP](https://www.geeksforgeeks.org/how-to-install-php-in-windows-10/).

If you have Composer, PHP, XAMPP, and Node.js installed on your device, follow the instructions below:
1. Clone the repository
   
   ```bash
   git clone https://github.com/dimasutamaa/Plantopia.git
   cd Plantopia
   ```
   
2. Set Up Environment Variables
   - Copy the `.env.example` file to create your `.env` file:
     
       ```bash
       cp .env.example .env
       ```
   - (Optional) Open the .env file and configure the database and other environment settings (e.g., DB_DATABASE, DB_USERNAME, DB_PASSWORD, etc.).
  
3. Install Dependencies
   - Run the following command to install PHP dependencies:
     
     ```bash
     composer install
     ```
   - Install Node.js dependencies:
     
     ```bash
     npm install
     ```

4. Generate Application Key

   ```bash
   php artisan key:generate
   ```

5. Set Up the Database
   - Ensure your MySQL server is running.
   - Run migrations and seed it in one command: <br>
     **Note**: If you haven't created the database, this will automatically create it.
     
     ```bash
     php artisan migrate --seed
     ```

6. Compile Assets <br>
   **Note**: Run this command in a separate terminal to keep the development server running in parallel.
   
   ```bash
   npm run dev
   ```

8. Run the Server <br>
   **Note**: Ensure this is run in a separate terminal from the asset compilation process.
   
   ```bash
   php artisan serve
   ```

The application will be accessible at http://localhost:8000.

## Accounts
1. [Admin] email: admin@example.com
2. [Customer] email: user@example.com
   
Password: 12345

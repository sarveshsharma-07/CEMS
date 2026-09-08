# Campus Event Management System (CEMS)

Campus Event Management System is a PHP web application for **PRAVAH 2027**, the annual cultural and technical festival of Swami Keshvanand Institute of Technology, Management & Gramothan (SKIT), Jaipur. It gives authenticated participants a single place to discover festival activities, review the day-wise schedule, register for events, and manage their registrations.

## Live deployment

The application is deployed on InfinityFree: [pravah.infinity.io](https://pravah.infinity.io).

## What it does

- Creates participant accounts using name, roll number, email address, and password.
- Authenticates participants with PHP sessions and redirects unauthenticated visitors to the login page.
- Presents a festival dashboard with an event countdown, festival information, and navigation.
- Organizes events into six browsable categories: technical, non-technical, cultural, literary, sports, and night events.
- Provides client-side keyword and day filtering on category pages.
- Displays a six-day schedule with event time, category, and venue.
- Registers a signed-in participant for an event, prevents duplicate registrations, and lets the participant cancel a registration from the **My Registered Events** view.
- Accepts Team PRAVAH volunteer applications.
- Includes an about page for the festival and shared navigation/footer layouts.

The category pages link to **67 event IDs** in total: 19 technical, 15 non-technical, 9 cultural, 7 literary, 14 sports, and 3 night events.

## Technology

| Area | Implementation found in the repository |
| --- | --- |
| Server-side | PHP |
| Database | MySQL / MariaDB, accessed through PDO and MySQLi |
| Authentication | PHP sessions and `password_hash` / `password_verify` |
| UI | HTML, custom CSS, JavaScript |
| UI libraries | Bootstrap 5 and Bootstrap Icons loaded from jsDelivr CDN |

There is no package manager manifest, framework configuration, build pipeline, or automated test suite in the repository.

## Project structure

```text
.
├── about.php                 Festival overview
├── checklogin.php            Login request handler
├── checkregister.php         Account-registration request handler
├── dashboard.php             Signed-in participant dashboard
├── db_connect.php            PDO database connection settings
├── events.php                Event-category landing page
├── *_events.php              Individual category pages
├── footer.php                Shared footer and Bootstrap JavaScript include
├── header.php                Shared navigation and page shell
├── login.php / register.php  Authentication screens
├── logout.php                Session termination
├── schedule.php              Six-day festival schedule
├── tp.php                    Team PRAVAH volunteer application form
├── yregitor.php              Event registration, cancellation, and registration list
├── login.js                  Authentication-screen form behaviour
├── pravah_logo.png           Festival logo
└── css/
    ├── lr.css                Login and registration styles
    └── style.css             Shared site, dashboard, and event-page styles
```

## Requirements

- A web server that can execute PHP (Apache, Nginx with PHP-FPM, or PHP's built-in development server).
- PHP with both `pdo_mysql` and `mysqli` enabled.
- MySQL or MariaDB.
- Internet access when using the bundled pages as-is, because Bootstrap and Bootstrap Icons are loaded from jsDelivr.

## Installation

1. Clone the repository and open its directory.

   ```bash
   git clone https://github.com/sarveshsharma-07/CEMS.git
   cd CEMS
   ```

2. Create or obtain the application database. The PHP files are configured for a database named `itp` on `localhost` and expect three tables:

   | Table | Required fields observed in application queries |
   | --- | --- |
   | `users` | `id`, `name`, `roll_no`, `email`, `password` |
   | `events` | `event_id`, `event_name`, `category`, `day_name`, `event_time`, `venue` |
   | `registrations` | `user_id`, `event_id` |

   Volunteer submissions additionally require a `con_volanteer` table with `name`, `email`, `phone`, `roll_no`, `branch`, `year`, `department`, `experience`, and `why_join` fields.

   **Important:** no SQL schema, migrations, or seed data are present in the repository. In particular, the event records whose IDs are linked by the category pages must be supplied before event registration can work.

3. Configure the database credentials in `db_connect.php`. The checked-in defaults are:

   ```php
   $host = "localhost";
   $user = "root";
   $password = "";
   $database = "itp";
   ```

   `yregitor.php` and `tp.php` currently contain their own MySQLi connection settings with the same values. Keep all three connection definitions consistent if your environment differs.

4. Serve the project with PHP. For local development:

   ```bash
   php -S localhost:8000
   ```

5. Open `http://localhost:8000/login.php`, create an account, then sign in.

## Usage

1. Register a participant account on `register.php`.
2. Sign in on `login.php`; successful authentication opens `dashboard.php`.
3. Select **Events**, choose a category, optionally filter by keyword or festival day, and use the registration button for an event.
4. Open **Registrations** to review registered events or cancel one.
5. Use **Schedule** to view the day-wise programme.
6. Use **Team Pravah** to submit a volunteer application.
7. Select **Logout** to end the active session.

## Configuration and repository notes

- `db_connect.php` uses PDO; event registration and the volunteer form use MySQLi directly. Both extensions therefore need to be available.
- Category pages contain display details and event IDs in PHP/HTML, while registration details are read from the database. The `events` database records must match the IDs linked in those pages.
- `dashboard.php` references `css/dashboard.css`, but that file is not present in the repository.
- Many pages reference `Images/` or `images/` assets, but neither image directory is included in the current checkout. The only bundled image is `pravah_logo.png`; missing assets will result in broken decorative/event images until they are restored.
- The pages identify the event as a six-day festival (16–21 February 2027). Some copy elsewhere refers to seven days, so festival messaging should be reconciled before deployment.

## Security and deployment considerations

The current source is suitable as a student-project baseline, but review it before public deployment. At minimum, replace development database credentials, keep credentials outside version control, configure a production web server, enforce HTTPS, and add database constraints for uniqueness and referential integrity. The repository contains no environment-variable configuration, migrations, or deployment configuration.

## License

No license file is included in the repository.

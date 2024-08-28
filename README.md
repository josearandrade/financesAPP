# FinancesAPP

This app have the proposure to my studies in those technologies:

-   Programming Language: PHP;
-   Framework: Laravel;
-   HTML;
-   JavaScript;
-   CSS;
-   Git;
-   Database - SQL;

# Requirements of the App

## Database Model

### Users

-   Name
-   Email
-   Password
-   Birth Date

### Accounts

-   Type (bank account, credit card, investment)
-   Bank
-   Branch
-   Account Number
-   Balance

### Transactions

-   Date
-   Description
-   Category
-   Account
-   Type (income, expense)

-   #### Categories

-   Category Name (e.g., food, transport, etc.)

### Budgets

-   Monthly budget for each category

## Entity-Relationship Model

### Routes

-   Auth (login, registration, password recovery)
-   Dashboard (general overview of finances, graphs, and summary)
-   Accounts (listing, creation, editing, deletion)
-   Categories (listing, creation, editing, deletion)
-   Transactions (listing, creation, editing, deletion)
-   Budgets (creation, editing, viewing, deletion)
-   Reports (creation of custom reports by period, category, etc.)

### Controllers

-   Auth
-   Dashboard
-   Account
-   Category
-   Transaction
-   Budget
-   Report

### Models

-   User
-   Account
-   Category
-   Transaction
-   Budget

### Views

-   Login Form
-   Registration Form
-   Dashboard
-   Accounts
-   Categories
-   Transactions
-   Budgets
-   Reports

## Directory structure

    opp/
        Http/
            Controllers/
            Requests/
        Models/
        Providers/
    config/
    database/
    public/
    resources/
        views/
    routes/
    tests/

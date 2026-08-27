# Mini Core Banking System

A working core-banking prototype — customer onboarding, account lifecycle, teller transactions,
and date-ranged reporting — built during my internship in the Technology Department at
**uab bank** (Yangon, 2022).

The goal was to model how a branch actually operates: a customer exists independently of their
accounts, an account has a lifecycle rather than a delete button, and every balance change
leaves a transaction record behind.

## Domain model

Four tables, deliberately normalised so balances are never the only source of truth:

```
customer ──1:N──► account ──1:N──► transaction
(KYC details)     (type,           (amount, date,
                   balance,         description)
                   status)
admin  (teller login)
```

- **`customer`** — KYC fields: name, gender, DOB, **NRC** (Myanmar national ID), phone, city,
  address, plus a `status` flag. `Type` distinguishes individual from corporate customers, with
  `CompanyName` / `CompanyNRC` / `CompanyAddress` populated only for the latter.
- **`account`** — belongs to a customer; carries `accountType`, `balance`, and a `status` that
  drives the open/closed lifecycle. One customer can hold several accounts.
- **`transaction`** — an append-only ledger of every deposit, withdrawal, and transfer leg,
  timestamped and described. Balances can always be reconciled against it.
- **`admin`** — teller accounts for the sign-in gate.

## Features

**Customer management** — registration, searchable listing, detail view, edit, and delete
(`customer_registration.php`, `customer_list.php`, `customer_detail.php`).

**Account lifecycle** — open an account against an existing customer, list accounts, and close
an account, with opened/closed states tracked separately rather than destructively
(`account_registration.php`, `account_opened.php`, `account_closed.php`).

**Teller transactions** — deposit, withdrawal, and account-to-account transfer, each writing a
transaction row alongside the balance update (`deposit.php`, `withdraw.php`, and the
`transfer` / `transaction` components).

**Reporting** — a date-range report over the transaction ledger, with a date picker defaulting
to the current day.

**Auth** — teller sign-in/sign-up gating the whole application.

## Structure

```
Banking.sql              schema (account · admin · customer · transaction)
public/
  index.php              entry point
  components/            reusable partials — one per screen concern
    signin · signup · navigation · alert
    customer* · account* · deposit* · withdraw* · transfer · transaction · report
  css/ js/ image/        vendored assets (Tailwind build, Flowbite, Select2, jQuery)
```

Pages are composed from `components/`, so each screen is a thin wrapper around a partial rather
than a copy-pasted page — the closest thing to a component model plain PHP offers.

## Stack

`PHP` · `MySQL` · `Tailwind CSS` · Flowbite · Select2 · jQuery · Lottie

## Running it

```bash
# 1. Create the database and import the schema
mysql -u root -p -e "CREATE DATABASE banking;"
mysql -u root -p banking < Banking.sql

# 2. Point PHP at public/
php -S localhost:8000 -t public

# 3. Rebuild Tailwind if you change the styles
npm install && npm run watch
```

## Status & notes

Built in 2022 and kept public as **portfolio work** — not maintained.

Written before I'd worked with a framework, so it reflects that: queries are inline rather than
behind a data layer, and `node_modules/` was committed early on. The parts I'd still defend are
the schema and the decision to make transactions an append-only ledger instead of just mutating
a balance column.

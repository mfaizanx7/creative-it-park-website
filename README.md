# Creative IT Park Website

<div align="center">

### Production-ready Corporate Website & Custom CMS Platform

Rebuilt from Laravel Blade to a modern React.js architecture with a custom CMS, production deployment pipeline, and scalable backend.

<br>

[![Live Website](https://img.shields.io/badge/Live-Website-2563eb?style=for-the-badge)](https://creativeitpark.org/)
[![Portfolio](https://img.shields.io/badge/Portfolio-Case%20Study-111827?style=for-the-badge)](https://faizans-portfolio.vercel.app/)
[![Laravel](https://img.shields.io/badge/Laravel-11-red?style=for-the-badge&logo=laravel)]
[![React](https://img.shields.io/badge/React-18-blue?style=for-the-badge&logo=react)]
[![Node.js](https://img.shields.io/badge/Node.js-20-green?style=for-the-badge&logo=node.js)]
[![MySQL](https://img.shields.io/badge/MySQL-Database-blue?style=for-the-badge&logo=mysql)]

</div>

---

# Live Demo

**Website**

https://creativeitpark.org/

**Portfolio Case Study**

https://faizans-portfolio.vercel.app/

---

# Table of Contents

- Overview
- Business Problem
- Solution
- Features
- Screenshots
- Tech Stack
- System Architecture
- Folder Structure
- Installation
- Deployment
- Engineering Challenge
- Lessons Learned
- Future Improvements
- License
- Author

---

# Overview

Creative IT Park required a modern corporate website that could be managed by non-technical staff without developer involvement.

The previous website relied on a static Laravel Blade implementation where every content update required code changes and manual deployment. The project focused on rebuilding the platform into a production-ready web application with a React.js frontend, Laravel backend, custom CMS, and a structured deployment workflow.

Besides rebuilding the website, the project introduced content management capabilities, improved maintainability, and established a cleaner architecture suitable for future business growth.

---

# Business Problem

The previous system suffered from several limitations:

- Static website structure
- No content management system
- Content updates required developer intervention
- Difficult production deployment process
- Limited scalability
- Poor separation between administration and public content
- No centralized management for services, team members, or contact submissions

The company needed an internal system allowing staff members to manage content independently without modifying application code.

---

# Solution

The application was rebuilt into a modern production-ready platform by separating frontend presentation from backend management.

The backend provides a secure administration panel where authorized users manage services, team members, and website content. Contact requests are stored in the database while simultaneously triggering email notifications through Laravel Mail.

A structured deployment workflow using cPanel, SSL, DNS configuration, and environment management was also introduced, making future releases significantly more reliable.

---

# Key Features

## Corporate Website

- Modern responsive website
- Business service pages
- Team management
- Company information pages
- Contact workflow
- SEO-friendly structure

---

## Custom CMS

- Secure administrator login
- Service management
- Team management
- Contact inquiry management
- Dynamic content updates
- Database-driven website content

---

## Backend Features

- Laravel MVC architecture
- Resource Controllers
- Eloquent ORM
- Authentication middleware
- Clean route separation
- Database relationships
- Form validation
- SMTP email integration

---

## Production Deployment

- cPanel deployment
- Environment configuration
- SSL installation
- DNS configuration
- Production debugging
- Cache optimization
- Configuration management

---

# Project Screenshots

## Home Page

![](Screenshot%202026-07-05%20200818.png)

---

## CMS Dashboard

![](Screenshot%202026-07-06%20162521.png)

---

## Website Pages

![](Screenshot%202026-07-07%20102109.png)

---

# Technology Stack

## Backend

- Laravel
- PHP
- Eloquent ORM
- Laravel Mail

## Frontend

- React.js
- JavaScript
- HTML5
- CSS3

## Database

- MySQL

## Deployment

- cPanel
- SSL
- DNS
- Shared Hosting

## Other Tools

- Git
- Composer
- npm
- Node.js

---

# High-Level Architecture

```

                 React.js Frontend
                        │
                        │
                 REST Communication
                        │
                        ▼
               Laravel Application
                        │
      ┌─────────────────┼──────────────────┐
      │                 │                  │
 Admin Panel      Contact Module     Public Website
      │                 │                  │
      └─────────────────┼──────────────────┘
                        │
                   Eloquent ORM
                        │
                     MySQL
                        │
                Laravel Mail (SMTP)

```

---

# Repository Structure

```

creative-it-park-website/

│

├── cip-frontend/

│ ├── src/

│ ├── public/

│ ├── package.json

│

├── cip-backend/

│ ├── app/

│ ├── routes/

│ ├── database/

│ ├── resources/

│ ├── public/

│ └── artisan

│

├── README.md

└── cip_cip.sql

```

---

# Installation

## Clone Repository

```bash
git clone https://github.com/mfaizanx7/creative-it-park-website.git
```

## Backend

```bash
cd cip-backend

composer install

cp .env.example .env

php artisan key:generate

php artisan migrate

php artisan serve
```

## Frontend

```bash
cd cip-frontend

npm install

npm run dev
```

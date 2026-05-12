# Service Culture Learning Hub

A mini-LMS for IT-BPM college students covering 11 modules on leadership, motivation, empathy, coaching, IT-BPM competencies, lifelong learning, and American/European/Asian service expectations.

## Run with XAMPP

1. Copy the folder `service-culture-website` into `XAMPP/htdocs/`.
2. Start Apache from the XAMPP control panel.
3. Open: http://localhost/service-culture-website

## Pages

- `index.php` — Home
- `topics.php` — All 11 modules
- `topic.php?id=1` ... `?id=11` — Lesson pages
- `quiz.php` — Overall quiz (22+ questions)
- `gallery.php` — Visual gallery
- `glossary.php` — Alphabetical glossary
- `about.php` — About

## Stack

PHP, HTML5, Tailwind CSS (CDN), Alpine.js, AOS.js, Font Awesome, vanilla JS for quizzes/progress (localStorage).

Requires PHP 7.4+ (uses arrow functions).

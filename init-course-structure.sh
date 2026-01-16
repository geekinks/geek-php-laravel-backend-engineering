#!/bin/bash

# ================================
# PHP & Laravel Backend Engineering
# Course Repository Initializer
# ================================

echo "🚀 Initializing course repository structure..."

# Root-level files
touch README.md COURSE-CURRICULUM.md STUDENT-ONBOARDING.md CODE-OF-CONDUCT.md CONTRIBUTING.md

# Core directories
mkdir -p weeks students mentors resources

# Mentors structure
mkdir -p mentors/reviews
touch mentors/README.md mentors/guidelines.md

# Students base README
touch students/README.md

# Resources folders
mkdir -p resources/php resources/laravel resources/best-practices

# Week folders array
weeks=(
  "01-php-fundamentals"
  "02-functions-arrays-forms"
  "03-sessions-authentication"
  "04-databases-pdo"
  "05-php-mini-project"
  "06-intro-to-laravel"
  "07-routing-controllers-blade"
  "08-database-eloquent"
  "09-auth-authorization"
  "10-validation-files-mail"
  "11-apis-security"
  "12-capstone-project"
)

# Generate weekly structure
for week in "${weeks[@]}"; do
  WEEK_DIR="weeks/week-$week"

  mkdir -p \
    "$WEEK_DIR/notes" \
    "$WEEK_DIR/assignments" \
    "$WEEK_DIR/geek-task" \
    "$WEEK_DIR/project" \
    "$WEEK_DIR/mentor-review"

  touch "$WEEK_DIR/README.md"
done

echo "✅ Course repository structure created successfully!"
echo "📘 Next step: commit and push to GitHub."

# HNG12 Public API

It's a simple public API for the HNG12 internship that returns the following:
- My registered email on the HNG12 Slack workspace.
- The current date/time in ISO 8601 UTC format.
- A link to this project's GitHub repository.

# API Endpoint
- **Base URL:** `https://your-deployed-api.com/`
- **Method:** `GET`
- **Response Format:** JSON

# Example Response
```json
{
  "email": "aaronomere@gmail.com",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "https://github.com/splendour42/hng12-task0"
}
```
# How to run locally

```bash
git clone https://github.com/splendour42/hng12-task0.git
cd your-repo
```

# Run a PHP development server
```bash
php -S localhost:8000
```

# Hiring Links

- [PHP Developers](https://hng.tech/hire/php-developers)

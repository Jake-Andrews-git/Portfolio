# Jake Andrews Portfolio

Custom PHP portfolio site with structured portfolio content and Vercel deployment support through `vercel-php`.

## Local Development

```powershell
php -S localhost:8000 -t public public/index.php
```

Open `http://localhost:8000`.

## Configuration

Optional environment variables:

- `PORTFOLIO_CONTACT_EMAIL`: shows the email CTA and footer email link.
- `PORTFOLIO_GITHUB_URL`: overrides the GitHub profile link.
- `PORTFOLIO_LINKEDIN_URL`: overrides the LinkedIn profile link.
- `PORTFOLIO_LIVE_URL`: adds the production/demo link to the Portfolio Website project card.
- `APP_ENV`: defaults to `development`.
- `APP_BASE_URL`: defaults to an empty root-relative base URL.

## Vercel Deployment

The Vercel CLI is installed at:

```powershell
C:\Users\jakeg\AppData\Local\pnpm\bin\vercel.CMD
```

If pnpm's global bin directory is added to `PATH`, `vercel` can be used directly. Otherwise run the full path:

```powershell
& "C:\Users\jakeg\AppData\Local\pnpm\bin\vercel.CMD" login
& "C:\Users\jakeg\AppData\Local\pnpm\bin\vercel.CMD" link
& "C:\Users\jakeg\AppData\Local\pnpm\bin\vercel.CMD"
& "C:\Users\jakeg\AppData\Local\pnpm\bin\vercel.CMD" --prod
```

Set `PORTFOLIO_CONTACT_EMAIL` and `PORTFOLIO_LIVE_URL` in Vercel project settings before the production deployment.

Vercel Web Analytics is loaded with the HTML snippet in `app/Views/layout.php`. The `@vercel/analytics/next` package import is for Next.js apps, so this PHP site does not need a Node analytics package.

Current Vercel production URL:

```text
https://portfolio-kappa-ten-whvzlseqzx.vercel.app
```

## Repository Content Review

GitHub private repository access is not currently available through `gh` or the connector in this environment. Once authenticated, review accessible owned repositories, prioritise original non-archived work, and add the strongest examples to `config/portfolio.php`.

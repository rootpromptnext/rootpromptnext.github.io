# RootPromptNext Learning

A responsive, static website for RootPromptNext Learning. It includes Home, About, Courses, Services, Contact/Registration, three policy pages, and the three course detail pages with their supplied syllabi.

## Preview locally

The site uses plain HTML, CSS, and JavaScript and has no build step or external runtime dependencies. From this folder, start any static file server. For example, with Python installed:

```sh
python -m http.server 8000
```

Then open <http://localhost:8000>. Opening `index.html` directly also works, though a local server better represents deployment.

## Deploy

Upload the contents of this folder to the web root of a static host (for example, GitHub Pages, Netlify, Cloudflare Pages, or an Apache/Nginx document root). Keep all files in the same directory. Configure the domain `rootpromptnext.com` and HTTPS with the host's domain settings. The course cards link to the exact requested URLs, and their filenames match those paths:

- `https://rootpromptnext.com/devops-bootcamp.html`
- `https://rootpromptnext.com/devops-infra-foundation.html`
- `https://rootpromptnext.com/devops-app-deploy.html`

Update canonical URLs in the HTML if the site will use a different domain or base path.

## Registration form

Contact and Register links open the Contact page and its form. The form validates required name, email, phone, and course fields in the browser, then opens WhatsApp for +91 842 121 8824 with the enquiry text prefilled. There is no server-side registration backend; the visitor must review and send the message.

## Project files

- `index.html`, `about.html`, `courses.html`, `services.html`, `contact.html`
- `devops-bootcamp.html`, `devops-infra-foundation.html`, `devops-app-deploy.html`
- `privacy-policy.html`, `terms-and-conditions.html`, `refund-policy.html`
- `styles.css`, `site.js`, `course.js`

The content follows the supplied requirements and source copy. No testimonials or placement guarantees are included.




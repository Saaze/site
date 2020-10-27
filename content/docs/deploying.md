---
title: Deploying
---

When it comes to deploying Saaze sites you have two options:

1. Dynamic Mode - Deploy Saaze as a normal PHP site
1. Static Mode - Build a static site using the `build` command

## Dynamic Mode {#dynamic-mode}

In dynamic mode, you should configure your server software (e.g. Nginx, Apache, etc.) to point to the `index.php` file in the `public` directory. The `public` directory should be the web root. This is similar to most modern PHP setups where all requests are routed through a single PHP file.

## Static Mode {#static-mode}

In static mode, running the `build` command will generate a completely static version of your site in the `/build` directory:

```bash
php saaze build
```

The contents of the `/build` directory can then be uploaded to a static hosting provider (e.g. Netlify, Vercel, AWS S3, etc).

## Which mode should I use? {#which-mode}

If your site does not require any kind of backend (dynamic) processing, then you can probably use static mode to build your site and deploy it as a completely static site. For more information on why this route might be a good idea, check out [jamstack.org](https://jamstack.org/).

If your site does require any kind of backend processing, then you should use dynamic mode. For example, some common processing examples include:

* Sending email after submitting a contact form
* Collecting newsletter subscriptions
* Processing an ecommerce payment
* Any kind of custom script

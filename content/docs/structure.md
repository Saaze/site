title: Structure

---

The file structure of a Saaze site is as follows:

```text
saaze/
├── build/
├── cache/
├── content/
│   ├── pages/
│   |   └── example-page.md
│   └── pages.yml
├── public/
│   └── index.php
└── templates/
    ├── collection.blade.php
    ├── entry.blade.php
    ├── error.blade.php
    └── layout.blade.php
```

### build {#build}

This directory will be created when you run the `build` command. It will contain the static version of your site.

### cache {#cache}

This directory is used as a cache for internal Saaze components. You don't need to worry about what goes in here but it does need to be writable.

### content {#content}

This is where your [collections](/docs/collections) and [entries](/docs/entries) are kept.

### public {#public}

When [deploying your site](/docs/deploying) as a dynamic site, the entry point is the `index.php` file in this directory. Your server software (e.g. Nginx, Apache, etc.) should point to this directory.

### templates {#templates}

This is where the Blade [template files](/docs/templates) for your Saaze site are kept.

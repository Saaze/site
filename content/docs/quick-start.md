---
title: Quick Start
---

Before you get started with Saaze, make sure your are running [PHP 7.3+ and Composer](/docs/requirements).

To install Saaze, use Composer to create a project:

```bash
composer create-project saaze/saaze {site} --prefer-dist --stability=dev
```

Replace `{site}` with the name of your site. Saaze will now be installed by Composer! See the [structure doc](/docs/structure) for more info on what all of the directories are for.

## Developing your site {#developing-your-site}

Once, installed you can run your site locally using the built-in Saaze CLI:

```bash
php saaze serve
```

This will run a local development server at [http://127.0.0.1:8000](http://127.0.0.1:8000) (hint: the port can be changed using the `-p` flag).

## Create a collection {#create-collection}

One of the core concepts of Saaze is that everything is a [collection](/docs/collections) of [entries](/docs/entries). So let's go ahead and create our first collection "pages" using the `make:collection` command:

```bash
php saaze make:collection pages --title="Pages" --index-route="/" --entry-route="/{slug}"
```

Note that `pages` here is the ID of the collection. This will create a `pages.yml` file in the content directory.

## Create an entry {#create-entry}

Now that we have a collection, let's create our first entry using the `make:entry` command:

```bash
php saaze make:entry pages index --title="Home"
```

The first argument is the collection ID (`pages`) and the second argument is the ID of the entry you want to create (`index`). There should now be a `pages/indedx.md` file in the content directory. Note that the entry ID will be used as the slug for your content.

## Add some content {#add-content}

Go ahead and use your favourite text editor to edit the new entry file `pages/indedx.md`. The file is split into two parts separated by a triple dash `---`:

1. The first part is made up of Yaml metadata
1. The second part is the Markdown content

You should already see the title we passed to the `make:entry` command in the metadata section. Feel free to add some markdown content below the `---` separator.

If you run the `serve` command again now you should see the page content displayed on your site.

## Deploy your site {#deploy-site}

When you're ready, you can choose how you want to [deploy your Saaze site](/docs/deploying).

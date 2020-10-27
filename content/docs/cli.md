---
title: CLI
---

Saaze comes bundled with an easy to use CLI to make developing and building a Saaze site much easier. To see all of the available commands run the following in a terminal from the root of your Saaze site:

```bash
php saaze
```

To get help with a specific command and to see a list of all of the options of a command, prefix the subcommand with `help`. For example:

```bash
php saaze help build
```

## Serve command {#serve-command}

Serves your site using a local development server at [http://127.0.0.1:8000](http://127.0.0.1:8000).

```bash
php saaze serve
```

The host and port can be configured using the `--host` and `--port` flags respectively.

## Build command {#build-command}

Generate a completely static version of your site in the `/build` directory.

```bash
php saaze build
```

The output directory can be configured using the `--dest` flag.

## Make collection command {#make-collection-command}

Create a new [collection](/docs/collections).

```bash
php saaze make:collection <id>
```

## Make entry command {#make-entry-command}

Create a new [entry](/docs/entries).

```bash
php saaze make:entry <collection> <id>
```

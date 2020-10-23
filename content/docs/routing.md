title: Routing

---

In a Saaze site, all of the routes are defined by [collections](/docs/collections). The `index_route` and `entry_route` of each collection will be used to determine how an entry can be accessed by URL. For example, let's say we have `posts` collection:

```yaml
title: Blog
index_route: "/blog"
entry_route: "/blog/{slug}"
```

When you create an [entry](/docs/entries) in a collection, the name of the file (the entry ID) is used as the "slug" for the entry. For example, say we have an entry file at `content/posts/an-example-post.md`. This post will be accessible at the URL:

```bash
https://mysite.com/blog/an-example-post
```

Subdirectories work too. For example, say we have an entry file at `content/posts/marketing/an-example-post.md`. This post will be accessible at the URL:

```bash
https://mysite.com/blog/marketing/an-example-post
```

## Index entries {#index-entries}

If the ID of an entry is `index`, this entry will be shown at the `index_route` instead of the default collection archive page. For example, the entry file `content/posts/index.md` will be accessible at the URL:

```bash
https://mysite.com/blog
```

This works for subdirectories too. For example, say we have an entry file at `content/posts/marketing/index.md`. This post will be accessible at the URL:

```bash
https://mysite.com/blog/marketing
```

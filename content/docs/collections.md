title: Collections

---

One of the core concepts of Saaze is that everything is a collection of entries. From pages, blog posts, navigation menus, users, everything.

Collections are defined by Yaml files in the content directory of your site. A collection will define not only the ID and title of the collection, but also the routes for the collection and how entries are sorted in the collection.

For example, say you wanted to create a blog in Saaze. You could create a collection file called `posts.yml` with the following content:

```yaml
title: Blog
index_route: "/blog"
entry_route: "/blog/{slug}"
sort:
  field: date
  direction: desc
```

The ID of the collection is defined by the file name (e.g. `posts`). Below is a description of the available fields in a collection and what they do. With the exception of `entry_route`, all of these fields are optional if you don't need them.

### title {#title}

The title of the collection.

### index_route {#index-route}

The [route](/docs/routing) of the index for this collection. Normally this page will show a collection archive (a paginated list of entries) but it can also be a single entry if the collection has an `index.md` file.

### entry_route {#entry-route}

The [route](/docs/routing) of an individual entry for this collection. This value should always contain `{slug}` which will be replaced by the entry ID when serving your site.

### sort->field {#sort-field}

The entry field used to sort the collection.

### sort->direction {#sort-direction}

The direction to sort entries (either `asc` or `desc`).

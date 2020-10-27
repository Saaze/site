---
title: Entries
---

Entries are defined by Markdown files and are stored in a subdirectory of the content directory of your site. The subdirectory will have the same name as the [collection](/docs/collections) ID. For example, the entries for a `posts` collection will be stored in the `content/posts` directory.

The ID of an entry is defined by the file name of the entry. For example, the entry file `an-example-post.md` has an ID of `an-example-post`. This ID, or slug, will be used when creating a [route](/docs/routing)  for the entry.

Entry files are split into two parts:

1. The first part is made up of [<i class="fe fe-external-link pr-1"></i>Yaml](https://en.wikipedia.org/wiki/YAML) frontmatter
1. The second part is the [<i class="fe fe-external-link pr-1"></i>Markdown](https://michelf.ca/projects/php-markdown/extra/) content

For example, a blog post entry might look like this:

```yaml
---
title: An Example Post
date: "2020-10-13"
---
This is an **example** with some _markdown_ formatting.
```

Every entry will have a `title` field by default. Other fields can be added as required (to [sort a collection](/docs/collections) for example).

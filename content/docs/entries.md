---
title: Entries
---

Entries are defined by Markdown files and are stored in a subdirectory of the content directory of your site. The subdirectory will have the same name as the collection ID. For example, the entries for a `posts` collection will be stored in the `content/posts` directory. The ID of an entry is defined by the file name of the entry. For example, the entry file `an-example-post.md` has an ID of `an-example-post`.

Entry files are split into two parts separated by a triple dash `---`:

1. The first part is made up of [Yaml](https://en.wikipedia.org/wiki/YAML) metadata
1. The second part is the [Markdown](https://www.markdownguide.org/cheat-sheet/) content

For example, a blog post entry might look like this:

```yaml
title: An Example Post
date: "2020-10-13"
---
This is an **example** with some _markdown_ formatting.
```

Every entry will have a `title` field by default. Other fields can be added as required (to [sort a collection](/docs/collections) for example).

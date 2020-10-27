---
title: Templates
---

Saaze uses the [<i class="fe fe-external-link pr-1"></i>Blade template engine](https://laravel.com/docs/8.x/blade), made popular by the Laravel framework, for it's templates. Blade is great because it's simple, powerful, and does not restrict you from using plain PHP code in your templates. In fact, all Blade templates are compiled into plain PHP code and cached until they are modified, meaning Blade adds essentially zero overhead to your site.

For example, the Blade template for a collection might look like this:


```html
@extends('layout')

@section('content')

    @foreach ($pagination->entries as $entry)
        <div class="post">
            <h2><a href="{{ $entry->url }}">{{ $entry->title }}</a></h2>
            <p>{!! $entry->excerpt !!}</p>
        </div>
    @endforeach

    <div class="pagination">
        @if ($pagination->prevUrl)
            <a href="{{ $pagination->prevUrl }}">&larr; Previous</a>
        @endif
        @if ($pagination->nextUrl)
            <a href="{{ $pagination->nextUrl }}">Next &rarr;</a>
        @endif
    </div>

@endsection
```

To find out more about how to use Blade templates, see the [<i class="fe fe-external-link pr-1"></i>Blade documentation](https://laravel.com/docs/8.x/blade) on the Laravel website.

## Template hierarchy {#template-hierarchy}

A Saaze site needs a minimum of three templates to operate:

* `collection.blade.php` - Displays a collection archive
* `entry.blade.php` - Display an individual entry
* `error.blade.php` - Displays an error page (e.g. 404, 500, etc.)

You can override templates for specific collections by creating `index` and `entry` templates in a subdirectory with the same ID as the collection. For example, for a `posts` collection, the template file locations would be:

* `templates/posts/index.blade.php`
* `templates/posts/entry.blade.php`

Individual entries can also override which template is used to display them by specifying a `template` in their [Yaml frontmatter](/docs/entries). For example, this entry would use the template `custom.blade.php` if it existed:

```yaml
---
title: Custom Entry
template: custom
---
...
```

## Collection template {#collection-template}

A [collection](/docs/collections) template will have the following variables automatically injected:

* `$collection` - An object containing the collection data
* `$pagination` - An object containing entries and pagination data

The `$pagination` object has the following properties:

* `currentPage` - The index of the current page
* `prevPage` - The index of the previous page
* `nextPage` - The index of the next page
* `prevUrl` - The relative URL of the previous page
* `nextUrl` - The relative URL of the next page
* `perPage` - The number of entries per page
* `totalEntries` - The total number of entries in the collection
* `totalPages` - The total number of pages
* `entries` - An array of entries

## Entry template {#entry-template}

An [entry](/docs/entries) template will have the following variables automatically injected:

* `$collection` - An object containing the collection data for the collection the entry belongs to
* `$entry` - An object containing the entry data

The `$entry` object will have properties for any fields defined in the [Yaml frontmatter](/docs/entries) of the entry plus the following properties:

* `url` - The relative URL of the entry
* `content` - The HTML content of the entry
* `excerpt` - An excerpt of the entry

## Error template {#error-template}

The error template will have the following variables automatically injected:

* `$code` - The error code (e.g. 404, 500, etc.)
* `$message` - The error message (e.g. Not Found)

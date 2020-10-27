---
title: Contributing
---

Saaze is open source software, released under the MIT license, and [hosted on GitHub](https://github.com/Saaze). The CMS is split into two repositories:

* [saaze/saaze](https://github.com/Saaze/saaze) - The main Saaze CMS repo
* [saaze/core](https://github.com/Saaze/core) - The Saaze CMS core package

Most of the functionality is stored in the core package. The main repo is used as a site template for creating new Saaze sites. This two-repo setup allows us to deliver updates more easily as the core package can be updated like any other Composer package. It also means upgrades should be simpler as the core functionality of the CMS is decoupled from the Saaze site.

## Found a bug? {#found-a-bug}

If you find a bug you should first [search the core repo issues](https://github.com/Saaze/core/issues) to see if the bug has already been reported. If not, you should [create a new issue in the core repo](https://github.com/Saaze/core/issues) with a detailed explanation of what the problem is and steps to recreate the issue.

If you would like to submit a bug fix then you should [submit a pull request in the core repo](https://github.com/Saaze/core/pulls). Bug fix PRs should fix an existing bug that has already been reported in an issue.

## Suggest a feature? {#suggest-a-feature}

If you would like to suggest a new feature you should first [search the core repo issues](https://github.com/Saaze/core/issues) to see if the feature has already been suggested. If not, you should [create a new issue in the core repo](https://github.com/Saaze/core/issues) with a detailed explanation of what the new feature will achieve and why it should be included in Saaze.

If you would like to build a new feature then you should [submit a pull request in the core repo](https://github.com/Saaze/core/pulls). New feature PRs should only be raised for features that have already been discussed and agreed upon in an issue.

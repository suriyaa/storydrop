<h1 align="center"> StoryDrop - CS50x Final Project </h1> <br>
<p align="center">
  <a href="https://youtu.be/pQeBUAI9mR0">
    <img alt="StoryDrop" title="StoryDrop" src="https://user-images.githubusercontent.com/5073946/46306780-7ce5fd80-c5b5-11e8-8ef9-06d8b095c6d7.png" width="640"/>
  </a>
</p>

<p align="center">
  Make book publishing more simplified and more democratised.<br/>
  Built with <a href="https://www.w3.org/html/">HTML</a>, <a href="https://www.w3.org/Style/CSS/">CSS</a>, <a href="https://ecma-international.org/ecma-262/5.1/">JavaScript</a> and <a href="https://secure.php.net/">PHP</a>.
</p>

<hr>

<p align="center">
  <b>Build Status</b>
  <br />
  <br />
  <a href="https://travis-ci.org/SuriyaaKudoIsc/storydrop">
    <img alt="Travis CI Build Status" title="Travis CI Build Status" src="https://img.shields.io/travis/SuriyaaKudoIsc/storydrop.svg?style=flat-square">
  </a>
  <a href="https://circleci.com/gh/SuriyaaKudoIsc/storydrop">
    <img alt="CircleCI Build Status" title="CircleCI Build Status" src="https://img.shields.io/circleci/project/github/SuriyaaKudoIsc/storydrop.svg?style=flat-square">
  </a>
  <br />
  <br />
  <b>Facts</b>
  <br />
  <br />
  <a href="https://github.com/SuriyaaKudoIsc/storydrop/">
    <img alt="GitHub code size in bytes" title="GitHub code size in bytes" src="https://img.shields.io/github/languages/code-size/badges/shields.svg?style=flat-square">
  </a>
  <a href="https://github.com/SuriyaaKudoIsc/storydrop/graphs/contributors">
    <img alt="GitHub contributors" title="GitHub contributors" src="https://img.shields.io/github/contributors/SuriyaaKudoIsc/storydrop.svg?style=flat-square">
  </a>
  <a href="http://makeapullrequest.com/">
    <img alt="PRs Welcome" title="PRs Welcome" src="https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square">
  </a>
  <a href="https://github.com/SuriyaaKudoIsc/storydrop/issues">
    <img alt="GitHub issues" title="GitHub issues" src="https://img.shields.io/github/issues-raw/SuriyaaKudoIsc/storydrop.svg?style=flat-square">
  </a>
  <a href="https://github.com/SuriyaaKudoIsc/storydrop/pulls">
    <img alt="GitHub pull requests" title="GitHub pull requests" src="https://img.shields.io/github/issues-pr-raw/SuriyaaKudoIsc/storydrop.svg?style=flat-square">
  </a>
</p>

<hr>

## Table of Contents

- [Introduction](#introduction)
- [Story Behind](#story-behind)
- [Features](#features)
- [Feedback](#feedback)
- [Dependencies](#dependencies)
- [Contributors](#contributors)
- [Development / Installation Process](#development--installation-process)
- [Contributors](#contributors)
- [Supporters, Backers and Sponsors (Acknowledgments)](#supporters-backers-and-sponsors-acknowledgments)
- [Copyright](#copyright)

## Introduction

<p align="center">
  <a href="https://cs50.harvard.edu/">
    <img alt="This is CS50x" title="This is CS50x" src="https://img.shields.io/badge/This%20is-CS50-lightgrey.svg?longCache=true&style=for-the-badge" width="400"/>
  </a>
</p>

**This is StoryDrop.** A revolutionizing web platform for publishing books (with `.pdf` file type) online.

### Why do we need it?
Many manuscripts from authors, writers and creators are often rejected by publishers day by day:

<p align="center">
    <img alt="The Peanuts - Send me 50 thousand dollars" title="The Peanuts - Send me 50 thousand dollars" src="https://i.pinimg.com/736x/ef/76/6e/ef766e9edc191052730349bb71cf0e4d--writer-humor-writing-inspiration.jpg" width="500"/>
  <br/>
  <small>Copyright &copy; Charles M. Schulz / United Feature Syndicate, Inc. All rights reserved.</small>
</p>

The StoryDrop platform allows everyone publishing their **OWN** story and (e-)books effortless and hurdles-free.

### How does it work?
The platform maintainer or the person/team/company who/that is responsible for running the platform review(s) newly uploaded books in the `uploads/new/` folder. After a fast and open verification process the books are going to be published online at `uploads/verified/`.

*No more publishing companies or dastardly editors that are greedy for money!*

### Vision
> **StoryDrop makes book publishing more simplified and more democratised.** *- [Suriyaa R. Sundararuban][suriyaa] (creator of StoryDrop)*

## Story behind
StoryDrop is the final project made by [Suriyaa R. Sundararuban][suriyaa] ([@SuriyaaKudoIsc][github]) - a student at the [Technische Universität München (TUM)][tum] - for [Harvard's][harvard] [CS50x 2018][cs50] course.

[![Twitter Follow](https://img.shields.io/twitter/follow/SuriyaaKudoIsc.svg?style=social&label=Follow)](twitter.com)

## Features
* Custom 404 error page at `http(s)://www.your-storydrop-domain.tld/errors/404.html`
* Landing page at `http(s)://www.your-storydrop-domain.tld/`
* Contact page at `http(s)://www.your-storydrop-domain.tld/contact.php`
* Upload page with HTML form for uploading `.pdf` files at `http(s)://www.your-storydrop-domain.tld/upload.php`
* Showcase site at `http(s)://www.your-storydrop-domain.tld/showcase.php`
* ASCII HTML Art Code in `includes/header.php`

## Feedback

Feel free to send me feedback on [Twitter](https://twitter.com/SuriyaaKudoIsc) or [file an issue](https://github.com/SuriyaaKudoIsc/storydrop/issues/new). Feature requests are always welcome. If you wish to contribute, please take a quick look at the [guidelines](./CONTRIBUTING.md)!

If there's anything you'd like to chat about, please send me an [e-mail][email]!

## Dependencies

* [Uniform Server][uniformserver] ([ZeroXIII][zeroxiii])
* [Dropzone.js][dropzone]
* [QuickGallery][qgallery] ([commit `8b70912`][qgallerycommit])
* [PHP Contact Form][firstwebdesigner]
* [all-contributors-cli][allcontrib] ([v5.4.0][allcontribsemver])

## Development / Installation Process

### For developers

* Download the latest [Uniform Server](uniformserver).
* Extract the installation file.
* Clone this project: `git clone https://github.com/SuriyaaKudoIsc/storydrop.git`
* Put this folder in the `www/` directory of the [Uniform Server](uniformserver).
* Run the `UniController.exe` file in the root directory (on Windows), start the Apache & MySQL servers.
* :tada: It works!
* :pencil: Start contributing...

### For production

* Download the latest [Uniform Server](uniformserver).
* Extract the installation file.
* [Download](https://github.com/SuriyaaKudoIsc/storydrop/archive/master.zip) this project.
* Put the `storydrop` folder in the `www/` directory of the [Uniform Server](uniformserver).
* Run the `UniController.exe` file in the root directory (on Windows) and start the Apache & MySQL servers.
* :smiley: Nice. Go to `http://localhost/`
* :tada: You run your own local StoryDrop platform!

### For repo maintainer(s)

Automate [adding contributor acknowledgements][allcontrib]:

	npm run contributors:add -- SuriyaaKudoIsc doc
	npm run contributors:generate

Add/update contributors (View the Emoji key spec [here][allcontribkey]):

	# Add new contributor <username>, who made a contribution of type <contribution>
	all-contributors add <username> <contribution>
	# Example:
	all-contributors add SuriyaaKudoIsc code,doc

Check for missing contributors:

	all-contributors check

## Contributors

This project follows the [all-contributors](https://github.com/kentcdodds/all-contributors) specification and is brought to you by these [awesome contributors](./CONTRIBUTORS.md).

## Supporters, Backers and Sponsors (Acknowledgments)

Thanks for supporting me:

| [<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/EdX.svg/1280px-EdX.svg.png" width="160px;"/><br /><sub><b>edX.org</b>](https://www.edx.org/)</sub><br /><sub>(MOOC)</sub> | [<img src="https://www.tum.de/typo3conf/ext/in2template/Resources/Public/Images/tum-logo.svg" width="160px;"/><br /><sub><b>Technische Universität München</b></sub>](https://www.tum.de/) | [<img src="https://upload.wikimedia.org/wikipedia/en/2/29/Harvard_shield_wreath.svg" width="120px;"/><br /><sub><b>Harvard University</b></sub>](https://www.harvard.edu/) | [<img src="https://cs.harvard.edu/malan/malan6.jpg" width="140px;"/><br /><sub><b>David J. Malan</b>](https://cs.harvard.edu/malan/)</sub><br /><sub>(Harvard's CS50 Professor)</sub> |
|:-:|:-:|:-:|:-:|
| [Financial Assistance][edxfinance] | For being a [TUM][tumcampus] student | Make [CS50][cs50] available worldwide | Explains very comprehensible |

## Copyright

Copyright 2018-present **[Suriyaa R. Sundararuban][suriyaa]** *(Graduate of [CS50x 2018][cs50])*

[suriyaa]: https://about.suriyaa.tk/
[tum]: https://tum.de/
[tumcampus]: https://campus.tum.de/
[cs50]: https://cs50.harvard.edu/
[harvard]: https://www.harvard.edu/
[edxfinance]: https://courses.edx.org/financial-assistance/
[dropzone]: https://www.dropzonejs.com/
[uniformserver]: https://www.uniformserver.com/
[zeroxiii]: https://sourceforge.net/projects/miniserver/files/Uniform%20Server%20ZeroXIII/13_3_2_ZeroXIII/
[allcontrib]: https://www.npmjs.com/package/all-contributors-cli
[allcontribsemver]: https://github.com/jfmengels/all-contributors-cli/releases/tag/v5.4.0
[allcontribkey]: https://github.com/kentcdodds/all-contributors#emoji-key
[qgallery]: https://github.com/mojeda/QuickGallery
[qgallerycommit]: https://github.com/mojeda/QuickGallery/tree/8b709128ec478b7536b4080fe977e806cf473757
[firstwebdesigner]: https://1stwebdesigner.com/php-contact-form-html/
[email]: mailto:suriyaa.sundararuban@tum.de
[github]: https://github.com/SuriyaaKudoIsc

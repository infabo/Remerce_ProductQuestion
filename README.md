# Remerce Product Question
This module enable the option to ask a question about a product. The module is based on the default Contact Us form.

# Installation
- Setup Magento 1.9.x to be installed with composer as per the [magento-composer-installer](https://github.com/Cotya/magento-composer-installer) instructions.  
- Edit the `composer.json` file.
- Add a `vcs` repository pointing to this repo.
```
"repositories": [
    {
      "type": "composer",
      "url": "https://packages.firegento.com"
    },
    {
        "type": "vcs",
        "url": "git@github.com:AydinHassan/magento-community.git"
    },
    {
        "type": "vcs",
        "url": "git@github.com:all9lives/Remerce_ProductQuestion.git"
    }
  ],
```
- Add this package to the required dependencies.
```
"require": {
    "all9lives/Remerce_ProductQuestion": "v1.1.1",
    "magento-hackathon/magento-composer-installer": "v3.0.7",
    "aydin-hassan/magento-core-composer-installer": "v1.3.0",
    "firegento/magento": "1.9.3.1"
  },
```
- Run `$ composer update` from your cli.

## Note
This repo is a recreation of the existing Remerce_ProductQuestion extension to allow it to be installed via composer. All work credit goes to the team at [Remerce](http://remerce.nl/)

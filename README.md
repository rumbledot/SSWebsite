# Website SS
My website iteration using SilverStripe CMS v4

### requirements
- Ms Visual Studio Code
- XAMPP (make sure its PHP is v7+)
- setup Apache vhosts and Windows hosts in etc/
- composer
- in my case, a Windows Git bash console

### set up
- enabled PHP extension:
    - intl
    - fileinfo
    - mysqli
    - openssl
    - mbstring

- create SilverStripe app using composer

`composer create-project silverstripe/installer websiteSS`

- change .env.example to .env

specify database credential in it and set the project to dev mode and add an admin account to CMS

```
# For a complete list of core environment variables see
# https://docs.silverstripe.org/en/4/getting_started/environment_management/#core-environment-variables

# DB credentials
SS_DATABASE_CLASS="MySQLDatabase"
SS_DATABASE_SERVER="localhost"
SS_DATABASE_USERNAME="abe"
SS_DATABASE_PASSWORD="12345678"
# SS will try generate the DB name
SS_DATABASE_CHOOSE_NAME=true

# SS is in dev mode
SS_ENVIRONMENT_TYPE='dev'

# generate default admin
SS_DEFAULT_ADMIN_USERNAME='root'
SS_DEFAULT_ADMIN_PASSWORD='root'
```

- basic commands before running the project in browser

if you add new page+controller, re-build the project using project.url/dev/build

changes in templates/themes use project.url/?flush

- project front-end requirements like javascript, css, fonts and images belongs in /public

- add them in app/src/PageController.php

` use SilverStripe\View\Requirements;`

```
    parent::init();
    Requirements::css('css/bootstrap.min.css');
    Requirements::css('css/style.css');
    Requirements::javascript('javascript/common/modernizr.js');
    Requirements::javascript('javascript/common/jquery-1.11.1.min.js');
    Requirements::javascript('javascript/common/bootstrap.min.js');
    Requirements::javascript('javascript/common/bootstrap-datepicker.js');
    Requirements::javascript('javascript/common/chosen.min.js');
    Requirements::javascript('javascript/common/bootstrap-checkbox.js');
    Requirements::javascript('javascript/common/nice-scroll.js');
    Requirements::javascript('javascript/common/jquery-browser.js');
    Requirements::javascript('javascript/scripts.js');
```

Base project folder for a SilverStripe ([http://silverstripe.org](http://silverstripe.org)) installation. Required modules are installed via [http://github.com/silverstripe/recipe-cms](http://github.com/silverstripe/recipe-cms). For information on how to change the dependencies in a recipe, please have a look at [https://github.com/silverstripe/recipe-plugin](https://github.com/silverstripe/recipe-plugin). In addition, installer includes [theme/simple](https://github.com/silverstripe-themes/silverstripe-simple) as a default theme.

## Installation ##


See [Getting Started](https://docs.silverstripe.org/en/4/getting_started/) for more information.

## Bugtracker ##

Bugs are tracked on github.com ([framework issues](https://github.com/silverstripe/silverstripe-framework/issues),
[cms issues](https://github.com/silverstripe/silverstripe-cms/issues)).
Please read our [issue reporting guidelines](https://docs.silverstripe.org/en/4/contributing/issues_and_bugs/).

## Development and Contribution ##

If you would like to make changes to the SilverStripe core codebase, we have an extensive [guide to contributing code](https://docs.silverstripe.org/en/4/contributing/code/).

## Links ##

 * [Changelogs](https://docs.silverstripe.org/en/4/changelogs/)
 * [Bugtracker: Framework](https://github.com/silverstripe/silverstripe-framework/issues)
 * [Bugtracker: CMS](https://github.com/silverstripe/silverstripe-cms/issues)
 * [Bugtracker: Installer](https://github.com/silverstripe/silverstripe-installer/issues)
 * [Forums](http://silverstripe.org/forums)
 * [Developer Mailinglist](https://groups.google.com/forum/#!forum/silverstripe-dev)
 * [License](./LICENSE)

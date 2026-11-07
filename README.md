# An extension to customizing the administration login page for Shopware 6

The extension allows you to _customize the administration login page_. 

For example, it is possible to _set the background color of the page_ or to _hide the shopware logo_. In addition, the _headline can be hidden, replaced or its font size and color can be changed_ if required. It is _also possible to display a sub headline and influence its design_.

## Possible configurations
- set the background color of the page
- select if the shopware logo should be shown

## Possible configurations for the headline
- select if the headline should be shown
- set the text of the headline
- set the font color of the headline
- set the font size of the headline in pixels

## Possible configurations for the sub headline
- select if the sub headline should be shown
- set the text of the sub headline
- set the font color of the sub headline
- set the font size of the sub headline in pixels
- set the outer distance of the sub headline upwards in pixels

## How to install the extension
### via zip and console (recommended)
1. Download the latest _SschreierCustomizingAdministrationLoginPage-master.zip_.
2. Unzip the zip file and rename the folder to _SschreierCustomizingAdministrationLoginPage_.
3. Move the folder to the project folder _custom/plugins/_ .
4. Connect to the console via ssh:

```
bin/console plugin:refresh
bin/console plugin:install --activate SschreierCustomizingAdministrationLoginPage
```

### via composer
1. Add the repository URL to the composer.json of the project
```
"repositories": [
    ...,
    {
        "type": "vcs",
        "url": "https://github.com/sschreier/SschreierCustomizingAdministrationLoginPage"
    }
],
```

2. Connect to the console via ssh and install the plugin via the command
```
composer require sschreier/customizingadministrationloginpage
bin/console plugin:refresh
bin/console plugin:install --activate SschreierCustomizingAdministrationLoginPage
```

### via https://packagist.org
- Connect to the console via ssh and install the plugin via the command
```
composer require sschreier/customizingadministrationloginpage
bin/console plugin:refresh
bin/console plugin:install --activate SschreierCustomizingAdministrationLoginPage
```

### via zip upload
1. Download the latest _SschreierCustomizingAdministrationLoginPage-master.zip_.
2. Unzip the zip file and rename the folder to _SschreierCustomizingAdministrationLoginPage_.
3. Zip the folder to _SschreierCustomizingAdministrationLoginPage.zip_.
4. Upload the zip in the Shopware Administration.
5. Install & Activate the extension.

#### extension update (zip)
1. Download the latest _SschreierCustomizingAdministrationLoginPage-master.zip_.
2. Unzip the zip file and rename the folder to _SschreierCustomizingAdministrationLoginPage_.
3. Zip the folder to _SschreierCustomizingAdministrationLoginPage.zip_.
4. Upload the zip in the Shopware Administration.
5. Update the extension.

## Images

### default administration login page

![default administration login page](https://www.web-solutions-dresden.de/plugins/SschreierCustomizingAdministrationLoginPage/SschreierCustomizingAdministrationLoginPage-Image1.png)

### administration login page with an individual background color, a hidden shopware logo and an individual headline 
![administration login page with an individual background color, a hidden shopware logo and an individual headline](https://www.web-solutions-dresden.de/plugins/SschreierCustomizingAdministrationLoginPage/SschreierCustomizingAdministrationLoginPage-Image2.png)

### extension configuration part 1

![extension configuration part 1](https://www.web-solutions-dresden.de/plugins/SschreierCustomizingAdministrationLoginPage/SschreierCustomizingAdministrationLoginPage-Image3.png)

### extension configuration part 2

![extension configuration part 2](https://www.web-solutions-dresden.de/plugins/SschreierCustomizingAdministrationLoginPage/SschreierCustomizingAdministrationLoginPage-Image4.png)

### extension configuration part 3

![extension configuration part 3](https://www.web-solutions-dresden.de/plugins/SschreierCustomizingAdministrationLoginPage/SschreierCustomizingAdministrationLoginPage-Image5.png)
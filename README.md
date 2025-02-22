# An extension to customizing the administration login page for Shopware 6

The extension allows you to _customize the administration login page_. 

For example, it is possible to _set the background color of the page_ or to _hide the left side completely_. _For the left side, the background image can be changed_ or an _individual background color can be set_. If necessary, you can also _hide the headline, replace it, or change its font size, font color or spacing_. This is _also possible for the sub headline_. 

_For the right side_, for example, _it is possible to hide the shopware badge_ or _change the inner distance_. In addition, the _headline can be hidden, replaced or its font size and color can be changed_ if required. It is _also possible to display a sub headline and influence its design_.

## Possible configurations
- set the background color of the page

## Possible configurations for the left side
- select if the left side should be shown
- select if the background image should be shown
- set the background image
- set the background color
- set the inner distance of the headlines to the left in pixels
- set the inner distance of the headlines downwards in pixels
- select if the headline should be shown
- set the headline
- set the font color of the headline
- set the font size of the headline in pixels
- select if the sub headline should be shown
- set the sub headline
- set the font color of the sub headline
- set the font size of the sub headline in pixels

## Possible configurations for the right side
- select if the shopware badge should be shown
- set the inner distance to the left and to the right in pixels
- set the inner distance upwards and downwards in pixels
- select if the headline should be shown
- set the headline
- set the font color of the headline
- set the font size of the headline in pixels
- select if the sub headline should be shown
- set the sub headline
- set the font color of the sub headline
- set the font size of the sub headline in pixels
- set the outer distance of the sub headline upwards in pixels

## How to install the extension
### via console (recommended)
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

2. Connect to the console via ssh and install the plugin source code via the command
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

![default administration login page](https://www.sebastianschreier.de/plugins/SschreierCustomizingAdministrationLoginPage/SschreierCustomizingAdministrationLoginPage-Image1.jpg)

### administration login page with an individual background color instead of a background image, an individual headline and sub headline for the left side and a hidden headline for the right side

![administration login page with an individual background color instead of a background image, an individual headline and sub headline for the left side and a hidden headline for the right side](https://www.sebastianschreier.de/plugins/SschreierCustomizingAdministrationLoginPage/SschreierCustomizingAdministrationLoginPage-Image2.jpg)

### extension configuration part 1

![extension configuration part 1](https://www.sebastianschreier.de/plugins/SschreierCustomizingAdministrationLoginPage/SschreierCustomizingAdministrationLoginPage-Image3.jpg)

### extension configuration part 2

![extension configuration part 2](https://www.sebastianschreier.de/plugins/SschreierCustomizingAdministrationLoginPage/SschreierCustomizingAdministrationLoginPage-Image4.jpg)

### extension configuration part 3

![extension configuration part 3](https://www.sebastianschreier.de/plugins/SschreierCustomizingAdministrationLoginPage/SschreierCustomizingAdministrationLoginPage-Image5.jpg)

### extension configuration part 4

![extension configuration part 4](https://www.sebastianschreier.de/plugins/SschreierCustomizingAdministrationLoginPage/SschreierCustomizingAdministrationLoginPage-Image6.jpg)

### extension configuration part 5

![extension configuration part 5](https://www.sebastianschreier.de/plugins/SschreierCustomizingAdministrationLoginPage/SschreierCustomizingAdministrationLoginPage-Image7.jpg)

### extension configuration part 6

![extension configuration part 6](https://www.sebastianschreier.de/plugins/SschreierCustomizingAdministrationLoginPage/SschreierCustomizingAdministrationLoginPage-Image8.jpg)

### extension configuration part 7

![extension configuration part 7](https://www.sebastianschreier.de/plugins/SschreierCustomizingAdministrationLoginPage/SschreierCustomizingAdministrationLoginPage-Image9.jpg)

# WaPoNe_CookieNotification

<img src="https://cloud.githubusercontent.com/assets/11091926/24904030/73980286-1eaf-11e7-8e67-4cb7dcfbeb1a.png" align="left" height="100px" width="100px" /> **WaPoNe Cookie Notification** is a Magento 2 extension to inform users about use and management of your website cookies.

<br /><br />

## Final result

![wapone_cookienotification_result](https://cloud.githubusercontent.com/assets/11091926/24914768/869a2fc8-1ed5-11e7-84cc-4e749bb72276.png)

<br />

## Installation

### Composer

Run the following command in Magento 2 root folder

```
composer require wapone/module-cookie-notification
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
```

If you don't use *composer* to install the module but you download it directly, you also have to download https://github.com/WaPoNe/module-wapone-base module.

## User Guide

### Configuration

Go to Stores > Settings > Configuration > WaPoNe > Cookie Notification.

*Functional Settings*
![wapone_cookienotification_configuration_functional](https://cloud.githubusercontent.com/assets/11091926/24909835/ee32ae40-1ec5-11e7-9a9c-6ba9e1b4e370.png)
1. Set *Activation* to 'YES'.
2. Insert a value for *Cookie Life* (default value is 3600)
3. Insert a value for *Cookie Path* (it is not required)
4. Insert a value for *Cookie Domain* (it is not required)

*Design Settings*
![wapone_cookienotification_configuration_design](https://cloud.githubusercontent.com/assets/11091926/24909843/f25f6e2c-1ec5-11e7-9920-baa8ead93bd4.png)
1. You have to choose *Message Position* (Top or Bottom) 
2. Insert the *Message* to display to users
3. Insert an exadecimal value to set the color of *Message Text*
4. Insert an exadecimal value to set the color of *Message Background*
5. Insert the text for *Cookie More Button*
6. Insert an exadecimal value to set the color of *Cookie More Button Text*
7. Insert an exadecimal value to set the color of *Cookie More Button Background*
8. Select how to open *Cookie More Button Link* (Same Frame or New Window)
9. Select the page to link for *Cookie More Button* (default value is *Privacy Policy* page, in Luma Theme)
10. Insert the text for *Cookie Allow Button*
11. Insert an exadecimal value to set the color of *Cookie Allow Button Text*
12. Insert an exadecimal value to set the color of *Cookie Allow Button Background*

## Compability

- Magento CE:
  - 2.1.x
  - 2.2.x

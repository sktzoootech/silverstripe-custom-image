silverstripe-custom-image
=========================

An extension to Silverstripe core Image class.  Added methods that renders absolute URLs for GD processed images. Other GD process/manipulation will be added on this class on later release.

##Added Features

* resizedAbsoluteURL - returns absolute URL of resized image
* croppedImageAbsoluteURL - returns absolute URL of cropped image
* setWidthAbsoluteURL - returns absolute URL of processed image resized according to width
* setHeightAbsoluteURL - returns absolute URL of processed image resized according to height
* paddedImageAbsoluteURL - returns absolute URL of processed image resized and padded with white spaces
* setRatioSizeAbsoluteURL - returns absolute URL of processed image 

##Installation

The easiest way to install the module/extension is by using the following composer command in your project folder:

```php
sudo composer require --no-update silverstripe/custom-image:dev-master
```

You can also download the package from github and copy it to your project folder. Download it from  https://github.com/skTzoOoTech/silverstripe-custom-image.

Instructions on how to use will be included in this readme file later.

ImagesLoaded
============

This MediaWiki extension allows use of the [ImagesLoaded javascript library](https://github.com/desandro/imagesloaded), either by other extensions or in `[[MediaWiki:Common.js]]`.

```javascript
imagesLoaded( '#bodyContent', {}, function(){
	// do something after images load
});
```

Installation
============

In your extensions directory:

```bash
git clone https://github.com/enterprisemediawiki/ImagesLoaded.git
```

In your MediaWiki `LocalSettings.php` add the following directive:

```php
wfLoadExtension( 'ImagesLoaded' );
```

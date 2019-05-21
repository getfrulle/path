# Path - Plugin for IO CMS

```php
option::set('path_content', 'contentpath');
option::set('path_cache', 'cachepath');

echo path::get('content', 'my-content-folder/my-file.txt');
echo path::get('cache', 'my-cache-folder/my-file.txt');
echo path::get('cache');
```

## Dependencies

- https://github.com/io-cms/options
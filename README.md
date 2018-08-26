### Dframe Blog - Module

## Instalation
Add to your main composer.json

``` json
    "extra": {
        "installer-types": [
            "library"
        ],
        "installer-paths": {
            "modules/{$vendor}/{$name}/": [
                "dusta/blog"
            ]
        }
    }
```

Run
``` bash
$ composer require dusta/blog dev-master
```

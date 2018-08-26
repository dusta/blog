### Dframe Blog - Module

## Instalation

Run
``` bash
$ composer create-project dframe/dframe-demo --stability=dev project_name_dev
```
After install add to your main composer.json
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

and run

``` bash
$ composer require dusta/blog dev-master
```

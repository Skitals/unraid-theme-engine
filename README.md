# Theme Engine
#### A plugin for the unRAID webGui

### How to install
Coming Soon

#### Advanced / Hidden Options
You can inject custom css by creating the following files. The files, if they exist, are included on every page just above `</style>` in the html head.

```
/boot/config/plugins/theme.engine/custom.css
```
* Will be included in all themes.



```
/boot/config/plugins/theme.engine/custom-white.css

/boot/config/plugins/theme.engine/custom-black.css

/boot/config/plugins/theme.engine/custom-gray.css

/boot/config/plugins/theme.engine/custom-azure.css
```
* Will only be included when using the corresponding base theme.

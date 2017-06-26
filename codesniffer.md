# Compozer, PHP Code Sniffer, WordPress Coding Standards finetune

## Install dependencies

Install Composer:

https://getcomposer.org/download/

Install PHPCS

```
   composer global require "squizlabs/php_codesniffer=*"
```

Install PHPCS to project

```
    composer require "squizlabs/php_codesniffer=*"
```

Get WordPress Coding standards (in your projets folder)

```
    composer create-project wp-coding-standards/wpcs:dev-master --no-dev
```

Add WPCS to PHPCS (in the project folder)

```
    ./vendor/bin/phpcs --config-set installed_paths /*projects-folder*/wpcs
```

Add PHPCS to VSCode settings
```
    "phpcs.enable":   true,
    "phpcs.standard": "WordPress",
```


## Tab size settings

```
  "editor.tabSize": 4,
  "editor.insertSpaces": false
```

## Overwrite line character limit

Creat a phpcs.xml file in the project/theme root folder, with the following content:

```
<?xml version="1.0"?>
    <ruleset name="WPDEV">
     <description>Overwrite line limit</description>

    <!-- Include the whole PHPCS standard -->
	
     <rule ref="Generic.Files.LineLength">
      <properties>
       <property name="lineLimit" value="200"/>
       <property name="absoluteLineLimit" value="200"/>
      </properties>
     </rule>
    </ruleset>
```
## Exclude folders

Add to phpxs.xml:
```
  <exclude-pattern>/folder/*</exclude-pattern>
  <exclude-pattern>/file.txt</exclude-pattern>
```
Or add ignore option to cli command
```
    phpcs --ignore=vendor/,lib/ ./
```


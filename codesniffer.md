# Compozer, PHP Code Sniffer, WordPress Coding Standards finetune

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


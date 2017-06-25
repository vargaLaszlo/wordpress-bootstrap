# Tab size settings

´´´
  "editor.tabSize": 4,
  "editor.insertSpaces": false
´´´

# Overwrite line character limit

Create Standards/WPDEV/ruleset.xml file into PHPCS folder

CodeSniffer folder Ubuntu: /usr/share/php/PHP/CodeSniffer/

´´´
    <?xml version="1.0"?>
    <ruleset name="WPDEV">
     <description>Overwrite line limit</description>

    <!-- Include the whole PHPCS standard -->
     <rule ref="PHPCS"/>

     <rule ref="Generic.Files.LineLength">
      <properties>
       <property name="lineLimit" value="150"/>
       <property name="absoluteLineLimit" value="0"/>
      </properties>
     </rule>
    </ruleset>
´´´
In terminal hit

´´´
    composer update
´´´

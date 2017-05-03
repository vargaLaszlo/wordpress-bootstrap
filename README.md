## Go live checklist

- [ ] URL works
- [ ] Dump pages, posts, images are deleted
- [ ] No unused plugins, themes
- [ ] No provisions
- [ ] Core, plugins are up to date
- [ ] [No errors in W3C Validator](https://validator.w3.org)
- [ ] No errors in Chrome Developer Tools Console
- [ ] Robots are enabled
- [ ] Sitemap is generated
- [ ] [Site is submitted to Goolge](https://www.google.com/webmasters/tools/submit-url)
- [ ] [Site is submitted to Bing](http://www.bing.com/toolbox/submit-site-url)
- [ ] [Analytics plugin runs](https://analytics.google.com)
- [ ] [Google Search Console aceppts robots.txt and sitemap.xml](https://www.google.com/webmasters/tools/)
- [ ] [Bing Webmaster Tool  aceppts sitemap.xml](http://www.bing.com/toolbox/webmaster)
- [ ] [ReChapcha works on forms](https://www.google.com/recaptcha/intro/)
- [ ] Forms submits are stored in db
- [ ] Automatic backups are seduled in Backup plugin
- [ ] Site is able to send emails
- [ ] Browser chace is on
- [ ] Files are Gzipped
- [ ] Chace plugin runs
- [ ] Security barricade stands

## Docker commands

Start bash in container

        docker exec -it ###_wordpress_1 bash
        
Fix www-data user (fixes update error after restart the container)
        
        usermod -u 1000 www-data

## Plugins

* advanced-custom-fields
* automatic-featured-images-from-videos
* ~~better-delete-revision~~
* delete-post-revisions-on-single-click
* bootstrap-3-shortcodes
* bootstrap-for-contact-form-7
* breadcrumb-navxt
* broken-link-checker
* contact-form-7
* contact-form-7-to-database-extension
* crayon-syntax-highlighter
* custom-post-type-ui
* custom-post-type-widgets
* easy-responsive-tabs
* google-analyticator
* google-sitemap-generator
* login-lockdown
* related-posts-by-taxonomy
* sf-adminbar-tools
* shortcode-widget
* tablepress
* the-events-calendar
* the-events-calendar-shortcode
* visual-editor-custom-buttons
* widget-css-classes
* wordpress-23-related-posts-plugin
* wordpress-table-of-contents
* wp-db-backup
* wp-github-sync
* wp-github-sync-meta
* wp-markdown-editor
* wp-members
* wp-meta-seo
* wp-dashboard-notes
* wp-page-numbers
* wp-super-cache
* wysiwyg-widgets

## .htaccess

### Browser chace

        <IfModule mod_expires.c>
        ExpiresActive On
        ExpiresByType image/jpg "access 1 month"
        ExpiresByType image/jpeg "access 1 month"
        ExpiresByType image/gif "access 1 month"
        ExpiresByType image/png "access 1 month"
        ExpiresByType text/css "access 1 month"
        ExpiresByType text/html "access 1 month"
        ExpiresByType image/x-icon "access 1 month"
        ExpiresDefault "access 1 month"
        </IfModule>
        
### Gzip

        <IfModule mod_gzip.c>
        mod_gzip_on Yes
        mod_gzip_dechunk Yes
        mod_gzip_item_include file \.(html?|txt|css|js|php|pl)$
        mod_gzip_item_include handler ^cgi-script$
        mod_gzip_item_include mime ^text/.*
        mod_gzip_item_include mime ^application/x-javascript.*
        mod_gzip_item_exclude mime ^image/.*
        mod_gzip_item_exclude rspheader ^Content-Encoding:.*gzip.*
        </IfModule>
        
## Resources

- [Docker Wordpress](https://github.com/docker-library/wordpress)

## AWS things

### Open port

        iptables -A INPUT -i eth0 -p tcp -m tcp --dport 8090 -j ACCEPT
        
## mail out of a container issue

[Fix](https://github.com/docker-library/php/issues/135#issuecomment-277199026)

        echo "127.0.0.1 noreply.domain.com $(hostname)" >> /etc/hosts
      

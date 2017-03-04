## Go live checklist

- [ ] URL works
- [ ] Dump pages, posts, images are deleted
- [ ] Core, plugins are up to date
- [ ] [No errors in W3C Validator](https://validator.w3.org)
- [ ] No errors in Chrome Dev Tools console
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
* better-delete-revision
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
* shortcode-widget
* tablepress
* the-events-calendar
* the-events-calendar-shortcode
* visual-editor-custom-buttons
* widget-css-classes
* wordpress-23-related-posts-plugin
* wordpress-table-of-contents
* wp-db-backup
* wp-meta-seo
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

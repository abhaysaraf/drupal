CONTENTS OF THIS FILE
---------------------
- Introduction
- Installation
- Configuration
- Uses
- References
- Other


INTRODUCTION
------------
This module responds JSON node content upon passing valid System API key.
Currently, it is restricted to page type node entities.
 

INSTALLATION
------------
Install as you would normally install a contributed Drupal module. 
See: https://www.drupal.org/docs/8/extending-drupal-8/installing-drupal-8-modules


CONFIGURATION
-------------
To configure find configuration link of this module on module list page
or use direct link admin/config/system/site-information.

Upon landing on "Basic site settings" page 
enter a valid Site API Key of your choice and update the page configuration.


USES
-------------
Retrieve node contents in JSON format 
with route URL pattern "page_json/{api_key}/{node}".

Where, {api_key} should match the configured Site API Key
and {node} should be the Node ID of any Page Node(Restricted).


REFERENCES
-------------
-	https://drupaldrug.blogspot.com/2018/03/git-commands.html [GIT Commands] 
-	https://www.drupal.org/node/1587138 [PHP CodeSniffer - Command Line Usage]
-	https://www.drupal.org/docs/8/api/routing-system/structure-of-routes [Structure of routes]
-	https://www.drupal.org/docs/8/api/routing-system/using-parameters-in-routes [Using parameters in routes] 
-	https://www.php.net/ [Basic PHP Functions] 
-	https://drupal.stackexchange.com/questions/211095/show-access-denied-in-custom-page-without-permissions-drupal-8 [Forum solution] 
-	https://www.drupal.org/docs/develop/standards/api-documentation-and-comment-standards [Comment Standards]
-	Drupal Core [Other Solutions]


OTHER
-------------
Completed in 20 hours of time.

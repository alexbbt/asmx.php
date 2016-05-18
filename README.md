# asmx.php
Redirect local asmx calls through php to a web asmx, used for frontend development of Azure Sites
Replace all calls to "api.asmx/" with "api.php?"
Update $asmxURL with the link to your ASMX file
Place in same folder as "api.asmx/"
Run a local PHP server in the root folder
It will handle the serving of all HTML, CSS, and JS
Bash Command: 
``` Bash
php -S 127.0.0.1:8080
```
#PHP_Script

This is a PHP script that creates a daily to-do list. It uses PHP Session to store the user’s input across multiple pages 1. The script contains an HTML form that allows the user to enter a task and save it to the list. The list is stored in an array and is displayed on the same page. The user can add multiple tasks to the list, and the list will be updated accordingly. The script also checks if the task already exists in the list before adding it 1. The script uses Bootstrap 5 for styling. 

The to-do list is stored in a PHP Session variable, which means that it is available across multiple pages until the user closes the browser 1. The list will be available as long as the user does not close the browser window or the session expires. The session expiration time can be set using the session.gc_maxlifetime directive in the php.ini file 2. By default, the session variables last until the user closes the browser 1.

The default session expiration time in PHP is 24 minutes or 1440 seconds 12. However, the session expiration time can be changed by modifying the session.gc_maxlifetime directive in the php.ini file 3. For example, to set the session expiration time to 30 minutes, you can add the following line to your php.ini file:

session.gc_maxlifetime = 1800

This sets the session expiration time to 1800 seconds or 30 minutes. Please note that the session expiration time can also be set using the ini_set() function in PHP 4. The session will expire after the specified time has elapsed since the last request from the user.

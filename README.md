FatBoy
======

This project aims to contain everything you will ever need on your website:
- a homepage and several informational pages
- a very nice menu, with three or more layers and pictures
- user logon and authorisation & socialauth.
- forms, forms, forms in every variant you need
- a webshop: Speckcommerce
- several samples for pages that do edit table-contents (like StickyNotes)
- a blog
- a forum
- webservices and apps
- ... other nice goodies like adding a ckeditor https://github.com/Celtico/QuCKEditor

This project is the opposite of the well-known skeleton. In contrast to the Skeleton, where you have to add all extra's 
you need, this project will give you everything possible and you have to strip out all you don't need.

Feel free to fork this and give me a pull-request to add some stuff that was still missing or comments on what you think of it. 
 
  
    Authentication: ZfcUser (source: https://github.com/ZF-Commons/ZfcUser)
    ZfcUser has become our choice for authentication (who is this user?).
    
    What does it do: 
    - adds a page '/user' enabling anyone to log in or register via mail or userid.
    
    Don't want it? Do this to remove it:
    - in application.config.php comment out the lines 'ZfcUser' and 'ZfcBase'.
    - remove file 'config\zfcuser.global.php'
    
    What we did to add it:
    - in composer.json we added '"zf-commons/zfc-user" : "dev-master",' and ran comoposer;
    - added file 'config\zfcuser.global.php';
    - created table 'user' in the database.

Which module will be next? Let's do authorization (what is this user allowed to do?). What is your choice for Authorization? 
Let us know.

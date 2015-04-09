Taglist module for use with the ZF2 MVC layer.

The taglist is a table with records containing a parent-child relation.

ID   name        parent-id
 1   myGrandma   unknown
 2   myMother    1
 3   myAuntAnnie 1
 4   myAuntCarla 1
 5   me          2
 6   mySister    2
 7   myDaughter  5
 8   mySun       5

This module:
- handles the content-maintenance of this type of table. 
- demo's using selection-boxes


It depends on the jQuery
-option-tree on GoogleCode: https://code.google.com/p/jquery-option-tree/
phpSocial
=========
this can be modified without credit and can be copied. I take no responsibility to what you do to the script and if you modify any of the script then make sure you know what your'e doing!

step 1: extract this zip file
step 2: put files in server
step 3: create a database in mysql and call it whatever you want
step 4: create a table named "users" and make it 9 collms
step 5: name the collms these:
id (make it an int and set it to a_i)
fn (make it text)
ln (make it text)
u (make it varchar with 32 chars)
p (make it varchar with 32 chars)
pp (make it text)
bl (make it text)
fav (make it text)
isadmin (make it varchar with 3 chars)
step 8: locate cnf.php
step 9: open with text editor
step 10: look for "mysql_connect("localhost","root","")" and "mysql_select_db("phpsocial")"
step 11: change to fit mysql login and db name
and your'e done! :)

~Seadogs
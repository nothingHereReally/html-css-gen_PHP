## How to use:
### 1. Create a php file in src
#### 1.1 The start of the file should include the following code
```php
<?php
require_once "../CSSGenerator/CSSGenerator.php";
use Generator\CSS\CSSGenerator as CSSGen;
```
### 2. Create a new CSSGen variable, passing a string that represents the first selector
```php
$style = new CSSGen("*");
```
### 3. Add style to current selector (string passed in CSSGen creation) by using method addProp. 
###    First string passed is for property, Second string passed is for value.
```php
$style->addProp("padding", "0")
```
### 4. To add/switch selectors, use the addSelector method.
###    Pass the string of desired selector.
```php
$style->addSelector(".menu ")
```
### 5. To export use the put2file method.
### You can set custom filenames, directories, and choose whether to append or not
```php
$cssmenu2->put2file( $file = "example.css", $isAppend = false, $customDir = "./styles/");
```

## for contributors
---

#### getting a copy to local computer
```bash
git clone https://github.com/nothingHereReally/html-css-gen_PHP.git
```


## don't make changes on the main branch
please create your own branch
---
#### to create your own branch
open the cmd or terminal, cd to the project
---
#### for windows
```bash
cd dir\to\html-css-gen_PHP
git checkout -b branch_nameUwant
```
---
#### for GNU/linux, UNIX
```bash
cd dir/to/html-css-gen_PHP
git checkout -b branch_nameUwant
```
---
#### to check which branch your in
```bash
git branch
```
#### to change branch your in
```bash
git checkout name_of_branch_to_go_to
```
#### to delete branch
```bash
git branch --delete branchName2delete
```
## once created your own branch now you can edit, add files, ...


#### before creating a pull request, update your branch first
```bash
git checkout your_branch
git pull origin main
git merge main
```
#### if there are merge conflict, fix it first
#### once successful with
```bash
git merge main
```
#### now upload your branch
```bash
git push -u origin your_branch
```
## now create a pull request on github( to merge your branch to main branch )


---
## more detailed guide
for getting copy to local computer
```bash
git clone https://github.com/nothingHereReally/html-css-gen_PHP.git
cd html-css-gen_PHP
```

creating your own branch
```bash
git checkout -b branch_name_u_want
```
to check which branch your currently in
should have asterisk on your branch: * branch_name_u_want
```bash
git branch
```

recommended to update your branch from main
git checkout just to switch to your branch
to update
```bash
git checkout branch_name_u_want
git pull origin main
git merge main
```
fix any merge conflict, till merge success of
```bash
git merge main
```
recommended to update your branch
at least before coding,
after coding
and before making a pull request


now edit, add files, ..., code
to commit, stage first
see things that are not tracked
```bash
git status
```
to stage or add to git
```bash
git add file1.php file2.php
```
or just all files that are new or modified
```bash
git add .
```
now commit
```bash
git commit -m "title of commit, really just a message" -m "description, really to just a message"
```
repeat git add and git commit
everytime you edited something or add some files


if satisfied with changes you made prepare for pull request
```bash
git pull origin main
git merge main
```
fix any merge conflict, till merge success of
```bash
git merge main
```
now push your branch to github
```bash
git push -u origin branch_name_u_want
```
once successfully pushed
go to https://github.com/nothingHereReally/html-css-gen_PHP
create a pull request of your branch to merge with the main branch
once pull request is accepted you can now delete your branch on github


no on local computer you can delete your branch
```bash
git branch --delete branch_name_u_want
```


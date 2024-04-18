for contributors
---

#### getting a copy to local computer
```bash
git clone https://github.com/nothingHereReally/html-css-gen_PHP.git
```


#### please create your own branch
## don't make changes on the main branch
---
#### to create your own branch
#### open the cmd or terminal, cd to the project
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
#### to check change branch your in
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

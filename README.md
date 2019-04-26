## Semaphore Steps:

1.  Create public & private key pare:  (DSA or RSA bigger than 2048 bits only) on you local computer (Tested in linux)<br />
    Run: `ssh-keygen -t rsa -b 4096 -C key-title`

2.  Login to siteground server for linkio.com access. <br />
    Goto: <br />
    -> MyAccount<br />
    -> Manage Account (linkio.com)<br />
    -> Cpanel<br />
    -> SSH/Shell Access(on the bottom)<br />
    -> Upload SSH Public keys(key-title will be appear on comments)

3.  Login Github and goto: <br />
    -> https://github.com/settings/keys<br />
    -> New SSH Keys (paste public keys). The public key is one generated in step 1.

4.  Now login live-server with private/ppk keys (Can now login using ssh kep/pair auth, instead of traditional non-secure pass authentication. This is possible because you have already added public key in the sever and can now connect to ssh port using the private key stored on your local computer), enter the cmd<br />
        Cmd: `ssh -T git@github.com`<br />
        **This ensures that github.com is now added to the known hosts and makes all communication between server and github through key/pair so that we don't need to use github username and password for all the git pulls.**

5.  Now go to the directory where we want to clone and sync. For the main site like, linkio.com, the directory is: /home/linkio07/public_html, for dev.linkio.com, its /home/linkio07/dev/public_html.

6.  Run: `git init`

7.  Run: `git remote add origin git@github.com:manojroka/git_repo.git` (Use SSH type. This is just an sample repo. We can get one from github.com for the repo we want to sync with)

8.  Run: `git pull origin master` (Branch. Here we are syncing master branch. For dev server like dev.linkio.com and if we want to sync with develop branch, the command to run will be git pull origin develop)<br />
    If both sever and git has files :<br />
    Run: `git fetch --all`<br />
    Run: `git reset --hard origin/<branch_name>`<br />
    Run: `git checkout <branch_name>`

9.  Goto https://semaphoreci.com/users/sign_in (Login with Github).

10. Goto:<br />  
    -> Add New Project<br />
    -> Select git ripo (Listed on semaphore)<br />
    -> Select Branch (This is the branch we want to setup semaphore auto deployment. Eg; for dev server we may want to choose "develop" branch here and for production we may want to use master branch)<br />
    -> Setup edit job (Delete this)<br />
    -> job#1 change phpunit --to-- echo ok and hit enter button<br />
    -> Build With These Settings.

11. Goto again:<br />
    -> https://semaphoreci.com/ (Select Project)<br />
    -> Set Up Deployment.

12. Goto:<br /> 
    -> Generic Deployment<br />
    -> Automatic (Select Branch)<br />
    -> enter your deployed command<br />
	Cmd: `ssh -t -o StrictHostKeychecking=no -p 18765 linkio07@linkio.com "cd /home/linkio07/dev/public_html && git fetch --all && git reset --hard origin/master"` (Here /home/linkio07/dev/public_html is the path of project in server we want to use for auto deployment as choosen in step 5. Put whatever is selected in step 5)

13. Now Goto:<br />
    -> Next Step<br />
    -> Paste private key<br />
    -> Save<br />
    -> Server Url (http://linkio.com)

14. Done. Whenever we update our git repo from anywhere like local, the changes will be automatically deployed in where it is pointed to the server for that branch.

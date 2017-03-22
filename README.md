# KnowledgeBase
Jquery Table with SaaS

Code Solution built for the below requirement
=============================================
https://github.com/khamsany/hands-on-question/blob/master/readme.md

Steps to configure the program
===============================
1. Download or clone the git repository 

2. Edit the file //fe_01.html Line No  ---> 46. please replace your project config base url path 

3. Then directly access the fe_01.html in the browser by simply clicking the file.

4. All the #tasks mentioned in the code challenge has been updated.

5. CSS to SCSS conversion has been done and SCSS file is located in the directory under the path  \sass\screen.scss

6. Instead of CSS, SCSS used efficiently and implemented the below features,

    - Variables
    - Nesting Rules
    

Steps to configure the SAAS/SCSS in the windows(v10) system 
============================================================
1. Download and install "Ruby Installer" - x64 format
2. Configure the system environment path and restart the computer to reflect the change appear the Ruby Command
3. Run command "gem install compass"
4. Create new saas environment with this command "compass create YOUR_PROJECT_NAME"
5. Start your compass: yourproject > compass init
6. Intially compass compile with default .scss and .css without any error
7. If you want to add new custom css, copy your new custom .css content into .scss main file (screen.scss) 
8. To compile the new changes run below command
    yourproject > compass compile sass/screen.scss
9. Now you can see the complied .scss script inside the screen.css file.
10.Link the usuall custom .css file in the header to apply the CSS for your webpage. Avoid using .scss file directly in the <link> element. It leads to error.


## About Travel Buddy

Travel Buddy is a one-stop shop for tourists and locals who are looking for a place to stay or vehicle to rent

### Prerequisite
1. laravel herd [LINK](https://herd.laravel.com/windows)
2. gitbash [LINK](https://git-scm.com/downloads)
3. node [LINK](https://nodejs.org/en/download)

### Installation
open terminal cmd|powershell

1. git clone https://github.com/kyleexkyle/travel_buddy.git

2. cd to project.
   
  option 1
   1. right click on folder select open in terminal
    
   option 2
   1. open terminal. terminal should boot on root directory on computer.
      - if your project is located on C:\Users\{username}\code\project
        do this to cd to the folder: cd code/project
    
   - once inside the project folder proceed to step 3

3. composer install (wait for the installation to finish)
4. npm install (wait for installation to finish)
5. php artisan migrate
6. php artisan db:seed
7. npm run dev && php artisan serve

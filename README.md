# Overview

The goal of this coding task is to give us an idea of your coding and problem solving skills and your development practices as a full-stack developer. We will use this code as a discussion point during your next in-person interview.

Please give this your best effort and let us know if you have any questions along the way. You should allocate at least a couple of hours to the task. It will require you to be familiar with the basics of Vue.js or similar component based frameworks (like React), and basic API development. You can use whatever tools or materials you need to assist you (Google, Framework Documentation, Stack Overflow, etc).

Please follow the instructions below for requirements, setup, and submitting your files. 
f.,msdnf.asdmnf.,asmfn.,asdmfn.,amdfn.,amsdfn.,asmdnfklkjdsahka

## Getting Started

It is recomended that you read the instructions for both the frontend task & the backend task before beginning. These tasks are related to one another, and doing one may make things easier for you to complete the other.

Once you clone the repository, you'll want to take care of some configuration setup with the following commands. You may need to install [composer](https://getcomposer.org/doc/00-intro.md), PHP (with sqlite3 extension), and npm if you don't already have them on your system.

Run the following to prepare the laravel dependencies and database connections:
```
cp .env.example .env
touch ./database/database.sqlite
composer update
composer install
php artisan key:generate
php artisan serve
```

## Laravel In This Project

For the purposes of the developer task laravel is used primarily as a backend framework leaving frontend development to be handled by Vue.js you can find the Vue.js files in the resources folder. Please utilize components to the best of your ability.

Some important things to note about the configuration of this project.

- We're utilizing the [api.php](./routes/api.php) file for routing api requests. You can ignore all other files in the routes folder
- We're utilizing sqlite with a seeder for simple setup & to provide a consistant initial state for developers to use.
    - As long as migration files aren't changed, you can always return the database to its initial state by running `php artisan migrate:fresh --seed`
- A REST API has already been started for the "Study" model, but it is intentionally incomplete. There is one get request provided, and it's your job to create additional routes. Bonus points if you take into account data integrity constraints into your API


# Backend Task

In this task you're provided a basic route such that when you make a `GET` request to [127.0.0.1:8000/api/study](127.0.0.1:8000/api/study), you're provided a response with all the studies in the sample database. Your job is to create additional 4 (5 if you have time) routes which do the following.

* update 1 study: 
    * URL: 127.0.0.1:8000/api/study/{study_id}
    * Body of request: json data with either field specified as a "fillable" in `App/Http/Models/Study.php`.
    * Purpose: updates some or all fields for the specified study.
* show 1 study: 
    * URL: 127.0.0.1:8000/api/study/{study_id}
    * Body of request: none
    * Purpose: Returns one study with the id specified in the url.
* create a new study: 
    * URL: 127.0.0.1:8000/api/study
    * Body of request: json data with all fields specified as a "fillable" in `App/Http/Models/Study.php`.
    * Purpose: Creates a new study.
* destroy: 
    * URL: 127.0.0.1:8000/api/study/{study_id}
    * Body of request: none
    * Purpose: Deletes 1 study specified by the id in the URL.study.
* increment (optional): 
    * URL: 127.0.0.1:8000/api/study/{study_id}/increment
    * Body of request: none
    * Purpose: Adds 1 to the completes for the given study & returns the entire study object.

HINT: for this task you should only need to modify 2 files: routes/api.php & app/http/controllers/StudyController.php. Also you should open [127.0.0.1:8000/api/study](127.0.0.1:8000/api/study) in an browser (or api tool of your choice such as Postman) to see what gets returned for existing route.

## Learning Laravel

Laravel has extensive and thorough [documentation](https://laravel.com/docs/8.x) and video tutorial library. Be sure to look at docs for the following if you need help getting started after installation:

1. [routing](https://laravel.com/docs/8.x/routing)
2. [requests](https://laravel.com/docs/8.x/requests)
3. [Controllers](https://laravel.com/docs/8.x/controllers)

There are many other valuble pages in Laravel's docs, but this should help you get started.



# Frontend Task

We would like you to create a SPA that displays a list of surveys based on this interactive design mockup:
https://www.figma.com/proto/PF4PRhuoM8xqbHWdWlgzYj/StudyList_Practical

The instructions to setup the backend portion of this task is above, and there is one route already prepared for you. If you cannot complete all the routes for the backend task, you should still have enough to complete most of the frontend.
We have setup an API route (described below) that requests a list of surveys from a server. You can use that to populate the interface with an initial dataset.

Ideally, each survey in the list should be rendered using a child vue.js component.

Feel free to refactor any of the frontend code that's there.

Your app functionality should include:
*  Editing a study name
*  Incrementing the study completion count via the "Add Complete" button
*  Add a study to the list via the "Add Study" list
*  Delete a study in the list via the "Remove Study" list


We would also like to see some CSS styling and for you to follow the mockup as closely as possible with a focus on spacing/alignment. Some global styling will be provided for you in `resources/css/app.css`. Project colors can be found in the projectColors.png.

The icons in the mockup use the [fontawesome](https://fontawesome.com/icons) library.

We have also supplied 2 js files: 
* `api-helpers.js`: Assists in making API calls
* `consts.js`: Intended to contain any values that need to stay consistent thoughout the application.

Feel free to add to both files as you see fit.

## Setup
To run the frontend server, and ensure changes are recompiled when you save run: `npm run hot` in a seperate terminal. NOTE that you will need to leave the frontend server running while developing.

<details>
<summary>If you see error ` Error [ERR_PACKAGE_PATH_NOT_EXPORTED]...`</summary>
<br>
You need to remove node_modules & package-lock.json and re install
`rm -r node_modules package-lock.json && npm install`
</details>

# Homepage

ROUTE: 
http://127.0.0.1:8000


# Submitting Results

Please add a comment in the app.vue file with your name so we know this is your project. If there are any speical instructions, please provide them in an additional readme file.

When you have completed the task, create a zip archive of all files and include your name or initials in the archive name.
Upload it to the following dropbox file request link:

https://www.dropbox.com/request/NLv8VTB2JVH4lsqLACX3


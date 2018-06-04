### dwfxgchv
#Squash Occitanie
#Admin account:


   - superadmin:superadmin@example.com
   - password: KP2pXf86r2JAf60U



## Marc-Antoine Danner 2018


## Table of Contents

   - Introduction
   - Specifications
   - Analyse 	
   - Modelization 	
   - Laravel
   - Why? 	
   - Why not? 	
   - Laravel Architecture 	
   - Conception
   - Post Mortem
   - What went right 	
   - What went wrong 	
   - Conclusion
- Marc-Antoine DANNER Projet Web IG


### Introduction

This project was to create a web application all by myself. I chose to do an
application for the squash club of Montpellier (FRANCE) as they asked me to do so a
few months ago. The purpose of this application is quite complicated and their
requests were not simple. They asked for an application where every squash club and
associations could share projects, plannings and ideas.

This application idea came during the new french regions. Before, with only the
region Lanquedoc-Roussillon, it was already not easy to communicate, and now with
all Occitanie, it’s clearly an issue for every event each club want to do.

I decided to divide my application in two parts. The first one is the front
interface where any customer could go and find the squash informations it needs. For
example you can find the next events the nearest to your area, have a club you follow
and have mail informations from them, have access to the links to deal with clubs,
associations etc.. The second one, which is the most difficult I think, is a back
interface for member of associations, clubs or league. It’s with this interface that
everyone can communicate and share ideas but because I have to set permissions by
roles, is complicated... Moreover, I am only a squash player and having to step back
to understand what they wanted can be complicated but it is also a great skill that I
can use for the future.

For information, it is not only an IG3 project for me but also a “service civique”
which was offered to me because I play a lot of squash. The Occitanie squash league
and I found this solution where I namely play for the league and help them during all
the year in return.

In this document I will present you with all the specifications from the client, the
technologies I used to answer it, my progress and a feedback of this project.


### Specifications

This application has various purposes. Firstly, a user can see all the events there are in
the Occitanie area and can directly have access to them by links. The user can also
contact them and contact some people that are defined by the administrator.
Secondly the league can contact clubs and associations through this application.
They can send emails and can manage the structure’s affiliations. Also it is a tool for
the associations so they can manage their associations, share and communicate via
this application. Finally, it is an application where the associations can create
commissions, where they choose which users have access to it, what they can do
and not do and where they can discuss about the different commissions topics they
create.

The difficulty of this application is the stress behind it. Even if we had a lot to do during
the last weeks, I have to remember that this project is not over after the academic
year. As a matter of fact I will certainly work more during this summer because the
Occitanie squash league needs this application and I am very happy to create it from
the beginning to the end. As I said before, it is not a project I will finish at the end of
the academic year and I have to answer to the client’s request. And I really have to
stick to it and to find solutions to my problems when they arise.

### Analyse 	

The analyses was the most difficult and
time-consuming part. When I signed the
contracts, it tooks a long time before I
could meet the league president
because our plannings were not
matching at all. Then after our first
meeting, around mid-March, it took me a
long time analysing his needs. Also
when I had questions, I could only send
emails and sometimes it took a long time
to get some answers. As communication
was not easy, it took me a long time to
do the analyses while I was facing all the

lessons and the retakes on the side.

### Modelization 	


After having troubles analysing the
league request, I had to conceptualise
the data I had, to be able to work with
them on a web applications. It took
some time to manage the data and
modelise them well. I decided, for this
project, due to the difficulty of having the
final product ready for the end of this
project, to separate the data in two
parts. The first one is the data I used for
my deployed web application and the
second one is the data I will use in the
future for the final web application.

### Laravel

### Why? 	

For this subject, I chose to work with the laravel framework for a lot of reasons.
First, it is a PHP framework. I know it’s not always well seen to use it because it is not
a strict language and you can basically do whatever you want. It could be seen as a
good language but not anymore when you know that some projects requires a lot of
people working on it, and it is then difficult for them to work together if they don’t use
the same methods. But with laravel, things are different. It is a framework with rules
and a particular arborescence that makes it difficult to learn at the beginning but then
very easy to use. Laravel is based on multiples framework and functionalities that
already exists. For example, for the HTTP request it is simply using the Symfony
framework system. But it is not only existing libraries put together and it is also a lot of
powerful components which, used together, provide a very useful application. For
example there is a routing system, a sending email system, a migration system for
database, a templating system etc... With all the possibilities and the community
behind all this, it was clearly a good framework to choose for me. We can see on this
chart from google trends that clearly, laravel is the new PHP framework star and it was
obvious for me to use it as I knew I would often go on forums because of errors.


### Why not? 	

Obviously when the teacher said to not use PHP, I had to think about this
section. I know it was not clearly said to not use PHP but it was implicit. I personally
didn’t find any reasons why I should not use Laravel because it is the only framework I
know and PHP is the only language I have learned for now as well. The reason I didn’t
use any other languages is because this language had more rules but still gave me
some freedom. It is already difficult to work with other people when everyone are
following the same rules, so in a context of no rules at all, it would be even more
difficult. In fact it is like everything in this world I guess: it depends on how you decide
to use it.

### Laravel Architecture 	

Laravel use the MVC model. It has a model part which works with the data and which provides a
simple and efficient management of the data. It also has a view part to show what the user will see,
using blade templating. And then it has a controller which provides a coordination between the two
first parts.

Also, Laravel is mainly object oriented which is a design pattern with classes which provide a clean,
readable and maintainable code.

To use all the components of Laravel and its dependency, Laravel use Composer which is a powerful
dependency manager for PHP.

In the application arborescence you can find multiple directory:

App: You find in there everything essential for the application: “HTTP” for the the controllers and the
middlewares which provides a filter of the HTTP requests, “Providers” which provides services and
initialize components and finally “User” which is about users and database.

Bootstrap: Where the initialising script is for the application

Public: The only visible directory once it’s deployed

Ressources: Where you find the views for your application.

Finally, there are files directory at the root directory: “Artisan” which is used to migrate your database
for example, “composer.json” where you can find everything for composer use, “.env” where you can
set your global variables of your application like your database configuration, and others.

There are other directory but they are not as important so I chose to not talk about them here.


### Conception

To build my application I followed multiple tutorial (https://laravel.sillo.org/laravel-5/ or
https://www.grafikart.fr/formations/laravel for example) because as I said, there is a lot of of
tutorials and forums for laravel. I also spend a lot of time on the official documentation
trying to understand things but it was clearly not easy, I spend a lot of time juggling
between forums.

I choose which packages I wanted to had to my application and I decided to access
my application on security and administration for the final product I will deliver next
year. I decided to use no-captcha as a verification for the league squash that not
anyone can create an account. I also configured the mail for an account verification. It
is clearly useless for just a sport event application but can really be useful for the final
application.

I added a lot of packages on this first application. Firstly I had the opportunity to use
several packages, manage conflicts and add features to my application. For
information, I found a lot of them on this awesome website https://packalyst.com which
offer a lot of popular and efficient packages. I sadly did not used all of the packages I
installed but I will certainly soon.

For the database, as I worked on Mac it was an easy solution to use MySQLwith
MAMP when I was on development phase. Also, thanks to the classes we had with
PostGreSQL, it confirmed my choices.I have clearly no need to use PostGreSQL with
my needs and MySQL is clearly enough powerful for me. Maybe if my application is
evolving and needs some features only provides by PostGreSQL I will have to migrate
but up to now there is no need for it. Also the new 5.7.* MySQL version gives the
possibility of json files (similars to dictionary) and gives possibility for languages
translations of applications. It is not something really important for my application for
now but the squash league asked, when the final application will be delivered, to, if it
is not too much complicate, to have different languages versions because there is
more and more requests about it. By using multiples languages json data and using
packages from larval, I was able to offers some translations features.

Then, to deploy my application, after spending one day on forge.laravel.com and
amazon web services I decided, just like all the class, to use Heroku as it provides
cloud services scalable and works when you do commits to your GitHub repository.

I had to add some add-ons, one for webpack, one for php and the last one for
MySQL to access my database with jawsDB. I also had to configure my environment
variables on Heroku to secure my application.


### Post Mortem

### What went right 	

It was a pleasure working on this project because it is finally a project where you are
free to do whatever you want! I mean it is totally different from what we had in class
until now. When I compare our projects in IG with the projects in other sections I am
glad to be here. I think I talk for everyone when I say that was the two hardest week of
the year. Even in festival I sleep more, but it was not a problem for me to sleep 4
hours/day because when you are on your project you live it. I know it sounds a little bit
addicted and dreaming of php during sleep is not helping it. I am really happy to have
work on this project and it is giving me a lot of motivation to pass, beeing graduate
and work for projects like that in a not too distant future.

### What went wrong 	

During those two weeks, a lot of things went wrong and I could write a second
document for to list them but nevermind. But where I had the most difficulties and
where I lost most of my times was not on the proper code. Every errors I faced was
for local development, using MAMP (I know, with a mac I could hav anticipate it),
dependencies errors, issues with tutorials using Laravel 4.* and me using the 5.
(issues with array for exemples), etc.. But after hours you find and understand (at least
you think) how it works. Where I literally cried was for deploying my application. Using
Laravel, Webpack, MySQL and Heroku was clearly not the perfect mix... I lost so
much time and so much tears on it. But the satisfaction of success was priceless and
that is clearly what I loved from this project.

### Conclusion

To conclude, even if it was a hard and tough project, it was really nice to work
on it, I had a lot of issues and I tried to fix them in time but there is still a lot of features
I need to work on and also fix the dashboard administrator serveur connection. I think
that with only few times more I could have fixed it but never mind, I appreciate work
on it and I will, not only because I have to, continue to work on it to have the web
application I dreamed about. It teach me that I can work by myself, alone, with
objectives and teaches me that sleep is only a concept in our minds.



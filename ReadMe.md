Group Project Log
Note: all information must be filled out. You must hand in the project log along with each group project deliverable for this course (e.g., milestones, proposals, reports). The percentage of work allocated to each group member must add up to 100%.

Group Name:	PLEXTRA


Group Members:	Vidhyashree Boopathy, Udaya Bhanu Lekhala, Selvapriya Sampath, Kunal Sharma, Aniket Biswas


Deliverable:	Technical Report


Group Member Name	Work Done (%)
Vidhyashree Boopathy	20%
Udaya Bhanu Lekhala	20%
Selvapriya Sampath	20%
Kunal Sharma	20%
Aniket Biswas	20%
Total:	100%


 
TECHNICAL REPORT











Members and Contributors

Selvapriya Sampath 
B00769290
sl591381@dal.ca	Udaya Bhanu Lekhala B00775670
ud411234@dal.ca	 Vidhyashree Boopathy
B00790060
 vd896908@dal.ca

Kunal Sharma
B00780464 
kn781914@dal.ca	 	 
Aniket Biswas 
B00781091
an584252@dal.ca





Faculty of Computer Science
Dalhousie University

10, August, 2018


ABSTRACT


People in cities usually look for various kinds of events and sports through various sources. This application is unique as it will serve as a one-stop destination to book tickets for a variety of services. The overall goal of the application is to attract the outgoing user base and maintain a loyal clientele. Tasked with developing a concept for people to book tickets and select seats through an online portal, we kept our major competitors in focus – The Coast [2] and Cineplex [3]. This project is aimed at developing an online seat and ticket reservation system for Nova Scotia.


 
1.	INTRODUCTION
PLEXTRA is an internet-based web application which allows users to access major events around the city, book their tickets and reserve their preferred seats well in advance or in the last minute. This application automates the ticket booking system and enquiries about the ticket availability. This is fairly new application which might look relatable to our competitors – Cineplex and The Coast, but we have a whole new concept of listing multiple sources of entertainment on one platform and a whole bunch of unique features, for e.g., the provision to select preferred seats while booking tickets. The current instance of Cineplex is mundane and lacks various functionalities. We believe that the users should be able to navigate entertainment information around the city and book them all under one roof. The provision of seat booking should be available and should come in handy when a group of people attends a movie screening and wants to be seated together which is not possible with Cineplex’s current functionalities. Even on a busy day at the theatres, the user can expect to be seated with their friends or loved ones.
PLEXTRA fills the gap of seat booking system and provides the customer with a whole new experience of enjoying their favorite movies from their desired seats. The application also allows the user to contact the Admin for any enquiries that they might have. It also gives the functionality of reviewing and rating any movie based on their preferences. This can help other users have a verified feedback before they book their next event for the weekend. The User Interface (UI) of the application is carefully designed with modern front-end frameworks to have a pleasing and aesthetic appeal. The user will have a considerable and optimized and user experience while using the application.
2.	BACKGROUND
2.1	Competitive Landscape
The main competitor of PLEXTRA being CINEPLEX, works under the domain of movie ticket booking and trailers. CINEPLEX provides users with an opportunity to book tickets for movies, events, and sports. It contains show timings, theatre listings, featured movies/events/sports, and ticket booking system. The ticket booking system, show timings and featured movies are the common characteristics which even our application possesses. CINEPLEX has the search functionality through which users can search any movies that are in the website. Search and enquiry functionalities are common with our application. It has a gift cards/corporate cards option which allows users to buy gift cards and offer special discounts to working customers on corporate cards. CINEPLEX has featured movies and events on the home page similar to our application. CINEPLEX uses Geolocation API to find the location of the user to suggest the movies and theaters that are nearby and it is one of many features which are similar to our application.
2.2	Problem and Approach
PLEXTRA looks quite relatable to our competitor, CINEPLEX, but we have a whole new concept of listing multiple sources of entertainment on one platform and a whole bunch of unique features, for e.g., provision to book seats while booking tickets. PLEXTRA fills the gap of seat booking system and gives the user a new experience of enjoying their favorite movie or sport from their desired seat. To integrate the seat booking system to the application, we got the movie theater layout for movie theaters and provided the users a similar layout to select seats from. 
Our application has been optimized with HTML5 API’s to enable features like location, reviews and video trailer playback. We adapted the UX principles to enhance the overall element. We applied a responsive layout by applying latest framework like Bootstrap, which provides a seamless user interface. The information layout is designed in such a way, so that a user need not require prior knowledge of the site layout. PLEXTRA does not require any kind of deeper understanding of website functionalities. The user interface is designed to strike a balance between people who are not very familiar with the website booking and people who just rely on website bookings.
3.	APPLICATION DETAILS
3.1	Target User Insights
Entertainment in general is desired by everyone in the city irrespective of their age, gender, and profession. PLEXTRA aims to be a go-to application for users from all backgrounds. The outgoing people who love to inquire about the things happening around the city can gain direct benefits from the offerings of the application. The only prerequisite will be the knowledge of the internet and a card to make payments with.
It is targeted for the audience irrespective of the age or gender criteria. Anyone who would like to book tickets for movies, events and sports with any hassle can use this application. Using our application, does not require prior knowledge of functionalities. The user interface and click streams are designed in such a way that it is self-explanatory to the users. The users can easily comprehend about the functionalities once they start using the website.
3.2	User-Centered Design Approach
Initially, we decided on the context and identified the target users for our application. Once the application’s idea was finalized we brainstormed about the requirements for both the front end and back end. The design plan for application’s implementation was carefully laid down from the user’s perspective. We looked into several websites to analyze how to create an enhanced look and feel for our application. 
After the analysis we created wireframes and clickstreams for all the pages. We made it a point to comply with the Three click rule. We created clickstreams in such a way that users will gets things done within 3 clicks. Once the wireframes and backend plan were ready, we started developing the front-end of the application. We made sure that the color pattern was same throughout the application and added minor animations to enhance the appearance. We performed several rounds of manual testing for each functionality to make sure that our application was in par with the industry standards.
3.2.1	Information Architecture
The Sitemap as shown in Figure 1, represents how the pages of our site are grouped, order in which they would appear in, the relationship between the modules, and the structure of our website.
The application architecture starts with a Home Page which provides navigation for Movies, Events, Sports page and much more. The website’s homepage provide navigation for various pages for a registered user and for a user who is not registered. An unregistered user will be restricted from navigating to the payments page of ticket booking flow. A registered user is allowed to provide Feedback for the listed Movies. 
The architecture includes an Admin Portal to add Movies, Events, and Sports to the backend Model. An Admin portal also includes web pages to add theatres, monitor users and user feedback. Seat Reservation for Events and Sports section had to be removed from our application due to unavailability of event locations’ layout at present. 





3.2.2	Design and Layout

 

Figure 2: Home Page

The home page (Figure 2) constitutes the main functionalities of the website. It has the company logo on the top left named “PLEXTRA” which is also the name of the company. It also has a search bar where a user can search for all the different varieties of movies to get their cast information and reviews from the OMDB API. The navigation bar also has a Login and Sign up button to allow a user to log in or register directly from the homepage. The featured events, movies and sports will be displayed on the main page along with the option to view all other movies and events.


 

Figure 3: Login Page
The Login page is shown on clicking the Log In button on the Home Page. It asks for the User email address and the password. It also has a button to Register, for new users. Clicking on it will redirect them to the Sign-Up page. Figure 3 shows the Login Page.

 

Figure 4: Sign Up Page

The Sign-Up page contains a basic form containing fields such as First Name, Last Name, Email address, Password, and Confirm Password. It also provides the user with a confirmation as an email notification that is sent to the registered email ID. We abide by certain terms and conditions which must be read and agreed upon. They can then register after filling out all the fields.


 

Figure 5: Movies/ Events/ Sports Page
This page (Figure 5) loads up when someone clicks on the Movies/ Events/ Sports tab on the Home Screen. It displays all the events dividing it into 3 tabs – ‘Now Showing’ for the movies that have already been released and are up in theatres right now, ‘Coming Soon’, for the movies that are yet to be released but can be pre-booked if available in theatres, and ‘Exclusive’, for non-generic and exclusive screenings of old or nominated movies. There is also a list of all other recommended movies that are nearby.

 

Figure 6: Movie Selection Page

On selection of a movie, the user is taken to the movie page, for instance, in our example, Elysium is the movie that has been selected which opens up the movie page containing the movie trailer and details about the movie name, its rating, movie description, Director, Writer, Stars and the cast members with their pictures. There is a button that gives the user an option to buy tickets for the movie/event. On selecting Buy tickets, it redirects the user to the Date picker and timing page. Figure 6 shows the Movie Selection Page.
 

Figure 7: Movie Listing Page

On clicking the Movies Near You button in the Movies Page, the user is redirected to the List of Movies Page. Here the list of available movies for the location selected is displayed. The user on selecting the View button of any Movie will be redirected to their respective Movie Details page.


 
Figure 8: Date and Time Page

The booking application allows a user to pick a Date and Time for the selected Movie. A dropdown for the date is provided, from which any date can be selected and the View Ticket Availability button is clicked for further booking and seat selection. Figure 8 shows the Date and Time Page.
 
Figure 9: Seat Selection Page

Our application provides a page for the user to select their desired seat to watch a Movie. These reserved seats will be added to their ticket details. Also, the application calculates the total cost for the seats selected. The seats that are available is marked with a light grey, unavailable are marked with a dark grey, and selected seat are highlighted with green. This provides a user a clear view for navigation. Figure 9 shows the seat selection page.
 
Figure 10: Payments Page

The payments for the seats are done through PayPal API. When a user selects payment option, he/she is navigated to the payment gateway. The card details are entered and confirmed to complete their booking. Figure 10 shows the Payments Page.

 

Figure 11: Events listing Page

Once the user clicks on the EVENTS link in the navigation bar, he/she will be navigated to this page. The event listing page has the list of events like concerts, standup comedies etc. that are happening around the city.  The events that are currently happening, the events that are going to happen and the featured events are being displayed in this page. 

 

Figure 12: Individual event page

Once the user clicks any event, he/she will be navigated to this page. This page has the details like event description, date and venue. 

 

Figure 13: Event booking page

This page displays all the details about the event and lets the user book the ticket through PayPal.
 
ADMIN

 
Figure 14: Admin Home Page


This page is the home page for admin which displays the time and menu bar through which the admin will be able to access various functionalities. 
 
Figure 15: Admin Add Movies/ Events/ Sports Page

This page allows the admin to add Movies, Events and Sports. The data added here will be stored in the respective database tables which can be fetched in the front end and displayed to the user.

 
Figure 16: Admin Add Theatre Page

This page lets the admin user to add theatres to database if in case any theatre in the city needs to be added.

 

 
Figure 17: Admin Monitor Feedback and Users Page

This page allows the admin user to delete any user profile in case of any spam profiles. Once the admin deletes a user profile all the related data gets deleted from the database and the user will not be able to login henceforth. 
4.	APPLICATION WORKFLOW
4.1	Interaction Design
The front-end of our application makes use of Hypertext Markup Language (HTML) and JavaScript as scripting languages. Bootstrap has been used as a front-end framework. The logo of our application has been designed using Spark Adobe. Many other similar websites and templates have been referred to while designing this webpage. These include Bookmyshow.com [4], The Coast, Several templates from Minimal, Bootstrap W3School [5], Colorlib [6], IMDB [7], Cineplex, etc. Some of the images have been downloaded from Pixabay [8] and others from Flickr [9] and Google [10], which has been properly referenced. Many JavaScript plugins has been added to the functionality of the application. The particular fonts used match with the overall layout of the webpage and thus is a suitable selection. 
4.1.1	Technologies
CSS:
Bootstrap v3.3.7 – It is customizable and has predefined design templates and classes for easy and efficient use. It makes the website responsive and a lot of responsiveness in the website has been affiliated to bootstrap.
Font Awesome 4.7.0 – It is a collection of web related actions and scalable iconic graphics which are used for this project. It is also free for commercial use.
Owl Carousel v2.2.1 – It is a jQuery plugin for responsive carousel sliders. It has been used for the picture sliders in my project.
JS:
jquery.countTo – It is used for the counter to count to a specific number at a specific speed. Here it is used for counting the number of events, venues, provinces, etc.
jquery.stellar.min – This plugin has been used for background image parallax movement while scrolling down. This allows for aesthetically beautiful appearance while scrolling.
jquery.waypoints.min – This plugin allows for interactivity in display headers when scrolled down to rise from below. It also allows the navbar to remain in position and in view elements.
jquery.seat-charts – It is a powerful jQuery plugin to render a fully configurable seating chart on a webpage. It passes an array of strings for each succeeding row to create a seat map-like interface.
jquery.nicescroll – This plugin is used for a mobile style scroll bars and may be visible when using the web-application on mobile or tabular devices. 

4.1.2	Design Process
This section will elaborate the design process of the application. It is inspired by many of the leading online-ticketing services for events, such as Bookmyshow.com and The Coast. The design process consists of several iterations with each iteration focusing on different functionalities in the development of this application. We have focused on implementing our initial wireframes as part of our high-fidelity prototype. Our application consists of a well-defined architecture with core functions and flows. Evaluation and testing have been conducted after every iteration.
4.1.3	System Architecture
Having sorted out the system requirements and the design process, we ideated the wireframes of our pages. We went through the functions and requirements as stated in the project proposal and designed a low-fidelity prototype of our application. This has been illustrated in Figures 18-19 below.
     
Figure 18. Wireframe Pages for Home Page and Login Page

    
    
    
    
Figure 19. Wireframe Pages for Low-fidelity Prototype Version 1

We had several meetings and after several iterations and feedback from subordinates, we added and removed a lot of pages as part of our high-fidelity prototype. The Administrator, as stated in the Process and Service Workflow, can add and update movie, event and sports information. He can also add theatre details and sort approval for users.
4.1.4	User Task Flow Diagram
User task flow diagram (Figure 20) gives an overview of the complete website along with different tasks and their accessibilities. For this application the roles are Customer, Admin and Banker. Actions include Registration, Login, Search, booking tickets, Selecting seats, Payment procedure, Deactivation of accounts, Publishing accounts and Logout.
a)	Customer: Customer are able to Sign up for the application, log in, search for movies, sports and events, book tickets, select seats, complete the payment, see booking details, print booking and logout.

b)	Admin: Admin can login, deactivate accounts and publish or update content (events information) in the website.

c)	Banker: Banker is a third-party role with no functionalities. PayPal has been integrated to enact the role of a Banker. Payments can me made real-time through our application, so we are not going forward with actual payments.


 
Figure 20. Task Flow Diagram of PLEXTRA

4.2	Process and Service Workflow
The backend of PLEXTRA is written in PHP programming language and MySQL database. The processes are divided into subcategories with the respective workflow diagrams.
4.2.1	User Registration
The user registration process is shown in Figure 21. Once the user fills the form fields, the backend files runs the validations on user input to check the specified conditions. The validations are:
•	Fields should not be empty.
•	The password and confirm password should match.
•	Password should more than 8 characters long.
•	First name and last name should be alphabets only.
•	Email address should be in valid format.
•	Password hashing is performed on the entered password.

The registration process also checks if the user already exists in the database. Upon successful registration, user is redirected to the Login page.

 
Figure 21. User Registration Process

4.2.2	User Login
The registered user can login into the application with the username and password. The entered credentials are validated with the database and the user is redirected to the home screen of the application after successful login attempt. A user session starts once the user logs into the application. If the user credentials are invalid, a message is displayed on the login page to retry with the correct credentials.
The admin can also login through the same page by using the admin username and password. Admin will be redirected to the admin home page (Figure 22).

 
Figure 22. User Login Process


In this section, provide a description of how your back-end is meant to work. How are processes triggered and handled? Provide graphs or figures that illustrate how the backend of your application processes and services work (e.g., workflow diagrams).

4.2.3	Admin Login
The admin is required to login from the application’s primary login page. Admin login credentials are validated with the database and the admin is redirected to the admin home page upon successful login attempt. 
If the credentials are incorrect, a message is displayed on the login screen to verify the credentials and retry. The admin has access to manipulate the stored data and delete spam user profiles (Figure 23).

 
Figure 23. Admin Login Process


4.2.4	User Features
The features available to the logged in user are (Figure 24):
•	Application home page to view a summary of the movies, events and sports.
•	A movies page to book the movie tickets.
•	An events page to book the event tickets.
•	A sports page to book the sports tickets.
•	Log out of the session.

 
Figure 24. User Features Process


4.2.5	Movie Booking Process
The user can book the listed movies. A bonus functionality is added to the application in the form of Open movie database API. Users can use this API to fetch information about any movie.  The movie listings on the main movies page are hardcoded (Figure 25). 
Once the user clicks on the movies near me button, a list of movies with the posters is displayed to the user. This list is fetched from the database. The user can click on the movie to start the booking process.
• User is asked for the date of the movie booking which is implemented using date picker component of bootstrap.
• A list of movie shows is displayed to the user and upon selecting a show, the user is redirected to the seat selection page.
• The seat selection page is implemented with the help of JavaScript and A PayPal payment gateway API is embedded with the seat selection page to complete the checkout.
 
Figure 25. Movie Booking Process

4.2.6	Events Booking Process
The user can book the listed events as shown in Figure 26.
Once the user clicks on the events view button, a list of events is displayed to the user. This list is fetched from the database. The user can click on the event to start the booking process.
• User is asked for the date of the event booking which is implemented using date picker component of bootstrap.
• Upon selection of the date, the user is redirected to check the tickets and PayPal payment gateway to complete the booking process.

 
Figure 26. Event Booking Process
4.2.7	Sports Booking Process
The user can book the listed sports (Figure 27). 
Once the user clicks on the sports view button, a list of sports is displayed to the user. This list is fetched from the database. The user can click on the sports to start the booking process.
• User is asked for the date of the sports booking which is implemented using date picker component of bootstrap.
• Upon selection of the date, the user is redirected to check the tickets and PayPal payment gateway to complete the booking process.

 
Figure 27. Sports Booking Process

4.2.8	Admin Functions
The admin has access to modify the database to update the content related to movies, events and sports. The admin can also delete user profiles and retrieve feedback from the users.
• Update movies, events and sports uses prepared statements to insert the data in the MySQL database.
• Delete profile option is available to the admin for removing spam profiles. Admin is required to input the username and email to be deleted.
• Admin retrieves feedback data from the database and can view it for information purposes (Figure 28).

 
Figure 28. Admin Functions

4.2.9	Feedback and Contact Us Functions
The feedback and contact us features are available to the users to gain knowledge about the user experience. A support ticket form is also made available to the user in case of any booking issues.
 
Figure 29. Feedback and Contact Us Functions
4.2.10	Database Tables
 
Figure 29. Database Tables

5.	URL for the Project
https://web.cs.dal.ca/~kunal/csci5709/FinalProject_Group1/
Admin credentials (for testing)
Username : test@admin.com
Password : 12345678

User credentials (for testing)
Username : vidhyashree1992@gmail.com
Password : test@123
6.	Bonus Functionalities
Many other bonus functionalities have been used which have not been proposed as a part of our initial Project Proposal. These are as follows:
Online chat: PLEXTRA has an online chat feature which helps users contact the admin faster. Online chat allows the users to enquire the admin regarding booking, movies/events/sports, reviews etc... This makes it easy and fast for the user to contact the admin for help.
Confirmation Email: An email will be sent to the user’s email address once the user is registered. This confirms the registration and verification for the user. 
Movie Rating: Movie ratings are given to movies, events or sports by the users. The user gives the rating depending on how much he liked the movie or based on his/her preferences. The ratings help other users understand the watchability of the movie.  
Movie Review: Movie review is given to movies, events or sports by the users. It is similar to the user ratings. It is in the textual format as compared to the ratings where the users just rates the star patterns.
Feedback: Feedback functionality is for the users to give feedback on the website for the admin. The feedback cannot be seen by other users. Only admin has access to the feedback given by the users. This will be helpful for the improvement of the website, audit and other services.
Search Bar: The search bar is used to search any movie, event or sport for the information. This gives the general information about the movie, such as genre, cast and crew, release year, runtime, IMDB rating, language and description.
7.	CONCLUSION
Our application proposes a nascent web-based online ticketing and seat selection system for local events. The event scenario in Nova Scotia is changing along with the change in environment and time. Population explosion plays a major role in the development of the seat selection strategy as more and more people look forward to a private seating arrangement when they visit theatres. Also, with the increasing number of events and sports, more locations are playing host to a lot of these events. Plextra allows a user to access all of these major events under a single platform. This application has also been designed using modern JavaScript and bootstrap frameworks to cope up with responsive web design and modern system architecture. Our web-based application can further be implemented as a mobile application with more features and information. Our future scope includes features like online purchase of eatables, group/corporate booking and an mobile version for both android and iOS platforms.
8.	REFERENCES (Heading 1)
[1]	Image for logo created using Spark Adobe (2018). Retrieved from https://spark.adobe.com/sp/
[2]	The Coast (2018). Retrieved from https://www.thecoast.ca/
[3]	Cineplex (2018). Retrieved from https://www.cineplex.com/
[4]	"Bootstrap 4 Tutorial", W3schools.com, 2018. [Online]. Available: https://www.w3schools.com/bootstrap4/. [Accessed: 11- Aug- 2018].
[5]	"BookMyShow", BookMyShow, 2018. [Online]. Available: https://in.bookmyshow.com/. [Accessed: 11- Aug- 2018].
[6]	Colorlib.com (2018). Retrieved from https://colorlib.com/wp/themes/
[7]	N. Sheehan, J. Geiger, N. Sheehan, B. Gysin, K. Anger, M. Boon and B. Gysin, "Flicker (2008)", IMDb, 2018. [Online]. Available: https://www.imdb.com/title/tt1236194/. [Accessed: 11- Aug- 2018].
[8]	"Stunning Free Images · Pixabay", Pixabay.com, 2018. [Online]. Available: https://pixabay.com/. [Accessed: 11- Aug- 2018].
[9]	"Flickr", Flickr, 2018. [Online]. Available: https://www.flickr.com/. [Accessed: 11- Aug- 2018].


[1] Spark Adobe (2018). Retrieved from https://spark.adobe.com/sp/
[2] Cineplex (2018). Retrieved from https://www.cineplex.com/
[3] The Coast (2018). Retrieved from https://www.thecoast.ca/
[4] BookMyShow (2018). Retrieved from https://in.bookmyshow.com/
[5] Images from Pixabay. With no attribution required, from https://pixabay.com/]
[6] http://www.qubyphotography.com/nightclubs/m5zz3l0avy0ni1ip1qyzcppeqhsz3b
[7] https://journal.potatonet.info/falcon/
[8] http://www.ghiasports.com/xxsj.aspx?dleixing=djiyariji&id=1651
[9] https://stackoverflow.com/questions/13799888/put-a-star-notation-in-html
[10] https://stackoverflow.com/questions/4861224/how-to-use-css-to-surround-a-number-with-a-circle
[11] Colorlib.com (2018). Retrieved from https://colorlib.com/wp/themes/
[12] Bootstrap. http://getbootstrap.com/docs/3.3/
[13] Font Awesome. https://fontawesome.com/
[14] Owl Carousel. https://owlcarousel2.github.io/OwlCarousel2/
[15] Stellar.js. http://markdalgleish.com/projects/stellar.js/
[16] Waypoints. https://github.com/imakewebthings/waypoints
[17] Count To. https://github.com/mhuggins/jquery-countTo
[18] W3layouts. https://w3layouts.com/
[19] W3School. https://www.w3schools.com/bootstrap4/
[20] Stack Overflow. https://stackoverflow.com/
[21] jQuery-Seat-Charts v1.1.1 by mateuszmarkowski Open Source MIT Licence https://github.com/mateuszmarkowski/jQuery-Seat-Charts
[22] Waypoints - 4.0.1.Copyright Â© 2011-2016 Caleb Troughton.
https://github.com/imakewebthings/waypoints/blob/master/licenses.txt
[23] jQuery v1.11.0 (c) 2005, 2014 jQuery Foundation, Inc. | jquery.org/license */
[24] W3 School Validation. https://validator.w3.org/
[25] My previous Assignment. Assignment 2 (It repeats most technologies and content from the previous assignment).
[26] W3 Layouts License. http://creativecommons.org/licenses/by/3.0/
[27] W3 School Validation. https://validator.w3.org/
[28] W3 Layouts License. http://creativecommons.org/licenses/by/3.0/
[29] "tawk.to - "The 100% FREE live chat application for your website!"", tawk.to, 2018. [Online]. Available: https://www.tawk.to/.
[30] PHP Mailer - https://github.com/PHPMailer
[31] "Nicescroll jQuery Plugin – jQuery plugin for custom scrollbars on desktop and mobile browsers", Nicescroll.areaaperta.com, 2018. [Online]. Available: https://nicescroll.areaaperta.com/. [Accessed: 11- Aug- 2018].
[32] "mhuggins/jquery-countTo", GitHub, 2018. [Online]. Available: https://github.com/mhuggins/jquery-countTo. [Accessed: 11- Aug- 2018].

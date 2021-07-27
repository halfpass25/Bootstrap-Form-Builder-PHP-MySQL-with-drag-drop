
# Bootstrap's Form Builder (PHP and  MySQL database)
### TABLE OF CONTENT ###
1. [ABSTRACT](#abstract)
2. [What does it take to be done](#what-does-it-take-to-be-done)

## ABSTRACT ##
Building (coding) by hand HTML forms, regardless if HTML/CSS or Bootstrap “#” based, is an everyday need but it can be a tedious, cumbersome and some time dangerous activity (you can easily forget validation on a field or you can be wrong at stating validation rules, for instance).
This holds expecially true when developing __MVP (Minimum Viable Product) web application__.


I'm trying to write a Bootstrap-form's Builder to ease and speed-up coding, particularly when producing prototypes
applications.

I still don't know if this project is going to be a PHP Class to be used as a "helper class" into your projects or it will be 
a stand-alone application.


| ![space-1.jpg](https://user-images.githubusercontent.com/48808238/127162350-eecdc2e2-e0d0-4a18-9d79-5046726500d8.png) | 
|:--:| 
| *Anatomy of an INPUT FIELD* |

My idea, opposite to form's building via tipycal:   __$this.form->addField(input [type], [attribute = {param}]...)__ is to let the designer using a visual
interface (Drag & Drop) to quickly mock-up the desired form's appearance.
After this, the application will take care of producing the HTML output, ready to be copied/pasted wherever it is needed.

Also, I would like to implement a database where you can __store basic forms templates like for generic LOGIN, SIGNUP, SUBSCRIBE TO NEWSLETTER,
SEND COMMENT/INQUIRY for later use in different application, without rewriting them each time__.
In a principle, it should be possible to recall a given form setup from the database, edit it based on new requirements and finally ask the system
to output the HTML code.
I can here you "the edit can be done manually into HTML" and you are right but having the form stored into a db, will probably reduce typos and allows
for a much easier re-use, since you have all of your forms into a central repository (the db).

Currently (2021-07-27) I'm collecting data and refining requirements, please feel free to comment about the whole idea ;)



# What does it take to be done


Breaking down the main idea, we can see that we need to set-up the following components:

__1)__ a front-end to let the designer input the fields he needs and to define (sometime from combo-boxes and/or checkboxes, sometime by freely entering data) each field for both the TYPE of field and a number of basic but important other properties (name, label, size, hidden, others)

__2)__ a means of storing permantly the created forms.
We can use a MySQL database where, for each new created form, an entire predifined table is created and populated with the specific parameters.
An alternative solution could be having the database just pointing to a folder on hard disk, where output HTML form’s files are stored individually (something like pointing through db to images by link, rather than storing BLOBs).
Although the second alternative seems attractive, in terms of simplicity, it doesn’t allow for future editing (this of course is still possible, but only editing directly the HTML file), while storing the created form as a table, would allow the designer to reload the table defining it, saving it with another table’s name and the editing it adding/removing/modifiying fields in a visual interactive way.

__3)__ of course, a PHP class must be created, including all the needed code to dinamically output as HTML the form created by the directives stored into the referring database table.

__4)__ some basic Bootstrap boilerplates could be stored somewhere and recalled as needed

__5)__ as for future expansion/improvent, keeping the parameters as standard as possible, should not impact whether one is using Bootstrap 3 or 5 as well as for versions to come of the Bootstrap framework.



### 1- The Front-End ###
 Since the amount of  required fields and type of form can vary each time, it is advisable to have the front-end being as simple as possible and less cluttered as possible.
To achieve this goal, probably the best solution consists in using a “clonable row” (will require Jquery).
This will allow the designer to have the scrren populated only with the fields he creates/customize without a plethora of additional rows in the middle.
Not only, but it will be possible both to add and/or remove each single row without impacting the automation of the form’s building.
Each added row will be comprised of a number of field, to specify values for a given form-element’s attribute.
A further improvement is a visual Drag & Drop interface that will allow for visual positioning of the input fields symbolic icons into a mock-up of the form.

### 2- The database ###
 The structure for the recurring table, can be defined only once Step 1 has been carried out and all form-elements attribute have been listed.
(What if we are having two elements of the same type but with different attribute’s values?...)



### 3- The PHP Code/Class ###

### 4- Basic Bootstrap boilerplates ###
A basic HTML page has to be rendered at the end of the process.
Further styling will be added manually.
The basic boilerplate therefore should probably include only HTML 5 tags, the opening and closing of the FORM tag and the type of form (Horiz, Vert, Inline).
Other tags for other form-elements will be added dinamically into the boilerplateby means of the class methods.


Bootstrap includes support for all standard HTML form controls as well as __new HTML5 input types such as datetime, number, email, url, search, range, color, url, and so on.__



__<input type="button">
<input type="checkbox">
<input type="color">
<input type="date">
<input type="datetime-local">
<input type="email">
<input type="file">
<input type="hidden">
<input type="image">
<input type="month">
<input type="number">
<input type="password">
<input type="radio">
<input type="range">
<input type="reset">
<input type="search">
<input type="submit">
<input type="tel">
<input type="text"> (default value)
<input type="time">
<input type="url">
<input type="week">__





# Bootstrap's Form Builder (PHP and  MySQL database)

Building (coding) by hand HTML forms, regardless if HTML/CSS or Bootstrap “n” based, is an everyday need but it can be a tedious, cumbersome and some time dangerous activity (you can easily forget validation on a field or you can be wrong at stating validation rules, for instance).
This holds expecially true when developing MVP (Minimum Viable Product) web application.


I'm trying to write a Bootstrap-form's Builder to ease and speed-up coding, particularly when producing prototypes
applications.

I still don't know if this project is going to be a PHP Class to be used as a "helper class" into your projects or it will be 
a stand-alone application.


![Anatomy_input_field_legend_1](https://user-images.githubusercontent.com/48808238/127162350-eecdc2e2-e0d0-4a18-9d79-5046726500d8.png)

My idea, opposite to form's building via tipycal:   $this.form->addField(input [type], [attribute={param}]...) is to let the designer using a visual
interface (Drag & Drop) to quickly mock-up the desired form's appearance.
After this, the application will take care of producing the HTML output, ready to be copied/pasted wherever it is needed.

Also, I would like to implement a database where you can store basic forms templates like for generic LOGIN, SIGNUP, SUBSCRIBE TO NEWSLETTER,
SEND COMMENT/INQUIRY for later use in different application, without rewriting them each time.
In a principle, it should be possible to recall a given form setup from the database, edit it based on new requirements and finally ask the system
to output the HTML code.
I can here you "the edit can be done manually into HTML" and you are right but having the form stored into a db, will probably reduce typos and allows
for a much easier re-use, since you have all of your forms into a central repository (the db).

Currently (2021-07-27) I'm collecting data and refining requirements, please feel free to comment about the whole idea ;)

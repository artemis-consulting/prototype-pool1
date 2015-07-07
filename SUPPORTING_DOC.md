Supporting Document for Artemis Consulting's Pool 1
===================================================

Section-pool1-UCD
-----------------

In most of our current client projects, we use an integrated ‘User-Centered Design’ process  where we strongly encourage end-users to shape how the final system gets developed. For the FDA project, we decided on the following UCD techniques (mainly due to time constraints): user personas, user journeys, usability testing, interviews, expert reviews, and prototypes.

The discovery phase artifacts are [linked here.](https://github.com/artemis-consulting/prototype-pool1/tree/master/user-centered-design/1-discovery)

Based on the analyzed interview results, the team ended up with the following personas:
* Novice – public users, concerned parents, students, people in the drug and food industry 
* Professional – doctors, pharmacists, mainly medical professionals
* Specialist – Attorney, policy makers, and maybe bloggers 
* Experts – FDA employees, state regulators, federal watchdogs

Click on the links to see the [initial user personas](https://github.com/artemis-consulting/prototype-pool1/blob/master/user-centered-design/2-user-personas-and-journeys/18f-personas-draft-6-23-2015.pdf), [final user personas](https://github.com/artemis-consulting/prototype-pool1/blob/master/user-centered-design/2-user-personas-and-journeys/18f-personas-final-6-23-2015.pdf), [initial user journeys](https://github.com/artemis-consulting/prototype-pool1/blob/master/user-centered-design/2-user-personas-and-journeys/18f-user-journeys-draft-6-23-2015.pdf) and [final user journeys](https://github.com/artemis-consulting/prototype-pool1/blob/master/user-centered-design/2-user-personas-and-journeys/18f-user-journeys-final-6-23-2015.pdf).

The team strongly felt that applying the UCD techniques in the sections previously mentioned satisfy Play [1] and [2].

When teams have accurate user data at their disposal, the task of designing simple, intuitive, easy-to-use but powerful, interface becomes much more straight-forward. The key design point was to make the service user friendly instead of frustrating or confusing. Due to time constraints, the team decided against creating a (more traditional) style guide from scratch but opted to use the Bootswatch Paper theme as the design style guide and pattern library for the website. By using this flexible style guide for design and incorporating accessibility best practices, the team is confident that they have satisfied Play [3], ensuring all prospective users can navigate the service intuitively and can obtain the information they want from the service, in a easy and consistent way. 

Section-pool1-UX-testing
------------------------

Here is an overview of the results from Agile UX testing conducted on 06/12/15.
* The subheads/instructions to be too large (The h3 should not dominate the page and should be a smaller than the “branding” text in the nav bar. They should appear as informational/instructions).
* The gray paragraph text on a gray background can be hard to read (basic design and 508 issue, perhaps lighten the background color).
* The navigation is little redundant and a bit confusing (the buttons below the search box are repeats of the main nav. They should be combined in a dropdown in the search box. Apply the materials theme to the basic sample below).
* It’s not initially clear what or why I am searching “drugs” (Replace initial text with something like the following:
> Search for current drug related information
> Begin your request for FDA drug related information by entering a search term and choosing a category from the dropdown menu).
* I would like more information about the purpose and use of the web app (Add some text to the home page, something like the following:
>  Welcome to the FDA Drug Monitor
> We know you take your health seriously. Having the latest Drug related information and tools at your fingertips is a critical part of you overall health and well-being. The information provided by the FDA Drug Monitor is the latest and most relevant in our database. Use it along with your physicians’ advice to make informed decisions about the drugs you take.
> Please note that the information provided here is for reference only and is not intended as medical advice or diagnosis. Always consult with your physician before making drug related decisions.).
* I would like to know more about this app (Add a basic footer to all pages that perhaps include: About | Last Updated).

### Drug Names Page
* I find the subheads/instructions to be too large (The <h3> should not dominate the page and should be a smaller than the “branding” text in the nav bar. They should appear as informational/instructions).
* It’s not initially clear what or why I am presented with this list (Replace initial text with something like the following:
> Select a drug from the list to view current drug related information).
* I find the list of drugs too long and in no apparent order (Put the drugs in alphabetical order and in a list group with the badge option for the number of drugs. Apply the materials theme to the basic sample below).
* I don’t know how to get back to the search from either a list or detail page (perhaps ad a “back to search” arrow/button).

### Adverse Events Page
* I find the subheads/instructions to be too large (The <h3> should not dominate the page and should be a smaller than the “branding” text in the nav bar. They should appear as informational/instructions).
* It ‘s not initially clear what or why I am presented with this list (Replace initial text with something like the following:
> Select an event from the list to view current event related information).
* I find the list of events to be long and in no apparent order (Put the drugs in alphabetical order and in a list group with the badge option for the number of drugs. Apply the materials theme to the basic sample below).
* I don’t know how to get back to the search from either a list or detail page (perhaps ad a “back to search” arrow/button).

### Enforcement Reports Page
* The subheads/instructions to be too large (The <h3> should not dominate the page and should be a smaller than the “branding” text in the nav bar. They should appear as informational/instructions).
* It’s not initially clear what or why I am presented with this list (Replace initial text with something like the following:
> Select a state on the map to view current enforcement reports .
* I find the list of states below the map to be long and in no apparent order (Put the drugs in alphabetical order and in a list group with the badge option for the number of drugs. Apply the materials theme to the basic sample below).
* I don’t know how to get back to the search from either a list or detail page (perhaps ad a “back to search” arrow/button).

### About Page
* I would like more information about the purpose, use, and creation of this web app (Add an About page with some text, something like the following:
> Welcome to the FDA Drug Monitor
> We know you take your health seriously. Having the latest Drug related information and tools at your fingertips is a critical part of you overall health and well-being. The information provided by the FDA Drug Monitor is the latest and most relevant in our database. Use it along with your physicians advice to make informed decisions about the drugs you take.
> Please note that the information provided here is for reference only and is not intended as medical advice or diagnosis. Always consult with your physician before making drug related decisions.).
> For more information regarding your health visit www.fda.gov/
> This application was designed and build by Artemis Consulting, Inc. For more information visit www.artemisconsultinginc.com


Section-pool1-Agile
-------------------

Artemis Consulting uses agile scrum techniques for all their internal development efforts and for most of our client projects. For our agile projects, sprints are usually 1-2 week in duration but never exceed 3 weeks. In general, the shorter the sprints, the faster feedback we receive from our users and clients. This timely feedback enables the team quickly make the necessary adjustments, avoiding potential long-term and costly rework. For the FDA prototype, we decided on 2 day sprints but chose to add a 4 day sprint to accommodate the unusual nature of this project and weekend work.

* We used the open source Taiga tool for agile project management and defect tracking. Taiga tends to be more ‘lightweight’ for project with relative quick turnarounds and firm deadlines. Additional information on Taiga can be found [here](https://github.com/artemis-consulting/prototype-pool1/tree/master/agile-process/agile-tool-taiga)
* All our agile artifacts related to Play 4, can be found here -> [Sprints](https://github.com/artemis-consulting/prototype-pool1/tree/master/agile-process). 
* Our team did fairly extensive user testing with doctors and lawyers. Here are the links to the [User Interview Questions](https://github.com/artemis-consulting/prototype-pool1/blob/master/user-centered-design/4-user-interviews/User%20Interview%20Questions.pdf), the [user testing feedback and our team's remediation comments from a practising pharmaceutical industry lawyer](https://github.com/artemis-consulting/prototype-pool1/blob/master/user-centered-design/4-user-interviews/User%20Interview%20Questions-Response1-Pharmaceutical-Company-Lawyer.pdf)  and the [user testing feedback and our team's remediation comments from a practising doctor](https://github.com/artemis-consulting/prototype-pool1/blob/master/user-centered-design/4-user-interviews/User%20Interview%20Questions-Response2-and-Remediation-Doctor-MD.pdf).

Running Locally
--------------
### Clone this repository

> $ git clone https://github.com/artemis-consulting/prototype-pool1
> View the files using a browser

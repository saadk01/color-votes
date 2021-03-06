This app is developed with the aim to separate data/domain, controller/manager and view layers. The data access classes are separate from the manager and can only be accessed through manager classes.

The view is communicating with manager classes through a rudimentary RESTful API that is implementing only GET at the moment (because the task's requirements only needed that). Three entities (cities. votes, colors) have their own URLs where their respective methods (POST, PUT, DELETE etc) can be implemented. The REST API accesses manager classes to access data (or manipulate it - not implemented but doable if required). 

The database schema is provided. Three tables are created instead of two to normalize data and accommodate future development if it comes to that.

=== REQUIREMENTS ===
Create a web page in PHP that uses two MySQL tables above “Colors” and “Votes” (FN1, FN2). The left column should be populated from reading all the entries in the Colors table. The colors should be links, so that when you click on it, an Ajax call populates the Votes (obtained from MySQL) in the right column next to the color. When Clicking on “Total”, use JavaScript only (no server involvement) to add up and present the totals shown.

*FN1: `colors` table has a single column containing color names. `votes` table has three columns: city, color, values.*
*FN2: The DB design scoped out in the requirements isn't followed as noted in the comments above.*

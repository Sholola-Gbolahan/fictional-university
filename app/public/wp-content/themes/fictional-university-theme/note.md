#1. CREATING A NEW THEME
a. Add the two files index.php and style.css to folder
b. for the style to work, add the first comment section
c. The only format for adding image to thme is screenshot.php
d. the photo should be 1200 px wide and 900px hight

// :

Note: Nameing conventions are very important. functions not function

# COMMON FUNCTIONS TO Note

- echo : used to print or display a value
- bloginfo ( ) : this is a func already created by wordpress which gives all information about our website
- action ( ) : Used to tell wordpress what to do
- get_theme_file_uri ( ) : Used to link to a file
- get_theme_fi
- the_title ( ): used to get title of the current post or page.
- get_the_title(x) : by allowing the arg of an ID number and it give the title for that post instead of the current post we've looped through
- get_permalink(x) : A func used to get the permalink for a particular page by passing the page ID
- the_content ( ) : used to get page content.
- get_the_ID () : used to get the ID number of any page
- echo wp_get_post_parent_id( get_the_ID( )) : It's a function that give the ID number of parent page to a child page
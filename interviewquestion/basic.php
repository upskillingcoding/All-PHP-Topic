<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>200 question in PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="div-main">
        <h2>Q1. What is PHP ?</h2>
        <li>PHP is a server-side scripting language used for web development and can be embedded into HTML.</li>
    </div>

    <div class="div-main">
        <h2>Q2. How do you define a variable in PHP?</h2>
        <li>Variables in PHP are defined using a dollar sign ($) followed by the variable name. Example: $var = 10;.</li>
    </div>

    <div class="div-main">
        <h2>Q3. What are the superglobals in PHP ?</h2>
        <li>Superglobals are built-in arrays in PHP such as $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIES, etc that are accessible from any part of the script</li>
    </div>

    <div class="div-main">
        <h2>Q4. What is the difference between $_GET and $_POST ?</h2>
        <li> $_GET is used to collect from data after submitting an HTML from using the GET method, and the data is visible in URL</li>
        <li>$_POST is used for the POST method, where the data is sent in the HTTP request body, not visible in URLs.</li>
    </div>

    <div class="div-main">
        <h2>Q5. How do you include a file in PHP ?</h2>
        <li>You can include a file using include('filename.php') or require('filename.php')</li>
    </div>

    <div class="div-main">
        <h2>Q6. What is the difference between include and require in PHP </h2>
        <li>Include :- include will generate a warming if the file is not found but contine excute the script.</li>
        <li>Required :- require will generate a fatel error and stop the execution if file is not found.</li>
    </div>

    <div class="div-main">
        <h2>Q7. What is a session in PHP ?</h2>
        <li>A session is a way to store data across multiple pages, maintained on the server</li>
    </div>

    <div class="div-main">
        <h2>Q8. How do you start a session in PHP ?</h2>
        <li>A session is started using session_start()</li>
    </div>

    <div class="div-main">
        <h2>Q9. How do you session destroy in PHP ?</h2>
        <li>A session destroy using session_destroy()</li>
    </div>

    <div class="div-main">
        <h2>Q10. What is a cookies in PHP ?</h2>
        <li>A cookies is a small file that is stored on the client's browser, which stores information such as preferences and session details</li>
    </div>

    <div class="div-main">
        <h2>Q11. How do you set a cookies in PHP ?</h2>
        <li>You set a cookies using the setcookies() function, like this:- setcookies("user", "John", time() + 3600)</li>
        <li>syntax of cookies is :-setcookies(name, value, expire, path, domain, httponly)</li>
    </div>

    <div class="div-main">
        <h2>Q12. How to you retrieve a cookies in PHP ?</h2>
        <li>You can retrieve the cookies using $_COOKIES. EXAMPLE:- $_COOKIES['user']</li>
    </div>

    <div class="div-main">
        <h2>13. What is the $_SERVER superglobal variable in PHP ?</h2>
        <li>$_SERVER is a superglobal array that contains information about header, paths and script location.</li>
    </div>

    <div class="div-main">
        <h2>14. What is the $_REQUEST superglobal in PHP ?</h2>
        <li>$_REQUEST is a PHP superglobals that collects the data after submitting an HTML Form, regardless of whether the form is sent via the GET or POST method.</li>
    </div>

    <div class="div-main">
        <h2>15. How to get the value of a form field in PHP ?</h2>
        <li>You can get the value of a form field using $_GET['fieldName'] or $_POST['fieldName'], depending on the method used to submit the form</li>
    </div>

    <div class="div-main">
        <h2>16. How do you check if a variable is set in PHP ?</h2>
        <li>Use the isset() function. Example:- isset($var);</li>
    </div>

    <div class="div-main">
        <h2>17. What is the difference b/w isset() and empty() in PHP ?</h2>
        <li>isset() function checks if a variable is set and is not null</li>
        <li>empty() function checks if a variable is empty. EXAMPLE:- ("", 0, null)</li>
    </div>

    <div class="div-main">
        <h2>18. What is the unset() function in PHP ?</h2>
        <li>unset() function is used to destroy the variable in PHP.</li>
    </div>

    <div class="div-main">
        <h2>19. What are the arrays in PHP ?</h2>
        <li>Arrays are the variable that are stored multiple values. They can be indexed or associated array.</li>
    </div>

    <div class="div-main">
        <h2>20. What is an indexed array in PHP ?</h2>
        <li>An indexed array is an array where each element is assigned a numeric index, starting form 0.</li>
    </div>

    <div class="div-main">
        <h2>21. What is an Associated Array in PHP ?</h2>
        <li>An Associated array is an array where each element is assigned a custom key (string), instead of a numeric index.</li>
    </div>

    <div class="div-main">
        <h2>22. What is a multidimensional array in PHP? </h2>
        <li> A multidimensional array is an array containing one or more arrays. Example: $arr = array(array(1,2), array(3,4));</li>
    </div>

    <div class="div-main">
        <h2>23. How do you access an element in an associative array?</h2>
        <li>You can access elements using the custom key, EXAMPLE:- $array['key']</li>
    </div>

    <div class="div-main">
        <h2>24. What is the count() function in PHP ?</h2>
        <li>The count() function returns the number of elements in an array.</li>
    </div>

    <div class="div-main">
        <h2>25. </h2>
        <li></li>
    </div>

    <div class="div-main">
        <h2>26. </h2>
        <li></li>
    </div>

    <div class="div-main">
        <h2>27. </h2>
        <li></li>
    </div>

    <div class="div-main">
        <h2>28. </h2>
        <li></li>
    </div>

    <div class="div-main">
        <h2>29. </h2>
        <li></li>
    </div>

    <div class="div-main">
        <h2>30. </h2>
        <li></li>
    </div>

    <div class="div-main">
        <h2>31. </h2>
        <li></li>
    </div>

    <div class="div-main">
        <h2>32. </h2>
        <li></li>
    </div>



    <div class="div-main">
        <h2>Q4. </h2>
        <li></li>
    </div>


</body>
</html>
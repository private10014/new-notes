
# HTML  Introduction:-
-   HTML stands for Hyper Text Markup Language
-   HTML is the standard markup language for creating Web pages
-   HTML describes the structure of a Web page
-   HTML consists of a series of elements
-   HTML elements tell the browser how to display the content
-   HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.
## A Simple HTML Document:
```
<!DOCTYPE html>
<html>
<head>
	<title>page title</title>
</head>
<body>
	<h1>my first heading</h1>
	<p>my first paragaraph</p>
</body>
</html>
```
## Nested HTML Elements:

HTML elements can be nested (this means that elements can contain other elements).

All HTML documents consist of nested HTML elements.

The following example contains four HTML elements (`<html>`,  `<body>`,  `<h1>`  and  `<p>`):

## HTML  Attributes:
-   All HTML elements can have  **attributes**
-   Attributes provide  **additional information**  about elements
-   Attributes are always specified in  **the start tag**
-   Attributes usually come in name/value pairs like:  **name="value"**
- There are two ways to specify the URL in the  `src`  attribute:

**1. Absolute URL**  - Links to an external image that is hosted on another website. Example:  src="https://www.w3schools.com/images/img_girl.jpg".

**Notes:**  External images might be under copyright. If you do not get permission to use it, you may be in violation of copyright laws. In addition, you cannot control external images; it can suddenly be removed or changed.

**2. Relative URL**  -  Links to an image that is hosted within the website. Here, the URL does not include the domain name. If the URL begins without a slash, it will be relative to the current page. Example: src="img_girl.jpg". If the URL begins with a slash, it will be relative to the domain. Example: src="/images/img_girl.jpg".
## HTML STYLES:

The HTML style attribute is used to add styles to an element, such as color, font, size, and more. 
The HTML `style` attribute has the following syntax:
<_tagname_ style="_property_:_value;_">
- 
## HTML COMMENTS:
HTML comments are not displayed in the browser, but they can help document your HTML source code.
<!-- Write your comments here -->
### Example:
<p>This is a paragraph.</p>  
  
<!-- <p>This is another paragraph </p> -->  
  
<p>This is a paragraph too.</p>
# HTML  Links:
Links are found in nearly all web pages. Links allow users to click their way from page to page

## HTML Links - Syntax:
the HTML anchor   tag defines a hyperlink. It has the following syntax:
<a href="_url_">_link text_</a>
### Example:
```
<!DOCTYPE html>
<html>
<body> 

<a href="https://google.com">
 visit google</a>

</body>
</html>
```
## HTML  Images:
Images can improve the design and the appearance of a web page.
Example of relative url:-
<img src="/images/html5.gif"  alt="HTML5 Icon"  style="width:128px;height:128px;">
Example of absolute url:-
<img src="https://www.w3schools.com/images/w3schools_green.jpg"  alt="W3Schools.com">
## image as a link
EXAMPLE:-
```
<!DOCTYPE html>
<html>
<body>
<p>image as a link</p>
<a href="https://www.shaadidukaan.com/vogue/wp-content/uploads/2019/08/hug-kiss-images.jpg">

<img src="https://www.shaadidukaan.com/vogue/wp-content/uploads/2019/08/hug-kiss-images.jpg" style="width:42px;height:42px;">>

</body>
</html>
```
## HTML  Tables:
HTML tables allow web developers to arrange data into rows and columns.
EXAMPLE:-
```
<!DOCTYPE html>
<html>
<body>
<h1> company table:</h1>
<table>
<tr>
	<th>admin</th>
	<th>editor</th>
	<th>viewer</th>
</tr>	
<tr>
	<td>danish</td>
	<td>basit</td>
	<td>kamran</td>
</tr>
<tr>
	<td>numan</td>
	<td>shahid</td>
	<td>sam</td>
</tr>
</table>

</body>
</html>
```
# HTML  Lists:
HTML lists allow web developers to group a set of related items in lists.
## Unordered HTML List:
An unordered list starts with the `<ul>` tag. Each list item starts with the `<li>` tag.
The list items will be marked with bullets (small black circles) by default:
### Example:
```
<!DOCTYPE html>
<html>
<body>
<h2> unordered list</h2>
<ul>
	<li>coffee</li>
	<li>tea</li>
	<li>leamon</li>
</ul>
</body>
</html>
```
## Ordered HTML List:
An ordered list starts with the  `<ol>`  tag. Each list item starts with the  `<li>`  tag.
The list items will be marked with numbers by default:
```
<!DOCTYPE html>
<html>
<body>
<h2> ordered list</h2>
<ol>
	<li>coffee</li>
	<li>tea</li>
	<li>leamon</li>
</ol>
</body>
</html>
```
## HTML  id Attribute:-
The HTML id attribute is used to specify a unique id for an HTML element.
You cannot have more than one element with the same id in an HTML document.
### Example
```
<!DOCTYPE html>  
<html>  
<head>  
<style>  
#myHeader  {  
background-color:  lightblue;  
color:  black;  
padding:  40px;  
text-align:  center;  
}  
</style>  
</head>  
<body>  
  
<h1 id="myHeader">My Header</h1>  
  
</body>  
</html>
```
## HTML  Iframes:-
An HTML iframe is used to display a web page within a web page.
## HTML Iframe Syntax:
```
<iframe src="_url_"  title="_description_"></iframe>
```
### Example:-
```
<!DOCTYPE html>
<html>
<body>

<h2>HTML Iframes</h2>
<p>You can use the height and width attributes to specify the size of the iframe:</p>

<iframe src="demo_iframe.htm" height="200" width="300" title="Iframe Example"></iframe>

</body>
</html>
```
## HTML  JavaScript:-
JavaScript makes HTML pages more dynamic and interactive.
### Example:
```
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>my first js</h1>
	<p id="demo"></p>
	<button type="button" onclick="document.getElementById('demo').innerHTML= Date()">
		click me to display the time
	</button>
</body>
</html>
```
### Example:
```
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>this is an example to change the js</p>
	<p id="demo"></p>
	<script>
		document.getElementById('demo').innerHTML = "hello world 123!"
	
	</script>
</html>
```
## HTML  Uniform Resource Locators:
-A URL is another word for a web address.
-A URL can be composed of words (e.g. w3schools.com), or an Internet Protocol (IP) address (e.g. 192.68.20.50).
-Most people enter the name when surfing, because names are easier to remember than numbers.
-Web browsers request pages from web servers by using a URL.
-A Uniform Resource Locator (URL) is used to address a document (or other data) on the web.
scheme://prefix.domain:port/path/filename
## URL Encoding:
URLs can only be sent over the Internet using the  [ASCII character-set]---  (https://www.w3schools.com/charsets/ref_html_ascii.asp). If a URL contains characters  outside the ASCII set, the URL has to be converted.

-URL encoding converts non-ASCII characters into a format that can be transmitted over the Internet.

-URL encoding replaces non-ASCII characters with a "%" followed by hexadecimal digits.

-URLs cannot contain spaces. URL encoding normally replaces a space with a plus (+) sign, or %20.


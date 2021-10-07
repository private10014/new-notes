
## CURL command:---
- Basically used to send any type of requests using cli...
 requests-- get, post,delete and put..
it supports various protocols like:-- http,https,ftps,ftp file......etc almost all protocols..
**example:--**
> curl www.google.com

  **Send  normal request ,without  use any specific method like get,post, etc**
- curl send default get request..
 - Now to save above response inside any file we use this command:.
 
 > curl -o "google" https://www.google.com 


 - to check content use.
  > cat google

 - How to send  requests using different methods:---
 > curl --request GET https://www.google.com
-  Send get request in above url..

 >  curl --request POST --data "username password" https://www.google.com
 
 - We can use any method like post, delete and put...
 
 **How we can send multiple requests and also store.**
 > curl -o "file1"  https://www.google.com  && curl -o "file2"  https://www.yahoo.com 
- Use & or &&.
 **Download particular file**
> curl -O  https://releases.ubuntu.com/groovy/ubuntu-20.10-desktop-amd64.iso
- captial O means save it with same name as remote server file.. 
**To continue from previous step**
curl -C - -O  https://releases.ubuntu.com/groovy/ubuntu-20.10-desktop-amd64.iso
 **check headers only without body in response**
 > curl -I https://www.google.com

 **On debugging we want to add headers:**
 
 > curl -A "Mozilla/5.0 (window NT 6.1; Win64; rv:62.0) Gecko/2011111 firefox/62.0" https://www.google.com/

**To support rediection we use -L:** 
- If we send request like this:--
 > curl google.com  
 - No response.. 
 - but if we use 
 > curl -L google.com  

 **We can set downloading  speed  limits:---**
 >  curl --limit-rate 2g or 2m or 2k -O  https://releases.ubuntu.com/groovy/ubuntu-20.10-desktop-amd64.iso
 here i asign specific speed for downloading... so average speed will be 20kb...

 **we can also intercept request :---**
>  curl -X 127.0.0.1:8080 https://www.google.com

 - For user authentication we use username and password:---
 > curl -U username:password-X 127.0.0.1:8080 https://www.google.com
 
 - If any website don't allow us to without cookies, so we first need to store cookie  after storing a cookie we can use it like this:---
 > curl -cookie "name=value" https://www.google.com
  
  - We can specify multiple URLs or parts of URLs  by    writing  part  sets
       within braces and quoting the URL.

         > "http://site.{one,two,three}.com"

If you specify URL without protocol:// prefix,  curl  will  attempt  to
 guess  what  protocol  you might want. It will then default to HTTP but
 try other protocols based on often-used host name prefixes.  For  example,  for  host names starting with "ftp." curl will assume you want to
       speak FTP.
       
       OPTIONS
       Options  start  with  one or two dashes. Many of the options require an
       additional value next to them.


the short "single-dash" form of the options, -d  for  example,  may  be
       used with or without a space between it and its value, although a space
       is a recommended separator. The long "double-dash" form, -d, --data for
       example, requires a space between it and its value.
       
      
      
      
 linux curl command is used to download or upload data to a server via supported protocols such as HTTP, FTP, IMAP, SFTP, TFTP, IMAP, POP3, SCP, etc. It is a remote utility, so it works without user interaction.

The data transfer from one place to another is one of the vital and most used tasks of a computer system. However, there are many GUI
tools available for data transfer. But, when working on the command-line, it becomes a bit complicated. The curl utility allows us to transfer data via the command line.

Syntax:
The basic syntax for using curl is as follows:

curl [options] [URL...]  
From the above syntax, 
       
URL:
The URL
syntax is a general protocol-dependent URL. We can specify multiple URLs as follows:

> curl http://site.{one,two,three}.com  


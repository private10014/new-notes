## Locate:--
- The locate command 
   command is used to search a file by name.  

-   locate command is a background process and searches the file in the database

- If you are unable to find a file with locate command, then it means that your database is out of date, and you can update your database with the "updatedb" command.

- ### Syntax:

>  locate [OPTION]... PATTERN...

#### How to install locate command:--
> sudo apt install mlocate

#### How to use the locate command:--

- Locate command is a useful utility for searching the files. It is pretty straight forward to use, just execute the command as follows:

>  locate  file name

#### Limiting Search Queries

- We can limit the search results by using the "-n" option.

- For example. To display the just 5 results from our queries, execute the command as follows:

> locate -n 5 "*.txt"

- The above command will display the first five text files.


#### display the sum of matching files:--
> locate -c Demo

- above command will display the sum of files having 'Demo' in their name.
l
####  Ignoring the case sensitivity:--
> locate -i "demo.txt"

- above command will display both the files having 'demo' and 'Demo' in their name.

#### Updating the mlocate Database

- Locate command depends upon the 'mlocate' database. So, if the locate command is not working , we need to update the database.
>  sudo updatedb


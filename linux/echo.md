## Echo command:--

the echo command can be used for displaying a line of string/text that is passed as the  **arguments.**  This command is a built-in.

**Syntax of the echo command**

>  echo [option] [string]

#### Echo Command Options:--

- **1:-- **\b:** This option is used for removing every space among the text/string

> echo -e "Flowers \bare \bBeautiful"

- **2:-- \n:**  This option is used for creating a new line and this new line will be created from where it's used.

**Example:**

> echo -e "World \nis \nBeautiful"

- **3:-- \t:**  This option is used for creating the horizontal tab spaces.

**Example:**

> echo -e "World \tis \tBeautiful"

- **4. \v:**  This option is used for creating the vertical tab spaces.

**Example:**

>  echo -e "World \vis \vBeautiful"

**5. \a:**  This option is used for alert return along with  **_'-e'_**  backspace interpretor to add sound alert.

**Example:**

>  echo -e "\aWorld is Beautiful"

- This command if run, it will generate a bell or alert sound.


**6. echo :**  This option is used for printing every folder or file. It is the same as the ls command.

**Example:**

>   echo *

**7. Print specific types of files:** 

> echo *.txt

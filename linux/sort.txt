
# Linux sort

The 'sort' command sorts the file content in an alphabetical order.

**Syntax:**

> sort <fileName>

**Example:**

>  sort weeks.txt

## To Sort A Column

If a file has more than one column, column number is used to sort a specific column.

**Syntax:**

1.  sort -k<columnNumber>  <fileName>

**Example:**

1.  sort -k1 states.txt
2.  ort -k2 states.txt

## Numeric Sorting

Numeric sorting is different from alphabetical sorting. For numeric sorting option  **'n'**  is used along with the column number if required.

**Syntax:**

1.  sort -n -k<columnNumber>  <fileName>

**Example:**

1.  sort -n -k2 marks.txt

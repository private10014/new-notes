
## Scrollbars;
**visible**: allow the content to overflow the borders of its containing element.
**Hidden** the content of nested element is simply cut off at the border
of the containing element and no scroll bar is is visible
**scroll**: the size of the containing element doesn't change, but scrollbars are added to allow the user to scroll to see the content.
**Auto**: the purpose is the same as scroll, but scrollbar will show only if the content doesn't overflow.
#### Example
```
*{
    margin: 0;
    padding: 0;
}
.boxmodel{
    width: 400px;
    height: 100px;
    background-color: red;
    
}
input{
    padding: 5px 5px 5px 5px;
    margin: 5px 5px 5px 5px
}
```


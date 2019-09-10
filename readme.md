### Install xampp on computer

>Download project inside htdocs

>Replace current url with own ip address

#### Root URL
```
http://192.168.0.135/
```

| URL | METHOD |  Param |  Body Type |
| --- | --- | --- | --- |
| simple_api/bookmarks.php | GET | None | None |
| simple_api/add_bookmark_form.php | POST | title,link | Form-data |
| simple_api/delete_bookmark_form.php | GET | id | URL |
| simple_api/add_bookmark_form_raw.php | POST | {"title":"title","link":"link"} | Raw |
| simple_api/bookmarks_with_token.php | GET | token (in Header) | None |
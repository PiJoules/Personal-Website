# Flask Blog


## Installation
1) Clone Github repo

2) Install all the packages using pip
```sh
$ source setup.sh
```

3) Make sure to comment out this line in the `playhouse/flask_utils.py` file in the `get_object_list()` method
```py
def get_object_list(self):
    #if self.check_bounds and self.get_page() > self.get_page_count():
    #    abort(404)
    return self.query.paginate(self.get_page(), self.paginate_by)
```
Not doing this will redirect you to the abort page every time you want to display an empty list of posts.
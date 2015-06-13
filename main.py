import json

from flask import Flask, render_template, abort
app = Flask(__name__)
# Note: We don't need to call run() since our application is embedded within
# the App Engine WSGI application server.

with open('posts.json') as data_file:    
    posts = json.load(data_file)

@app.route("/")
@app.route("/posts/")
def index():
    return render_template("index.html",
    	page_count=1,
    	page_num=0,
    	posts=posts
    )


@app.route("/posts/<num>/")
def post(num):
	if int(num) < len(posts):
		return render_template("posts/" + num + ".html")
	else:
		abort(404)

@app.errorhandler(404)
def page_not_found(e):
    """Return a custom 404 error."""
    return 'Sorry, Nothing at this URL.', 404


@app.errorhandler(500)
def application_error(e):
    """Return a custom 500 error."""
    return 'Sorry, unexpected error: {}'.format(e), 500
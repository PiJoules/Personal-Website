import json

from flask import Flask, render_template, abort, request
app = Flask(__name__)
# Note: We don't need to call run() since our application is embedded within
# the App Engine WSGI application server.

# Get all the post information
with open('posts.json') as data_file:    
    posts = json.load(data_file)

# Cheap way of searching
# Essentially filters the posts based on the search query
def search_posts(query):
	matches = []
	for i in range(len(posts)):
		content = render_template("posts/" + str(i) + ".html")
		count = content.count(query)
		if count > 0:
			matches.append( (posts[i], count) )
	sorted(matches, key=lambda match: match[1], reverse=True)
	return [m[0] for m in matches]

@app.route("/")
@app.route("/post/")
@app.route("/about/")
def index():
	posts_to_display = posts
	query = request.args.get("q")
	if query:
		posts_to_display = search_posts(query)
	return render_template("index.html", page_count=1, page_num=0, posts=posts_to_display)

@app.route("/post/<num>/")
def post(num):
	if int(num) < len(posts):
		return render_template("posts/" + num + ".html")
	else:
		abort(404)

@app.route("/contact/")
def contact():
	return render_template("index.html", page_count=1, page_num=0, posts=posts)

@app.errorhandler(404)
def page_not_found(e):
    """Return a custom 404 error."""
    return 'Sorry, Nothing at this URL.', 404


@app.errorhandler(500)
def application_error(e):
    """Return a custom 500 error."""
    return 'Sorry, unexpected error: {}'.format(e), 500
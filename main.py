import json
import urllib2
from datetime import datetime

from flask import Flask, render_template, abort, request
app = Flask(__name__)
# Note: We don't need to call run() since our application is embedded within
# the App Engine WSGI application server.

# Get all the post information
with open('posts.json') as data_file:    
    posts = json.load(data_file)

page_count = 5

# Cheap way of searching
# Essentially filters the posts based on the search query
def search_posts(query):
	matches = []
	for post in posts:
		if "file" in post:
			content = render_template("posts/" + post["file"])
			count = content.count(query)
			if count > 0:
				matches.append( (post, count) )
		elif "links" in post:
			try:
				content = urllib2.urlopen(post["links"][0][0]).read().decode("utf8")
				count = content.count(query)
				if count > 0:
					matches.append( (post, count) )
			except urllib2.URLError, e:
				pass
	sorted(matches, key=lambda match: match[1], reverse=True)
	return [m[0] for m in matches]

def get_adj_posts(post_file):
	adj_posts = {}
	for i in range(len(posts)):
		if "file" in posts[i] and posts[i]["file"] == post_file:
			if i > 0:
				adj_posts["prev"] = posts[i-1]
			if i < len(posts)-1:
				adj_posts["next"] = posts[i+1]
			break
	return adj_posts

@app.route("/")
@app.route("/page/<page_num>/")
def index(page_num=0):
	page_num = int(page_num)
	posts_to_display = posts
	query = request.args.get("q")
	if query:
		posts_to_display = search_posts(query)
	return render_template("index.html",
		page_count=page_count,
		page_num=page_num,
		posts=posts_to_display[page_num*page_count:(page_num+1)*page_count],
		search=query,
		can_paginate=len(posts_to_display) > page_count,
		next_page_exists=len(posts_to_display[(page_num+1)*page_count:]) > 0,
		query=query
	)

@app.route("/about/")
def about():
	return render_template("about.html")

@app.route("/contact/")
def contact():
	return render_template("contact.html")

@app.route("/post/<path>")
def post(path):
	try:
		return render_template("posts/" + path, adj_posts=get_adj_posts(path))
	except:
		abort(404)

@app.errorhandler(404)
def page_not_found(e):
    """Return a custom 404 error."""
    return 'Sorry, Nothing at this URL.', 404


@app.errorhandler(500)
def application_error(e):
    """Return a custom 500 error."""
    return 'Sorry, unexpected error: {}'.format(e), 500
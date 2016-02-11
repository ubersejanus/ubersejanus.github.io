# [My webpage](http://www.bpeters.id.au)

## Getting Started
This webpage runs on [Jekyll](http://jekyllrb.com/). Posts are written in [markdown](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet).

## Quick Links
 - [Add yourself as a contributor](https://github.com/ubersejanus/ubersejanus.github.io/blob/master/_data/authors.yml) 
 - [Publish a new post](https://github.com/ubersejanus/ubersejanus.github.io/tree/master/blog/_posts) ([See an example file](https://github.com/ubersejanus/ubersejanus.github.io/blob/master/blog/_posts/2007-01-31-new-zealand.md), [published version](http://www.bpeters.id.au/blog/2007-01/new-zealand))

## What is this blog for?
This is my website. Most content are blogposts, but there are a few other things here or there. If I ever need to, I can also include other contributors.

**This GitHub repository is public**, so anyone can immediately see updates, new post drafts, and similar changes, even before they are deployed to the blog.

## Quickstart

###1. Add yourself as a contributor in the authors file

[Add yourself as a contributor](https://github.com/ubersejanus/ubersejanus.github.io/blob/master/_data/authors.yml) 

You need to edit the authors.yaml file to be included as a contributor on the blog. For example, I use the username `bradp` so I have a section, `bradp:`. In the content of this markdown file should be the following (you don't need the square brackets):
```
---
id: [username, must be same as file name]
name: [your full name]
location: [where you are]
avatar: [url to an image to be used with all your posts. Most people use their Gravatar pic url]
twitter: [your twitter handle, without the @]
github: [optional, your github user name]
stack: [optional, url to your stack overflow/exchange profile]
facebook: [optional, your facebook username (facebook.com/whoever)]
youtube: [optional, url to youtube video or playlist]
website: [optional, url to your personal site]
---
```
So my section of the file looks like this:
```
bradp:
  name: Brad Peters
  location: Melbourne, VIC
  avatar: /images/bradp.jpg
  twitter: ubersejanus
  github: ubersejanus
  facebook: brad.j.peters
  stack: 
  website: /
```
**How to add this file**

If you are a developer, you can do this simply by submitting a PR or adding this file to the `_people` directory. If you are not a developer, you can use [this link on GitHub](https://github.com/StackExchange/blog/new/master/_people) to create this file, then submit your changes by adding a commit message like `Added [your name] to authors` and hitting the `Commit file` button:

###2. Publishing a post

[Publish a new post](https://github.com/ubersejanus/ubersejanus.github.io/tree/master/blog/_posts) ([See an example file](https://github.com/ubersejanus/ubersejanus.github.io/blob/master/blog/_posts/2007-01-31-new-zealand.md), [published version](http://www.bpeters.id.au/blog/2007-01/new-zealand))

To create a new post, you need to create a new markdown file with a particular format in the `/blog/_posts` folder in order to publish. The file needs to include the date and title separated by dashes: `YYYY-MM-DD-Title-With-Dashes-As-Spaces.md`. For example, I published a post on January 30th 2007 titled "New Zealand 2007". The title of this file was `2007-01-31-new-zealand.md`.  In the content of this markdown file should be the following (you don't need the square brackets): 
```
---
layout: post
title: [title of your post]
author: [your author id]
date: [the date you want this to be published in YYYY-MM-DD HH:MM:SS format. Optional, you can remove this whole line]
hero: [url of a high quality hero image to be used for your post. Optional, you can remove this whole line]
source: [url of the original post so a source banner will be added to the post. Optional, you can remove this whole line]
excerpt: [override the auto-generated excerpt displayed in various places. Optional, you can remove this whole line]
tags: related tags, required]
---
[Content of your post in markdown]
```
So my post `2007-01-31-new-zealand.md` would look something like the following:
```
---
layout: post
title: New Zealand 2007
author: bradp
date: 2007-01-31 12:00:00
hero: https://farm4.staticflickr.com/3931/15423899641_22c229f0c0_k_d.jpg
tags:
- travel
- family
---

Goin’ to NZ to celebrate finishing school. As you do.

<!--more-->

## Day One

Well after getting up 16 hours ago, it’s now time to write what is sure to be the first of one reports into my trip to New Zealand.

...
```
The `<!--more-->` html tag tells Jekyll where to stop auto-creating the excerpt. If the excerpt has been set in the using the excerpt parameter, this tag is not required.

You can see what [this post](http://www.bpeters.id.au/blog/2007-01/new-zealand) looks like as a full markdown file by going to [this link](https://github.com/ubersejanus/ubersejanus.github.io/blob/master/blog/_posts/2007-01-31-new-zealand.md).

**How to add this file**

 You can use git to add your post markdown file in the `/blog/_posts` folder, or you can use the [GitHub user interface](https://github.com/ubersejanus/ubersejanus.github.io/tree/master/blog/_posts) to do so. Note that the moment you commit this file, it will be published to the blog.

**Writing your post with Markdown**

Everything following the second set of three dashes in your post markdown file will be the content of your post. We use [markdown](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet) to format the post.

**Adding tags**

When writing a new post, you can add listed tags at the top of the post markdown file. 
```
---
layout: post
title: [title of post]
author: [author id]
tags:
- [tag1]
- [tag2]
- [tag3]
---

```

**Where to get good hero images**
 - [Unsplash](https://unsplash.com/grid)
 - You can also upload them to the repository and they will also be included in the site

**Code snippets**

Jekyll has support for code snippets and highlighting. To include a codeblock with in your markdown, use the following syntax:
```
{% highlight [language] %}
[Your code here]
{% endhighlight %}
```
So if you were going to be including a snippet of Ruby code in your post, it would look like:
```
{% highlight ruby %}
def show
  @widget = Widget(params[:id])
  respond_to do |format|
    format.html # show.html.erb
    format.json { render json: @widget }
  end
end
{% endhighlight %}
```

**YouTube videos**

To embed a YouTube video directly in a post, use the `youtube.html` include like this:

```
{% include youtube.html video_id="SQoA_wjmE9w" %}
```

You can get a video's id by looking at the URL of the video's page on YouTube ([youtube.com/watch?v=SQoA_wjmE9w](https://www.youtube.com/watch?v=SQoA_wjmE9w) in this example).

You can also use only part of a video by specifying the start time like this:
```
{% include youtube.html video_id="SQoA_wjmE9w" start_seconds="33s" %}
```

## Making code changes

If you are interested in making changes to the design, functionality, or structure of the blog, you're going to need to set up a local environment and understand some of the technologies behind the site.

**1. Install Jekyll and dependencies.** First thing you're going to need to do is set up Jekyll and the appropriate dependencies so you can develop locally. To do this, just make sure you have Ruby and Bundler installed then run:
```
bundle install
```

**2. Run a local version of the blog.** Using Git, clone the latest version of this repository to your local machine using the following command:
```
git clone https://github.com/ubersejanus/ubersejanus.github.io.git
```
Then go into root of the folder and run `jekyll serve`:
```
cd ubersejanus.github.io
jekyll serve
```
This will get a local version of the blog running on your machine, accessible on `localhost:4000/blog/`

**3. Read up on the documentation.** To really understand how to develop the site there are a few things you're going to need to read up on to make meaningful changes:
 - [Jekyll](http://jekyllrb.com/docs/home/) The static site generator used for the site
 - [GitHub Pages](https://help.github.com/articles/using-jekyll-with-pages/) How the site is hosted
 - [Liquid](https://docs.shopify.com/themes/liquid-documentation/basics) The templating language used with Jekyll by Shopify
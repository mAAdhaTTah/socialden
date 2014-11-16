<!--
Marked Style: Github
Custom Processor: false
-->
# Storage & Retrieval

* Convert to Post
* Standardize API responses
* Standardize API in
* External API layers

# Front-end Display (Backbone)

* WP-API
* AJAX Interface to WP - Storage and WP - Broadcast
* JS-to-WP-Heartbeat - runs updates
* Standardize API In (in JS)
* Pull External APIs

# WP - Broadcast

* Build Post Object
* Standardized API Responses
* Standardized API Out
* External API layers

# External API Layers

## Twitter
* https://dev.twitter.com/rest/public

### Rate limits
* Once every 36 seconds
    - https://blog.twitter.com/2008/what-does-rate-limit-exceeded-mean-updated
* With OAuth, more
    - https://dev.twitter.com/rest/public/rate-limiting

## Facebook

## Tumblr
* https://www.tumblr.com/docs/en/api/v2
* Blog
    - Avatar
    - Likes
    - Followers
    - Posts
        + Blog_name
        + post id
* User

## Google+

## WP-API

### Attributes

* Title
* Content
* Author
* Timestamp
* Post Formats (based on CF Post Formats UI)
    - Standard
    - Status
        + No Title
    - Link
        + URL
        + Meta via OG
    - Image
    - Gallery
    - Video
    - Audio
    - Quote
        + Source
        + URL
* Sub posts

# Intake Flow

1. PULL in some_jsapi
2. READ some_jsapi into PHP with SOME_API_PULL_CLASS
3. CONVERT some_jsapi into Content object with STANDARDIZER_CLASS in SOME_JSAPI_STANDARDIZER_CLASS
4. TAKE STANDARD_OBJ and TRANSFORM/CHECK as needed with CHECK_CLASS
5. SAVE STANDARD_OBJ into CLIENT with CONSUMPTION_CLASS

This is the read me file from awoodruff/neighborhoods project. This project builds on awoodruff/neighborhoods and on enam/neighborhoods to create a cognitive mapping tool. 

#neighborhoods

http://bostonography.com/hoods

This is a Boston-flavored version of https://github.com/enam/neighborhoods. It's set up the same way as in the instructions below. Apart from some hard-coded titles and text for Boston, a key difference between this project and the original is in its drawing tools. This project uses a combination of [Leaflet.editable](https://github.com/yohanboniface/Leaflet.Editable) and a messy hacked-up version of [Leaflet.FreeDraw](https://github.com/Wildhoney/Leaflet.FreeDraw).

See more about this particular project at http://bostonography.com/2015/map-your-neighborhood-again/

**Please read the original README below, and then note one addition in my implementation:**
This version stores point locations in a separate table. In CartoDB, duplicate your neighborhoods table and give it the same name but with a `_point` extension.

* * *
*slightly modified original README from https://github.com/enam/neighborhoods below*

Crowd sourcing neighborhood boundaries, stories, and descriptions. Making pretty maps.

This project is designed to collect boundaries and descriptions of neighborhoods and the like, and immediatley make them available for cartographic presentation and exploration.

###Steps to Configure 

1. Create a [CartoDB](http://cartodb.com/) account. 
 	-add a table. ~~ easiest ~~ One way would be add 'mapping_output_point.csv' and 'mapping_output_poly.csv' from /db_templates to your cartoDB account (https://your-CartoDB-accout.carto.com/dashboard/datasets , button 'New Dataset').

2. Change the configuration settings in the top bit of [hoodscript.js](https://github.com/enam/neighborhoods/blob/master/js/hoodscript.js).

3. Set up WordPress according to the hosting provider requirements. 

4. Add user(s) to WordPress ( yourdomain.com/wp-admin/users.php )

5. Deploy this project to /www/cognitive-mapping-tool

6. Enjoy yourdomain.com/cognitive-mapping-tool

###Thanks!
###These are the things in the toolbox. 
1. [CartoDB](http://cartodb.com/) 
2. [Leaflet](http://leafletjs.com/)
3. [Bootstrap](http://getbootstrap.com/javascript/)
4. [Leaflet Draw!](https://github.com/Leaflet/Leaflet.draw)
5. [Slim Scroll](http://rocha.la/jQuery-slimScroll/)
6. Whole project was inspired by [Bostonography](http://bostonography.com/2012/crowdsourced-neighborhood-boundaries-part-one-consensus/).

###author
* [Nick Martinelli](https://twitter.com/nichom)
Please contact me if you do make use, or improve the code, because there is a lot that could use improving, and I would love any tips! I'd also really enjoy seeing what people do.

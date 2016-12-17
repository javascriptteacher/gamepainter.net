#jquery A quick way to check if an element exists would be to check if length is > 0 -- if ($('#element').length > 0) { /*exist(s)*/ }
#jquery Determine if we are in IE > 6 -- if ($.browser.msie && $.browser.version > 6) { /*standard HTML code might work*/ }
#jquery Determine if we are in Chrome - if ($.browser.chrome) { /*we are*/ }
#jquery localStorage.someData = 'This is going to be saved across page refreshes and browser restarts'; #html5
#jquery To set global AJAX defaults use $.ajaxSetup({url: '/ajax/default.php'}); -- More on http://api.jquery.com/category/ajax/
#jquery Turn your code into a jQuery plugin - (function($){ $.fn.yourPluginName = function(){ /* Your code */ return this; }; })(jQuery);
#jquery The more content your page has, the more time it takes your browser to render it. Get a count of the DOM elements on your page $('*').length
#jquery You can create your own easing functions - $.easing.easeMyWay = function (x, t, b, c, d) { return x; } Examples http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js
#jquery To select a random element - $('p')[Math.floor(Math.random() * $('p').length)];
#jquery To check if any elements were actually selected - if($('p').length) { /* Found P tags */ }
#jquery Keep selectors simple.
#jquery If you call a selector at least once, you should cache it. (Store it in a variable, instead of selecting it over and over again.)
#jquery You are not using the latest version of jQuery. Why not?
#jquery If you wonder why you still don't understand 'event bubbling' it means you need to learn Event Delegation first.http://davidwalsh.name/event-delegate
#jquery Event Delegation is a concept used to avoid adding event listeners to specific nodes. Instead, event is added to the parent element.
#jquery When creating animated navigation controls you may need to stop animation first $('#button').stop().animate(); on mouseover events.
#jquery To run two animations one after another, use chaining: $('#door').animate(/*unlock*/).animate(/*open*/);
#jquery To run two animations simultaneously, call it one after another $('a').animate(); $('b').animate();
#jquery For toggling classes you can use chaining: $('#button').removeClass('off').addClass('on'); eg: on mouseover event.
#jquery Get in the habit of giving your selectors a context wherever possible. $(selector, context_selector);
#jquery Think twice to favor IDs over CLASSes wherever possible.
#jquery Wrapping argument of .html(arg) in a  single tag may result in a performance increase. Example .html('&lt;ul&gt;' + lots_of_li + '&lt;/ul&gt;');
#jquery Avoid using .append(); inside for-loops. Use a separate variable to build the string (var s += 'p';) Then use the .html(); method.
#jquery Avoid using jQuery selectors that select many elements into a for-loop. Keep it outside � var s = $('p'); for (..) { s.css(...); }
#jquery You can include jquery.js directly from Google Code API (You know, using &lt;script&gt; tags on your page) - https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js
#jquery When using .addClass('cl'); make sure that the class ('cl' in this case) defines the properties it overwrites using !important
#jquery If binding click events to multiple elements it's wise to put the .click() event inside an .each() event to prevent $(this) clashes
#jquery Sometimes we need to prevent text from being selected over custom CSS UI controls -- $('body').disableSelection(); (jquery-ui.js)
#jquery #regex Select all DIVs with id names containing letter 'o' -- $('div').filter(function() { return $(this).attr('id').match(/o/); });
#jquery $(�.button�)[index]; -- get JavaScript DOM object. $($(�.button�)[index]) -- Enable jQuery functionality to an indexed object.
#jquery: To find all HTML elements set the context to document.body so elements like head and script are left out.
#jquery: You can add your own jQuery methods to the main jQuery object using: $.extend( { method: function(a,b){..} } );
#jquery: $('div').get(1) is the same as $('div')[1]; - both return the raw JavaScript DOM object at index 1 in selection.
#jquery: Use .get() to access the array of matched elements (As JavaScript DOM objects) - $('div').get().reverse();
#jquery: Reduce the selection to start from the second selected element (starts from 0): $('p').eq(1).css('color', 'red')
#jquery: To find out the number of selected elements, use the length property - var n = $('div').length;
#jquery: Use .each() to run a function on each selected element $('div').each(function(){ this.style.color = 'blue'; });
You are not JavaScript. Because everything in JavaScript is an object.
#jquery: You can pass the raw JavaScript element to jQuery - $(document.body).css( 'background', 'black' );
#jquery: It is possible to pass plain HTML written by hand to jQuery - $('&lt;div>&lt;p>Hello&lt;/p>&lt;/div>').appendTo('body');
#jquery: $('input:radio', document.forms[0]); - finds all inputs of type radio within the first form in the document.
#jquery: $('#clock')[0] is exactly the same as document.getElementById('clock');
A #poetry newsletter I'm subscribed to - http://tinyurl.com/7lpm8c2  - Road trips for the mind. #poetry #reading
Free jQuery Tutorials - http://www.authenticsociety.com/blog/jQueryPluginTutorial_Beginner - #email
Download jQuery PDF book - http://www.learnjquery.org  #jquery
New book cover http://www.learnjquery.org  -- second revision available for download now. PDF #jquery
#jquery: The [] index will 'dereference' a jQuery selector into a raw DOM object: $('#id')[0].style.color='#000000';
#jquery: The [0] index gets us the raw DOM object from a jQuery selector - $($('#p2')[0]).prependTo($('#p1')[0]); works
#jquery: To say that variables are objects is a mistake. Objects are assigned to variables. Variable is just a handle.
#jquery: A variable is an interface to the language but isn't an object or an integer itself. That would be the data.
#jquery: A variable is like a pair of tweezers to pick functions, objects, integers, strings, arrays, etc. to work on.
#jquery: Oddly, trying to prepend an element to itself will just remove it from the DOM -- $('#p2').prepend('#p2');
List of all jQuery tutorials - http://tinyurl.com/6m7wbb8  #jquery
#jquery: It's possible to pass the jQuery selector itself as arguments to a method - $($('#p1')).prepend($('#p2'));
#jquery: You can pass raw DOM as arguments: $(document.getElementById('p1')).prepend(document.getElementById('p2'));
#jquery: jQuery UI online demos and documentation -- http://www.jqueryui.com/demos/
#jquery: With jquery.ui.js you can turn a UL/LI list into an interactive drag & drop sortable list by calling .sortable()
#jquery: jquery.ui.js is an add-on library to jquery.js -- required for animation easing, complex mouse events, etc.
#jquery: Make any HTML element draggable with jQuery UI -- $('#draggable').draggable(); -- &lt;div id = 'draggable'>&lt;/div>
#jquery: $('form').serialize() will return a string of all elements inside the form -- name=value&name2=value2 -- etc.
#jquery: $('div,p'); is the same as $('div').add('p');
#jquery: The $(arg1, arg2); function is not limited to string selectors. It can also take a js object or jQuery object.
#jquery: It's possible to pass a selector to the add function -- $('div').add( $('p') ); -- selects all p + all div.
HTML has a head and a body but no feet. #jquery
#jquery: Use $('div').add(html) to add HTML to all matched elements. Alternatively you can use - $('div').html(html);
The advice: 'Think twice' is probably the reason behind all of the failures of humankind. I mean, that's it?
Make no tombstones for your dream graveyard.
#jquery: JavaScript is the only language people start using without actually learning it.
Expert knowledge is very concise and it is never useful to a beginner who is looking for in-depth answers to simple questions.
#jquery: The.toJSON() method exists natively on the Date, Number, String, and Boolean objects.
#jquery: Use JSON.parse(json_string) instead of eval(json_string) to obtain the JSON object.
#jquery: eval() is very fast. However, it can compile and execute any JavaScript program so there can be security risks.
#jquery: JSON.stringify( json_obj ) -- to convert an actual object back into a string, perhaps for sending over network.
Regular Expressions (A free PDF excerpt from 'Understanding jQuery') http://www.learnjquery.org/preview/regex.pdf #jquery
#jquery: JSON.parse(string) will parse a JSON in string format and return an object that was created from it.
#jquery: JSON.parse appears to take strict JSON only. '{'a': '1'}' will work but not '{a: '1'}' (without the quotes.)
#jquery: JSON is an actual object in JavaScript. -- alert(JSON.stringify( {a:1} )); this will resolve to value of '{a:1}'
#jquery: var x = { 'type': 'palm tree' }.type -- this statement will result in x = 'palm tree.'
#jquery: alert($('p').css('display')); returns 'block' as default.
#jQuery tut. 64: A string literal is not an object. It's internally cast to an object when a method of String.prototype is called on it.
#jquery: The prototype property should be studied after one becomes familiar with what objects are.
#jquery: When you change the value of a prototype property it also changes across all existing objects derived from it.
#jquery: Notice that the prototype property refers to the original and global object composition. Not just new object.
#jquery: Using prototype to add properties: function f() { }; var obj = new f(); obj.prototype.ha = 1; alert(obj.ha);
#jquery: eval(statement) is used to evaluate a JavaScript statement. It can even convert a string into function object.
#jquery: Thinking about 'prototype': var f = function(){ }; alert(f.prototype.constructor == f); // will return 'true'
#jquery: The prototype is an object property that allows you to add properties and methods to an object.
I would choose passion over precision any day. Because pursuit of passion will ensure that I make more mistakes than if I choose precision.
#jquery: By design, everything in JavaScript is an object. But only objects of type 'function' have a prototype.
#jquery: Everyone is confused about what 'prototype' is in JavaScript. The following tweets will try to shed light.
#jquery: 'hello'.length is an object property(aka variable) and 'hello'.substr(1,2) is an object method(aka function).
#jquery: Interestingly, even an in-line literal string statement 'hello' can refer to an object. That's why 'hello'.length works.
#jquery: Everything created with 'var' in JavaScript is an object.
#jquery: There are a lot of things wrong with #jquery. Nobody talks about it because they think they're the wrong ones.
#jquery: $('p').animate( { borderWidth: '200px' } ); will work without jquery-ui.js (However 'borderColor' will not.)
#jquery: $('p').animate( { borderColor: 'red' } ); will not work unless jquery-ui.js is included in addition to jquery.js
#jquery: Animate font size in all paragraphs to 100px over 5 seconds - $('p').animate({ fontSize: '100px' }, 5000);
#jquery: Add border and animate it to red: $('p').css( 'border', '10px solid blue' ).animate( { borderColor: 'red' } );
#jquery: $('p').css( { opacity: 0.25 } ); and $('p').css( 'opacity', '0.25' ); are one and the same thing.
#jquery: $('div').animate({opacity: 0.25, }); to dynamically fade an element to an opacity of 25% (cross-browser.)
#jquery: $('div').animate({left: '+=100px' }); will slide the selected div right by 100px counting from current location.
#jquery: In .animate(css); The first argument 'css' is usually a JSON notation. Ex: {left: '100px', top: '10px' }
#jquery: use .animate(arg); to dynamically change the CSS style of an element to a new state specified as first argument.
http://www.authenticsociety.com  is a social network website I have been working on #jquery #php #mysql
#jquery: $(document).ready(handler) is the same as $(document).bind('ready', handler);
#jquery: Attaching .ready() to the document object (top DOM object) means to run code when entire DOM finishes loading.
#jquery: .ready() is a function that executes when a DOM element is finished loading, or 'is ready' to work with.
#jquery: Access JSON (see previous tweet) - $.data($('div')[0], 'test').apples; or $.data($('div')[0], 'test').oranges;
#jquery: Assign JSON to arbitrary DOM element - jQuery.data($('div')[0], 'test', { apples: 16, oranges: 'string' });
#jquery: Create 'global' variables attached to a specific DOM element using - $.data(document.body, 'apples', 7);
#jquery: Use $('div#id').toggleClass('classname'); to add/remove the specified class to/from an element.
#jquery: Dynamically fade an element to an opacity .fadeTo(duration, opacity); where opacity is between 0.0: 1.0.
#jquery: To globally turn all animations off and set all running animations to final state: jQuery.fx.off = true;
#jquery: To set vertical scroll bar to 100px down you can use: $('body').scrollTop(100);
#jquery: You can easily get the vertical scroll bar position as an integer (without 'px') by doing $('body').scrollTop();
#jquery: Example of using .offset(): var pos = $('div').offset(); var x = pos.left; var y = pos.top;
#jquery: .offset() method retrieves position of an element relative to the document and .position() relative to parent.
#jquery: to get x/y offset of an element relative to the x=0, y=0 of the whole document itself, use $('div#id').offset();
#jquery: To access DOM directly you can dereference the returned jQuery object using [0] alert($('div')[0].style.height);
#jquery: Get the value of a selected radio button in a radio button set: $('input:radio[name=clocktype]:checked').val();
#jquery: Get the current value of a select/option drop-down menu: $('select#menu').val();
#jquery: A reliable way to check if a 'checkbox' or 'radio button' is checked: if ($('input#id').is(':checked') == true);
#jquery: Example: $('div#id').before('&lt;div>').after('&lt;/div>'); is exactly the same as $('div#id').wrap('&lt;div />');
#jquery: var h = $('p').outerHeight() includes padding+border. var h = $('p').innerHeight() includes padding only.
#jquery: wrap() is not limited to legal HTML: $('p').wrap('&lt;div anything />') will produce &lt;div anything>&lt;p>abc&lt;/p>&lt;/div>
#jquery: You can get actual height in px of an HTML element with 'height:auto' by running $('P').css('height');
#jquery: The global default animation delay for all jQuery animations can be reset by: jQuery.fx.interval = 100;
#jquery: It is possible to assign more than one inline class to an element using the space &lt;DIV class='foo bar'>&lt;/DIV>
#jquery: Determine if an HTML element has a CSS class: $('div#id').hasClass('blue') - returns true or false.
#jquery: Dynamically add/remove CSS to/from an element by calling .addClass('classname'); and .removeClass('classname');
#jquery: You can trigger events that are already bound to an HTML element by using the method: $('div').trigger('click');
#jquery: A self-removing event that removes itself after the event executes can be created using the .one() function.
#jquery: Input elements: .blur(function(){...}) is a shortcut to .bind('blur', function(){...})
#jquery: Using self-reference 'this' inside callback to hide target on onclick: $('p').click(function(){$(this).hide()});
#jquery: $('DIV').hide() will hide all DIVs immediately. But $('DIV').hide('slow') will run a weird slide/fade animation.
My jQuery tutorial book http://www.learnjquery.org  is a tutorial vinaigrette with web development insights on the side #jquery
#jquery: appendTo() does exactly the same thing as append(), except the selector and functions' arguments are reversed.
#jquery: To 'cut and paste' all &lt;P> tags on the page and move them into #container, use - $('P').appendTo('#container');
#jquery: Get HTML inside of an element whose id is 'clock' and store as text string - var content = $('#clock').html();
#jquery: Use .wrap() to 'surround' HTML elements with other elements - $('P').wrap('&lt;DIV />'); wraps all Ps with 2 DIVs.
#jquery: $('div').prepend('Before').append('After'); on '&lt;div>1&lt;/div>' will produce '&lt;div>Before1After&lt;/div>'
#jquery: Latest version recommends that we start using .on() and .off() instead of .bind(), .unbind(), .click(), etc.
#jquery: A nameless 'callback function' is most often the last argument. It's executed when the statement is finished.
#jquery: The .attr('var'); method can refer to a custom attribute invented by yourself. For example: &lt;div var='xyz'>
#jquery: You can stack up ':not' selectors using space as in - $('* :not('ul') :not('body')').css('background','red');
#jquery: Little known CSS selector is ':not', it helps to select 'everything but xyz.' Example $('* :not('xyz')').hide();
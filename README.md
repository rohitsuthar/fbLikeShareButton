# fbLikeShareButton

All-in-one Yii extension including Like, Recommend & Share button with custom attributes like - action, layout, color scheme, user faces, show share etc.


# Requirements

Tested with Yii 1.1.16


# Installation

- Download the latest release package
- Unpack it in /protected/extensions/ folder


# Usage

Paste the code into your main.php page or also you can use this code as per your requirement on any page.

~~~
$this->widget('application.extensions.fbLikeShareButton.fbLikeShareButton', array(
        'fbbutton' => array(
		'url'=>'https://facebook.com/yiiexperts',
		'action'=>'like',
		'width'=>'200',
		'height'=>'50',
		'layout'=>'light',
		'color_scheme'=>'light', 
		'show_share'=>'true',
		'show_faces'=>'false',
	 )
  ));
~~~


# Yii Extension

http://www.yiiframework.com/extension/fb-like-box/



# Usual parameters to be adjusted

- url: Your facebook page link (url: http://www.facebook.com/fb_page)
- action: Display button (action: **like**, recommend)
- width: Layout width (in digit: **200**)
- height: Layout height (in digit: **50**)
- layout: Layout style (layout: **standard**, button_count, button, box_count)
- color_scheme: Layout color scheme (layout: **light**, dark)
- share: Display share button (show_post: **true**, false)
- faces: Show user faces (show_faces: **true**, false)


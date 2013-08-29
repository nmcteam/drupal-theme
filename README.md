# Drupal 7 Theme

This is [New Media Campaigns][nmc]' boilerplate Drupal 7 theme. It contains the bare necessities
to install and activate it in your Drupal website.

There is little else. We prefer to build our Drupal themes from the ground up rather than
extend an existing Drupal parent theme.

## Installation

### Download theme

Download or clone this repository into your Drupal themes directory, usually located
at `public/sites/all/themes/`. Rename the theme folder using the same
short name used for the `theme.info` file described next.

### Update `theme.info`

You should rename the `theme.info` file based on your desired theme name. For example,
if your theme name will be "foobar", you should rename this file to `foobar.info`. Your
theme name should contain only letters and numbers.

After you rename the `.info` file, you should update its content.

1. Change the name property;
2. Change the description property;
3. Change the theme regions if necessary;
4. Change the theme stylesheets and scripts if necessary;

### Add a screenshot

You should also provide your own theme screenshot. This image should be exactly 249x219 pixels
and named "screenshot.png".

## Author

* [Josh Lockhart](https://github.com/codeguy)
* [New Media Campaigns][nmc]

## License

MIT Public License

[nmc]: http://www.newmediacampaigns.com

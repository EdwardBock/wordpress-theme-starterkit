# WordPress Theme Starterkit

Are you looking to streamline your WordPress theme development process?
This starterkit is crafted from years of professional theme development
experience, ensuring your code is both maintainable and developer-friendly.

### Requirements

- [Docker](https://www.docker.com/) or [Podman](https://podman.io/)
- [Nix](https://nix.dev/) or a [composer](https://getcomposer.org/) installation


## Getting started

```shell
## --- Once ---
# if you do not have a local php and composer installation
nix-shell

# build the vendor directory for psr-4 autoloading
# this needs to be executed after every root namespace change
cd theme/Theme
composer dump-autoload
cd ../..

## --- Every startup ---
# Startup the wordpress docker environment.
docker compose up -d

# If you need transpiled TypeScript or JavaScript files.
npm i
npm run dev
```

Goto [localhost:8080](http://localhost:8080/), install WordPress, activate
the theme and start modifying the code in the `theme` or `src` directories.

## Streamline Your Workflow, Enhance Page Quality

Are you overwhelmed by the sheer number of Gutenberg blocks available? Simplify your theme development and
content creation process by whitelisting specific Gutenberg blocks. By reducing the number of supported blocks, you can:

- **Maintain Consistency:** Ensure uniformity across your pages by limiting the blocks authors can use, preventing messy and inconsistent designs.
- **Boost Performance:** Improve your site's speed and performance by loading only the necessary blocks, making your theme leaner and faster.
- **Enhance User Experience:** Provide a clean and straightforward editing environment for content creators, enabling them to focus on high-quality content without distractions.

## Why Whitelist Gutenberg Blocks?

- **Tailored Content Creation**: Control which blocks are available to authors, ensuring they only use the ones that fit your design guidelines and content strategy.
- **Simplified Maintenance**: Reduce the complexity of theme maintenance by supporting a curated set of blocks, minimizing the need for frequent updates and troubleshooting.
- **Improved Page Load Times**: Faster pages lead to better user engagement and SEO rankings. By supporting fewer blocks, you can significantly decrease load times.


## Beyond standard guidelines

While this starterkit does not adhere to the traditional WordPress Coding
Guidelines, this is a deliberate choice. Instead, it follows the
recommendations from [Write Better WordPress Code](https://medium.com/write-better-wordpress-code) publications.

## Key features

- **Intuitive Code Structure:** Benefit from a codebase that has been refined through extensive professional use.
- **Future-Proof Your Development:** Ensure your themes are built to last and easy to update.
- **PSR-4 Autoloading:** Optimize your code organization and loading times with PSR-4 autoloading, ensuring efficient and standardized file management.
- **WP Scripts Integration:** Simplify your development process with WP Scripts, a powerful toolset for modern JavaScript development in WordPress.


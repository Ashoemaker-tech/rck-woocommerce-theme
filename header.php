<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rck
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<header aria-label="Site Header" class="border-b border-gray-100">
  <div
    class="mx-auto flex h-16 max-w-screen-2xl items-center justify-between sm:px-6 lg:px-8"
  >
    <div class="flex items-center">
<!-- mobile dropdown -->
<div x-data="{ isActive: false }" class="relative">
  <div
    class="inline-flex items-center overflow-hidden bg-white"
  >
    <button x-on:click="isActive = !isActive" type="button" class="p-2 sm:mr-4 lg:hidden border-none">
            <span class="sr-only">Menu</span>
        <svg
          class="h-6 w-6"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16"
          />
        </svg>
      </button>
  </div>

  <div
    class="lg:hidden absolute left-0 z-10 mt-2 w-56 rounded-md border border-gray-100 bg-white shadow-lg"
    role="menu"
    x-cloak
    x-transition
    x-show="isActive"
    x-on:click.away="isActive = false"
    x-on:keydown.escape.window="isActive = false"
  >
    <div class="p-2 mobile-menu">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			)
		);
		?>
    </div>
  </div>
</div>
		<!-- /Mobile dropdown -->
        <span class="sr-only">Logo</span>
		<span class="inline-block h-16 w-16">
			<?php the_custom_logo(); ?>
		</span>
    </div>

    <div class="flex flex-1 items-center justify-end">
      <nav
        aria-label="Site Nav"
        class="navigation-main hidden lg:flex lg:gap-4 lg:text-xs lg:font-bold lg:uppercase lg:tracking-wide lg:text-gray-500"
      >
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			)
		);
		?>
	  </nav>

      <div class="ml-8 flex items-center">
        <div
          class="flex items-center divide-x divide-gray-100 border-x border-gray-100"
        >

		  <span>
			<a
              href="<?php echo wc_get_cart_url(); ?>"
              class="flex items-center border-b-4 border-transparent p-6 hover:border-red-700"
              title="<?php _e( 'View your shopping cart' ); ?>"
            >
              <svg
                class="h-4 w-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
                />
              </svg>
			<?php echo  WC()->cart->get_cart_contents_count(); ?>
            </a>
		</span>
        </div>
      </div>
    </div>
  </div>
</header>


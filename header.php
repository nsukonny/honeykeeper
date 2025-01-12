<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Basic head config -->
    <!-- Meta -->
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>">
    <meta name="robots" content="noindex, nofollow">
    <!-- These meta tags ensure that the site is displayed correctly on social media (OG) -->
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og.png">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:type" content="website">
    <!-- End of meta -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.min.css" />
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon.svg" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="HoneyKeeper" />
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/site.webmanifest" />
    <!-- End of favicon -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="wrapper">
        <header class="header" id="header">
            <div class="burger-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/header/burger-bg.svg" width="2000" height="2000" alt="Векторные пятиугольные соты с оранжево-серым градиентом">
            </div>
            <div class="container">
                <div class="header-wrapper">
                    <div class="header-logo-wrapper">
                        <div class="header-logo-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/header/logo.svg" width="122" height="72" alt="Логотип векторной пчелы в оранжевом пятиугольнике с текстом `Хранитель меда`">
                        </div>
                        <span class="header-logo-desc">
                            <?php esc_html($logo_slogan = the_field('logo_slogan', 'options')); ?>
                        </span>
                    </div>
                    <div class="header-inner" id="header-inner">

                        <div class="header-buttons">
                            <button class="button-grey download" type="button">
                                <a href="<?php esc_html($dwn_price_link = the_field('dwn_price_link', 'options')); ?>">
                                <span class="button-grey-icon"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="path-a" d="M10.2125 15.1625C10.325 15.275 10.4375 15.3875 10.55 15.3875C10.6625 15.5 10.8875 15.5 11 15.5C11.1125 15.5 11.3375 15.5 11.45 15.3875C11.5625 15.275 11.675 15.275 11.7875 15.1625L16.2875 10.6625C16.7375 10.2125 16.7375 9.53752 16.2875 9.08752C15.8375 8.63752 15.1625 8.63752 14.7125 9.08752L12.125 11.675V3.125C12.125 2.45 11.675 2 11 2C10.325 2 9.87501 2.45 9.87501 3.125V11.675L7.2875 9.08752C6.8375 8.63752 6.1625 8.63752 5.7125 9.08752C5.2625 9.53752 5.2625 10.2125 5.7125 10.6625L10.2125 15.1625Z" fill="#FEA434"></path><path class="path-b" d="M18.875 12.125C18.2 12.125 17.75 12.575 17.75 13.25V15.5C17.75 16.7375 16.7375 17.75 15.5 17.75H6.50001C5.26251 17.75 4.25001 16.7375 4.25001 15.5V13.25C4.25001 12.575 3.8 12.125 3.125 12.125C2.45 12.125 2 12.575 2 13.25V15.5C2 17.975 4.025 20 6.50001 20H15.5C17.975 20 20 17.975 20 15.5V13.25C20 12.575 19.55 12.125 18.875 12.125Z" fill="white"></path></svg>	
                                </span>
                                <span>Скачать прайс</span>
                                </a>

                            </button> 
                            <button class="button-grey contact open-modal" type="button">
                                <a href="<?php esc_url($contact_us_link = the_field('contact_us_link', 'options')); ?>">
                                    <span class="button-grey-icon"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="path-a" d="M7.87888 2.58106L7.59832 1.17856H11.22L10.9395 2.58106H7.87888ZM15.0235 16.6061V18.7098C15.0229 19.2675 14.8009 19.8024 14.4061 20.1967C14.0115 20.5911 13.4762 20.8129 12.9181 20.8136H5.90028C5.34214 20.8129 4.80686 20.5911 4.41229 20.1967C4.01754 19.8024 3.79556 19.2675 3.79492 18.7098V3.28231C3.79555 2.72459 4.01752 2.18972 4.41229 1.79546C4.80689 1.401 5.34218 1.1792 5.90028 1.17856H6.16721L6.61587 3.41991C6.64783 3.57895 6.73367 3.72186 6.85899 3.82472C6.98446 3.9274 7.14174 3.98359 7.30388 3.98359H11.5146C11.6767 3.98359 11.834 3.9274 11.9595 3.82472C12.0848 3.72188 12.1708 3.57897 12.2028 3.41991L12.6513 1.17856H12.9182C13.4763 1.17918 14.0116 1.40099 14.4062 1.79546C14.8009 2.18975 15.0229 2.72463 15.0236 3.28231V5.38606H8.70748C7.77715 5.38715 6.88532 5.75688 6.22756 6.41429C5.56965 7.07154 5.19963 7.96269 5.19855 8.89231V13.0998C5.19964 14.0294 5.56965 14.9206 6.22756 15.5778C6.88532 16.2352 7.77715 16.605 8.70748 16.6061H15.0235ZM11.5146 18.7098C11.5146 18.5239 11.4406 18.3454 11.309 18.2139C11.1775 18.0824 10.9989 18.0086 10.8128 18.0086H8.00564C7.75484 18.0086 7.52317 18.1422 7.39785 18.3592C7.27253 18.5761 7.27253 18.8435 7.39785 19.0604C7.52317 19.2774 7.75485 19.4111 8.00564 19.4111H10.8128C10.9989 19.4111 11.1775 19.3372 11.309 19.2057C11.4406 19.0742 11.5146 18.8958 11.5146 18.7098Z" fill="white"></path><path class="path-b" d="M12.9181 11.1656C12.7112 11.1656 12.5118 11.0889 12.3583 10.9504L7.90702 6.94857C8.16078 6.84339 8.43273 6.78907 8.70733 6.78876H17.1288C17.4034 6.78907 17.6752 6.84339 17.9289 6.94857L13.478 10.9504C13.3245 11.0889 13.1251 11.1656 12.9181 11.1656Z" fill="#FEA434"></path><path class="path-c" d="M12.9181 12.5689C13.4719 12.5689 14.0059 12.3637 14.4169 11.993L18.9723 7.89735C19.1418 8.20198 19.2319 8.54413 19.2342 8.89257V13.1001C19.2336 13.6577 19.0116 14.1926 18.6168 14.5869C18.2223 14.9814 17.687 15.2032 17.1288 15.2038H8.70741C8.14931 15.2032 7.61402 14.9814 7.21942 14.5869C6.82465 14.1927 6.60268 13.6578 6.60205 13.1001V8.89257C6.6044 8.54415 6.69463 8.20196 6.86413 7.89735L11.4193 11.9934C11.8305 12.3639 12.3645 12.5691 12.9181 12.5689Z" fill="#FEA434"></path></svg>	
                            </span>
                            <span>Связаться с нами</span>
                                </a>
                            
                            </button>
                        </div>

                        <div class="header-info">
                            <p>
                                <strong>
                                    По всем вопросам
                                </strong>
                            </p>
                            <a href="<?php esc_url($phone_number = the_field('phone_number', 'options')); ?>">
                                <?php esc_html($phone_number = the_field('phone_number', 'options')); ?>
                                </a>
                        </div>
                    </div>
                    <button class="burger-button">
                        <!-- Burger button content here -->
                    </button>
                </div>
            </div>
        </header>

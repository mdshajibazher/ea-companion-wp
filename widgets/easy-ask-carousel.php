<?php
namespace EasyAskCompanionClass\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Easy Ask Carousel
 * @since 1.0.0
 */
class EasyAskCarousel extends Widget_Base {

    /**
     * Retrieve the widget name.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'easy-ask-carousel';
    }

    /**
     * Retrieve the widget title.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return __( 'Easy Ask Carousel', 'easy-ask-companion-td' );
    }

    /**
     * Retrieve the widget icon.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-info-box';
    }

    /**
     * Retrieve the list of categories the widget belongs to.
     *
     * Used to determine where to display the widget in the editor.
     *
     * Note that currently Elementor supports only one category.
     * When multiple categories passed, Elementor uses the first one.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories() {
        return [ 'general' ];
    }

    /**
     * Retrieve the list of scripts the widget depended on.
     *
     * Used to set scripts dependencies required to run the widget.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return array Widget scripts dependencies.
     */
    public function get_script_depends() {
        return [ 'easy-ask-companion-td' ];
    }

    /**
     * Register the widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function register_controls() {

//        $this->start_controls_section(
//            'ea-carousel-repeatable-contents',
//            [
//                'label' => esc_html__( 'Content', 'easy-ask-companion-td' ),
//                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
//            ]
//        );
//
//        $this->add_control(
//            'single_carousel',
//            [
//                'label' => esc_html__( 'List', 'easy-ask-companion-td' ),
//                'type' => \Elementor\Controls_Manager::REPEATER,
//                'fields' => [
//                    [
//                        'name' => 'title',
//                        'label' => esc_html__( 'Title', 'easy-ask-companion-td' ),
//                        'type' => \Elementor\Controls_Manager::TEXT,
//                        'placeholder' => esc_html__( 'Enter title', 'easy-ask-companion-td' ),
//                        'default' => esc_html__( 'B2B Ecommerce', 'easy-ask-companion-td' ),
//                    ],
//                    [
//                        'name' => 'description',
//                        'label' => esc_html__( 'Description', 'easy-ask-companion-td' ),
//                        'type' => \Elementor\Controls_Manager::TEXTAREA,
//                        'placeholder' => esc_html__( 'Enter description ', 'easy-ask-companion-td' ),
//                    ],
//                ],
//                'default' => [
//                    [
//                        'title' => esc_html__( 'List Item #1', 'easy-ask-companion-td' ),
//                        'description' => 'https://elementor.com/',
//                    ],
//                ],
//                'title_field' => '{{{ title }}}',
//            ]
//        );
//
//        $this->end_controls_section();



    }

    /**
     * Render the widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function render() {
        $settings = $this->get_settings_for_display();

        echo '<div id="ea-owl-wrapper" class="owl-carousel owl-theme">
             <div style="background: #F3F4F6;padding: 2rem;margin-right: 0.5rem;border-radius: 5px;">
             <img style="width: 50px;height: 50px"  src="https://cdn2.iconfinder.com/data/icons/social-flat-buttons-3/512/viber-512.png" alt="">
             <h4 style="margin: 2rem 0">B2B Ecommerce</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet animi beatae culpa dolor dolorum eaque, esse est excepturi explicabo illo labore nisi nostrum quam quis repellendus sapiente unde vel?</p>
            </div>
            
             <div style="background: #F3F4F6;padding: 2rem;margin-right: 0.5rem;border-radius: 5px;">
             <img style="width: 50px;height: 50px"  src="https://cdn2.iconfinder.com/data/icons/social-flat-buttons-3/512/viber-512.png" alt="">
             <h4 style="margin: 2rem 0">B2B Ecommerce</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet animi beatae culpa dolor dolorum eaque, esse est excepturi explicabo illo labore nisi nostrum quam quis repellendus sapiente unde vel?</p>
            </div>
            
             <div style="background: #F3F4F6;padding: 2rem;margin-right: 0.5rem;border-radius: 5px;">
             <img style="width: 50px;height: 50px"  src="https://cdn2.iconfinder.com/data/icons/social-flat-buttons-3/512/viber-512.png" alt="">
             <h4 style="margin: 2rem 0">B2B Ecommerce</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet animi beatae culpa dolor dolorum eaque, esse est excepturi explicabo illo labore nisi nostrum quam quis repellendus sapiente unde vel?</p>
            </div>
            
             <div style="background: #F3F4F6;padding: 2rem;margin-right: 0.5rem;border-radius: 5px;">
             <img style="width: 50px;height: 50px"  src="https://cdn2.iconfinder.com/data/icons/social-flat-buttons-3/512/viber-512.png" alt="">
             <h4 style="margin: 2rem 0">B2B Ecommerce</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet animi beatae culpa dolor dolorum eaque, esse est excepturi explicabo illo labore nisi nostrum quam quis repellendus sapiente unde vel?</p>
            </div>
            
             <div style="background: #F3F4F6;padding: 2rem;margin-right: 0.5rem;border-radius: 5px;">
             <img style="width: 50px;height: 50px"  src="https://cdn2.iconfinder.com/data/icons/social-flat-buttons-3/512/viber-512.png" alt="">
             <h4 style="margin: 2rem 0">B2B Ecommerce</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet animi beatae culpa dolor dolorum eaque, esse est excepturi explicabo illo labore nisi nostrum quam quis repellendus sapiente unde vel?</p>
            </div>
            
             <div style="background: #F3F4F6;padding: 2rem;margin-right: 0.5rem;border-radius: 5px;">
             <img style="width: 50px;height: 50px"  src="https://cdn2.iconfinder.com/data/icons/social-flat-buttons-3/512/viber-512.png" alt="">
             <h4 style="margin: 2rem 0">B2B Ecommerce</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet animi beatae culpa dolor dolorum eaque, esse est excepturi explicabo illo labore nisi nostrum quam quis repellendus sapiente unde vel?</p>
            </div>
            
                         <div style="background: #F3F4F6;padding: 2rem;margin-right: 0.5rem;border-radius: 5px;">
             <img style="width: 50px;height: 50px"  src="https://cdn2.iconfinder.com/data/icons/social-flat-buttons-3/512/viber-512.png" alt="">
             <h4 style="margin: 2rem 0">B2B Ecommerce</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet animi beatae culpa dolor dolorum eaque, esse est excepturi explicabo illo labore nisi nostrum quam quis repellendus sapiente unde vel?</p>
            </div>
            
                         <div style="background: #F3F4F6;padding: 2rem;margin-right: 0.5rem;border-radius: 5px;">
             <img style="width: 50px;height: 50px"  src="https://cdn2.iconfinder.com/data/icons/social-flat-buttons-3/512/viber-512.png" alt="">
             <h4 style="margin: 2rem 0">B2B Ecommerce</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet animi beatae culpa dolor dolorum eaque, esse est excepturi explicabo illo labore nisi nostrum quam quis repellendus sapiente unde vel?</p>
            </div>
            
</div>';
    }

    /**
     * Render the widget output in the editor.
     *
     * Written as a Backbone JavaScript template and used to generate the live preview.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    //protected function content_template() {

//        <div id="ea-owl-wrapper" class="owl-carousel owl-theme">
//
//            <#
//            if ( settings.single_carousel ) {
//            _.each( settings.single_carousel, function( item, index ) {
//            #>
//
//            <div style="background: #F3F4F6;padding: 2rem;margin-right: 0.5rem;border-radius: 5px;">
//                <img style="width: 50px;height: 50px"  src="https://cdn2.iconfinder.com/data/icons/social-flat-buttons-3/512/viber-512.png" alt="">
//                <h4 style="margin: 2rem 0">{{{item.title}}}</h4>
//                <p>{{{item.description}}}</p>
//            </div>
//
//            <#
//            } );
//            }
//            #>
//
//
//        </div>


   // }
}

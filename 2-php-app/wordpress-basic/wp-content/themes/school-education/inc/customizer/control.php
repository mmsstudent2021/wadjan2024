<?php
/**
 * Custom Customizer Controls.
 *
 * @package school_education
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return null;
}

/**
 * Customize Control for Taxonomy Select.
 *
 * @since 1.0.0
 *
 * @see WP_Customize_Control
 */
class School_Education_Dropdown_Taxonomies_Control extends WP_Customize_Control {

	/**
	 * Control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'dropdown-taxonomies';

	/**
	 * Taxonomy.
	 *
	 * @access public
	 * @var string
	 */
	public $taxonomy = '';

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Manager $manager Customizer bootstrap instance.
	 * @param string               $id      Control ID.
	 * @param array                $args    Optional. Arguments to override class property defaults.
	 */
	public function __construct( $manager, $id, $args = array() ) {

		$our_taxonomy = 'category';
		if ( isset( $args['taxonomy'] ) ) {
			$taxonomy_exist = taxonomy_exists( esc_attr( $args['taxonomy'] ) );
			if ( true === $taxonomy_exist ) {
				$our_taxonomy = esc_attr( $args['taxonomy'] );
			}
		}
		$args['taxonomy'] = $our_taxonomy;
		$this->taxonomy = esc_attr( $our_taxonomy );

		$tax_args = array(
			'hierarchical' => 0,
			'taxonomy'     => $this->taxonomy,
		);
		$all_taxonomies = get_categories( $tax_args );

		$choices = array();
		$choices[0] = esc_html__( '&mdash; Select &mdash;', 'school-education' );

		if ( ! empty( $all_taxonomies ) && ! is_wp_error( $all_taxonomies ) ) {
			foreach ( $all_taxonomies as $tax ) {
				$choices[ $tax->term_id ] = $tax->name;
			}
		}

		$this->choices = $choices;

		parent::__construct( $manager, $id, $args );
	}

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since 1.0.0
	 */
	public function to_json() {
		parent::to_json();

		$this->json['choices'] = $this->choices;
		$this->json['link']    = $this->get_link();
		$this->json['value']   = $this->value();
		$this->json['id']      = $this->id;
	}

	/**
	 * Enqueue scripts and styles.
	 *
	 * @since 1.0.0
	 */
	public function enqueue() {

		wp_enqueue_style( 'school-education-customize-controls' );
		wp_enqueue_script( 'school-education-customize-controls' );

	}

	/**
	 * Content template.
	 *
	 * @since 1.0.0
	 */
	public function content_template() {
		?>
			<label>
			<# if ( data.label ) { #>
				<span class="customize-control-title">{{ data.label }}</span>
			<# } #>
			<# if ( data.description ) { #>
				<span class="description customize-control-description">{{{ data.description }}}</span>
			<# } #>
			<select {{{ data.link }}} name="_customize-{{ data.type }}-{{ data.id }}" id="{{ data.id }}">
				<# _.each( data.choices, function( label, choice ) { #>

					<option value="{{ choice }}" <# if ( choice === data.value ) { #> selected="selected" <# } #>>{{{ label }}}</option>

				<# } ) #>
			</select>
			</label>
		<?php
	}

	/**
	 * Render content.
	 *
	 * @since 1.0.0
	 */
	public function render_content() {}
}

/**
 * Customize Control for managing section.
 *
 * @since 1.0.0
 *
 * @see WP_Customize_Control
 */
class School_Education_Section_Manager_Control extends WP_Customize_Control {
	/**
	 * Control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'section-manager';

	/**
	 * Arguments.
	 *
	 * @access public
	 * @var array
	 */
	public $args = array();

	/**
	 * Enqueue scripts and styles.
	 *
	 * @since 1.0.0
	 */
	public function enqueue() {

		wp_enqueue_style( 'school-education-customize-controls' );
		wp_enqueue_script( 'school-education-customize-controls' );

	}

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since 1.0.0
	 */
	public function to_json() {
		parent::to_json();

		$this->json['value']   = ! is_array( $this->value() ) ? explode( ',', $this->value() ) : $this->value();
		$this->json['choices'] = $this->choices;
		$this->json['link']    = $this->get_link();
		$this->json['id']      = $this->id;
	}

	/**
	 * Content template.
	 *
	 * @since 1.0.0
	 */
	public function content_template() {
		?>
		<# if ( ! data.choices ) {
			return;
		} #>

		<# if ( data.label ) { #>
			<span class="customize-control-title">{{ data.label }}</span>
		<# } #>

		<# if ( data.description ) { #>
			<span class="description customize-control-description">{{{ data.description }}}</span>
		<# } #>

		<ul class="section-list">
			<# _.each( data.choices, function( item, choice ) { #>
				<li>
					<label>
						<input type="checkbox" class="section-item-checkbox" value="{{ choice }}" <# if ( -1 !== data.value.indexOf( choice ) ) { #> checked="checked" <# } #> /><span>{{ item.label }}</span>
					</label>
				</li>
			<# } ) #>
		</ul>
		<?php
	}

	/**
	 * Render content.
	 *
	 * @since 1.0.0
	 */
	public function render_content() {}
}
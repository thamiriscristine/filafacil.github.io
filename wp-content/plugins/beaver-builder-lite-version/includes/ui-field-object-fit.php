<#
const defaults = {
	fit:      '',
	position: '',
	width:    { length: '100', unit: '%' },
	height:   { length: '100', unit: '%' },
}
const value = { ...defaults, ...data.value }
const field = {
	show_height_width: false,
	...data.field,
}
const fit = wp.template( 'fl-builder-field-button-group' )( {
	name: data.name + '[][fit]',
	value: value.fit,
	field: {
		fill_space: true,
		options: {
			'':      '<?php _e( 'None', 'fl-builder' ); ?>',
			cover:   '<?php _e( 'Cover', 'fl-builder' ); ?>',
			contain: '<?php _e( 'Contain', 'fl-builder' ); ?>',
			none:    '<?php _e( 'Natural', 'fl-builder' ); ?>',
		},
	},
} );

const positions = {
	'left top'  : {
		label: '<?php _e( 'Top Left', 'fl-builder' ); ?>',
		icon: `
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none">
				<path d="M4.66797 12.5396L4.66113 5.69678C4.66113 5.08154 5.07812 4.66455 5.7002 4.66455H12.5498C13.1309 4.66455 13.5615 5.10205 13.5615 5.63525C13.5615 6.16162 13.1172 6.57178 12.5566 6.57178H10.0205L7.77148 6.48975L8.96777 7.54932L15.0107 13.5991C15.2227 13.8179 15.3389 14.0708 15.3389 14.3306C15.3389 14.8501 14.8604 15.3354 14.334 15.3354C14.0742 15.3354 13.8213 15.2192 13.6025 15.0073L7.55273 8.96436L6.48633 7.76807L6.58203 9.94189V12.5532C6.58203 13.1138 6.17188 13.5581 5.63867 13.5581C5.10547 13.5581 4.66797 13.1138 4.66797 12.5396Z" fill="currentColor"/>
			</svg>
		`,
	},
	'center top'  : {
		label: '<?php _e( 'Top Center', 'fl-builder' ); ?>',
		icon: `
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none">
				<path d="M9.99658 16.5454C9.40869 16.5454 9.00537 16.1353 9.00537 15.52V7.93213L9.07373 6.44873L7.69971 8.03467L6.16162 9.56592C5.98389 9.75049 5.75146 9.87354 5.45068 9.87354C4.91748 9.87354 4.51416 9.47705 4.51416 8.9165C4.51416 8.65674 4.6167 8.41748 4.82178 8.20557L9.26514 3.75537C9.44971 3.56396 9.72998 3.45459 9.99658 3.45459C10.27 3.45459 10.5435 3.56396 10.728 3.75537L15.1782 8.20557C15.3833 8.41748 15.4858 8.65674 15.4858 8.9165C15.4858 9.47705 15.0825 9.87354 14.5493 9.87354C14.2554 9.87354 14.0229 9.75049 13.8384 9.56592L12.3003 8.03467L10.9263 6.44873L10.9878 7.93213V15.52C10.9878 16.1353 10.5913 16.5454 9.99658 16.5454Z" fill="currentColor"/>
			</svg>
		`,
	},
	'right top'  : {
		label: '<?php _e( 'Top Right', 'fl-builder' ); ?>',
		icon: `
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none">
				<path d="M15.332 12.5396C15.332 13.1138 14.8945 13.5581 14.3613 13.5581C13.8281 13.5581 13.418 13.1138 13.418 12.5532V9.94189L13.5137 7.76807L12.4473 8.96436L6.39746 15.0073C6.17871 15.2192 5.92578 15.3354 5.66602 15.3354C5.13965 15.3354 4.66113 14.8501 4.66113 14.3306C4.66113 14.0708 4.78418 13.8179 4.99609 13.5991L11.0322 7.54932L12.2285 6.48975L9.97949 6.57178H7.44336C6.88281 6.57178 6.43848 6.16162 6.43848 5.63525C6.43848 5.10205 6.86914 4.66455 7.4502 4.66455H14.2998C14.9219 4.66455 15.3389 5.08154 15.3389 5.69678L15.332 12.5396Z" fill="currentColor"/>
			</svg>
		`,
	},
	'left center'  : {
		label: '<?php _e( 'Center Left', 'fl-builder' ); ?>',
		icon: `
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none">
				<path d="M3.34521 10.0034C3.34521 9.73682 3.46143 9.45654 3.646 9.27197L8.09619 4.82861C8.30811 4.6167 8.5542 4.51416 8.79346 4.51416C9.37451 4.51416 9.771 4.91748 9.771 5.45068C9.771 5.75146 9.64111 5.98389 9.45654 6.16162L7.92529 7.69971L6.41455 9.09424L7.90479 9.01221H15.6294C16.2446 9.01221 16.6548 9.40869 16.6548 10.0034C16.6548 10.5913 16.2446 10.9946 15.6294 10.9946H7.90479L6.40771 10.9126L7.92529 12.3071L9.45654 13.8384C9.64111 14.0161 9.771 14.2554 9.771 14.5493C9.771 15.0825 9.37451 15.4858 8.79346 15.4858C8.5542 15.4858 8.30811 15.3833 8.10303 15.1782L3.646 10.7349C3.46143 10.5503 3.34521 10.27 3.34521 10.0034Z" fill="currentColor"/>
			</svg>
		`,
	},
	'center'  : {
		label: '<?php _e( 'Center', 'fl-builder' ); ?>',
		icon: `
			<svg width="36" height="36" viewBox="0 0 36 36" fill="none">
				<path d="M7.90381 14.1533C7.33105 14.1533 7.00537 13.8164 7.00537 13.2324V10.481C7.00537 8.16748 8.18457 7.01074 10.5317 7.01074H13.272C13.8672 7.01074 14.1929 7.3252 14.1929 7.90918C14.1929 8.49316 13.8672 8.81885 13.272 8.81885H10.5542C9.43115 8.81885 8.81348 9.41406 8.81348 10.582V13.2324C8.81348 13.8164 8.49902 14.1533 7.90381 14.1533ZM28.085 14.1533C27.5122 14.1533 27.1865 13.8164 27.1865 13.2324V10.582C27.1865 9.41406 26.5464 8.81885 25.4346 8.81885H22.7168C22.1328 8.81885 21.8071 8.49316 21.8071 7.90918C21.8071 7.3252 22.1328 7.01074 22.7168 7.01074H25.4683C27.8154 7.01074 28.9946 8.16748 28.9946 10.481V13.2324C28.9946 13.8164 28.6802 14.1533 28.085 14.1533ZM10.5317 28.9888C8.18457 28.9888 7.00537 27.832 7.00537 25.5073V22.7671C7.00537 22.1719 7.31982 21.8462 7.90381 21.8462C8.48779 21.8462 8.81348 22.1719 8.81348 22.7671V25.4175C8.81348 26.5854 9.43115 27.1807 10.5542 27.1807H13.272C13.8672 27.1807 14.1929 27.5063 14.1929 28.0903C14.1929 28.6631 13.8672 28.9888 13.272 28.9888H10.5317ZM22.7168 28.9888C22.1328 28.9888 21.8071 28.6631 21.8071 28.0903C21.8071 27.5063 22.1328 27.1807 22.7168 27.1807H25.4346C26.5464 27.1807 27.1865 26.5854 27.1865 25.4175V22.7671C27.1865 22.1719 27.501 21.8462 28.085 21.8462C28.6689 21.8462 28.9946 22.1719 28.9946 22.7671V25.5073C28.9946 27.8208 27.8154 28.9888 25.4683 28.9888H22.7168Z" fill="currentColor"/>
			</svg>
		`,
	},
	'right center'  : {
		label: '<?php _e( 'Center Right', 'fl-builder' ); ?>',
		icon: `
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none">
				<path d="M16.6548 10.0034C16.6548 10.27 16.5386 10.5503 16.354 10.7349L11.897 15.1782C11.6919 15.3833 11.4458 15.4858 11.2065 15.4858C10.6255 15.4858 10.229 15.0825 10.229 14.5493C10.229 14.2554 10.3589 14.0161 10.5435 13.8384L12.0747 12.3071L13.5923 10.9126L12.0952 10.9946H4.37061C3.75537 10.9946 3.34521 10.5913 3.34521 10.0034C3.34521 9.40869 3.75537 9.01221 4.37061 9.01221H12.0952L13.5854 9.09424L12.0747 7.69971L10.5435 6.16162C10.3589 5.98389 10.229 5.75146 10.229 5.45068C10.229 4.91748 10.6255 4.51416 11.2065 4.51416C11.4458 4.51416 11.6919 4.6167 11.9038 4.82861L16.354 9.27197C16.5386 9.45654 16.6548 9.73682 16.6548 10.0034Z" fill="currentColor"/>
			</svg>
		`,
	},

	'left bottom'  : {
		label: '<?php _e( 'Bottom Left', 'fl-builder' ); ?>',
		icon: `
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none">
				<path d="M4.66797 7.46045C4.66797 6.88623 5.10547 6.44189 5.63867 6.44189C6.17188 6.44189 6.58203 6.88623 6.58203 7.44678V10.0581L6.48633 12.2319L7.55273 11.0356L13.6025 4.99268C13.8213 4.78076 14.0742 4.66455 14.334 4.66455C14.8604 4.66455 15.3389 5.1499 15.3389 5.66943C15.3389 5.9292 15.2227 6.18213 15.0107 6.40088L8.96777 12.4507L7.77148 13.5103L10.0205 13.4282H12.5566C13.1172 13.4282 13.5615 13.8384 13.5615 14.3647C13.5615 14.8979 13.1309 15.3354 12.5498 15.3354H5.7002C5.07812 15.3354 4.66113 14.9185 4.66113 14.3032L4.66797 7.46045Z" fill="currentColor"/>
			</svg>
		`,
	},
	'center bottom'  : {
		label: '<?php _e( 'Bottom Center', 'fl-builder' ); ?>',
		icon: `
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none">
				<path d="M9.99658 3.45459C10.5913 3.45459 10.9878 3.86475 10.9878 4.47998V12.0679L10.9263 13.5513L12.3003 11.9653L13.8384 10.4341C14.0229 10.2495 14.2554 10.1265 14.5493 10.1265C15.0825 10.1265 15.4858 10.5229 15.4858 11.0835C15.4858 11.3433 15.3833 11.5825 15.1782 11.7944L10.728 16.2446C10.5435 16.436 10.27 16.5454 9.99658 16.5454C9.72998 16.5454 9.44971 16.436 9.26514 16.2446L4.82178 11.7944C4.6167 11.5825 4.51416 11.3433 4.51416 11.0835C4.51416 10.5229 4.91748 10.1265 5.45068 10.1265C5.75146 10.1265 5.98389 10.2495 6.16162 10.4341L7.69971 11.9653L9.07373 13.5513L9.00537 12.0679V4.47998C9.00537 3.86475 9.40869 3.45459 9.99658 3.45459Z" fill="currentColor"/>
			</svg>
		`,
	},
	'right bottom'  : {
		label: '<?php _e( 'Bottom Right', 'fl-builder' ); ?>',
		icon: `
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none">
				<path d="M15.332 7.46045L15.3389 14.3032C15.3389 14.9185 14.9219 15.3354 14.2998 15.3354H7.4502C6.86914 15.3354 6.43848 14.8979 6.43848 14.3647C6.43848 13.8384 6.88281 13.4282 7.44336 13.4282H9.97949L12.2285 13.5103L11.0322 12.4507L4.99609 6.40088C4.78418 6.18213 4.66113 5.9292 4.66113 5.66943C4.66113 5.1499 5.13965 4.66455 5.66602 4.66455C5.92578 4.66455 6.17871 4.78076 6.39746 4.99268L12.4473 11.0356L13.5137 12.2319L13.418 10.0581V7.44678C13.418 6.88623 13.8281 6.44189 14.3613 6.44189C14.8945 6.44189 15.332 6.88623 15.332 7.46045Z" fill="currentColor"/>
			</svg>
		`,
	},
}

const unitFieldConfig = {
	field: {
		units: [ '%', 'px', 'em', 'rem', 'vw', 'ch' ],
		slider: { min: 0, max: 100, step: 1 },
	},
}
const height = wp.template( 'fl-builder-field-unit' )( {
	...unitFieldConfig,
	name: data.name + '[height][length]',
	value: value.height.length,
	unit_name: data.name + '[height][unit]',
	unit_value: value.height.unit,
} )
const width = wp.template( 'fl-builder-field-unit' )( {
	...unitFieldConfig,
	name: data.name + '[width][length]',
	value: value.width.length,
	unit_name: data.name + '[width][unit]',
	unit_value: value.width.unit,
} )
#>
<div class="fl-compound-field">
	<div class="fl-compound-field-section fl-compound-field-section-fit fl-compound-field-section-visible">
		<div class="fl-compound-field-row">
			{{{ fit }}}
		</div>
		<div class="fl-compound-field-row">
			<fieldset class="fl-switch-group fl-switch-origin-group">
			<# for( const key in positions ) {
				const item = positions[key]
				const checked = value.position === key ? 'checked' : ''
				const id = `${data.name}_${key.replace(' ', '_' )}`
			#>
				<div class="fl-switch-group-item" title="{{{item.label}}}">
					<input type="radio" name="{{{data.name}}}[position]" id="{{{id}}}" value="{{{key}}}" {{{checked}}} />
					<label for="{{{id}}}">{{{item.label}}}</label>
					{{{item.icon}}}
				</div>
			<# } #>
			</fieldset>
		</div>
	</div>
</div>
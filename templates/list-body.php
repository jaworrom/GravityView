<?php foreach( $this->entries as $entry ) : ?>

	<div id="gv_list_<?php echo $entry['id']; ?>" class="">
	
		<div class="list-row-title">
		
			<?php if( !empty(  $this->fields['list-title'] ) ):
				foreach( $this->fields['list-title'] as $field ) : ?>
					<h3 class="<?php echo esc_attr( gv_class( $field ) ); ?>"><?php echo esc_html( gv_label( $field ) ); ?><?php echo gv_value( $entry, $field ); ?></h3>
				<?php endforeach; ?>
			<?php endif; ?>
			
		</div>
		
		<div class="list-row-content">
		
			<?php if( !empty(  $this->fields['list-content'] ) ):
				foreach( $this->fields['list-content'] as $field ) : ?>
					<p class="<?php echo esc_attr( gv_class( $field ) ); ?>"><?php echo esc_html( gv_label( $field ) ); ?><?php echo gv_value( $entry, $field ); ?></p>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
		
		<div class="list-row-footer">
		
			<?php if( !empty(  $this->fields['list-footer'] ) ):
				foreach( $this->fields['list-footer'] as $field ) : ?>
					<p class="<?php echo esc_attr( gv_class( $field ) ); ?>"><?php echo esc_html( gv_label( $field ) ); ?><?php echo gv_value( $entry, $field ); ?></p>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>

	</div>
	
<?php endforeach; ?>

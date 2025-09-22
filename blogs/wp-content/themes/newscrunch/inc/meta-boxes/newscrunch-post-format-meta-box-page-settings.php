<?php $newscrunch_post_video_embed = get_post_meta( get_the_ID(), 'newscrunch_post_video_embed', true ); ?>
<table class="form-table newscrunch-metabox">
	<tbody>
		<tr class="newscrunch-post-video-embed">
			<th>
				<label for="newscrunch-post-video-embed">
					<strong><?php esc_html_e( 'Enter Vimeo/YouTube URL', 'newscrunch' ); ?></strong>
				</label>
				<span class="spnc-meta-th"><?php esc_html_e( 'This setting work with only Video Type Post Format.', 'newscrunch' ); ?></span>
			</th>
			<td>
				<input size="60" type="text" id="newscrunch-post-video-embed" class="newscrunch-meta-text" name="newscrunch_post_video_embed" value="<?php echo esc_attr( $newscrunch_post_video_embed ); ?>"/>
			</td>
		</tr>
	</tbody>
</table>
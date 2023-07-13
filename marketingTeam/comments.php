
				<?php if ( post_password_required() ) {
					return;
				} ?>
				<div id="comments" class="comments-area">
					<?php if ( have_comments() ) : ?>
						<h2 class="comments-title">
						<?php $marketingteam_comment_count = get_comments_number();
							if ( '1' === $marketingteam_comment_count ) {
								printf( esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'marketingteam' ),
								'<span>' . wp_kses_post( get_the_title() ) . '</span>'
							);
							} else { printf(  esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $marketingteam_comment_count, 'comments title', 'marketingteam' ) ),
								number_format_i18n( $marketingteam_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
								'<span>' . wp_kses_post( get_the_title() ) . '</span>'
								);
							} ?>
					</h2><!-- .comments-title -->
					<?php the_comments_navigation(); ?>
					<ol class="comment-list">
						<?php wp_list_comments(
							array(
								'style'      => 'ol',
								'short_ping' => true,
							)); ?>
					</ol><!-- .comment-list -->

					<?php the_comments_navigation();
					// If comments are closed and there are comments, let's leave a little note, shall we?
					if ( ! comments_open() ) : ?>
					<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'marketingteam' ); ?></p>
					<?php endif;
						endif;  comment_form(); ?>
				</div><!-- FIM COMENTÁRIOS -->
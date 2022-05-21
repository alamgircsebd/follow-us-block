import { __ } from '@wordpress/i18n';
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function save() {
	return (
		<div className='follow-us-block-box' {...useBlockProps.save()}>
			<InnerBlocks.Content />
		</div>
	);
}

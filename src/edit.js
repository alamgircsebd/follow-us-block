import { __ } from '@wordpress/i18n';
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
import './editor.scss';

const FOLLOW_US_TEMPLATE = [
	[ 'core/image', {} ],
	[ 'core/heading', { 'placeholder' : __( 'Add header here', 'follow-us-block' ) } ],
	[ 'core/paragraph', { 'placeholder' : __( 'Add descriptions here', 'follow-us-block' ) } ],
	[ 'core/button', { 'placeholder' : __( 'Button Label', 'follow-us-block' ) } ],
];

export default function Edit() {
	return (
		<div {...useBlockProps()}>
			<InnerBlocks template={FOLLOW_US_TEMPLATE} templateLock="all" />
		</div>
	);
}

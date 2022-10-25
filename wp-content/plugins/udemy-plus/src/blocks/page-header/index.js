import { registerBlockType } from '@wordpress/blocks';
import {useBlockProps, RichText} from '@wordpress/block-editor';
import { __ } from "@wordpress/i18n";
import icons from '../../icons.js'
import './main.css'

registerBlockType('udemy-plus/page-header', {
    icon: icons.primary,

    edit({attributes, setAttributes}) {
        const { content } = attributes;
        const blockProps = useBlockProps();

        return (
            <>
                <div { ...blockProps }>
                    <div className="inner-page-header">
                        <RichText
                            tagName="h1"
                            placeholder={ __('Heading', 'udemy-plus') }
                            value={ content }
                            onChange={ newVal => setAttributes({ content: newVal })}
                        />
                    </div>
                </div>
            </>
        );
    }
});
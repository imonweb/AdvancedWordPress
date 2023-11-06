/* Main File to import the different blocks  */

import "./testimonial";

const { registerBlockType } = wp.blocks

/*  Import the logo */
import { ReactComponent as Logo } from '../src/ga-logo.svg';

registerBlockType('ga/testimonial', {
  title: 'GA Testimonial',
  icon: { src: Logo },
  category: 'gourmet-artist'
})
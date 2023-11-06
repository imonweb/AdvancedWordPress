const { registerBlockType } = wp.blocks

// /*  Import the logo */
import { ReactComponent as Logo } from '../ga-logo.svg';

registerBlockType('ga/testimonial', {
  title: 'GA Testimonial',
  icon: { src: Logo },
  category: 'gourmet-artist',
  edit: () => {
    return (
      <div className="testimonial-block">
          <blockquote>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi voluptatem reiciendis id placeat libero. Explicabo nulla pariatur iure repudiandae officiis accusamus deleniti provident possimus omnis. Ipsum ipsa placeat recusandae consequatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem qui doloremque culpa molestiae. 
          </blockquote>
          <div className="testimonial-info">
              <img src="img/testimonial.jpg" />
              <p>Alice White AnyCompany CEO</p>
          </div>
      </div>
    )
  },
  save: () => {
    return (
      <div className="testimonial-block">
          <blockquote>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi voluptatem reiciendis id placeat libero. Explicabo nulla pariatur iure repudiandae officiis accusamus deleniti provident possimus omnis. Ipsum ipsa placeat recusandae consequatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem qui doloremque culpa molestiae. 
          </blockquote>
          <div className="testimonial-info">
              <img src="img/testimonial.jpg" />
              <p>Alice White AnyCompany CEO</p>
          </div>
      </div>
    )
  } 
})
import React from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faMobile } from "@fortawesome/free-solid-svg-icons";
import { faGem } from "@fortawesome/free-solid-svg-icons";
import { faWrench } from "@fortawesome/free-solid-svg-icons";

function Feature() {
  return (
    <div>
      <section id="feature">
        <div className="features">
          <p className="text1">NEED TECHNOSOFT FEATURES</p>
          <p className="text2">
            Welcome to our showcase of standout features that define our work
            and set us apart.
            <br />
            we believe in the power of innovation, and these features represent
            our commitment and creating exceptional solutions.
          </p>
          <div className="box-holder">
            <div className="row me-0">
              <div className="col-md-4">
                <div className="box ">
                  <div className="icon">
                    <FontAwesomeIcon icon={faMobile} />
                  </div>
                  <p className="title">Fully Responsive</p>
                  <p className="text">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been
                  </p>
                </div>
              </div>
              <div className="col-md-4">
                <div className="box ">
                  <div className="icon">
                    <FontAwesomeIcon icon={faGem} />
                  </div>
                  <p className="title">Awesome Features</p>
                  <p className="text">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been
                  </p>
                </div>
              </div>
              <div className="col-md-4">
                <div className="box ">
                  <div className="icon">
                    <FontAwesomeIcon icon={faWrench} />
                  </div>
                  <p className="title">Easy Customization</p>
                  <p className="text">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
export default Feature;

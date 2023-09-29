import React from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faLocationDot } from "@fortawesome/free-solid-svg-icons";
import { faPhone } from "@fortawesome/free-solid-svg-icons";
import { faEnvelope } from "@fortawesome/free-solid-svg-icons";
import { faClock } from "@fortawesome/free-solid-svg-icons";

function Contact() {
  return (
    <div className="contact">
      <section id="contact">
      <div className="hire">
        ARE YOU READY FOR YOUR NEXT PROJECT?
        <button className="buttom">HIRE US</button>
      </div>
        <div className="contact">
          <div className="row me-0">
            <div className="col-md-6">
              <div className="text">
                <div className="title">CONTACT US</div>
                <div className="content">
                  We're here to assist you! Whether you have inquiries,
                  collaboration proposals, or simply want to connect, we welcome
                  the opportunity to engage with you.
                </div>
                <div className="icon">
                  <FontAwesomeIcon icon={faLocationDot} className="icons" />
                  <p>Dudfarm, Biratnagar</p>
                </div>
                <div className="icon">
                  <FontAwesomeIcon icon={faPhone} className="icons" />
                  <a href="tel:{{ $footer->phoneno }}">
                    <p>9852078274, 9842334553</p>
                  </a>
                </div>
                <div className="icon">
                  <FontAwesomeIcon icon={faEnvelope} className="icons" />
                  <a href="mailto:{{ email }}">
                    <p>info@needtechnosoft.tech</p>
                  </a>
                </div>
                <div className="icon">
                  <FontAwesomeIcon icon={faClock} className="icons" />
                  <p>sun-Fri : 8AM-18PM</p>
                </div>
              </div>
            </div>
            <div className="col-md-6 ">
              <div className="row contact-form">
                <div className="form">
                  <div className="row me-0">
                    <div className="col-md-12">
                      <input
                        type="text"
                        size="50"
                        rows="1"
                        class="form-control"
                        placeholder=" Name"
                        required=""
                      />
                    </div>
                  </div>
                  <div className="row me-0">
                    <div className="col-md-6">
                      <input
                        type="email"
                        size="50"
                        class="form-control"
                        placeholder=" Email"
                        style={{ marginTop: "15px", display: "block" }}
                        required=""
                      />
                    </div>
                    <div className="col-md-6">
                      <input
                        type="text"
                        size="50"
                        class="form-control"
                        placeholder="Subject"
                        style={{ marginTop: "15px", display: "block" }}
                        required=""
                      />
                    </div>
                  </div>
                  <div className="row me-0">
                    <div className="col-md-12">
                      <textarea
                        name="comment"
                        id="comment"
                        rows="7"
                        class="form-control"
                        placeholder="Your Message"
                        style={{ marginTop: "15px", display: "block" }}
                      ></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <button className="submit">Send Message</button>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
export default Contact;

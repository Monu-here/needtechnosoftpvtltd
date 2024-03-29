import React, { useEffect, useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faLocationDot } from "@fortawesome/free-solid-svg-icons";
import { faPhone } from "@fortawesome/free-solid-svg-icons";
import { faEnvelope } from "@fortawesome/free-solid-svg-icons";
import { faClock } from "@fortawesome/free-solid-svg-icons";
import axios from "axios";
import { getData, listContact, postContact } from "../utils/routes";
import { ToastContainer, toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";

function Contact() {
  const [name, setName] = useState("");
  const [email, setEmail] = useState("");
  const [subject, setSubject] = useState("");
  const [message, setMessage] = useState("");

  const submitForm = () => {
    const formData = {
      name,
      email,
      subject,
      message,
    };

    axios
      .post(postContact, formData)
      .then((response) => {
        console.log("Form submitted successfully!", response);

        toast.success("Your form submitted successfully!", {
          position: toast.POSITION.TOP_RIGHT,
          autoClose: 3000,
        });

        setName("");
        setEmail("");
        setSubject("");
        setMessage("");
      })
      .catch((error) => {
        console.error("Error submitting the form:", error);
      });
  };

  const [contactData, setContactData] = useState([]);
  useEffect(() => {
    getData(listContact)
      .then((data) => {
        setContactData(data);
      })
      .catch((err) => {
        console.log(err);
      });
  }, []);

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
                {contactData.map((element, index) => (
                  <div key={element.id}>
                    <div className="icon">
                      <FontAwesomeIcon
                        icon={faLocationDot}
                        className="icons"
                      />
                      <p>{element.address}</p>
                    </div>
                    <div className="icon">
                      <FontAwesomeIcon icon={faPhone} className="icons" />
                      <a href={`tel:${element.phone}`}>
                        <p>{element.phone}</p>
                      </a>
                    </div>
                    <div className="icon">
                      <FontAwesomeIcon
                        icon={faEnvelope}
                        className="icons"
                      />
                      <a href={`mailto:${element.mail}`}>
                        <p>{element.mail}</p>
                      </a>
                    </div>
                    <div className="icon">
                      <FontAwesomeIcon icon={faClock} className="icons" />
                      <p>{element.time}</p>
                    </div>
                  </div>
                ))}
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
                        className="form-control"
                        placeholder=" Name"
                        required=""
                        name="name"
                        value={name}
                        onChange={(e) => setName(e.target.value)}
                      />
                    </div>
                  </div>
                  <div className="row me-0">
                    <div className="col-md-6 mt-3">
                      <input
                        type="email"
                        size="50"
                        className="form-control"
                        placeholder=" Email"
                        style={{ marginTop: "15px", display: "block" }}
                        required=""
                        value={email}
                        onChange={(e) => setEmail(e.target.value)}
                      />
                    </div>
                    <div className="col-md-6">
                      <input
                        type="text"
                        size="50"
                        className="form-control"
                        placeholder="Subject"
                        style={{ marginTop: "15px", display: "block" }}
                        required=""
                        value={subject}
                        onChange={(e) => setSubject(e.target.value)}
                      />
                    </div>
                  </div>
                  <div className="row me-0">
                    <div className="col-md-12">
                      <textarea
                        name="comment"
                        id="comment"
                        rows="7"
                        className="form-control"
                        placeholder="Your Message"
                        style={{ marginTop: "15px", display: "block" }}
                        value={message}
                        onChange={(e) => setMessage(e.target.value)}
                      ></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <button className="submit" onClick={submitForm}>
                Send Message
              </button>
            </div>
          </div>
        </div>
      </section>
      <ToastContainer />
    </div>
  );
}
export default Contact;

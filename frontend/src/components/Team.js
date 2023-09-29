import React from "react";

function Team() {
  return (
    <div>
      <section id="team">
        <div className="member">
          <div className="text">
            <p className="text1">TEAM MEMBERS</p>
            <p className="text2">
              At Need Technosoft, we take pride in introducing the incredible
              individuals who form the backbone of our organization
              With a passion for innovation and a commitment to excellence, our
              team members are the heart and soul of our software company.
            </p>
          </div>
          <div className="member-holder">
            <div className="row me-0">
              <div className="col">
                <div className="image-holder">
                  <img src="../../images/CTO.png" alt="Chhatraman Shrestha" />
                  <div className="detail">
                    <p className="name">Chhatraman Shrestha</p>
                    <p className="position">CTO</p>
                  </div>
                </div>
              </div>
              <div className="col">
                <div className="image-holder">
                  <img
                    src="../../images/paschaldada.png"
                    alt="Paschal Ghimire"
                  />
                  <div className="icon"></div>
                  <div className="detail">
                    <p className="name">Paschal Ghimire</p>
                    <p className="position">CEO</p>
                  </div>
                </div>
              </div>
              <div className="col">
                <div className="image-holder">
                  <img
                    src="../../images/Krishnadada.png"
                    alt="Krishna Kumar Rai"
                  />
                  <div className="detail">
                    <p className="name">Krishna Kumar Rai</p>
                    <p className="position">COO</p>
                  </div>
                </div>
              </div>
              <div className="col">
                <div className="image-holder monu">
                  <img src="../../images/monuwa.png" alt="Monu Kumar Thakur" />
                  <div className="detail">
                    <p className="name">Monu Kumar Thakur</p>
                    <p className="position">Chota Marketer</p>
                  </div>
                </div>
              </div>
              <div className="col">
                <div className="image-holder saru">
                  <img src="../../images/saru.png" alt="Saru Koirala" />
                  <div className="detail">
                    <p className="name">Saru Koirala</p>
                    <p className="position">Web Designer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
export default Team;

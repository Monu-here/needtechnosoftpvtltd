import React, { useEffect, useState } from "react";
import { getData, getIMGURL, listTeam } from "../utils/routes";

function Team() {
  const [teamData, setTeamData] = useState([]);
  useEffect(() => {
    getData(listTeam)
      .then((data) => {
        setTeamData(data);
      })
      .catch((err) => {
        console.log(err);
      });
  }, []);

  return (
    <div>
      <section id="team">
        <div className="member">
          <div className="text">
            <p className="text1">TEAM MEMBERS</p>
            <p className="text2">
              At Need Technosoft, we take pride in introducing the incredible
              individuals who form the backbone of our organization With a
              passion for innovation and a commitment to excellence, our team
              members are the heart and soul of our software company.
            </p>
          </div>
          <div className="member-holder">
            <div className="row me-0">
              {teamData.map((element, index) => (
                <div className="col">
                  <div className="image-holder" key={element.id}>
                    <img src={getIMGURL(element.image)} />
                    <div className="detail">
                      <p className="name">{element.name}</p>
                      <p className="position">{element.position}</p>
                    </div>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
export default Team;
